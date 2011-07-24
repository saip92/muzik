<?php
	define('INCHK', true);
	require 'connect.php';
	$albname = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
	$alblang = ($_GET['lang']) ? $_GET['lang'] : $_POST['lang'];
	$albyear = ($_GET['year']) ? $_GET['year'] : $_POST['year'];
	$albname = mysql_real_escape_string($albname);
	$alblang = mysql_real_escape_string($alblang);
	$albyear = mysql_real_escape_string($albyear);
	mysql_query("	INSERT INTO mz_albums(name,language,year)
						VALUES(
						
							'".$albname."',
							'".$alblang."',
							$albyear)");
	echo "1";
?>