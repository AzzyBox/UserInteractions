<?php

$page_title = "Admin Panel";
include 'includes/header.php';
include 'includes/nav.php';

include 'includes/PHPconnection.php';

$retrieveUsers = "SELECT * FROM users";
$result = mysqli_query($conn,$retrieveUsers);

$num_rows = mysqli_num_rows($result);
?>

<header>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

    </style>
</header>

<div class="panel panel-default col-md-9">
    <div class="panel-heading" style="background-color:  #095f59;">
        <h3 class="panel-title">List of Users</h3>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
            <table>
                <tr>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Second Name</th>
                    <th>D/O/B</th>
                </tr>
                <?php while ($row = mysqli_fetch_array($result)):;?>
                    <tr>
                        <th><?php echo $row[0]?></th>
                        <th><?php echo $row[1]?></th>
                        <th><?php echo $row[5]?></th>
                        <th><?php echo $row[2]?></th>
                        <th><?php echo $row[3]?></th>
                        <th><?php echo $row[4]?></th>
                    </tr>
                <?php endwhile ?>


            </table>
            <!--Yo table here -->

        </div>
    </div>
</div>