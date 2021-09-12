<?php
require_once('../vendor/autoload.php');
require_once('../classes/CookieCheck.php');

use CookieCheck\CookieCheck;

$cc = new CookieCheck;
$url = "https://www.gurkerl.at";
$result = $cc->getCookies($url);


var_dump($result);

die();

include_once '../src/templates/app.php';