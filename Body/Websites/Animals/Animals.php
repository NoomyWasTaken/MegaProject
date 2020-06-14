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
            <div class="mySlides1">
                <h1>Golden Retriever</h1>
                <img src="../../../Images/Animals/Golden-Retrievers.jpg" style="width:100%">
                <ul>
                    <li>Likes: Playing, Fetch, Snuggling</li>
                    <li>Dislikes: Tight leashes, Boredom</li>
                    <li>Best for: Outgoing and active people</li>
                </ul>
            </div>
            <div class="mySlides1">
                <h1>Border Collie</h1>
                <img src="../../../Images/Animals/Border-Collie.jpg" style="width:100%">
                <ul>
                    <li>Likes: Having "work", Order, Herding</li>
                    <li>Dislikes: Boredom, Not socializing</li>
                    <li>Best for: Owners who like and can maintain well trained dogs</li>
                </ul>
            </div>
            <div class="mySlides1">
                <h1>Bichon Frise</h1>
                <img src="../../../Images/Animals/Bichon.jpg" style="width:100%">
                <ul>
                    <li>Likes: Playing, Other dogs, Kids</li>
                    <li>Dislikes: Being alone, New places</li>
                    <li>Best for: Apartment owners or families with kids</li>
                </ul>
            </div>
            <div class="mySlides1">
                <h1>American Staffordshire Terrier</h1>
                <img src="../../../Images/Animals/American-Staffordshire-Terrier.png" style="width:100%">
                <ul>
                    <li>Likes: Chewing, Protecting, Other people</li>
                    <li>Dislikes: Staying still, Tight leashes</li>
                    <li>Best for: Owners with a large backyard or home</li>
                </ul>
            </div>
            <div class="mySlides1">
                <h1>Husky</h1>
                <img src="../../../Images/Animals/husky.jpg" style="width:100%">
                <ul>
                    <li>Likes: Wandering, Cuddling, Howling</li>
                    <li>Dislikes: Heat, Small spaces</li>
                    <li>Best for: Experienced owners that often walks</li>
                </ul>
            </div>
            <div class="mySlides1">
                <h1>Pug</h1>
                <img src="../../../Images/Animals/pug.jpg" style="width:100%">
                <ul>
                    <li>Likes: Sleeping, Playing, Eating</li>
                    <li>Dislikes: Heat, Loneliness</li>
                    <li>Best for: Caring Apartment owners</li>
                </ul>
            </div>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 0)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 0)">&#10095;</button>
        </div>

        <div id="pus" class="w3-content w3-display-container" style="display: none">
            <div class="mySlides2">
                <h1>Exotic Shorthair</h1>
                <img src="../../../Images/Animals/Exotic-Shorthair.jpg" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Sphinx</h1>
                <img src="../../../Images/Animals/sphinx.jpg" style="width:100%">
                <ul>
                    <li>Likes: Tall places, Jumping, Following</li>
                    <li>Dislikes: Small spaces, Yelling</li>
                    <li>Best for: Owners with vertical homes</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Tonkinese</h1>
                <img src="../../../Images/Animals/tonkinese.jpg" style="width:100%">
                <ul>
                    <li>Likes: Playing, Fetch, Snuggling</li>
                    <li>Dislikes: Tight leashes, Boredom</li>
                    <li>Best for: Outgoing and active people</li>
                </ul>
            </div>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="birb" class="w3-content w3-display-container" style="display: none">
            <div class="mySlides3">
                <h1>Budgerigar</h1>
                <img src="../../../Images/Animals/budgie.jpg" style="width:100%">
                <ul>
                    <li>Likes: Playing, Eating, Singing</li>
                    <li>Dislikes: Isolation, Mishandling</li>
                    <li>Best for: Introverts/li>
                </ul>
            </div>
            <div class="mySlides3">
                <h1>Lovebirds</h1>
                <img src="../../../Images/Animals/lovebirds.jpg" style="width:100%">
                <ul>
                    <li>Likes: Wandering, Other birds, Socializing</li>
                    <li>Dislikes: Small cages, Loneliness</li>
                    <li>Best for: Socialites</li>
                </ul>
            </div>
            <div class="mySlides3">
                <h1>Macaow</h1>
                <img src="../../../Images/Animals/Macaow.jpg" style="width:100%">
                <ul>
                    <li>Likes: Open areas, Toys, Foraging games</li>
                    <li>Dislikes: Small spaces, silence</li>
                    <li>Best for: Musicians and owners with large houses</li>
                </ul>
            </div>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="road" class="w3-content w3-display-container" style="display: none">

            <div class="mySlides2">
                <h1>Suger Glider</h1>
                <img class="mySlides4" src="../../../Images/Animals/sugerglider.jpg" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Guinea Pig</h1>
                <img class="mySlides4" src="../../../Images/Animals/guineapig.jpg" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Guinea Pig</h1>
                <img class="mySlides4" src="../../../Images/Animals/hamster.jpg" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1, 1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1, 1)">&#10095;</button>
        </div>

        <div id="melman" class="w3-content w3-display-container" style="display: none">

            <div class="mySlides2">
                <h1>Guinea Pig</h1>
                <img class="mySlides5" src="../../../Images/Animals/giraffes.gif" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Guinea Pig</h1>
                <img class="mySlides5" src="../../../Images/Animals/alpaca.jpg" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
            <div class="mySlides2">
                <h1>Guinea Pig</h1>
                <img class="mySlides5" src="../../../Images/Animals/clownfish.png" style="width:100%">
                <ul>
                    <li>Likes: Cuddling, Socializing, Grooming </li>
                    <li>Dislikes: Loneliness, Tense situations </li>
                    <li>Best for: Cuddly Owners</li>
                </ul>
            </div>
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
