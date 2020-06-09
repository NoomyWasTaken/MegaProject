<?php?>
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
            <h1>Sign-Up</h1>
            <form method="POST" action="SignUp.php">

                <div class="leftform">

                    <h3>Login details</h3><br>
                    <p>
                        <label class="floatLabel" for="Username">Username</label>
                        <input  type="text" id="Username" name="Username" />
                    </p>
                    <p>
                        <label class="floatLabel" for="e-mail">E-mail</label>
                        <input  type="text" id="e-mail" name="e-mail" />
                    </p>
                    <p>
                        <label class="floatLabel" for="Password">Password</label>
                        <input  type="password" name="Password" id="Password" />
                    </p>
                    <p>
                        <label class="floatLabel" for="conf_password">Confirm Password</label>
                        <input  type="password" name="confirm password" id="conf_password" />
                    </p>
                    <div class="whitedogbone">
                        <section>
                            <button class="bone_btn">
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
                            <label class="floatLabel" for="FirstName">First Name</label>
                            <input  type="text" id="FirstName" name="First Name" />
                        </p>
                        <p>
                            <label class="floatLabel" for="LastName">Last Name</label>
                            <input  type="text" id="LastName" name="Last Name" />
                        </p>
                    </div>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" id="yes" for="Gender">Gender</label>
                            <select name="Gender" id="gender">
                                <option value="    ">        </option>
                                <option value="Male">  Male  </option>
                                <option value="female">  Female  </option>
                                <option value="Other">  Other  </option>
                            </select>
                        </p>
                        <p>
                            <label class="floatLabel" for="DOB">Date of Birth</label>
                            <input  type="date" placeholder="dd/mm/yyyy" id="DOB" name="DOB" style="padding: 21.0285px 10.400px" />
                        </p>
                    </div>
                    <p>
                        <label class="floatLabel" for="Phone">Phone</label>
                        <input  type="text" placeholder="XXX-XXX-XXXX" id="Phone" name="Phone" />
                    </p>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" for="Country">Country</label>
                            <input  type="text" id="Country" name="Country" />
                        </p>
                        <p>
                            <label class="floatLabel" for="City">City</label>
                            <input  type="text" id="City" name="City" />
                        </p>
                    </div>
                    <div class="rfdiv">
                        <p>
                            <label class="floatLabel" for="Address">Address</label>
                            <input  type="text" id="Address" name="Address" />
                        </p>
                        <p>
                            <label class="floatLabel" for="ZIP">ZIP</label>
                            <input  type="text" id="ZIP" name="ZIP" />
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