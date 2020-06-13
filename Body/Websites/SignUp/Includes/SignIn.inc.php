<?php
if (isset($_POST['sign-in'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $username = $_POST['Username'];
    $password = $_POST['Password'];

    if (empty($username) || empty($password)) {
        header("Location: ../SignIn.php?=emptyfields");
    }
    else {
        $sql = "SELECT user_name FROM users where user_name= '".$username."'";
        $result = oci_parse($conn, $sql);
        oci_execute($result);
    }
}
