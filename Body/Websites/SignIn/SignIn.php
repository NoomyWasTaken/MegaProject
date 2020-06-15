<?php
session_start();
if ($_POST) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    $hashed=hash('sha256', $password);

    $query = oci_parse($conn, "select * from users where user_name = '{$username}' and password = '{$hashed}'");

    $row = oci_fetch_assoc($query);

    if ($row) {

        $_SESSION['Username'] = $row['USERNAME'];
        $_SESSION['Password'] = $row['PASSWORD'];


        header('Location: ../HomePage/HomePage.php');
        exit();
    } else {
        $_SESSION['msg'] = 'Incorrect username and/or password';
    }
}

?>
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
		        <form method="POST" action="Includes/SignIn.inc.php">
			        <h1>Sign-In</h1>
                    <div class="Input">
                        <p>
                            <label class="floatLabel" for="Username">Username</label >
                            <input  type="text" id="Username" name="Username" />
                        </p>
                    </div>
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
                                        <input style="float: right; font-size: 14pt" type="submit" value="Sign in" name="sign-in" onclick="geekAlert()"/>
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div>

                    <a href="/../MegaProject/Body/Websites/SignUp/SignUp.php" id="subtn">Sign Up</a>

		        </form>

	        </section>

            <script>
                function geekAlert() {
                    alert("welcome, you're signed in");
                }
            </script>
        </div>
</main>
    <?php
    include('../../Footer/footer.php'); ?>
</body>
</html>