<?php




class CmdBuilder{





private $query;

/**
 * [charSet description]
 * @param  [object] $charSet [Charset]
 * @return [object]
 */
    public function charSet($charSet)
    {

      $this->charSet = 'LC_ALL='.$charSet.' ';
      $this->query .= $this->charSet;
      return $this;
    }


/**
 * [youtubeDl description]
 * @param  [object] $youtubedlPath [Youtube-dl Path]
 * @return [object]
 */
    public function youtubeDl($youtubedlPath){


      $this->youtubedlPath = $youtubedlPath.'youtube-dl ';
      $this->query .= $this->youtubedlPath;
      return $this;


    }

/**
 * [cachePath description]
 * @param  [object] $cachePath [All Cache Paths]
 * @return [object]
 */
    public function cachePath($cachePath){


      $this->cachePath = '--cache-dir '.$cachePath.' ';
      $this->query .= $this->cachePath;
      return $this;


    }

    public function preferFfmpeg(){


      $this->preferFfmpeg = '--prefer-ffmpeg ';
      $this->query .= $this->preferFfmpeg;
      return $this;


    }

    public function isPlaylist($boolean = false, $playlistLimit){

      if($boolean){
        $this->isPlaylist = '--yes-playlist --playlist-end '.$playlistLimit.' ';
      }else{
        $this->isPlaylist = '--no-playlist ';
      }

      $this->query .= $this->isPlaylist;
      return $this;


    }


    public function ffmpeg($ffmpegPath){


      $this->ffmpegPath = '--ffmpeg-location '.$ffmpegPath.'ffmpeg ';
      $this->query .= $this->ffmpegPath;
      return $this;


    }

    public function optionstag(){

      $this->optionstag =  '-o  ';
      $this->query .= $this->optionstag;
      return $this;


    }



    public function var_dump(){

      $this->var_dump =  '--dump-json ';
      $this->query .= $this->var_dump;
      return $this;


    }

    public function get_format(){

      $this->get_format =  '--get-format ';
      $this->query .= $this->get_format;
      return $this;


    }


public function keepVideo(){

  $this->keepVideo =  '--keep-video ';
  $this->query .= $this->keepVideo;
  return $this;


}


    public function restrictFilenames(){

      $this->restrictFilenames =  '--restrict-filenames ';
      $this->query .= $this->restrictFilenames;
      return $this;


    }

    public function noWarning(){

      $this->noWarning =  '--quiet --ignore-errors --no-warnings --print-json ';
      $this->query .= $this->noWarning;
      return $this;


    }

    public function contentUrl($contentUrl){


      $this->contentUrl = $contentUrl;
      $this->query .= $this->contentUrl;
      return $this;


    }

    public function embedThumbnail($boolean = True){

      if($boolean){
        $this->embedThumbnail = '--embed-thumbnail ';
        $this->query .= $this->embedThumbnail;
        return $this;
      }else{

        return $this;
      }




    }

    public function getVideoFormats()
    {
      $this->videoFormatsTag = '-F ';
      $this->query .= $this->videoFormatsTag;
      return $this;
    }


    public function addMetadata($boolean = True){

      if($boolean){
        $this->addMetadata = '--add-metadata ';
        $this->query .= $this->addMetadata;
        return $this;
      }else{

        return $this;
      }




    }



public function extractVideo($quality = "best", $format){


  $this->extractVideo = '-f '.$quality.' --merge-output-format '.$format.' ';
  $this->query .= $this->extractVideo;
  return $this;


}


    public function extractAudio($quality, $format){


      $this->extractAudio = '--audio-quality '.$quality.' --extract-audio --audio-format '.$format.' ';
      $this->query .= $this->extractAudio;
      return $this;


    }


//--embed-thumbnail --add-metadata --audio-quality ".$quality." --extract-audio --audio-format mp3 ";



public function downloadPath($downloadPath){


  $this->downloadPath = '"'.$downloadPath;
  $this->query .= $this->downloadPath;
  return $this;


}

public function fileNameExt($name)
{
  $this->fileNameExt = '%('.$name.')s.%(ext)s" ';
  $this->query .= $this->fileNameExt;
  return $this;
}



    public function get($url){
      $this->contentUrl = escapeshellarg($url);
      $this->query .= $this->contentUrl;
      $query = $this->query;

      return $query;


    }

    public function getdump($url){
      $this->contentUrl = $url;
      $this->query .= $this->contentUrl;
      $query = $this->query;

      return $query;


    }




}






/*$queryVideo = $basicdb->charSet("en_US.UTF-8")
->youtubeDl("/usr/local/bin/")
->cachePath("/var/www/html/downloads/caches/")
->optionstag()
->downloadPath("/var/www/html/downloads/")
->fileNameExt("title")
->restrictFilenames()
->keepVideo()
->extractVideo("best","mp4")
->get("https://www.youtube.com/watch?v=-g9XihL1hF8");*/



/*  $querydump = $builder
    ->youtubeDl("/usr/local/bin/")
    ->var_dump()
    ->get_format()
    ->get("https://www.youtube.com/watch?v=-g9XihL1hF8");



  $queryMusic = $builder
    ->charSet("en_US.UTF-8")
    ->youtubeDl("/usr/local/bin/")
    ->preferFfmpeg()
    ->ffmpeg("/usr/bin/")
    ->cachePath("/var/www/html/downloads/caches/")
    ->optionstag()
    ->downloadPath("/var/www/html/downloads/")
    ->fileNameExt("title")
    ->restrictFilenames()
    ->embedThumbnail(true)
    ->addMetadata(true)
    ->extractAudio("0", "mp3")
    ->get("https://www.youtube.com/watch?v=-g9XihL1hF8");*/


    /*$queryGetFormats = $builder
    ->youtubeDl("/usr/local/bin/")
    ->getVideoFormats()
    ->get("https://www.youtube.com/watch?v=-g9XihL1hF8");*/








?>
