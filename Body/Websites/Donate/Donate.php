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
    <div class="Donate">
        <section id="content">
            <form method="POST" action="Donate.php">
                <h1>Donate</h1>
                <h2>All donations are appreciated :)!</h2>
                <div class="Input">
                    <label class="Input2" for="Gender">Donate:</label>
                    <select name="Gender" id="gender">
                        <option value="             ">             </option>
                        <option value="Male">  Male  </option>
                        <option value="saab">  Female  </option>
                        <option value="Other">  Other  </option>
                    </select>
                </div>
                <div class="Input">
                    <p>First Name:</p>
                    <input class="Input2" type="text" placeholder="First Name" id="fname" name="fname" />
                </div>
                <div class="Input">
                    <p>Last Name:</p>
                    <input class="Input2" type="text" placeholder="Last Name" name="lname" id="lname" />
                </div>
                <div>
                    <input style="float: right; font-size: 14pt" type="submit" value="Donate" />
                </div>
            </form>

        </section>
    </div>
</main>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>