<?php
require_once 'functions.php';

switch($_GET['m']) {
  case 'json':
    echoJson();
    break;
  case 'path':
    echo 'https://' . $_SERVER['HTTP_HOST'] . '/' . random_image() . PHP_EOL;
    break;
  default: 
    header('Content-Type: image/png');
    echo file_get_contents(random_image());
}
?>