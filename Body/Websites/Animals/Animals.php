<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Animals</title>
    <link rel="stylesheet" href="Animals.css">
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">

</head>
<body>

<?php
$pageTitle = 'Home Page';
include('../../Header/header.php'); ?>

<main>

    <div id="container">
        <aside id="navigation">
            <h2 id="dog" onclick="dogFunction()">Dogs</h2>
            <br>
            <h2 id="cat" onclick="catFunction()">Cats</h2>
            <br>
            <h2 id="bird" onclick="birdFunction()">Birds</h2>
            <br>
            <h2 id="rodent" onclick="rodentFunction()">Rodents</h2>
            <br>
            <h2 id="other" onclick="otherFunction()">Other</h2>
        </aside>

        <script>
            function dogFunction() {
                document.getElementById("doge").style.display = "block";
                document.getElementById("pus").style.display = "none";
                document.getElementById("birb").style.display = "none";
                document.getElementById("road").style.display = "none";
                document.getElementById("melman").style.display = "none";
            }
            function catFunction() {
                document.getElementById("doge").style.display = "none";
                document.getElementById("pus").style.display = "block";
                document.getElementById("birb").style.display = "none";
                document.getElementById("road").style.display = "none";
                document.getElementById("melman").style.display = "none";
            }
            function birdFunction() {
                document.getElementById("doge").style.display = "none";
                document.getElementById("pus").style.display = "none";
                document.getElementById("birb").style.display = "block";
                document.getElementById("road").style.display = "none";
                document.getElementById("melman").style.display = "none";
            }
            function rodentFunction() {
                document.getElementById("doge").style.display = "none";
                document.getElementById("pus").style.display = "none";
                document.getElementById("birb").style.display = "none";
                document.getElementById("road").style.display = "block";
                document.getElementById("melman").style.display = "none";
            }
            function otherFunction() {
                document.getElementById("doge").style.display = "none";
                document.getElementById("pus").style.display = "none";
                document.getElementById("birb").style.display = "none";
                document.getElementById("road").style.display = "none";
                document.getElementById("melman").style.display = "block";
            }
        </script>

        <div id="doge" class="w3-content w3-display-container">
            <img class="mySlides1" src="../../../Images/cycle1.png" style="width:100%">
            <img class="mySlides1" src="../../../Images/cycle2.png" style="width:100%">
            <img class="mySlides1" src="../../../Images/cycle3.png" style="width:100%">
            <img class="mySlides1" src="../../../Images/cycle4.png" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 0)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 0)">&#10095;</button>
        </div>

        <div id="pus" class="w3-content w3-display-container" style="display: none">
            <img class="mySlides2" src="../../../Images/cycle5.png" style="width:100%">
            <img class="mySlides2" src="../../../Images/cycle6.png" style="width:100%">
            <img class="mySlides2" src="../../../Images/cycle7.png" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="birb" class="w3-content w3-display-container" style="display: none">
            <img class="mySlides3" src="../../../Images/Animals/Macaow.jpg" style="width:100%">
            <img class="mySlides3" src="../../../Images/Animals/lovebirds.jpg" style="width:100%">
            <img class="mySlides3" src="../../../Images/Animals/budgie.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="road" class="w3-content w3-display-container" style="display: none">
            <img class="mySlides4" src="../../../Images/Animals/sugerglider.jpg" style="width:100%">
            <img class="mySlides4" src="../../../Images/Animals/guineapig.jpg" style="width:100%">
            <img class="mySlides4" src="../../../Images/Animals/hamster.jpg" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="melman" class="w3-content w3-display-container" style="display: none">
            <img class="mySlides5" src="../../../Images/Animals/giraffes.gif" style="width:100%">
            <img class="mySlides5" src="../../../Images/Animals/alpaca.jpg" style="width:100%">
            <img class="mySlides5" src="../../../Images/Animals/clownfish.png" style="width:100%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <script>
            var slideIndex = [1,1,1,1,1];
            var slideId = ["mySlides1", "mySlides2","mySlides3", "mySlides4","mySlides5"]
            showDivs(1, 0);
            showDivs(1, 1);
            showDivs(1, 2);
            showDivs(1, 3);
            showDivs(1, 4);

            function plusDivs(n, no) {
                showDivs(slideIndex[no] += n, no);
            }

            function showDivs(n, no) {
                var i;
                var x = document.getElementsByClassName(slideId[no]);
                if (n > x.length) {slideIndex[no] = 1}
                if (n < 1) {slideIndex[no] = x.length}
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex[no]-1].style.display = "block";
            }
        </script>
    </div>
</main>

<?php
include('../../Footer/footer.php'); ?>

</body>
</html><?php
