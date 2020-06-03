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
                        <img src="../../../Images/logo-test2.png" alt="logo" style="width: 200px">
                    </div>

                    <div class="dropdown">
                        <div class="container" onclick="myFunction(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>

                            <div id="myDropdown" class="dropdown-content">

                                <h2>Home Page</h2>
                                <hr>

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
                                            <a href="#Sign-in">Sign-in</a>
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
                                            <a href="#Sign-up">Sign-up</a>
                                        </div>
                                    </div>
                                </button>

                            </div>

                        </div>
                    </div>

                    <script>
                        function myFunction(x) {
                            x.classList.toggle("change");
                            document.getElementById("myDropdown").classList.toggle("show");
                        }

                        window.onclick = function(event) {
                            if (!event.target.matches('.container')) {
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