<!DOCTYPE html> 
<html class="ui-mobile"> 
	<head> 
	<base href="{$app_root}">
	<title>{block name="title"}{$main_title}{/block}</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="translucent" />
	<link rel="apple-touch-startup-image" href="../../www/images/test_logo.png" media="screen and (max-device-width: 320px)" />
    <link rel="apple-touch-icon" href="../../www/images/app_icon.png" />
	{block name="meta"}
	{/block}
	<!--<meta name="google" content="notranslate" />-->
	<meta charset="utf-8">
	{block name="head"}
	{/block}
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 800px)" href="{$app_root}www/css/large.css">
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width: 481px) and (max-device-width: 799px)" href="{$app_root}www/css/medium.css">
	<link rel="stylesheet" type="text/css" media="only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="{$app_root}www/css/mobile.css" />
	<link type="text/css" rel="stylesheet" href="{$app_root}www/css/style.css">
	<link type="text/css" rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.js"></script>
	<script src="{$app_root}www/js/jquery.jplayer.min.js"></script>
	<script src="{$app_root}www/js/chinese_flashcards.js"></script>
	<script src="{$app_root}www/js/jquery.cookie.js"></script>
	<script src="{$app_root}www/js/modernizr-2.5.3.js"></script>
	
	
	{block name="script"}
	{/block}
</head> 
<body class="ui-mobile-viewport ui-overlay-a"> 
{block name="page"}{/block}
</body>



 
</html>








