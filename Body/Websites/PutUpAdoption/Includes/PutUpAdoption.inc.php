<?php
if (isset($_POST['put-up-submit'])) {
    session_start();
    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');

    if (!$conn) {
        $e = oci_error();
        trigger_error(htmlentities($e['message']), E_USER_ERROR);
    }

    if(!isset($_SESSION['username'])){
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

        if (empty($name) || empty($species) || empty($breed) || empty($height) || empty($weight) || empty($gender) || empty($age) || empty($shelter)) {
            header("Location: ../PutUpAdoption.php?error=emptyfields&name=".$name."&species=".$species."&breed=".$breed."&height=".$height."&weight=".$weight."&gender=".$gender."&age=".$age."&shelter=".$shelter."&shelter=".$file);
            exit();
        }
        else {
            $fileNewName = uniqid('', true).".".$fileActualExt;
            $fileDestination = '../../../../Images/Adopt/'.$fileNewName;
            move_uploaded_file($fileTmpName, $fileDestination);

            $sql = 'INSERT INTO animal (aname, age, height, weight, species, shelter_id, is_adopted, gender, image) VALUES (:aname, :age, :height, :weight, :species, :shelter_id, 0, :gender, :image)';
            $insert = oci_parse($conn, $sql);

            oci_bind_by_name($insert, ':aname', $name);
            oci_bind_by_name($insert, ':age', $age);
            oci_bind_by_name($insert, ':height', $height);
            oci_bind_by_name($insert, ':weight', $weight);
            oci_bind_by_name($insert, ':species', $species);
            oci_bind_by_name($insert, ':shelter_id', $shelter);
            oci_bind_by_name($insert, ':gender', $gender);
            oci_bind_by_name($insert, ':image', $fileNewName);

            oci_execute($insert);
            oci_commit($conn);

            $sql2 = 'SELECT * FROM breed WHERE breed_name = :breedname';
            $r = oci_parse($conn, $sql2);
            oci_bind_by_name($r, ':breedname', $breed);
            oci_execute($r);
            oci_commit($conn);
            if (oci_num_rows($r)===0) {
                $sql10 = 'INSERT INTO breed (breed_name) VALUES (:breedname)';
                $r10 = oci_parse($conn, $sql10);
                oci_bind_by_name($r10, ':breedname', $breed);
                oci_execute($r10);
                oci_commit($conn);
            }
            $sql3 = 'SELECT animal_id FROM animal WHERE image = :image';
            $sql4 = 'SELECT breed_id FROM breed WHERE breed_name = :breedname';
            $r2 = oci_parse($conn, $sql3);
            $r3 = oci_parse($conn, $sql4);
            oci_bind_by_name($r2, ':image', $fileNewName);
            oci_bind_by_name($r3, ':breedname', $breed);
            oci_execute($r2);
            oci_commit($conn);
            oci_execute($r3);
            oci_commit($conn);
            $row = oci_fetch_assoc($r2);
            $row2 = oci_fetch_assoc($r3);
            $aid = $row['ANIMAL_ID'];
            $bid = $row2['BREED_ID'];
            $sql5 = 'INSERT INTO animal_breed (animal_id, breed_id) VALUES (:aid, :bid)';
            $insert2 = oci_parse($conn, $sql5);
            oci_bind_by_name($insert2, ':aid', $aid);
            oci_bind_by_name($insert2, ':bid', $bid);
            oci_execute($insert2);
            oci_commit($conn);

            header("Location: ../../HomePage/HomePage.php?success");
        }
    }
}