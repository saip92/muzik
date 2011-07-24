<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
define('INCHK', true);
require_once 'login.php';
?>
<html>
	<head>
		<title></title>
		<link type="text/css" rel="stylesheet" href="css/main.css"/>
		<link type="text/css" rel="stylesheet" href="css/acc.css"/>
		<link type="text/css" rel="stylesheet" href="css/slide.css"/>
		<link type="text/css" rel="stylesheet" href="css/none.css"/>
		<script type="text/javascript" src="js/jquery-latest.js"/></script>
		<!-- PNG FIX for IE6 -->
		<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
		<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="js/acc.js"></script>
		<script type="text/javascript" src="js/slide.js"></script>
		<script type="text/javascript" src="js/jqclk.js"></script>
	</head>
	<body>
		<?php
		include 'panel.php';
		?>
		<?php
			include 'header.php';
		?>
		<?php
			include 'nav.php';
		?>
		<?php
			include 'mainc.php';
		?>
		<?php
			include 'footer.php';
		?>
	</body>
</html>