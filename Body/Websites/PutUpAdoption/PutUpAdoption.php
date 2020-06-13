<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Put up for Adoption</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="PutUpAdoption.css">

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
    <div id="BigDiv">
        <div class="SignUp">
            <section id="content">
                <h1>Put up for Adoption</h1>
                <form method="POST" action="SignUp.php">

                    <div class="leftform">

                        <h3>Animal details</h3><br>
                        <p>
                            <label class="floatLabel" for="Name">Name</label>
                            <input  type="text" id="Name" name="Name" />
                        </p>
                        <p>
                            <label class="floatLabel" id="yes" for="Species">Species</label>
                            <select name="Species" id="Species">
                                <option value="    ">        </option>
                                <option value="Dog">  Dog  </option>
                                <option value="Cat">  Cat  </option>
                                <option value="Bird">  Bird  </option>
                                <option value="Rodent">  Rodent  </option>
                                <option value="Other">  Other  </option>
                            </select>
                        </p>
                        <p>
                            <label class="floatLabel" for="Password">Breed</label>
                            <input  type="password" name="Password" id="Breed" />
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
                                            <input style="float: right; font-size: 14pt" type="submit" value="Put Up" />
                                        </div>
                                    </div>
                                </button>
                            </section>
                        </div>
                    </div>

                    <div class="rightform">
                        <h3 id="rfh">Additional information</h3>
                        <br>
                        <div class="rfdiv">
                            <p>
                                <label class="floatLabel" for="Height">Height</label>
                                <input  type="text" id="Height" name="Height" />
                            </p>
                            <p>
                                <label class="floatLabel" for="Weight">Weight</label>
                                <input  type="text" id="Weight" name="Weight" />
                            </p>
                        </div>
                        <div class="rfdiv">
                            <p>
                                <label class="floatLabel" id="yes" for="Gender">Gender</label>
                                <select name="Gender" id="gender">
                                    <option value="    ">        </option>
                                    <option value="Male">  Male  </option>
                                    <option value="female">  Female  </option>
                                </select>
                            </p>
                            <p>
                                <label class="floatLabel" for="Age">Age</label>
                                <input  type="password" name="Age" id="Age" />
                            </p>
                        </div>
                        <p>
                            <label class="floatLabel" id="yes" for="Shelter">Shelter</label>
                            <select name="Shelter" id="Shelter">
                                <option value="    ">        </option>
                                <option value="PAWS(Kashmir)">  Dog  </option>
                                <option value="PAWS(Punjab)">  Cat  </option>
                                <option value="PAWS(Sargodha)">  Bird  </option>
                                <option value="PAWS(Islamabad HQ)">  Rodent  </option>
                            </select>
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