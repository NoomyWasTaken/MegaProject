<?php?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
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
    $pageTitle = 'Sign up';
    include('../../Header/header.php'); ?>
<main>
    <div id="BigDiv"></div>
	    <div class="SignIn">
	        <section id="content">
		        <form method="POST" action="SignIn.php">
			        <h1>Sign-In</h1>
                    <div class="Input">
                        <p>Username lmao:</p>
                        <input class="Input2" type="text" placeholder="Username" id="username" name="username" />
                    </div>
                    <div class="Input">
                        <p>Password:</p>
                        <input class="Input2" type="password" placeholder="Password" name="password" id="password" />
                    </div>
			        <div>
				        <input style="float: right; font-size: 14pt" type="submit" value="Sign in" />
			        </div>
		        </form><!-- form -->

	        </section><!-- content -->
        </div><!-- container -->
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
    </div>
</main>
    <?php
    include('../../Footer/footer.php'); ?>
</body>
</html>