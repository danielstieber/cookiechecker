<!-- Plate 0.1.0 by Daniel Stieber https://github.com/danielstieber/plate -->
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>CookieCheck</title>

		<link rel="stylesheet" href="css/app.css">
	</head>
	<body class="bg-blue-50 w-full p-10">
		<h1 class="text-3xl text-blue-900 font-bold mb-6">Multipage Cookie Checker</h1>
		<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<?php
foreach($cookies as $url => $service) {
?>
<div class="p-4 bg-white shadow">
	<h2 class="text-xl font-bold text-gray-700 mb-2"><?=$url?></h2>
	<ul class="pl-2 w-96">
<?php
	foreach($service['trackers'] as $tracker) {
?>
		<li class="flex justify-between text-center">
			<span class="text-gray-800"><?=$tracker['name']?></span><span class="<?=isset($tracker['status']) && $tracker['status'] == 1 ? 'text-red-500' : 'text-gray-500'?>"><?=isset($tracker['status']) && $tracker['status'] == 1 ? '
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 4.75L4.75002 8C4.75002 8 4.00002 19.25 12 19.25C20 19.25 19.25 8 19.25 8L12 4.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M12.5 15C12.5 15.2761 12.2761 15.5 12 15.5C11.7239 15.5 11.5 15.2761 11.5 15C11.5 14.7239 11.7239 14.5 12 14.5C12.2761 14.5 12.5 14.7239 12.5 15Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
<path d="M12 9V11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
' : '<svg width="24" height="24" fill="none" viewBox="0 0 24 24">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.75 4.75H15.25C17.4591 4.75 19.25 6.54086 19.25 8.75V15.25C19.25 17.4591 17.4591 19.25 15.25 19.25H8.75C6.54086 19.25 4.75 17.4591 4.75 15.25V8.75C4.75 6.54086 6.54086 4.75 8.75 4.75Z"></path>
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7.75 12.75C7.75 12.75 9 15.25 12 15.25C15 15.25 16.25 12.75 16.25 12.75"></path>
  <circle cx="14" cy="10" r="1" fill="currentColor"></circle>
  <circle cx="10" cy="10" r="1" fill="currentColor"></circle>
</svg>
'?></span>
		</li>
<?php
	}	
?>
	</ul>
</div>
<?php
}
?>
</div>
		<script src="js/app.js"></script>	
	</body>
</html>