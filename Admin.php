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
        .table {
            margin: 0 auto;
            width: 80%;
        }
    </style>
</header>


<div class="container">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h3 class="panel-title">Website Overview</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-3">
                    <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo "$num_rows\n"; ?></h2>
                        <h4>Users</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 25</h2>
                        <h4>Pages</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>126</h2>
                        <h4>Posts</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="well dash-box">
                        <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 2129</h2>
                        <h4>Visitors</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-7 d-inline-block">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title">User Adjustements</h3>
                </div>
                <div class="panel-body">
                    <div class="col-md-4">
                        <div class="well dash-box">
                            <h4><a href="Register.php">Register A New User</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well dash-box">
                            <h4><a href="UserViewing.php">Change Password</a></h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="well dash-box">
                            <h4><a href="UserViewing.php">View All Users</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="col-md-5 d-inline-block">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h3 class="panel-title">List of Users</h3>
            </div>
            <div class="panel-body">
                    <table class = "table table-striped table-hover">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                        </tr>
                        <?php while ($row = mysqli_fetch_array($result)):;?>
                        <tr>
                            <th><?php echo $row['username']?></th>
                            <th><?php echo $row['email']?></th>
                        </tr>
                        <?php endwhile ?>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
    include 'includes/footerAdmin.php';
    ?>
