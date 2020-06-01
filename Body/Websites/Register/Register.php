<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="register.css">
<body>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	 ?>

	<div class="container">
	<section id="content">
		<form method="POST" action="login.php">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" id="username" name="username" />
			</div>
			<div>
				<input type="password" placeholder="Password" name="password" id="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
				<a href="http://localhost/Salon/azemina/registration.php">Register</a>
			</div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>
</html>