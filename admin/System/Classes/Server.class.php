<?php

/**
 *
 */
class Server
{

  public function __construct()
	{


		$this->check_requirements();


	}



  private function check_requirements()
	{
		if(!$this->is_youtubedl_installed()){
      Errors::getInstance()->Warning("Youtube-dl Not installed !");
    }
    if(!$this->is_ffmpeg_installed()){
      Errors::getInstance()->Warning("ffmpeg not installed");
    }
	}

	private function is_youtubedl_installed()
	{
		exec("which youtube-dl", $out, $r);
		return $r == 0;
	}

  private function is_ffmpeg_installed()
	{
		exec("which ffmpeg", $out, $r);
		return $r == 0;
	}



  public function getServerSettings()
  {
    $db = new BasicDB();
            $get_settings = $db->from('Settings')
                ->where('ID', "1")
                ->first();

				return $get_settings;
  }

  public function updateServerSettings($userid,$YoutubeDlPath,$FfmpegPath,$DownloadPath,$CachePath,$CharSet,$Password){

    $db = new BasicDB();
    $get_user = $db->from('Users')
        ->where('ID', $userid)
        ->where('PASSWORD', $Password)
        ->all();
        if($get_user){

          $query =  $db->update('Settings')
             ->where('ID', "1")
             ->set([
                 "YOUTUBEDLPATH"=>$YoutubeDlPath,
                 "FFMPEGPATH" => $FfmpegPath,
                 "DOWNLOADPATH" => $DownloadPath,
                 "CACHEPATH" => $CachePath,
                 "CHARSET" => $CharSet
             ]);

             if($query){
               Errors::getInstance()->Infos("Successfull !");
               return true;
             }else{
               Errors::getInstance()->Warning("Error !");
               return false;
             }



        }else {
          Errors::getInstance()->Warning("Please Check Password !");
          return false;
        }

  }


  public function updateGeneralSocialLinks($userid,$InstagramAdress,$TwitterAdress,$FacebookAdress,$MailAdress,$Password){

    $db = new BasicDB();
    $get_user = $db->from('Users')
        ->where('ID', $userid)
        ->where('PASSWORD', $Password)
        ->all();
        if($get_user){

          $query =  $db->update('Settings')
             ->where('ID', "1")
             ->set([
                 "INSTAGRAMADRESS"=>$InstagramAdress,
                 "TWITTERADRESS" => $TwitterAdress,
                 "FACEBOOKADRESS" => $FacebookAdress,
                 "MAILADRESS" => $MailAdress
             ]);

             if($query){
               Errors::getInstance()->Infos("Successfull !");
               return true;
             }else{
               Errors::getInstance()->Warning("Error !");
               return false;
             }



        }else {
          Errors::getInstance()->Warning("Please Check Password !");
          return false;
        }

  }


}


?>
