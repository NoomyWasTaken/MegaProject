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
            <form method="POST" action="Volunteer.inc.php">
                <h1>Volunteering Form</h1>

                <p>
                    <label class="floatLabel" id="yes" for="work-as">Work as</label>
                    <select name="work-as" id="species">
                        <option value="    ">        </option>
                        <option value="Caretaker">  Caretaker  </option>
                        <option value="Veterinarian">  Veterinarian  </option>
                        <option value="Trainer">  Trainer  </option>
                        <option value="Pet Locator">  Pet Locator  </option>
                        <option value="Pet Adoption Counselor">  Pet Adoption Counselor  </option>
                        <option value="Secretary">  Secretary  </option>
                        <option value="Foster">  foster  </option>
                    </select>
                </p>

                <div class="Input">
                <p>
                    <label class="floatLabel" for="start">When to start?</label>
                    <input  type="date" placeholder="dd/mm/yyyy" id="amount" name="start" />
                </p>
                </div>

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
                        <button class="bone_btn" id="boooone3">
                            <div class="c1"></div>
                            <div class="c2"></div>
                            <div class="c3"></div>
                            <div class="c4"></div>
                            <div class="b1">
                                <div class="b2">
                                    <input style="font-size: 14pt" type="submit" value="Request" name="Request" onclick="geekAlert()"/>
                                </div>
                            </div>
                        </button>
                    </section>
                </div>

            </form>

        </section>

    </div>
    <script>
        function geekAlert() {
            alert("You're volunteering request is being reviewed by our members. We will contact you as soon as possible");
        }
    </script>

</main>


<?php
include('../../Footer/footer.php'); ?>
</body>
</html>