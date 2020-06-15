<?php
if (isset($_POST['adopt'])) {
    session_start();
    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');
    $d = "18/06/2020";
    $n = $_POST['n'];
    $a = $_POST['a'];

    $sql = 'INSERT INTO adoption_form (doa, users_id, animal_id) VALUES (:doa, :uid, :aid)';
//    $sql2 = 'UPDATE animal SET is_adopted = 1 WHERE animal_id = :aid2';
    $stid = oci_parse($conn, $sql);
//    $stid2 = oci_parse($conn, $sql2);
    oci_bind_by_name($stid, ':doa', $d);
    oci_bind_by_name($stid, ':uid', $n);
    oci_bind_by_name($stid, ':aid', $a);
//    oci_bind_by_name($stid2, ':aid2', $a);
    oci_execute($stid);
//    oci_execute($stid2);
//    header("Location: ../../HomePage/HomePage.php?successfullyAdopted");
    echo oci_error($stid);
    echo oci_fetch_assoc($stid);
}
?>