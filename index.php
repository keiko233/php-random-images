<?php
require_once 'functions.php';

switch($_GET['m']) {
  case 'json':
    echoJson(getUserParameter());
    break;
  case 'path':
    echo 'https://' . $_SERVER['HTTP_HOST'] . '/' . random_image(getUserParameter()) . PHP_EOL;
    break;
  default: 
    header('Content-Type: image/png');
    echo file_get_contents(random_image(getUserParameter()));
}
?>