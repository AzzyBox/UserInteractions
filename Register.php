<?php

$page_title = "Admin Panel";
include 'includes/header.php';
include 'includes/nav.php';

?>

<div class="container">
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h3 class="panel-title">Register User</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-9">
                    <div class="well dash-box">
                        <form class="form-horizontal" action="includes/registerUser.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="username">Username:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd1" placeholder="Enter password" name="pwd1" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Confirm Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pwd2" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fName">First name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fName" placeholder="Enter Your First Name" name="fName" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sName">Second Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sName" placeholder="Enter Your Surname" name="sName" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="DOB">Date Of Birth:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="DOB" placeholder="Enter Your Date Of Birth" name="DOB" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sel1">Admin OR User?:</label>
                                <div class="col-sm-10">
                                <select class="form-control" id="sel1" name="role">
                                     <option>User</option>
                                     <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" >Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footerAdmin.php';
?>
