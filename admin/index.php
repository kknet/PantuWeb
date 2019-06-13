<?php
require 'System/Init.php';


if (Config::$debug) {
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
}


$users = new User();

if ($users->is_loggedin() == false) {

  Route::add('',function(){


    $themeFunc = new ThemeFunctions();
    $themeFunc->getLoginPage();

  });

  Route::add('/(.*)',function($id){
    $themeFunc = new ThemeFunctions();
    $themeFunc->getLoginPage();
  });


  Route::add('/login',function(){
    $themeFunc = new ThemeFunctions();
    $themeFunc->getLoginPage();
  	if(isset($_POST['btn-login'])){
      $users     = new User();
      $functions = new GeneralFunctions();
      $user_email    = strip_tags($_POST['txt_user_email']);
            $user_password = strip_tags($_POST['txt_user_password']);
            if ($users->DoLogin($user_email, $user_password)) {

                $functions->redirect("/");
            } else {
                $functions->redirect("/");
            }
  	}else{


    }
  },['get','post']);

}else {


  Route::add('',function(){


    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("index");

  });

  Route::add('/files',function(){

    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("files");

  });

  Route::add('/server/status',function(){

    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("server-status");

  });

  Route::add('/server/settings',function(){
    $functions = new GeneralFunctions();
    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("server-settings");

    if(isset($_POST['btn-save'])){

      $userid = $_SESSION['user_id'];
      $YoutubeDlPath    = strip_tags($_POST['inputYoutubeDlPath']);
      $FfmpegPath   = strip_tags($_POST['inputFfmpegPath']);
      $DownloadPath    = strip_tags($_POST['inputDownloadPath']);
      $CachePath    = strip_tags($_POST['inputCachePath']);
      $CharSet   = strip_tags($_POST['inputCharSet']);
      $Password    = strip_tags($_POST['inputPassword']);

      if(!empty($Password) || !empty($CharSet) || !empty($CachePath) || !empty($DownloadPath) || !empty($FfmpegPath) || !empty($YoutubeDlPath)){
        $serverClass = new Server();
      $updateServer =   $serverClass->updateServerSettings($userid,$YoutubeDlPath,$FfmpegPath,$DownloadPath,$CachePath,$CharSet,$Password);

      if($updateServer){
        $functions->redirect("/server/settings");
      }else {
        $functions->redirect("/server/settings");
      }


      }else{
        Errors::getInstance()->Warning("Do not leave empty !");
        $functions->redirect("/server/settings");
      }

    }



  },['get','post']);

  Route::add('/server/api-keys',function(){

    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("files");

  });




  Route::add('/general/social-links',function(){
$functions = new GeneralFunctions();
    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("general-social-links");



    if(isset($_POST['btn-save'])){

      $userid = $_SESSION['user_id'];
      $InstagramAdress   = strip_tags($_POST['inputInstagramAdress']);
      $TwitterAdress  = strip_tags($_POST['inputTwitterAdress']);
      $FacebookAdress    = strip_tags($_POST['inputFacebookAdress']);
      $MailAdress   = strip_tags($_POST['inputMailAdress']);
      $Password    = strip_tags($_POST['inputPassword']);

      if(!empty($Password)){
        $serverClass = new Server();
        $updateServer =   $serverClass->updateGeneralSocialLinks($userid,$InstagramAdress,$TwitterAdress,$FacebookAdress,$MailAdress,$Password);

      if($updateServer){
        $functions->redirect("/general/social-links");
      }else {
        $functions->redirect("/general/social-links");
      }


      }else{
        Errors::getInstance()->Warning("Do not leave empty !");
        $functions->redirect("/general/social-links");
      }

    }


  },['get','post']);

  Route::add('/account',function(){
  $functions = new GeneralFunctions();
    $themeFunc = new ThemeFunctions();
    $themeFunc->getTheme("account");



    if(isset($_POST['btn-save'])){

      $userid = $_SESSION['user_id'];
      $Username   = strip_tags($_POST['inputUsername']);
      $Email  = strip_tags($_POST['inputEmail']);
      $Password    = strip_tags($_POST['inputPassword']);
      $RePassword   = strip_tags($_POST['inputRePassword']);

      if(!empty($Username) && !empty($Email) ){

        if (empty($Password)) {
          $changePassword = false;
          $userClass = new User();
          $updateAccountDetails =   $userClass->updateAccountDetails($userid,$Username,$Email,$Password,$changePassword);

        } else {
          $changePassword = true;
          if ($Password == $RePassword) {

            $userClass = new User();
            $updateAccountDetails =   $userClass->updateAccountDetails($userid,$Username,$Email,$Password,$changePassword);

          } else {
            Errors::getInstance()->Warning("Passwords Not Match !");
            $functions->redirect("/account");
          }

        }





        if($updateAccountDetails){
          $functions->redirect("/account");
        }else {
          $functions->redirect("/account");
        }


      }else{
        Errors::getInstance()->Warning("Do not leave empty !");
        $functions->redirect("/general/social-links");
      }

    }


  },['get','post']);


  Route::add('/log-out',function(){
  session_destroy();
        $functions = new GeneralFunctions();
        $functions->redirect("/");
});





}








Route::run(Config::$adminpath);


?>
