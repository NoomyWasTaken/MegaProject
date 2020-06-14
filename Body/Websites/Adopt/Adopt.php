<?php?>
<!DOCTYPE html>
<html>
<head>
    <title>Adopt</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="Adopt.css">


<body>

<?php
$pageTitle = 'Adopt';
include('../../Header/header.php'); ?>

<main>
    <div id="BigWrapper">
        <?php while(($row=oci_fetch_assoc($stid)) != false) {
            echo '<div id="SmallDivContainer">';
                echo '<img src="../../../Images/cycle10.png">';
                echo "<h3>Name: $row['ANAME']</h3>";
                echo '<div id="SidesWrapper">';
                    echo '<div id="LeftSide">';
                        echo "<p>Species: $row['SPECIES']</p>";
                        echo '<br>';
                        echo "<p>Breed: $row2['BREED_NAME']</p>";
                        echo "<br>";
                        echo "<p>Age: $row['AGE']</p>";
                    echo '</div>';
                    echo '<div id="RightSide">';
                        echo "<p>Gender: $row['GENDER']</p>";
                        echo '<br>';
                        echo "<p>Height: $row['HEIGHT']</p>";
                        echo '<br>';
                        echo "<p>Weight: $row['WEIGHT']</p>";
                    echo '</div>';
                echo '</div>';
                echo '<a href="#">Adopt now!</a>';
                echo '</div>';
            ?>
    </div>
</main>

<?php include('../../Footer/footer.php'); ?>

</body>
</html>