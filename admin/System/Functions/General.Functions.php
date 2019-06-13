<?php



class GeneralFunctions
{







    public function redirect($url)
    {
        header("Location: ".Config::$realpath."".Config::$adminpath."".$url);
    }

    public static function countContents($date){

      $db = new BasicDB();

      $get_settings = $db->from('PublicContentLogs')
          ->customWhereDate("TIMESTAMP",$date)
          ->all();



          return count($get_settings);

    }






}
