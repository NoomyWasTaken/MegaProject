<?php
session_start();
$conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

$donation = oci_parse($conn, "insert into donation(d_amount) value ($_POST[amount])");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donate</title>
    <link rel="stylesheet" type="text/css" href="../../Header/header.css">
    <link rel="stylesheet" type="text/css" href="../../BodyLayout/BodyLayout.css">
    <link rel="stylesheet" type="text/css" href="../../Footer/footer.css">
    <link rel="stylesheet" type="text/css" href="Donate.css">


<body>
<?php
$pageTitle = 'Donation';
include('../../Header/header.php'); ?>
<main>
    <div class="SignIn">
        <section id="content">
            <form method="POST" action="Donate.Inc.php">
                <h1>Donate</h1>

                <p>
                    <label class="floatLabel" id="yes" for="Option">Method</label>
                    <select name="creditcare" id="species" onchange="method(this);">
                        <option id="none" value="">             </option>
                        <option id="mc" value="mastercard">  Mastercard  </option>
                        <option id="v" value="visa">  Visa  </option>
                        <option id="ae" value="americanexpress">  American Express  </option>
                    </select>
                </p>

                <div class="Input">
                    <p>
                        <label class="floatLabel" for="amount">Amount</label>
                        <input  type="text" id="amount" name="amount" />
                    </p>
                </div>

                <div class="whitedogbone">
                    <section>
                        <button class="bone_btn" id="boooone3">
                            <div class="c1"></div>
                            <div class="c2"></div>
                            <div class="c3"></div>
                            <div class="c4"></div>
                            <div class="b1">
                                <div class="b2">
                                    <input style="font-size: 14pt" type="submit" value="Donate" name="Donate" onclick="geekAlert()"/>
                                </div>
                            </div>
                        </button>
                    </section>
                </div>

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

            <script>
                function geekAlert() {
                    alert("Thank you for your donation");
                }
            </script>

        </section>
    </div>

</main>
<?php
include('../../Footer/footer.php'); ?>
</body>
</html>