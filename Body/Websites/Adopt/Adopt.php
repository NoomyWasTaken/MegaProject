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
            echo "<h3>Name: " . $row['ANAME'] . "</h3>";
            if ($row['IMAGE'] != NULL) {
                echo "<img src='../../../Images/Adopt/".$row['IMAGE']."'>";
            } else {
                echo "<img src='../../../Images/logo-test2.png'>";
            }
            echo "<div id='SidesWrapper'>";
            echo "<div id='LeftSide'>";
            echo "<p><b>Species:</b> " . $row['SPECIES'] . "</p>";
            echo "<br>";
            echo "<p><b>Breed:</b> " . $row3['BREED_NAME'] . "</p>";
            echo "<br>";
            echo "<p><b>Age:</b> " . $row['AGE'] . "</p>";
            echo "</div>";
            echo "<div id='RightSide'>";
            echo "<p><b>Gender:</b> " . $row['GENDER'] . "</p>";
            echo "<br>";
            echo "<p><b>Height:</b> " . $row['HEIGHT'] . "</p>";
            echo "<br>";
            echo "<p><b>Weight:</b> " . $row['WEIGHT'] . "</p>";
            echo "</div>";
            echo "</div>";
            echo "<div id='LinkWrapper'>";
            if (isset($_SESSION['username'])) {
                $n = $row['ANIMAL_ID'];
                $a = $_SESSION['user_id'];
                $d = date_default_timezone_get();
                echo "<form action='AdoptionForm/AdoptionForm.php'><div class=\"whitedogbone\">
                        <section>
                            <button class=\"bone_btn\" id=\"boooone2\">
                                <div class=\"c1\"></div>
                                <div class=\"c2\"></div>
                                <div class=\"c3\"></div>
                                <div class=\"c4\"></div>
                                <div class=\"b1\">
                                    <div class=\"b2\">
                                        <input type='text' style='display: none' name='d' value='".$d."'>
                                        <input type='text' style='display: none' name='n' value='".$n."'>
                                        <input type='text' style='display: none' name='a' value='".$a."'>
                                        <input style=\"float: right; font-size: 14pt\" type=\"submit\" value=\"Adopt Now\" name=\"adopt\"/>
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div></form>";
            }
            else {
                echo "<div class=\"whitedogbone\">
                        <section>
                            <button class=\"bone_btn\" id=\"boooone2\">
                                <div class=\"c1\"></div>
                                <div class=\"c2\"></div>
                                <div class=\"c3\"></div>
                                <div class=\"c4\"></div>
                                <div class=\"b1\">
                                    <div class=\"b2\">
                                        <a href='../SignIn/SignIn.php'><input style=\"float: right; font-size: 14pt\" type=\"submit\" value=\"Sign in\" name=\"sign-in\" onclick=\"geekAlert()\"/></a>
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div>";
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