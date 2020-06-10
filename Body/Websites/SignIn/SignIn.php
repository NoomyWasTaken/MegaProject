<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign-In</title>
	<link rel="stylesheet" type="text/css" href="../../Header/header.css">
	<link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
	<link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
	<link rel="stylesheet" type="text/css" href="SignIn.css">


<body>
	<?php
	if (isset($_SESSION['msg'])) {
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	 ?>
    <?php
    $pageTitle = 'Sign In';
    include('../../Header/header.php'); ?>
<main>
	    <div class="SignIn">
	        <section id="content">
		        <form method="POST" action="SignIn.php">
			        <h1>Sign-In</h1>
                    <div class="Input">
                        <p>
                            <label class="floatLabel" for="Username">Username</label>
                            <input  type="text" id="Username" name="Username" />
                        </p>                    </div>
                    <div class="Input">
                        <p>
                            <label class="floatLabel" for="Password">Password</label>
                            <input  type="password" name="Password" id="Password" />
                        </p>
                    </div>

			        <div class="whitedogbone">
                        <section>
                            <button class="bone_btn" id="boooone2">
                                <div class="c1"></div>
                                <div class="c2"></div>
                                <div class="c3"></div>
                                <div class="c4"></div>
                                <div class="b1">
                                    <div class="b2">
                                        <input style="float: right; font-size: 14pt" type="submit" value="Sign in" />
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div>

                    <a href="/../MegaProject/Body/Websites/SignUp/SignUp.php" id="subtn">Sing up</a>

		        </form>

	        </section>
        </div>
</main>
    <?php
    include('../../Footer/footer.php'); ?>
</body>
</html>