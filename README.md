Cookie Checker Study
=======================

A quick & dirty tool using headless chrome to check if a provided list of websites set cookies without your permissions.

## Basic Usage:
- Install composer dependencies
- Edit URL list in src/app.php

## Custom Cookies
You can watch for custom cookies by adding an array to the formula:
```php
$cookies = $cc->getCookies($services, [
		'_gid' => ['name' => 'Google Analytics'],
		'_fbp' => ['name' => 'Facebook Pixel']
	]
);
```