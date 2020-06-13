<?php
session_start();
?>
<title><?php echo $pageTitle; ?></title>

<link rel="stylesheet" type="text/css" href="header.css">
<link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">
<header>
    <div id="structure">

        <div class="bone">

            <div class="s1"></div>
            <div class="s2"></div>
            <div class="s3"></div>
            <div class="s4"></div>

            <div class="centerbone">
                <div class="clean">

                    <div class="logo">
                        <a href="/../MegaProject/Body/Websites/HomePage/HomePage.php"> <img src="../../../Images/logo-test2.png" alt="logo" style="width: 200px"> </a>
                    </div>

                    <div class="dropdown">

                        <div class="container" onclick="myFunction(this)">

                            <button class="menubtn">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </button>

                            <div id="myDropdown" class="dropdown-content">

                                <h2>
                                    <script>document.write(document.title)</script>
                                </h2>
                                <hr>

                                <?php
                                if (isset($_SESSION['username'])) {
                                    echo ' <div class="vl" style="height: 60%"></div>';
                                }
                                else {
                                    echo '<div class="vl"></div>';
                                }
                                ?>

                                <div class="whitedogbone">
                                <section>
                                    <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/Animals/Animals.php">Animals</a>
                                            </div>
                                        </div>
                                    </button>

                                    <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/Adopt/Adopt.php">Adopt</a>
                                            </div>
                                        </div>
                                    </button>
                                </section>

                                <section>
                                    <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/AboutUs/AboutUs.php">About Us</a>
                                            </div>
                                        </div>
                                    </button>

                                    <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/Contact/Contact.php">Contact</a>
                                            </div>
                                        </div>
                                    </button>
                                </section>


                                    <section style="padding-bottom: 0">

                                       <?php
                                        if (isset($_SESSION['username'])) {

                                           echo '<div style="padding-bottom: 25px">
                                        <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                 <a href="/../MegaProject/Body/Websites/Donate/Donate.php">Donate</a>
                                            </div>
                                        </div>
                                    </button> 
                                    </div>';
                                        }
                                        else {
                                            echo '<div style="display: none; padding-bottom: 0">
                                        <button class="bone_btn" >
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                               <a href="/../MegaProject/Body/Websites/Donate/Donate.php">Donate</a>
                                            </div>
                                        </div>
                                    </button> 
                                    </div>';
                                        }
                                       ?>

                                        <?php
                                        if (isset($_SESSION['username'])) {
                                            echo '
                                        <div style="padding-bottom: 25px">
                                        <button class="bone_btn" >
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/Volunteer/Volunteer.php">Volunteering</a>
                                            </div>
                                        </div>
                                    </button>
                                    </div>';
                                        }
                                        else {
                                            echo '<div style="display: none; padding-bottom: 0" >
                                        <button class="bone_btn" >
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/Volunteer/Volunteer.php">Volunteering</a>
                                            </div>
                                        </div>
                                    </button>
                                    </div>';
                                        }


                                    ?>
                                    </section>

                                <section>
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo '<button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/PutUpAdoption/PutUpAdoption.php" id="b3">Set an Adoption</a>
                                            </div>
                                        </div>
                                    </button>';
                                    }
                                    else {
                                       echo '<button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/SignIn/SignIn.php">Sign-in</a>
                                            </div>
                                        </div>
                                    </button>';
                                    }
                                    ?>

                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        echo '<button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Header/LogOut.php">Sign-out</a>
                                            </div>
                                        </div>
                                    </button>';
                                    }
                                    else {
                                        echo '<button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="/../MegaProject/Body/Websites/SignUp/SignUp.php">Sign Up</a>
                                            </div>
                                        </div>
                                    </button>';
                                    }
                                    ?>
                                </section>
                                </div>
                            </div>

                        </div>
                    </div>

                    <script>
                        function myFunction(x) {
                            x.classList.toggle("change");
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        window.onclick = function(event) {
                            console.log(event);
                            if (!event.target.matches('.container .menubtn')) {
                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                var i;
                                for (i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }

                    </script>


                </div>
            </div>

        </div>

    </div>
</header>
<div style="clear: both"></div>