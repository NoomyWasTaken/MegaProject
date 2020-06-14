<?php
session_start();
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$query = 'select * from animal where is_adopted = 0';
$query2 = 'select * from breed';
$stid = oci_parse($conn, $query);
$stid2 = oci_parse($conn, $query2);
oci_execute($stid);
oci_execute($stid2);
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
        <?php while(($row=oci_fetch_assoc($stid)) != false) ?>
        <div id="SmallDivContainer">
            <img src="../../../Images/cycle10.png">
            <h3>Name:
                <?php echo "$row['ANAME']"; ?>
            </h3>
            <div id="SidesWrapper">
                <div id="LeftSide">
                    <p>Species:
                        <?php echo $row['SPECIES']; ?>
                    </p>
                    <br>
                    <p>Breed:
                        <?php echo $row2['BREED_NAME']; ?>
                    </p>
                    <br>
                    <p>Age:
                        <?php echo $row['AGE']; ?>
                    </p>
                </div>
                <div id="RightSide">
                    <p>Gender:
                        <?php echo $row['GENDER']; ?>
                    </p>
                    <br>
                    <p>Height:
                        <?php echo $row['HEIGHT']; ?>
                    </p>
                    <br>
                    <p>Weight:
                        <?php echo $row['WEIGHT']; ?>
                    </p>
                </div>
            </div>
            <a href="#">Adopt now!</a>
        </div>
    </div>
</main>

<?php include('../../Footer/footer.php'); ?>

</body>
</html>