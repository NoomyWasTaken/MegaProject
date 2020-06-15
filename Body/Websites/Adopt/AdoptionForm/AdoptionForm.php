<?php
if (isset($_POST['adopt'])) {

    $d = $_POST['d'];
    $n = $_POST['n'];
    $a = $_POST['a'];

    $sql = 'INSERT INTO adoption_form (doa, users_id, animal_id) values (:doa, :uid, :aid)';
    $stid = oci_parse($conn, $sql);
    oci_bind_by_name($stid, ':doa', $d);
    oci_bind_by_name($stid, ':uid', $n);
    oci_bind_by_name($stid, ':aid', $a);
    oci_execute($stid);
    header("Location: ../../HomePage/HomePage.php?successfullyAdopted");
}
?>