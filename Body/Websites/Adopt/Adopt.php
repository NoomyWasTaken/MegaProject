<?php
session_start();
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$query = 'select * from animal where is_adopted = 0';
$stid = oci_parse($conn, $query);
oci_execute($stid);
$i = oci_num_rows($stid);
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
        <?php for($x=0, $x<=$i, $x++) {
            $row = oci_fetch_assoc($stid);
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
            echo "<img src='../../../Images/cycle10.png'>";
            echo "<h3>Name:" . $row['ANAME'] . "</h3>";
            echo "<div id='SidesWrapper'>";
            echo "<div id='LeftSide'>";
            echo "<p>Species: " . $row['SPECIES'] . "</p>";
            echo "<br>";
            echo "<p>Breed: " . $row3['BREED_NAME'] . "</p>";
            echo "<br>";
            echo "<p>Age: " . $row['AGE'] . "</p>";
            echo "</div>";
            echo "<div id='RightSide'>";
            echo "<p>Gender: " . $row['GENDER'] . "</p>";
            echo "<br>";
            echo "<p>Height: " . $row['HEIGHT'] . "</p>";
            echo "<br>";
            echo "<p>Weight: " . $row['WEIGHT'] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<a href='#'>Adopt now!</a>";
            echo "</div>";
        }
        ?>

<!--        --><?php //while(($row=oci_fetch_assoc($stid)) != false) ?>
<!--        <div id="SmallDivContainer">-->
<!--            <img src="../../../Images/cycle10.png">-->
<!--            <h3>Name:-->
<!--                --><?php //echo $row['ANAME']; ?>
<!--            </h3>-->
<!--            <div id="SidesWrapper">-->
<!--                <div id="LeftSide">-->
<!--                    <p>Species:-->
<!--                        --><?php //echo $row['SPECIES']; ?>
<!--                    </p>-->
<!--                    <br>-->
<!--                    <p>Breed:-->
<!--                        --><?php //echo $row2['BREED_NAME']; ?>
<!--                    </p>-->
<!--                    <br>-->
<!--                    <p>Age:-->
<!--                        --><?php //echo $row['AGE']; ?>
<!--                    </p>-->
<!--                </div>-->
<!--                <div id="RightSide">-->
<!--                    <p>Gender:-->
<!--                        --><?php //echo $row['GENDER']; ?>
<!--                    </p>-->
<!--                    <br>-->
<!--                    <p>Height:-->
<!--                        --><?php //echo $row['HEIGHT']; ?>
<!--                    </p>-->
<!--                    <br>-->
<!--                    <p>Weight:-->
<!--                        --><?php //echo $row['WEIGHT']; ?>
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <a href="#">Adopt now!</a>-->
<!--        </div>-->
    </div>
</main>

<?php include('../../Footer/footer.php'); ?>

</body>
</html>