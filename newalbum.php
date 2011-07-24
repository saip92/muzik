<?php
if(!defined('INCHK'))
	die('You are not allowed to execute this file directly');
?>
<?php
if($_SESSION['id']):
?>
<h2>Create New Album</h2>
<hr />
<form method="post" action="createalbum.php">
	<label>
		Name :
	</label>
	<input type="text" value="" name="name" class="aftxt"/><br />
	<label>
		Language :
	</label>
	<input type="text" value="" name="lang" class="aftxt"/><br />
	<label>
		Year :
	</label>
	<input type="text" value="" name="year" class="aftxt"/><br />
	<input type="submit" value="Create" id="create" />
	<div class="loading"></div>
</form>
<div id="alst2">
	<p>
		Wanna add songs ? Go <a href="index.php?page=addsongs">Here</a>
	</p>
</div>
<?php
else:
?>
<h2>You are not authorised to access this page. </h2>
<?php
endif;
?>