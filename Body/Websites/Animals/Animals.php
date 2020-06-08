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
            <h2 id="cat" onclick="catFunction()">Cats</h2>
            <h2 id="bird" onclick="birdFunction()">Birds</h2>
            <h2 id="rodent" onclick="rodentFunction()">Rodents</h2>
            <h2 id="other" onclick="otherFunction()">Other</h2>
        </aside>

        <script>
            function dogFunction() {
                document.getElementById("doggy").style.display = "block";
                document.getElementById("catty").style.display = "none";
                document.getElementById("birdy").style.display = "none";
                document.getElementById("rody").style.display = "none";
                document.getElementById("othy").style.display = "none";
            }
            function catFunction() {
                document.getElementById("doggy").style.display = "none";
                document.getElementById("catty").style.display = "block";
                document.getElementById("birdy").style.display = "none";
                document.getElementById("rody").style.display = "none";
                document.getElementById("othy").style.display = "none";
            }
            function birdFunction() {
                document.getElementById("doggy").style.display = "none";
                document.getElementById("catty").style.display = "none";
                document.getElementById("birdy").style.display = "block";
                document.getElementById("rody").style.display = "none";
                document.getElementById("othy").style.display = "none";
            }
            function rodentFunction() {
                document.getElementById("doggy").style.display = "none";
                document.getElementById("catty").style.display = "none";
                document.getElementById("birdy").style.display = "none";
                document.getElementById("rody").style.display = "block";
                document.getElementById("othy").style.display = "none";
            }
            function otherFunction() {
                document.getElementById("doggy").style.display = "none";
                document.getElementById("catty").style.display = "none";
                document.getElementById("birdy").style.display = "none";
                document.getElementById("rody").style.display = "none";
                document.getElementById("othy").style.display = "block";
            }
        </script>

        <div id="doggy">
            <article id="doggy1">
                <img src="../../../Images/cycle8.png" alt="placeholder">
            </article>
        </div>
        <div id="catty" style="display: none">
            <article id="catty1">
                <img src="../../../Images/cycle3.png" alt="placeholder">
            </article>
        </div>
        <div id="birdy" style="display: none">
            <article id="birdy1">
                <img src="../../../Images/cycle1.png" alt="placeholder">
            </article>
        </div>
        <div id="rody" style="display: none">
            <article id="rody1">
                <img src="../../../Images/cycle2.png" alt="placeholder">
            </article>
        </div>
        <div id="othy" style="display: none">
            <article id="othy1">
                <img src="../../../Images/cycle7.png" alt="placeholder">
            </article>
        </div>
    </div>
</main>

<?php
include('../../Footer/footer.php'); ?>

</body>
</html><?php
