<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Volunteer</title>
    <link rel="stylesheet" type="text/css" href="Volunteer.css">
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">
</head>
<?php
$pageTitle = 'Volunteer';
include('../../Header/header.php'); ?>
<body>
<main>
    <div class="SignIn">
        <section id="content">
            <form method="POST" action="Includes/SignIn.inc.php">
                <h1>Sign-In</h1>
                <div class="Input">
                    <p>
                        <label class="floatLabel" id="yes" for="work-as">Work as</label>
                        <select name="work-as" id="work-as">
                            <option value="    ">        </option>
                            <option value="Male">  Caretaker  </option>
                            <option value="female">  Veterinarian  </option>
                            <option value="Other">  Trainer  </option>
                            <option value="Other">  Pet Locator  </option>
                            <option value="Other">  Pet Adoption Counselor  </option>
                            <option value="Other">  Secretary  </option>
                        </select>
                    </p>
                </div>

                <p>
                    <label class="floatLabel" for="start">When to start?</label>
                    <input  type="date" placeholder="yyyy/mm/dd" id="start" name="start" style="padding: 21.0285px 10.400px" />
                </p>

                <p>
                    <label class="floatLabel" id="yes" for="shelter">Shelter</label>
                    <select name="shelter" id="shelter">
                        <option value="    ">        </option>
                        <option value="236101001000">  PAWS(Kashmir)  </option>
                        <option value="01">  PAWS(Punjab)  </option>
                        <option value="01011">  PAWS(Sargodha)  </option>
                        <option value="922">  PAWS(Islamabad HQ)  </option>
                    </select>
                </p>

                <div class="whitedogbone">
                    <section>
                        <button class="bone_btn" id="boooone2">
                            <div class="c1"></div>
                            <div class="c2"></div>
                            <div class="c3"></div>
                            <div class="c4"></div>
                            <div class="b1">
                                <div class="b2">
                                    <input style="float: right; font-size: 14pt" type="submit" value="Volunteer" name="volunteer" />
                                </div>
                            </div>
                        </button>
                    </section>
                </div>
            </form>
        </section>
    </div>
</main>


<?php
include('../../Footer/footer.php'); ?>
</body>
</html>