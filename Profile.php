<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<?php
$page_title = "Profile";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/PHPconnection.php';

?>

<div class="container">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color:  #095f59;">
                <h2 class="panel-title">Hey Welcome </h2>
                <h3><?php echo $_SESSION['Username'];?></h3>
                <h4> Here is your profile page.</h4>

            </div>
            <div class="panel-body">
                <div class="col-md-12">
                    <div class="well dash-box">
                        <form class="form-horizontal" method="post" action="includes/registerUser.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="usernameTextInput">Username:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="username" placeholder="<?php echo $_SESSION['Username'];?>" name="username" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="emailTextInput">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="<?php echo $_SESSION['Email'];?>" name="email" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fNameTextInput">First name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fName" placeholder="<?php echo $_SESSION['FirstName'];?>" name="fName" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sNameTextInput">Second Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sName" placeholder="<?php echo $_SESSION['SecondName'];?>" name="sName" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fNameTextInput">Address Line 1:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fName" placeholder="<?php echo $_SESSION['AddressOne'];?>" name="fName" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fNameTextInput">Address Line 2:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fName" placeholder="<?php echo $_SESSION['AddressTwo'];?>" name="fName" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fNameTextInput">Date Of Birth:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fName" placeholder="<?php echo $_SESSION['DOB'];?>" name="fName" Disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="sNameTextInput">User/Admin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sName" placeholder="<?php echo $_SESSION['Role'];?>" name="sName" Disabled>
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
    <div class="container">
        <div class ="row">
            <div class="col">
            <div class="panel panel-default col-md-3">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title">Tool Bar</h3>
                </div>
                <div class="panel-body">
                    <button type="button" id='clicker' class="btn btn-primary btn-lg btn-block">Update Info</button>
                    <button type="button" class="btn btn-primary btn-lg btn-block">Change User Password</button>
                </div>
            </div>
        </div>
            <div class="col">
                <div class="panel panel-default col-md-3">
                <div class="panel-heading" style="background-color:  #095f59;">
                    <h3 class="panel-title">Tool Bar</h3>
                </div>
                <div class="panel-body">
                        <div class="well dash-box">
                            <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> 129</h2>
                            <h4>Visitors</h4>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
    $().ready(function() {


        $('#clicker').click(function() {
            $('input').each(function() {
                if ($(this).attr('disabled')) {
                    $(this).removeAttr('disabled');
                }
                else {
                    $(this).attr({
                        'disabled': 'disabled'
                    });
                }
            });
        });
    });
</script>
<?php
include 'includes/footer.php';
?>
