<?php
class Images {
  var $path;

  function __construct($path) {
    $this->path = $path;
  }

  function getArray() {
    return glob($this->path . '*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
  }

  function getPath($array) {
    return $array[array_rand($array)];
  }
}

function random_image() {
  $api = new Images('images/');
  return $api->getPath($api->getArray());
}

function echoJson() {
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
}
?>