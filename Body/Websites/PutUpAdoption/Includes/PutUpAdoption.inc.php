<?php
if (isset($_POST['put-up-submit'])) {

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true){
        header("Location: ../../SignIn/SignIn.php");
        exit;
    }
    else {
        $file = $_FILES['file'];
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf', 'webm');

        $name = $_POST['name'];
        $species = $_POST['species'];
        $breed = $_POST['breed'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $shelter = $_POST['shelter'];

        if (empty($name) || empty($species) || empty($breed) || empty($height) || empty($weight) || empty($gender) || empty($age) || empty($shelter) || empty($file)) {
            header("Location: ../PutUpAdoption.php?error=emptyfields&name=".$name."&species=".$species."&breed=".$breed."&height=".$height."&weight=".$weight."&gender=".$gender."&age=".$age."&shelter=".$shelter."&shelter=".$file);
            exit();
        }
        else if (!in_array($fileActualExt, $allowed)) {
            header("Location: ../PutUpAdoption.php?error=badImgType");
            exit();
        }
        else if ($fileError != 0) {
            header("Location: ../PutUpAdoption.php?error=imgUploadFailed");
            exit();
        }
        else {
            $fileNewName = uniqid('', true).".".$fileActualExt;
            $fileDestination = '../../../../Images/Adopt/'.$fileNewName;
            move_uploaded_file($fileTmpName, $fileDestination);

            $sql = 'INSERT INTO animal (aname, age, height, weight, species, shelter_id, is_adopted, gender, image) VALUES (:aname, :age, :height, :weight, :species, :shelter_id, :is_adopted, :gender, :image)';
            $insert = oci_parse($conn, $sql);

            oci_bind_by_name($insert, ':aname', $aname);
            oci_bind_by_name($insert, ':age', $age);
            oci_bind_by_name($insert, ':height', $height);
            oci_bind_by_name($insert, ':weight', $weight);
            oci_bind_by_name($insert, ':species', $species);
            oci_bind_by_name($insert, ':shelter_id', $shelter_id);
            oci_bind_by_name($insert, ':is_adopted', $is_adopted);
            oci_bind_by_name($insert, ':gender', $gender);
            oci_bind_by_name($insert, ':image', $fileNewName);

            oci_execute($insert);
            header("Location: ../../HomePage/HomePage.php?success");
        }
    }
}