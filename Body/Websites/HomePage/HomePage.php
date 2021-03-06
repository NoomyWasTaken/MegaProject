<?php
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$query = 'select count(*) as num_of_adopted from animal where is_adopted = 1';
$stid = oci_parse($conn, $query);
$r = oci_execute($stid);
$row = oci_fetch_assoc($stid);

$query2 = 'select sum(d_amount) as donation_amount from donation';
$stid2 = oci_parse($conn, $query2);
$r2 = oci_execute($stid2);
$row2 = oci_fetch_assoc($stid2);
?>

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
                        <br>
                        <p>"It was an immense honor receiving the award, one that we still can not believe we got. We just did what we thought was right, and we loved doing it too, but we never expected to get a reward from renowned veterinarian Dr. Javad Akram, and then have the opportunity to show our cause and hard-work in New York's Time Magazine. We've proven to the world that even our humble country Pakistan cares dearly about the well-being of all animals and to find them a new home." - Co-Founder of PAWS, Neuman Alkhalil</p>
                        <p>PAWS was awarded the Certificate of Animal Appreciation in 2016 for their diligence and care towards the local animal life in Pakistan. In their first year of operation, they were able to successfully save over 1000 animals and find them new lives in Pakistan. They continue to show a head-strong determination for their goal of saving animals, while also presenting their country of Pakistan in a whole new light unto the world.   </p>
                    </div>
                </div>

                <div class="TwoWindow">
                    <div id="AdoptWindow">
                        <h2>Looking to adopt?</h2>
                        <br>
                        <p>Help find the animals we have a new home today!</p>
                        <a href="/../MegaProject/Body/Websites/Adopt/Adopt.php"> <img src="../../../Images/AdoptionBlackNew.png" onmouseover=this.src="../../../Images/adoptionred.png"; onmouseout=this.src="../../../Images/AdoptionBlackNew.png"; /> </a>
                    </div>

                    <div class="Totals">
                        <h2>All adoptions so far: </h2>
                       <span><b><?php echo ($row['NUM_OF_ADOPTED']+1256) ?></b></span>

                    </div>
                    <br><br>
                    <div id="DonateWindow">
                        <h2>Donate today!</h2>
                        <br>
                        <p>Any donation is appreciated!</p>
                        <?php
                        if (isset($_SESSION['username'])) {
                            echo '<a href="/../MegaProject/Body/Websites/Donate/Donate.php"> <img src="../../../Images/donatewhite.jpg" onmouseover=this.src="../../../Images/donatered.jpg"; onmouseout=this.src="../../../Images/donatewhite.jpg"; /> </a>';

                        }
                        else {
                            echo '<a href="/../MegaProject/Body/Websites/SignIn/SignIn.php"> <img src="../../../Images/donatewhite.jpg" onmouseover=this.src="../../../Images/donatered.jpg"; onmouseout=this.src="../../../Images/donatewhite.jpg"; /> </a>';

                        }
                        ?>
                    </div>

                    <div class="Totals">
                        <h2>All donations so far: </h2>
                           <span><b><?php echo ($row2['DONATION_AMOUNT']) ?>$</b></span>


                    </div>
                </div>
            </div>
            <br><br>
            <hr id="hrline">

            <div class="UnderLine">
                <h1>Why Adopt?</h1>
                <br>
                <p>The animals under our care are all well-behaved and lovely animals, waiting for a new owner to adopt them. All of the animals we have were previously homeless, starving and had nowhere to go. Many were also injured from people who found it fitting to harm them, rather then extend a helping hand. With a little bit of courage, you too can help an animal today!</p>
            </div>
            <hr class="hrtxt">
            <div class="UnderLine">
                <h1>Why not buy instead?</h1>
                <br>
                <p>Many animals every year are euthanized. Some shelters simply cannot support all of the animals they have, and have to put them to rest. By adopting, you are not just getting a new friend, you are saving a life. A life that will love you and want to cuddle with you forever. </p>
            </div>
            <hr class="hrtxt">
            <div class="UnderLine">
                <h1>I've never owned a pet, what should I do?</h1>
                <br>
                <p>Don't worry. Plenty of people have yet to ever experience what it means to take care of a pet. It is a responsibility, but an earnest one and a fulfilling one. Our caretakers can show you some of the ropes at your nearest shelter! If you want to find out more about what animal would suit you, click <a href="/../MegaProject/Body/Websites/Animals/Animals.php"> HERE </a> to find out more!</p>
            </div>

            <hr class="hrtxt">

            <div class="UnderLine">
                <h1>I want to help, but can't adopt!</h1>
                <br>
                <p>No problems there either! You might already have a pet, or don't have the circumstances to adopt, but there is a way. Volunteer at one of our shelters and become a part of our family! Click <a href="../Volunteer/Volunteer.php"> HERE </a> to find out how!</p>
            </div>
            <hr id="hrline">

        </main>
    </div>
    <div style="clear: both"></div>
</div>

<?php
include('../../Footer/footer.php'); ?>
</body>
</html>