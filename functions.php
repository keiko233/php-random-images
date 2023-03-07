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
?>