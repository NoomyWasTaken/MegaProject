<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="../../Header/header.css">
	<link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
	<link rel="stylesheet" type="text/css" href="../../Footer/footer.css">

    <?php
    $pageTitle = 'Sign up';
    include('../../Header/header.php'); ?>
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
    <?php
    include('../../Footer/footer.php'); ?>
</body>
</html>