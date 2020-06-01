<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="SignUp.css">

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
                <h1>Sign-Up</h1>
                <div class="Input">
                    <p>Username:</p>
                    <input class="Input2" type="text" placeholder="Username" id="username" name="username" />
                </div>
                <div class="Input">
                    <p>Password:</p>
                    <input class="Input2" type="password" placeholder="Password" name="password" id="password" />
                </div>
                <div class="Input">
                    <p>First Name:</p>
                    <input class="Input2" type="text" placeholder="Password" name="firstname" id="fname" />
                </div>
                <div class="Input">
                    <p>Last Name:</p>
                    <input class="Input2" type="text" placeholder="Last Name" name="lastname" id="lname" />
                </div>
                <div class="Input">
                    <p>Gender:</p>
                    <input class="Input2" type="text" placeholder="Gender" name="gender" id="gender" />
                </div>
                <div class="Input">
                    <p>Date Of Birth:</p>
                    <input class="Input2" type="date" placeholder="Date Of Birth" name="dob" id="dob" />
                </div>
                <div class="Input">
                    <p>Address:</p>
                    <input class="Input2" type="text" placeholder="Address" name="address" id="address" />
                </div>
                <div class="Input">
                    <p>Phone:</p>
                    <input class="Input2" type="number" placeholder="Phone" name="phone" id="phone" />
                </div>
                <div class="Input">
                    <p>Email:</p>
                    <input class="Input2" type="text" placeholder="Email" name="email" id="email" />
                </div>
                <div>
                    <input style="float: right; font-size: 14pt" type="submit" value="Sign up" />
                </div>
            </form><!-- form -->

        </section><!-- content -->
    </div><!-- container -->
    </form><!-- form -->

    </section><!-- content -->
    </div><!-- container -->
    </div>
    <img src="../../../Images/20370149.webp" alt="advert">
</main>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>