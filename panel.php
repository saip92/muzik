<?php if(!defined('INCHK')) die('You are not allowed to execute this file directly'); ?>
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>The Sliding jQuery Panel</h1>
				<h2>A register/login solution</h2>
				<p class="grey">
					You are free to use this login and registration system in you sites!
				</p>
				<h2>A Big Thanks</h2>
				<p class="grey">
					This tutorial was built on top of
					<a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Go to site">Web-Kreation</a>'s amazing sliding panel.
				</p>
			</div>

			<?php

			if(!$_SESSION['id']):

			?>

			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="" method="post">
					<h1>Member Login</h1>

					<?php

					if($_SESSION['msg']['login-err']) {
						echo '
					<div class="err">
						' . $_SESSION['msg']['login-err'] . '
					</div>';
						unset($_SESSION['msg']['login-err']);
					}
					?>

					<label class="grey" for="username">
						Username:
					</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="password">
						Password:
					</label>
					<input class="field" type="password" name="password" id="password" size="23" />
					<label>
						<input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" />
						&nbsp;Remember me
					</label>
					<div class="clear">
					</div>
					<input type="submit" name="submit" value="Login" class="bt_login" />
				</form>
			</div>
			<div class="left right">
				<!-- Register Form -->
				<form action="" method="post">
					<h1>Not a member yet? Sign Up!</h1>

					<?php

					if($_SESSION['msg']['reg-err']) {
						echo '
					<div class="err">
						' . $_SESSION['msg']['reg-err'] . '
					</div>';
						unset($_SESSION['msg']['reg-err']);
					}

					if($_SESSION['msg']['reg-success']) {
						echo '
					<div class="success">
						' . $_SESSION['msg']['reg-success'] . '
					</div>';
						unset($_SESSION['msg']['reg-success']);
					}
					?>

					<label class="grey" for="username">
						Username:
					</label>
					<input class="field" type="text" name="username" id="username" value="" size="23" />
					<label class="grey" for="email">
						Email:
					</label>
					<input class="field" type="text" name="email" id="email" size="23" />
					<label>
						A password will be e-mailed to you.
					</label>
					<input type="submit" name="submit" value="Register" class="bt_register" />
				</form>
			</div>

			<?php

			else:
			?>

			<div class="left">

				<h1>Members panel</h1>

				<p>
					You can put member-only data here
				</p>
				<a href="registered.php">View a special member page</a>
				<p>
					- or -
				</p>
				<a href="?logoff">Log off</a>

			</div>

			<div class="left right">
				<h1>Muzik panel</h1>
				<p>Getting Started:</p>
				<a href="?page=newalbum">Add new Album</a><br/>
				<a href="?page=addsongs">Add new Song</a>
			</div>

			<?php
			endif;
			?>
		</div>
	</div> <!-- /login -->

	<!-- The tab on top -->
	<div class="tab">
		<ul class="login">
			<li class="left">
				&nbsp;
			</li>
			<li>
				Hello <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>!
			</li>
			<li class="sep">
				|
			</li>
			<li id="toggle">
				<a id="open" class="open" href="#"><?php echo $_SESSION['id'] ? 'Open Panel' : 'Log In | Register';?></a>
				<a id="close" style="display: none;" class="close" href="#">Close Panel</a>
			</li>
			<li class="right">
				&nbsp;
			</li>
		</ul>
	</div>
</div>