<?php


class Init{


public function __construct()
    {

    $this->LoadFunctions();
		$this->LoadClasses();
		$this->LoadDbClass();
    }

public function LoadFunctions()
  {
    $funcitionsDir = realpath('.') . '/System/Functions';
    if ($dh = opendir($funcitionsDir)){
      while($file = readdir($dh)){
        if (is_file($funcitionsDir . '/' . $file)){
          require $funcitionsDir . '/' . $file;
        }
      }
    }
  }


public function LoadClasses()
  {
    $funcitionsDir = realpath('.') . '/System/Classes';
    if ($dh = opendir($funcitionsDir)){
      while($file = readdir($dh)){
        if (is_file($funcitionsDir . '/' . $file)){
          require $funcitionsDir . '/' . $file;
        }
      }
    }
  }

public function LoadDbClass()
  {
    $funcitionsDir = realpath('.') . '/System/Db';
    if ($dh = opendir($funcitionsDir)){
      while($file = readdir($dh)){
        if (is_file($funcitionsDir . '/' . $file)){
          require $funcitionsDir . '/' . $file;
        }
      }
    }
  }


}


?>
