<?php
    session_start();

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');
    session_destroy();
    $_SESSION = array();

header('Location: /../MegaProject/Body/Websites/HomePage/HomePage.php');
