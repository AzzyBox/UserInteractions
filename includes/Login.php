<?php
    include "PHPconnection.php";
    session_start();
    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if (isset($_POST['UserName'])&& isset($_POST['Password'])) {

            $Username = mysqli_real_escape_string($conn, $_POST['UserName']);
            $Username = stripslashes($Username);
            $Pass = mysqli_real_escape_string($conn, $_POST['Password']);
            $Pass = stripslashes($Pass);

            $query = "SELECT * FROM users WHERE username = '$Username'";
            $outcome = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($outcome, MYSQLI_ASSOC);
            $count = mysqli_num_rows($outcome);
            if ($count == 1) {
                if (password_verify($Pass, $row['password'])) {
                    if ($row['role'] == 'User') {

                        $username = $row['username'];
                        $_SESSION['Username'] = $username;

                        $role = $row['role'];
                        $_SESSION['Role'] = $role;

                        $first_name = $row['first_name'];
                        $_SESSION['FirstName'] = $first_name;

                        $second_name = $row['second_name'];
                        $_SESSION['SecondName'] = $second_name;

                        $d_o_b = $row['d_o_b'];
                        $_SESSION['DOB'] = $d_o_b;

                        $addressLine1 = $row['addressLine1'];
                        $_SESSION['AddressLineOne'] = $addressLine1;

                        $addressLine2 = $row['addressline2'];
                        $_SESSION['AddressLineTwo'] = $addressLine2;

                        $email = $row['email'];
                        $_SESSION['Email'] = $email;

                        $password = $row['password'];
                        $_SESSION['Password'] = $password;

                        header("location: ../Profile.php");
                    } elseif ($row['role'] == 'Admin') {

                        $username = $row['username'];
                        $_SESSION['Username'] = $username;

                        $role = $row['role'];
                        $_SESSION['Role'] = $role;

                        $first_name = $row['first_name'];
                        $_SESSION['FirstName'] = $first_name;

                        $second_name = $row['second_name'];
                        $_SESSION['SecondName'] = $second_name;

                        $d_o_b = $row['d_o_b'];
                        $_SESSION['DOB'] = $d_o_b;

                        $addressLine1 = $row['addressLine1'];
                        $_SESSION['AddressLineOne'] = $addressLine1;

                        $addressLine2 = $row['addressline2'];
                        $_SESSION['AddressLineTwo'] = $addressLine2;

                        $email = $row['email'];
                        $_SESSION['Email'] = $email;

                        $password = $row['password'];
                        $_SESSION['Password'] = $password;

                        header("location: ../Admin.php");
                    } else {
                        echo "error";
                    }
                } else {
                    echo "The Username/Password you have selected is wrong";
                }
            } else {
                echo "Please enter a value into the boxes provided";
            }
        }
        else {
            echo "server failure";
        }
    }