<?php
session_start();
$conn = oci_connect('ADMIN', 'Mimiplays23610', 'megaproject_high');

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "$username";
}