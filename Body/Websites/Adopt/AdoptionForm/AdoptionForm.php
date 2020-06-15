<?php
if (isset($_POST['adopt'])) {
    session_start();
    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');
    $d = date("yy/m/d");
    $n = $_POST['n'];
    $a = $_POST['a'];

    $sql = "INSERT INTO adoption_form (doa, users_id, animal_id) VALUES ('{$d}','{$n}','{$a}')";
    $stid = oci_parse($conn, $sql);
    oci_execute($stid);
    header("Location: ../../HomePage/HomePage.php?successfullyAdopted");
}
?>