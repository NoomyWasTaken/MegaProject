<?php
if (isset($_POST['signup-submit'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    $username = $_POST['username'];
    $email = $_POST['e-mail'];
    $password = $_POST['password'];
    $conf_password = $_POST['conf_password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];

    if (empty($username) || empty($email) || empty($password) || empty($conf_password) || empty($fname) || empty($lname) || empty($gender) || empty($dob) || empty($phone) || empty($country) || empty($city) || empty($address) || empty($zip)) {
        header("Location: ../SignUp.php?error=emptyfields&username=".$username."&e-mail=".$email."&fname=".$fname."&lname=".$lname."&phone=".$phone."&dob=".$dob."&country=".$country."&city=".$city."&address=".$address."&zip=".$zip);
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../SignUp.php?error=invalidEmail&username=".$username."&fname=".$fname."&lname=".$lname."&phone=".$phone."&dob=".$dob."&country=".$country."&city=".$city."&address=".$address."&zip=".$zip);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location: ../SignUp.php?error=invalidUsername&e-mail=".$email."&fname=".$fname."&lname=".$lname."&phone=".$phone."&dob=".$dob."&country=".$country."&city=".$city."&address=".$address."&zip=".$zip);
        exit();
    }
    else if ($password != $conf_password) {
        header("Location: ../SignUp.php?error=confirmPassword&username=".$username."&e-mail=".$email."&fname=".$fname."&lname=".$lname."&phone=".$phone."&dob=".$dob."&country=".$country."&city=".$city."&address=".$address."&zip=".$zip);
        exit();
    }
    else {
        $sql = 'SELECT user_name FROM users WHERE user_name = :username';
        $result = oci_parse($conn, $sql);

        oci_bind_by_name($result, ':username', $username);

        oci_execute($result);
        if (oci_num_rows($result) > 0) {
            header("Location: ../SignUp.php?error=usernameTaken&e-mail=".$email."&fname=".$fname."&lname=".$lname."&phone=".$phone."&dob=".$dob."&country=".$country."&city=".$city."&address=".$address."&zip=".$zip);
            exit();
        }
        else {
            $sql1 = 'INSERT INTO users (fname, lname, dob, gender, phone, address, email, user_name, password, country, city, zip) VALUES (:fname, :lname, :dob, :gender, :phone, :address, :email, :uname, :password, :country, :city, :zip)';
            $insert = oci_parse($conn, $sql1);
//            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            oci_bind_by_name($insert, ':uname', $username);
            oci_bind_by_name($insert, ':fname', $fname);
            oci_bind_by_name($insert, ':lname', $lname);
            oci_bind_by_name($insert, ':dob', $dob);
            oci_bind_by_name($insert, ':gender', $gender);
            oci_bind_by_name($insert, ':phone', $phone);
            oci_bind_by_name($insert, ':address', $address);
            oci_bind_by_name($insert, ':email', $email);
            oci_bind_by_name($insert, ':password', $password);
            oci_bind_by_name($insert, ':country', $country);
            oci_bind_by_name($insert, ':city', $city);
            oci_bind_by_name($insert, ':zip', $zip);

            oci_execute($insert);
            header("Location: ../../SignIn/SignIn.php");
        }
    }
    oci_close($conn);
    exit();
}
else {
    header("Location: ../SignUp.php");
    exit();
}