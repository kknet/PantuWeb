<?php
require 'System/Init.php';


if (Config::$debug) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}










  Route::add('/',function(){
    $views = new GeneralFunctions();
          $views->insert_view("index");
    });




Route::add('/download/(.*)',function($id){
      $generalFunc= new GeneralFunctions();
      $generalFunc->downloadContent($id);




});



Route::add('/ajax',function(){
  $downloader = new Downloader();
  if ($_POST) {
    if($_POST['form_name']=="getInfoForm")
      {
        $contentUrl = $_POST["contentUrl"];
        $result = $downloader->getContentInfo($contentUrl);
        if ($result) {
            $themeFunc = new ThemeFunctions();
          echo $themeFunc->createDownloadForm($result,$contentUrl);


        }else{


        }

      }

      if($_POST["form_name"]=="getMusic"){
        $contentUrl = $_POST["contentUrl"];
        $quality = $_POST["quality"];
        $extension = $_POST["extension"];
        $embedThumnail =  (isset($_POST["embedThumbnail"])) && $_POST["embedThumbnail"] == "mp3"  ? true : false ;
        $addMetadata =  (isset($_POST["addMetadata"])) ? true : false ;


        $themeFunc = new ThemeFunctions();
        $downloader = new Downloader();
        $result = $downloader->getMusic($contentUrl, $quality, $extension,  "id",  $embedThumnail,  $addMetadata, false, false);

        if ($result) {






          $dbFuncs = new DatabaseFunc();

          $insertDbContent = $dbFuncs->insertPublicContent($result,$extension,"Music");

          echo $themeFunc->createDownloadLink($insertDbContent);






        }

      }


      if($_POST["form_name"]=="getVideo"){
        $contentUrl = $_POST["contentUrl"];
        $formats= $_POST["formats"];


        $themeFunc = new ThemeFunctions();
        $downloader = new Downloader();
        $result = $downloader->getVideo($contentUrl, $formats, "mp4", "id", false, false);
        if ($result) {





            $dbFuncs = new DatabaseFunc();

            $insertDbContent = $dbFuncs->insertPublicContent($result,"mp4","Video");

            echo $themeFunc->createDownloadLink($insertDbContent);


        }

      }
  }

},'post');


Route::run(Config::$indexpath);


?>
