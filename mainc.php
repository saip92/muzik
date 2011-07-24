<?php if(!defined('INCHK')) die('You are not allowed to execute this file directly'); ?>
<div id="wrapper">
	<?php include 'leftc.php' ?>
	<div id="maincol">
		<div id="mcsta">
		</div>
		<div id="mcbg">
			<div id="content">
				<?php 
					if($_GET['page'])
						 include $_GET['page'].'.php';
					else
						include 'home.php';
				?>
			</div>
		</div>
		<div id="mcsto">
		</div>
	</div>
</div>