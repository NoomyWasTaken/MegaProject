<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="HomePage.css">
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link href="https://fonts.googleapis.com/css2?family=Griffy&display=swap" rel="stylesheet">

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

            <div id="NewsWindow">
                <div class="BigWindow">
                    <div>
                        <img src="../../../Images/Certificate.png">
                        <br>
                        <h2>Award winning organization</h2>
                        <br>
                        <p>"It was an immense honor receiving the award, one that we still can not believe we got. We just did what we thought was right, and we loved doing it too, but we never expected to get a reward from renowned veterinarian Dr. Javad Akram, and then have the opportunity to show our cause and hard-work in New York's Time Magazine. We've proven to the world that even our humble country Pakistan cares dearly about the well-being of all animals and to find them a new home." - Co-Founder of PAWS, Neuman Al-Khalil</p>
                    </div>
                </div>

                <div class="TwoWindow">
                    <div id="AdoptWindow">
                        <h2>Looking to adopt?</h2>
                        <br>
                        <p>Help find the animals we have a new home today!</p>
                        <a href="/../MegaProject/Body/Websites/Adopt/Adopt.php"> <img src='../../../Images/AdoptionBlackNew.png' onmouseover="this.src='../../../Images/adoptionred.png';" onmouseout="this.src='../../../Images/AdoptionBlackNew.png';" /> </a>
                    </div>

                    <div class="Totals">
                        <h2>Total number of adoptions so far: </h2>
                    </div>

                    <div id="DonateWindow">
                        <h2>Donate today!</h2>
                        <br>
                        <p>Any donation is appreciated!</p>
                        <a href="//widgets.justgiving.com/Button/Redirect?p=eyJJZCI6IjNkMmNiYTk1LWRiNGEtNDE3Ny1hNmUzLWI4ZjQyOGViOTEyMCIsIkNoYXJpdHlJZCI6MTg0ODYxLCJTaXplIjoicyIsIlJlZmVyZW5jZSI6Im15cGlwaWlzdHNjaHdlciIsIlR5cGUiOiJEb25hdGUifQ=="
                           onclick="window.open('//widgets.justgiving.com/Button/Redirect?p=eyJJZCI6IjNkMmNiYTk1LWRiNGEtNDE3Ny1hNmUzLWI4ZjQyOGViOTEyMCIsIkNoYXJpdHlJZCI6MTg0ODYxLCJTaXplIjoicyIsIlJlZmVyZW5jZSI6Im15cGlwaWlzdHNjaHdlciIsIlR5cGUiOiJEb25hdGUifQ==',
                         'newwindow',
                         'width=500,height=470');
                          return false;"
                        > <img src='../../../Images/donatewhite.jpg' onmouseover="this.src='../../../Images/donatered.jpg';" onmouseout="this.src='../../../Images/donatewhite.jpg';" /> </a>
                    </div>

                    <div class="Totals">
                        <h2>All donations so far: </h2>
                    </div>
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