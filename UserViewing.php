<?php

$page_title = "Admin Panel";
include 'includes/header.php';
include 'includes/nav.php';

include 'includes/PHPconnection.php';

$retrieveUsers = "SELECT * FROM users";
$result = mysqli_query($conn, $retrieveUsers);

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
    <div class="panel panel-default col-md-8">
        <div class="panel-heading" style="background-color:  #095f59;">
            <h3 class="panel-title">List of Users</h3>
        </div>
        <div class="row">
            <div class="panel-body table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>D/O/B</th>
                        <th>Address Line 1</th>
                        <th>Address Line 2</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($result)):; ?>
                        <tr>
                            <th><?php echo $row['username'] ?></th>
                            <th><?php echo $row['role'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th><?php echo $row['first_name'] ?></th>
                            <th><?php echo $row['second_name'] ?></th>
                            <th><?php echo $row['d_o_b'] ?></th>
                            <th><?php echo $row['addressLine1'] ?></th>
                            <th><?php echo $row['addressLine2'] ?></th>
                        </tr>
                    <?php endwhile ?>

                </table>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="panel panel-default col-md-3 col-md-offset-1">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h3 class="panel-title">Tool Bar</h3>
            </div>
            <div class="panel-body">
                <button type="button" class="btn btn-primary btn-lg btn-block">Change User Password</button>
                <button type="button" class="btn btn-default btn-lg btn-block">Update User</button>
                <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal"
                        data-target="#exampleModal">Delete User
                </button>

                <!-- Modal -->

            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Choose a user to delete. To do so, type in their username and your admin password to confirm.</p>
                    <form class="form-horizontal" method="post" action="includes/registerUser.php">
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="usernameTextInput">Username:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="username" placeholder="<?php echo $_SESSION['Username'];?>" name="username" Disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footerAdmin.php';
?>