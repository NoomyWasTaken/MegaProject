<?php
if (isset($_SESSION['username'])) {
    session_start();

    $conn = oci_connect('admin', 'Mimiplays23610', 'megaproject_high');
    $_SESSION = [];
    session_destroy();

    header('Location: ../../HomePage/HomePage.php');
}
