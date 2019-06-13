<?php

/**
 *
 */
class DatabaseFunc
{

  public function insertPublicContent($json,$ext,$ContentType){




      $db = new BasicDB();
      $generalFunc= new GeneralFunctions();
      $hash = $generalFunc->createHash();
      $filenameparts = explode('.', $json['_filename']);

      $ext = ($ext == "vorbis") ? "ogg" : $ext ;


        $query = $db->insert('PublicContentLogs')
          ->set(array(
              "TITLE"=>$json['title'],
              "PROVIDER"=>$json['extractor'],
              "CONTENT_ID"=>$json['id'],
              "CONTENTPATH"=>$filenameparts[0],
              "CONTENTHASH"=>$hash,
              "CONTENTEXT"=>$ext,
              "CONTENTTYPE"=>$ContentType
          ));




        if ($query) {

          return $hash;


        } else {

        }


  }

}



?>
