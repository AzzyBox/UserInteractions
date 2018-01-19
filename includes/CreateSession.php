<?php
    include "PHPconnection.php";

    $db = mysqli_select_db("users",$conn);
    session_start();
    $check = $_SESSION['loginUser'];

