Cookie Checker Study
=======================
A quick & dirty tool using headless chrome to check if a provided list of websites set cookies without your permissions.

## Preview
![Preview](https://i.imgur.com/olFVLb6.png)

## Basic Usage:
- Install composer dependencies
- Edit URL list in src/app.php

## Custom Cookies
You can watch for custom cookies by adding an array to the getCookies method:
```php
$cookies = $cc->getCookies($services, [
		'_gid' => ['name' => 'Google Analytics'],
		'_fbp' => ['name' => 'Facebook Pixel']
	]
);
```