<?php
if (isset($_POST['sign-in'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        header("Location: ../../HomePage/HomePage.php?msg=alreadySignedIn&username=".$_SESSION['username']);
        exit;
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
                echo "<script> geekAlert(); </script>";
                session_start();

                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $row['USERS_ID'];
                $_SESSION['username'] = $row['USER_NAME'];
                $_SESSION['fname'] = $row['FNAME'];
                $_SESSION['lname'] = $row['LNAME'];

                header("Location: ../../HomePage/HomePage.php?success");
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
