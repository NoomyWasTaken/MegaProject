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
            echo "<h2><b>" . $row['ANAME'] . "</b></h2>";
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
                $a = $row['ANIMAL_ID'];
                $n = $_SESSION['user_id'];
                echo "<form method='POST' action='AdoptionForm/AdoptionForm.php'><div class=\"whitedogbone\">
                        <section>
                            <button class=\"bone_btn\" id=\"boooone2\">
                                <div class=\"c1\"></div>
                                <div class=\"c2\"></div>
                                <div class=\"c3\"></div>
                                <div class=\"c4\"></div>
                                <div class=\"b1\">
                                    <div class=\"b2\">
                                        <select style='display: none' name='n'><option value='".$n."'></option></select>
                                        <select style='display: none' name='a'><option value='".$a."'></option></select>
                                        <p>".$a."</p>
                                        <input style=\" font-size: 14pt\" type=\"submit\" value=\"Adopt Now\" name=\"adopt\" onclick=\"geekAlert()\"/>
                                    </div>
                                </div>
                            </button>
                        </section>
                    </div></form>";
            }
            else {
                echo "
                        <div class=\"whitedogbone\">
                        <section>
                            <button class=\"bone_btn\" id=\"boooone2\">
                                <div class=\"c1\"></div>
                                <div class=\"c2\"></div>
                                <div class=\"c3\"></div>
                                <div class=\"c4\"></div>
                                <div class=\"b1\">
                                    <div class=\"b2\">
                                            <a href='/../MegaProject/Body/Websites/SignIn/SignIn.php'><input style=\" font-size: 14pt\" type=\"submit\" value=\"Sign in\" name=\"sign-in\"/></a>
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

    <script>
        function geekAlert() {
            alert("You're Adoption request is being reviewed by our members. We will contact you as soon as possible");
            <?php
                $d = "18/06/2020";
            $sql = 'INSERT INTO adoption_form (doa, users_id, animal_id) values (:doa, :uid, :aid)';
            $sql2 = 'UPDATE animal SET is_adopted = 1 WHERE animal_id = :aid2';
            $stid = oci_parse($conn, $sql);
            $stid2 = oci_parse($conn, $sql2);
            oci_bind_by_name($stid, ':doa', $d);
            oci_bind_by_name($stid, ':uid', $n);
            oci_bind_by_name($stid, ':aid', $a);
            oci_bind_by_name($stid2, ':aid2', $a);
            oci_execute($stid);
            oci_execute($stid2);
            header("Location: ../../HomePage/HomePage.php?successfullyAdopted");
            ?>
        }
    </script>

</main>

<?php include('../../Footer/footer.php'); ?>

</body>
</html>