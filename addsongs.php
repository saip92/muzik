<?php
if(!defined('INCHK'))
	die('You are not allowed to execute this file directly');
include 'connect.php';
?>
<?php
if($_SESSION['id']):
?>
<label>Select Album : </label>
<select>
<?php
	$result  = mysql_query("SELECT * FROM mz_albums") or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
			echo '<option>'.$row['name'].'</option>';
	}
?>
</select>
<h2>Add Songs</h2>
<?php
else:
?>
<h2>You are not authorised to access this page. </h2>
<?php
endif;
?>