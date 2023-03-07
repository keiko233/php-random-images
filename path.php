<?php
require_once 'functions.php';

echo 'https://' . $_SERVER['HTTP_HOST'] . '/' . random_image() . PHP_EOL;
?>