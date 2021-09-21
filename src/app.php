<?php
require_once('../vendor/autoload.php');
require_once('../classes/CookieCheck.php');

use CookieCheck\CookieCheck;

$cc = new CookieCheck;
$services = [
	"https://www.justmarkt.at",
	"https://www.alfies.at",
	"https://www.gurkerl.at",
	"https://www.jokr.com/?lang=de"
];

$cookies = $cc->getCookies($services);

////// Example to track custom cookies

// $cookies = $cc->getCookies($services, [
// 		'_gid' => ['name' => 'Google Analytics'],
// 		'_fbp' => ['name' => 'Facebook Pixel']
// 	]
// );

include_once('templates/app.php');
?>