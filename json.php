<?php
require_once 'functions.php';

header('Content-Type:application/json;charset=utf-8');

$str = array(
  'response' => array(
    array(
      'path' => random_image(),
      'url' => 'https://' . $_SERVER['HTTP_HOST'] . '/' . random_image(),
    )
  )
);

echo json_encode($str, JSON_UNESCAPED_SLASHES) . PHP_EOL;

?>
