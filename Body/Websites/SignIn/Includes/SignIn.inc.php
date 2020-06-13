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
        $sql = 'SELECT * FROM users where user_name = :username';
        $result = oci_parse($conn, $sql);
        oci_bind_by_name($result, ':username', $username);
        oci_execute($result);
        if ($row = oci_fetch_assoc($result)) {
            if ($password != $row['PASSWORD']) {
                header("Location: ../SignIn.php?error=wrongPassword");
                exit();
            }
            else if ($password == $row['PASSWORD']) {
                session_start();
                $_SESSION['username'] = $row['USERNAME'];
                $_SESSION['fname'] = $row['FNAME'];
                $_SESSION['lname'] = $row['LNAME'];

                header("Location: HelloUser.php");
//                header("Location: ../../HomePage/HomePage.php?success");
                exit();
            }
            else {
                header("Location: ../SignIn.php?error=wrongPassword");
                exit();
            }
        }
        else {
            header("Location: ../SignIn.php?error=noUser");
            exit();
        }
    }


}
