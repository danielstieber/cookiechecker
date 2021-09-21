<?php
require_once('../vendor/autoload.php');
require_once('../classes/CookieCheck.php');

use CookieCheck\CookieCheck;

$cc = new CookieCheck;
$services = [
	"https://www.justmarkt.at" => [],
	"https://www.alfies.at" => [],
	"https://www.gurkerl.at" => [],
	"https://www.jokr.com/?lang=de" => []
];
$trackers = [
	'_ga' => [
		'name' => 'Google Analytics',
		'count' => 0
	],
	// '_gid' => [
	// 	'name' => 'Google Analytics',
	// 	'count' => 0
	// ],
	'_fbp' => [
		'name' => 'Facebook Pixel',
		'count' => 0
	],
	'_fbp' => [
		'name' => 'Facebook Pixel',
		'count' => 0
	],
	'sailthru_hid' => [
		'name' => 'Sailthru Tracking',
		'count' => 0
	],
	'_pin_unauth' => [
		'name' => 'Pinterest Tracking',
		'count' => 0
	],
	'li_at' => [
		'name' => 'LinkedIn Pixel',
		'count' => 0
	],
	's_cc' => [
		'name' => 'Adobe Analytics',
		'count' => 0
	]
];
$services = $cc->getCookies($services);
foreach ($services as $key => $service) {
	$services[$key]['trackers'] = $trackers;
	foreach($services[$key]['result'] as $cookie)
	{
		if	(isset($trackers[$cookie['name']])) {
			$services[$key]['trackers'][$cookie['name']]['count']++;
		}
	}
}

include_once '../src/templates/app.php';