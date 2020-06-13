<?php

if (isset($_POST['volunteer'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $workas = $_POST['work-as'];
    $join = $_POST['start'];
    $shelter = $_POST['shelter'];

    if (empty($workas) || empty($join) || empty($shelter)) {
        header("Location: ../Volunteer/Volunteer.php?error=emptyfields");
        exit();
    }
    else {
        $sql = 'INSERT INTO members(join_date, labor_div, shelter_id, users_id) VALUES (:joindate, :labor, :shelter, :users)';
        $result = oci_parse($conn, $sql);

        oci_bind_by_name($result, ':joindate', $join);
        oci_bind_by_name($result, ':labor', $workas);
        oci_bind_by_name($result, ':shelter', $shelter);
        oci_bind_by_name($result, ':users', $_SESSION['username']);

        oci_execute($result);
        header("Location: ../HomePage/HomePage.php?success=volunteered");
    }
    oci_close($conn);
    exit();
}
else {
    header("Location: ../SignUp.php");
    exit();
}