<?php
include 'PHPconnection.php';

$username = mysqli_real_escape_string($conn,$_POST['username']);
$username = stripslashes($username);
$password1 = mysqli_real_escape_string($conn,$_POST['pwd1']);
$password1 = stripslashes($password1);
$password2 = mysqli_real_escape_string($conn,$_POST['pwd2']);
$password2 = stripslashes($password2);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$email = stripslashes($email);
$fName = mysqli_real_escape_string($conn,$_POST['fName']);
$fName = stripslashes($fName);
$sName = mysqli_real_escape_string($conn,$_POST['sName']);
$sName = stripslashes($sName);
$role = mysqli_real_escape_string($conn,$_POST['role']);
$role = stripslashes($role);
$Hashpassword = password_hash ($password1, PASSWORD_DEFAULT);


$RegisterUser = "INSERT INTO users (username, role, first_name, second_name, d_o_b, email, password) VALUES ('$username', '$role', '$fName', '$sName', '', '$email', '$Hashpassword')";
if ($password1==$password2) {
    if ($conn->query($RegisterUser) === true) {
        echo "Succesful";
        header("refresh:4; url=../Admin.php");
        exit();
    } else {
        echo "Failure";
        header("refresh:1; url=../Admin.php");
        exit();
    }
}
else {
    echo "Passwords do not match.";
     header("refresh:4; url=Register.php");
        exit();

}