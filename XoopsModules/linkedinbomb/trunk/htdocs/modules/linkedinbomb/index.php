<?php
	include_once('header.php');
	$xoopsOption['template_main'] = 'linkedinbomb_index.html';
	include($GLOBALS['xoops']->path('/header.php'));
	print_r($_SESSION['oauth']);
	include($GLOBALS['xoops']->path('/footer.php'));
	exit;
?>