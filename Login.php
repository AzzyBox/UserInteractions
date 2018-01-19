<?php

$page_title = "Login";
include 'includes/header.php';
include 'includes/nav.php'
?>

<div class="container">
    <form name="login" role="form" class="form-horizontal" action="includes/Login.php" method="post">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <h2 class="form-signing-heading">Login to UserInteractions Internal HellHole!</h2>
                <hr>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <label for="AccountName" class="control-label">Username</label>
                <input id="AccountName" name="UserName" class="form-control" type="text" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
                <label for="password" class="control-label">Password</label>
                <input id="password" class="form-control" name="Password" type="password" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
                <input id="login" type="submit" class="btn btn-primary btn-block" value="Sign In"/>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 col-md-offset-3">
                <hr>
                <a href="#">Forgot Password?</a>

            </div>
        </div>
    </form>
</div>

<?php
include 'includes/footer.php';
?>
