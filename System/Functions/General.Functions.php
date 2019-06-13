<?php



class GeneralFunctions
{






    function  insert_view($viewName){

        include "System/Views/Pages/".$viewName.".php" ;

    }







    public function redirect($url)
    {
        header("Location: ".Config::$path."$url");
    }


    public function createHash()
    {
        $hash = sha1(md5(rand(1, 1000000)));

        return $hash;
    }

    public function downloadContent($hash){

      $db = new BasicDB();
      $get_content = $db->from('PublicContentLogs')
          ->where('CONTENTHASH', $hash)
          ->first();

          $get_settings = $db->from('Settings')
              ->where('ID', "1")
              ->first();


      if($get_content){
          $fileName = $get_content["TITLE"];
          $filePath = $get_content["CONTENTPATH"].'.'.$get_content["CONTENTEXT"];
          $realpath = Config::$realpath.'/downloads/';
          $downloadPath = $get_settings["DOWNLOADPATH"];

          $filerealpath = str_replace($downloadPath,$realpath,$filePath);



         if(!empty($fileName) && file_exists($filePath)){
              // Define headers
              header("Cache-Control: public");
              header("Content-Description: File Transfer");
              header("Content-Disposition: attachment; filename=\"$fileName\".".$get_content["CONTENTEXT"]."");
              header("Content-Type: application/zip");
              header("Content-Transfer-Encoding: binary");

              // Read the file
              readfile($filePath);
              exit;
          }else{
              echo 'The file does not exist.';
          }
      }else{
          echo 'The file does not exist.';
      }


    }




}
