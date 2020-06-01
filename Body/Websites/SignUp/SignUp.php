<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="SignIn.css">

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
<main>
    <div id="BigDiv"></div>
    <div class="SignUp">
        <section id="content">
            <form method="POST" action="SignUp.php">
                <h1>Sign Up</h1>
                <div>
                    <input type="text" placeholder="Username" id="username" name="username" />
                </div>
                <div>
                    <input type="password" placeholder="Password" name="password" id="password" />
                </div>
                <div>
                    <input type="submit" value="Log in" />
                    <a href="http://localhost/MegaProject/Body/Websites/HomePage/HomePage.php">Register</a>
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