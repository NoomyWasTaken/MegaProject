<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="HomePage.css">
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
</head>
<body>
<?php
$pageTitle = 'Home Page';
include('../../Header/header.php'); ?>
<div id="page-container">
    <div id="wrapper">
        <main>
            <div class="imgcycle1" style="background-color: #EFE4B0">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle1.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle2.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle3.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle4.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle5.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle6.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle7.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle8.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle9.png" alt="image">
                <img class="elementToFadeInAndOut" src="../../../Images/cycle10.png" alt="image">
            </div>
            <script type="text/javascript">
                var slideIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("elementToFadeInAndOut");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    slideIndex++;
                    if (slideIndex > x.length) {slideIndex = 1}
                    x[slideIndex-1].style.display = "block";
                    setTimeout(carousel, 5000);
                }
            </script>

            <div id="dog">
            <img  src="../../../Images/DogWithQuote.png" alt="Quote">
             </div>

            <div id="AdoptionDonationWrapper">
                <div class="AdoptionDonation">
                    <a><img src="../../../Images/donatered.png"></a>
                </div>

                <div class="Donation">
                    <a href="#"> <img src='../../../Images/donatewhite.jpg' onmouseover="this.src='../../../Images/donatered.jpg';" onmouseout="this.src='../../../Images/donatewhite.jpg';" /> </a>
                </div>
            </div>
        </main>
    </div>
    <div style="clear: both"></div>
</div>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>