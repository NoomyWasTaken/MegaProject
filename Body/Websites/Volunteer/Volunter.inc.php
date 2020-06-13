<?php

if (isset($_POST['volunteer'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $workas = $_POST['work-as'];
    $join = $_POST['start'];

    if (empty($workas) || empty($join)) {
        header("Location: ../HomePage/HomePage.php?error=emptyfields");
        exit();
    }
    else {
        $sql = 'INSERT INTO MEMBERS';
        $result = oci_parse($conn, $sql);

        oci_bind_by_name($result, ':username', $username);

        oci_execute($result);
    }
}