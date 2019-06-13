<?php



class ThemeFunctions
{


  public static function getHeader(){

  return  include "System/Views/static/header.php" ;

  }

  public static function getHeaderBar(){

  return  include "System/Views/static/headerbar.php" ;

  }

  public static function getLeftBar(){

  return  include "System/Views/static/leftbar.php" ;

  }


  public static function getFooter(){

  return  include "System/Views/static/footer.php" ;

  }

  public static function getContent($contentName){

  return  include "System/Views/dynamic/".$contentName.".php" ;

  }


  public static function getLoginPage(){

  return  include "System/Views/dynamic/login.php" ;

  }


  public static function getTheme($contentName){

    ThemeFunctions::getHeader();
    ThemeFunctions::getHeaderBar();
    ThemeFunctions::getLeftBar();
    ThemeFunctions::getContent($contentName);
    ThemeFunctions::getFooter();

  }


  public static function getChartData($charttype)
  {
    $day = date('d');
    $month = date('m');
    $year = date('Y');

    $end_date = $day."-".$month."-".$year;
    $end_time = strtotime($end_date);

    $start_time = strtotime("-1 month", $end_time);

    $vals = "";
    $labels = "";
    $db = new BasicDB();
    $db->from('PublicContentLogs')
      ->between('TIMESTAMP', [2000, 2050])
      ->first();


    for($i=$start_time; $i<=$end_time; $i+=86400)
    {
     $list = date('d.m.Y', $i);
     $endlist = date('Y-m-d', strtotime($list. ' + 1 days'));

if($charttype == "Montly"){
  $dbtest =$db->from('PublicContentLogs')
    ->between('TIMESTAMP', [date('Y-m-d H:i:s', $i), $endlist])
    ->all();
}else {
  $dbtest =$db->from('PublicContentLogs')
    ->where("CONTENTTYPE",$charttype)
    ->between('TIMESTAMP', [date('Y-m-d H:i:s', $i), $endlist])
    ->all();
}



     $vals .= "{x:'".$list."', a: ".count($dbtest)."},";


    }

    $vals = substr($vals, 0, -1);
    $labels = substr($labels, 0, -1);

    return $vals;
  }



}



?>
