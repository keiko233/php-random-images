<?php
require_once 'functions.php';

header('Content-Type:application/json;charset=utf-8');

$path = random_image();
$str = array(
  'response' => array(
    array(
      'path' => $path,
      'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/' . $path,
    )
  )
);

echo json_encode($str, JSON_UNESCAPED_SLASHES) . PHP_EOL;

?>
