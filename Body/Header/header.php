<title><?php echo $pageTitle; ?></title>
<link rel="stylesheet" type="text/css" href="header.css">
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
                        <a href="http://localhost/MegaProject/Body/Websites/HomePage/HomePage.php"> <img src="../../../Images/logo-test2.png" alt="logo" style="width: 200px"> </a>
                    </div>

                    <div class="dropdown">

                        <div class="container" onclick="myFunction(this)">

                            <button class="menubtn">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </button>

                            <div id="myDropdown" class="dropdown-content">

                                <h2>Home Page</h2>
                                <hr>
                                <div class="vl"></div>
                                <section>
                                    <button class="bone_btn">
                                        <div class="c1"></div>
                                        <div class="c2"></div>
                                        <div class="c3"></div>
                                        <div class="c4"></div>
                                        <div class="b1">
                                            <div class="b2">
                                                <a href="#Animals">Animals</a>
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
                                                <a href="#Adopt">Adopt</a>
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
                                                <a href="#About Us">About Us</a>
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
                                                <a href="#Contact">Contact</a>
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
                                                <a href="/../MegaProject/Body/Websites/SignIn/SignIn.php">Sign-in</a>
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
                                                <a href="/../MegaProject/Body/Websites/SignUp/SignUp.php">Sign-up</a>
                                            </div>
                                        </div>
                                    </button>
                                </section>

                            </div>

                        </div>
                    </div>

                    <script>
                        function myFunction(x) {
                            x.classList.toggle("change");
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        window.onclick = function(event) {
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