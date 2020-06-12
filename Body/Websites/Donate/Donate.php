<?php
session_start();
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$donation = oci_parse($conn, "insert into donation(d_amount) value ($_POST[amount])");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign-In</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="Donate.css">


<body>
<?php
$pageTitle = 'Sign In';
include('../../Header/header.php'); ?>
<main>
    <div class="Donate">
        <section id="content">
            <form method="POST" action="Donate.php">
                <h1>Donate</h1>
                <h2>All donations are appreciated :)!</h2>
                <div class="Input">
                    <label class="Input2" for="Option">Method:</label>
                    <select onchange="method(this);">
                        <option id="none" value="">             </option>
                        <option id="mc" value="mastercard">  Mastercard  </option>
                        <option id="v" value="visa">  Visa  </option>
                        <option id="ae" value="americanexpress">  American Express  </option>
                    </select>
                </div>
                <p id="Amount">
                    <label class="floatLabel" for="amount">Amount: </label>
                    <input  type="text" id="amount" name="amount" />
                </p>
            </form>

            <script>
            function method(that) {
                if (that.value == "mastercard") {
                    alert("check");
                    document.getElementById("ifSelectedMC").style.display = "block";
                    document.getElementById("ifSelectedV").style.display = "none";
                    document.getElementById("ifSelectedAE").style.display = "none";
                } else if (that.value == "visa") {
                    alert("check");
                    document.getElementById("ifSelectedMC").style.display = "none";
                    document.getElementById("ifSelectedV").style.display = "block";
                    document.getElementById("ifSelectedAE").style.display = "none";
                } else if (that.value == "americanexpress") {
                    alert("check");
                    document.getElementById("ifSelectedMC").style.display = "none";
                    document.getElementById("ifSelectedV").style.display = "none";
                    document.getElementById("ifSelectedAE").style.display = "block";
                } else {
                    document.getElementById("ifSelectedMC").style.display = "none";
                    document.getElementById("ifSelectedV").style.display = "none";
                    document.getElementById("ifSelectedAE").style.display = "none";
                }
            }
            </script>

        </section>
    </div>
</main>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>