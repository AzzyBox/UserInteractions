<?php
include 'PHPconnection.php';

$username = $_POST['username'];
$password1 = $_POST['pwd1'];
$password2 = $_POST('pwd2');
$email = $_POST['email'];
$fName = $_POST['fName'];
$sName = $_POST['sName'];
$role = $_POST['role'];
$DOB = $_POST['DOB'];
$Hashpassword = password_hash ($password, PASSWORD_DEFAULT);

$RegisterUser = "INSERT INTO users (username, role, first_name, second_name, d_o_b, email, password) VALUES ($username, $role, $fName, $sName, $DOB, $email, $Hashpassword);