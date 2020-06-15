<?php
session_start();
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$query = 'select * from animal where is_adopted = 0';
$stid = oci_parse($conn, $query);
oci_execute($stid);
?>
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
        <?php while($row = oci_fetch_assoc($stid)) {
            $query2 = 'select * from animal_breed where animal_id = :aid';
            $stid2 = oci_parse($conn, $query2);
            $aid = $row['ANIMAL_ID'];
            oci_bind_by_name($stid2, ':aid', $aid);
            oci_execute($stid2);
            $row2 = oci_fetch_assoc($stid2);
            $bid = $row2['BREED_ID'];
            $query3 = 'select * from breed where breed_id = :bid';
            $stid3 = oci_parse($conn, $query3);
            oci_bind_by_name($stid3, ':bid', $bid);
            oci_execute($stid3);
            $row3 = oci_fetch_assoc($stid3);

            echo "<div id='SmallDivContainer'>";
            echo "<h3><b>Name: </b></h3><h3 class='grif'>" . $row['ANAME'] . "</h3>";
            if ($row['IMAGE'] != NULL) {
                echo "<img src='../../../Images/Adopt/".$row['IMAGE']."'>";
            } else {
                echo "<img src='../../../Images/logo-test2.png'>";
            }
            echo "<div id='SidesWrapper'>";
            echo "<div id='LeftSide'>";
            echo "<p><b>Species:</b></p><p> " . $row['SPECIES'] . "</p>";
            echo "<br>";
            echo "<p><b>Breed:</b> </p> <p>" . $row3['BREED_NAME'] . "</p>";
            echo "<br>";
            echo "<p><b>Age:</b> </p> <p>  " . $row['AGE'] . "</p>";
            echo "</div>";
            echo "<div id='RightSide'>";
            echo "<p><b>Gender:</b> </p> <p>" . $row['GENDER'] . "</p>";
            echo "<br>";
            echo "<p><b>Height:</b> </p> <p> " . $row['HEIGHT'] . "</p>";
            echo "<br>";
            echo "<p><b>Weight:</b> </p> <p> " . $row['WEIGHT'] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div id='LinkWrapper'>";
            if (isset($_SESSION['username'])) {
                echo "<a href='../Adopt/AdoptionForm/AdoptionForm.php'>Adopt now!</a>";
            }
            else {
                echo "<a href='../SignIn/SignIn.php'>Adopt now!</a>";
            }
            echo "</div>";
            echo "</div>";
        }
        ?>


    </div>
</main>

<?php include('../../Footer/footer.php'); ?>

</body>
</html>