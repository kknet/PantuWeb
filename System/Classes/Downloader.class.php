<?php



class Downloader {



  public function __construct()
	{


		$this->check_requirements();


	}



  private function check_requirements()
	{
		if(!$this->is_youtubedl_installed()){
      throw new \Exception("Youtube-dl is not installed Stopped !");
    }
    if(!$this->is_ffmpeg_installed()){
      throw new \Exception("Install an audio extracter (avconv or ffmpeg) Stopped !");
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



/**
 * [getContentInfo description]
 * @param  [String] $contentUrl [Content Url for Predownload]
 * @return [Array]             [All info Content]
 */
  public function getContentInfo($contentUrl)
  {

    $builder = new CmdBuilder();
    $db = new BasicDB();

    $get_settings = $db->from('Settings')
        ->where('ID', "1")
        ->first();


    $cmd = $builder
        ->youtubeDl($get_settings["YOUTUBEDLPATH"])
        ->var_dump()
        ->get_format()
        ->getdump($contentUrl);

        $descriptorspec = array(
        0 => array("pipe", "r"),
        1 => array("pipe", "w"),
        2 => array("pipe", "w")
        );

        flush();




        $result = shell_exec($cmd);
        $lines = explode(PHP_EOL, $result, 2);
        $json = empty($lines[1]) ? null : json_decode($lines[1]);

        $array = json_decode(json_encode($json), True);

        return $array;


  }

/**
 * [getVideo description]
 * @param  String $contentUrl [Content Url]
 * @param  String $formatCode [Content Format Code Audio or Video or best]
 * @param  String $extension  [Preffered extract Extension]
 * @param  String $fileTitle  [File Title default id]
 * @return [Array]             [description]
 */
  public function getVideo($contentUrl, $formatCode, $extension, $fileTitle = "id", $isPlaylist = false, $isBackground = false)
  {

    $builder = new CmdBuilder();
    $db = new BasicDB();

    $get_settings = $db->from('Settings')
        ->where('ID', "1")
        ->first();


    $cmd = $builder->charSet($get_settings["CHARSET"])
    ->youtubeDl($get_settings["YOUTUBEDLPATH"])
    ->isPlaylist($isPlaylist, $get_settings["PLAYLISTLIMIT"])
    ->noWarning()
    ->cachePath($get_settings["CACHEPATH"])
    ->optionstag()
    ->downloadPath($get_settings["DOWNLOADPATH"])
    ->fileNameExt($fileTitle)
    ->restrictFilenames()
    ->keepVideo()
    ->extractVideo($formatCode,$extension)
    ->get($contentUrl);

    if ($isBackground) {
      $cmdResult = shell_exec($cmd." > /dev/null &");
    } else {
      $cmdResult = shell_exec($cmd." 2>&1 &");
    }



    $array = json_decode(json_encode($cmdResult), True);
    $json = json_decode($array, true);

    return $json;
  }

/**
 * [getMusic description]
 * @param  String  $contentUrl    [Content Url]
 * @param  String  $quality       [Music Quality 0-9]
 * @param  String  $extension     [File Extension "best", "aac","flac", "mp3", "m4a", "opus", "vorbis","wav"]
 * @param  string  $fileTitle     [File Title default id]
 * @param  boolean $embedThumnail [Add album art]
 * @param  boolean $addMetadata   [Add Meda Data]
 * @return [type]                 [description]
 */
public function getMusic($contentUrl, $quality, $extension, $fileTitle = "id", $embedThumnail = false, $addMetadata = false, $isPlaylist = false, $isBackground = false)
   {
     $builder = new CmdBuilder();
     $db = new BasicDB();

     $get_settings = $db->from('Settings')
         ->where('ID', "1")
         ->first();

         $cmd = $builder
           ->charSet($get_settings["CHARSET"])
           ->youtubeDl($get_settings["YOUTUBEDLPATH"])
           ->noWarning()
           ->isPlaylist($isPlaylist, $get_settings["PLAYLISTLIMIT"])

           ->preferFfmpeg()
           ->ffmpeg($get_settings["FFMPEGPATH"])
           ->cachePath($get_settings["CACHEPATH"])
           ->optionstag()
           ->downloadPath($get_settings["DOWNLOADPATH"])
           ->fileNameExt($fileTitle)
           ->restrictFilenames()
           ->embedThumbnail($embedThumnail)
           ->addMetadata($addMetadata)
           ->extractAudio($quality, $extension)
           ->get($contentUrl);

           if ($isBackground) {
             $cmdResult = shell_exec($cmd." > /dev/null &");
           } else {
             $cmdResult = shell_exec($cmd." 2>&1 &");
           }

           $array = json_decode(json_encode($cmdResult), True);
           $json = json_decode($array, true);

           return $json;

   }







}
