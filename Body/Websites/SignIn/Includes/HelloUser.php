<?php
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "$username";
}