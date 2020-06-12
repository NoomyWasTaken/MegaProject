<?php
$fname = $lname = $email = $gender = $phone = $dob = $city = $country = $zip = $address = $password = $passwordconfirm = $username = "";

$errors = array();



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        if(isset($errors['fname'])) echo $errors['fname'] ;
        $errors['fname'] = "Name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $errors['fname'] = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["username"])) {
        $errors['username'] = "username is required";
    }



    if (empty($_POST["e-mail"])) {
        $errors['e-mail'] = "Email is required";
    } else {
        $email = test_input($_POST["e-mail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['e-mail']= "Invalid e-mail format";
        }
    }
    if (empty($_POST["password"])) {
        $password = "";
    } else if (empty($_POST["conf_password"])) {
        $passwordconfirm = "";
    } else {
        $password = test_input($_POST["password"]);
    }
    if ($passwordconfirm != $password) {
        $errors['conf_password'] = "Not identical passwords";
    }

    if (empty($_POST["lname"])) {
        $errors['lname'] = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $errors['lname'] = "Only letters and white spaces are allowed";
        }
    }

    if (empty($_POST["phone"])) {
        $errors['phone'] = "Phone is required";
    }
    else{
        $phone=test_input($_POST["phone"]);
    }

    if (empty($_POST["dob"])) {
        $dob = "";
    } else {
        $dob = test_input($_POST["dob"]);
    }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign-Up</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="SignUp.css">

    <?php
    $pageTitle = 'Sign up';
    include('../../Header/header.php'); ?>
<body>
<main>
    <div id="BigDiv"></div>
    <div class="SignUp">
        <section id="content">
            <h1>Sign-Up</h1>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                <div class="leftform">

                    <h3>Login details</h3><br>
                    <p>
                        <label class="floatLabel" for="username">Username</label>
                        <input  type="text" id="username" name="username" />
                        <?php  if(isset($errors['username'])) echo $errors['username'] ?>
                    </p>
                    <p>
                        <label class="floatLabel" for="e-mail">E-mail</label>
                        <input  type="text" id="e-mail" name="e-mail" />
                        <?php  if(isset($errors['e-mail'])) echo $errors['e-mail'] ?>
                    </p>
                    <p>
                        <label class="floatLabel" for="password">Password</label>
                        <input  type="password" name="password" id="password" />
                    </p>
                    <p>
                        <label class="floatLabel" for="conf_password">Confirm Password</label>
                        <input  type="password" name="conf_password" id="conf_password" />
                        <?php if(isset($errors['conf_password'])) echo $errors['conf_password'] ?>
                    </p>
                    <div class="whitedogbone">
                        <section>
                            <button class="bone_btn" id="boooone">
                                <div class="c1"></div>
                                <div class="c2"></div>
                                <div class="c3"></div>
                                <div class="c4"></div>
                                <div class="b1">
                                    <div class="b2">
                                        <input style="float: right; font-size: 14pt" type="submit" value="Sign up" />
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div>
                </div>

                <div class="rightform">
                    <h3 id="rfh">Account details</h3>
                    <br>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" for="fname">First Name</label>
                            <input  type="text" id="fname" name="fname" />
                            <?php  if(isset($errors['fname'])) echo $errors['fname'] ?>
                        </p>
                        <p>
                            <label class="floatLabel" for="lname">Last Name</label>
                            <input  type="text" id="lname" name="lname" />
                            <?php  if(isset($errors['lname'])) echo $errors['lname'] ?>
                        </p>
                    </div>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" id="yes" for="gender">Gender</label>
                            <select name="gender" id="gender">
                                <option value="    ">        </option>
                                <option value="Male">  Male  </option>
                                <option value="female">  Female  </option>
                                <option value="Other">  Other  </option>
                            </select>
                        </p>
                        <p>
                            <label class="floatLabel" for="dob">Date of Birth</label>
                            <input  type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" style="padding: 21.0285px 10.400px" />
                        </p>
                    </div>
                    <p>
                        <label class="floatLabel" for="phone">Phone</label>
                        <input  type="text" placeholder="XXX-XXX-XXXX" id="phone" name="phone" />
                        <?php  if(isset($errors['phone'])) echo $errors['phone'] ?>
                    </p>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" for="country">Country</label>
                            <input  type="text" id="country" name="country" />
                        </p>
                        <p>
                            <label class="floatLabel" for="city">City</label>
                            <input  type="text" id="city" name="city" />
                        </p>
                    </div>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" for="address">Address</label>
                            <input  type="text" id="address" name="address" />
                        </p>
                        <p>
                            <label class="floatLabel" for="zip">ZIP</label>
                            <input  type="text" id="zip" name="zip" />
                        </p>
                    </div>
                </div>
                <div class="vl69"></div>

            </form>
        </section>
    </div>
    </div>
</main>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>