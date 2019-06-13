<?php
session_start();
ob_start();


require 'Router/Route.php';


require '../Config/Config.php';


require 'Init/Init.php';


new Init();

?>
