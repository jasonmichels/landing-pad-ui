<?php
require('../vendor/autoload.php');

echo "<pre>";
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = rawurldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

var_dump($httpMethod);
var_dump($uri);
//var_dump($_SERVER);
die();