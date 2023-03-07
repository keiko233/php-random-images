<?php
require_once 'functions.php';

header('Content-Type: image/png');
echo $api->getContent(random_image()) . PHP_EOL;
?>