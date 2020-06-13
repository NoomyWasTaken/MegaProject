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
                <form method="POST" action="Includes/PutUpAdoption.inc.php" enctype="multipart/form-data">

                    <div class="leftform">

                        <h3>Animal details</h3><br>
                        <p>
                            <label class="floatLabel" for="name">Name</label>
                            <input  type="text" id="name" name="name" />
                        </p>
                        <p>
                            <label class="floatLabel" id="yes" for="species">Species</label>
                            <select name="species" id="species">
                                <option value="    ">        </option>
                                <option value="Dog">  Dog  </option>
                                <option value="Cat">  Cat  </option>
                                <option value="Bird">  Bird  </option>
                                <option value="Rodent">  Rodent  </option>
                                <option value="Other">  Other  </option>
                            </select>
                        </p>
                        <p>
                            <label class="floatLabel" for="breed">Breed</label>
                            <input  type="text" name="breed" id="breed" />
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
                                            <input style="float: right; font-size: 14pt" type="submit" value="Put Up" name="put-up-submit"/>
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
                                <label class="floatLabel" for="height">Height</label>
                                <input  type="text" id="height" name="height" placeholder="E.g. 23.00 cm"/>
                            </p>
                            <p>
                                <label class="floatLabel" for="weight">Weight</label>
                                <input  type="text" id="weight" name="weight" placeholder="E.g. 32.12 kg"/>
                            </p>
                        </div>
                        <div class="rfdiv">
                            <p>
                                <label class="floatLabel" id="yes" for="gender">Gender</label>
                                <select name="gender" id="gender">
                                    <option value="    ">        </option>
                                    <option value="Male">  Male  </option>
                                    <option value="female">  Female  </option>
                                </select>
                            </p>
                            <p>
                                <label class="floatLabel" for="age">Age</label>
                                <input  type="text" name="age" id="age" placeholder="E.g. 14 months"/>
                            </p>
                        </div>
                        <p>
                            <label class="floatLabel" id="yes" for="shelter">Shelter</label>
                            <select name="shelter" id="shelter">
                                <option value="    ">        </option>
                                <option value="PAWS(Kashmir)">  PAWS(Kashmir)  </option>
                                <option value="PAWS(Punjab)">  PAWS(Punjab)  </option>
                                <option value="PAWS(Sargodha)">  PAWS(Sargodha)  </option>
                                <option value="PAWS(Islamabad HQ)">  PAWS(Islamabad HQ)  </option>
                            </select>
                        </p>
                        <p>
                            <input type="file" name="file">
                        </p>
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