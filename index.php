<?php
require_once 'functions.php';

header('Content-Type: image/png');
echo file_get_contents(random_image());
?>