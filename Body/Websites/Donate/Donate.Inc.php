<?php

if (isset($_POST['Donate'])) {

    session_start();

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $amount = $_POST['amount'];
    $creditcard = $_POST['creditcard'];

    if (empty($amount || empty($creditcard))) {
        header("Location: ../Donate.php?error=emptyfields");
        exit();
    }
    else if (!preg_match("/^[0-9]*/",$amount)) {
        header("Location: ../Donate.php?error=numbersonly");
        exit();
    }
    else if ($amount <= 0) {
        header("Location: ../Donate.php?error=negativesandzerobad");
        exit();
    }
    else {
        $sql = 'INSERT INTO donation(d_amount, users_id) VALUES (:amount, :users)';
        $result = oci_parse($conn, $sql);

        oci_bind_by_name($result, ':amount', $amount);
        oci_bind_by_name($result, ':users', $_SESSION['username']);

        oci_execute($result);
        header("Location: ../../../HomePage/HomePage.php");
    }
    oci_close($conn);
    exit();
}
else {
    header("Location: ../../../HomePage/HomePage.php");
    exit();
}
