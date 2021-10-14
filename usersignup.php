<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
<?php

?>
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1 class='text-center text-capitalize'>User Signup</h1>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="col-md-12">
        <form action="usersignupaction.php" method="post" class="form-horizontal" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-md-3">Username</label>
                <div class="col-md-offset-3">
                    <input type="text" name="tbuname" data-rule-required="true" data-msg-required="Enter Username" class="form-control"></div>
            </div><br>
            <div class="form-group">
                <label class="col-md-3">Password</label>
                <div class="col-md-offset-3">
                    <input type="password" name="tbpass" id="tbpass" data-rule-required="true" data-msg-required="Enter Password" class="form-control"></div>
            </div><br>
            <div class="form-group">
                <label class="col-md-3">Confirm Password</label>
                <div class="col-md-offset-3">
                    <input type="password" name="tbcpass" data-rule-equalto="#tbpass" data-msg-equalto="Password & Confirm Password not match" data-rule-required="true" data-msg-required="Enter Confirm Password" class="form-control"></div>
            </div><br>
            <div class="form-group">
                <label class="col-md-3">Email</label>
                <div class="col-md-offset-3">
                    <input type="text" name="tbemail" class="form-control" data-rule-email="true" data-msg-email="Invalid Email Address" data-rule-required="true" data-msg-required="Enter Email Id"></div>
            </div><br>
            <div class="form-group">
                <label class="col-md-3">Mobile</label>
                <div class="col-md-offset-3">
                    <input type="text" name="tbmobile" class="form-control" data-rule-required="true" data-msg-required="Enter Mobile Number">
                </div>
            </div>
            <br>
            <div class="col-md-offset-3">
                <input type="submit" class="btn btn-primary btn-lg" value="Submit">
                <input type="reset" class="btn btn-primary btn-lg" value="Reset">
            </div>
            <br>
        
            <?php
            if (isset($_REQUEST["msg"])) {
                if ($_REQUEST["msg"] == 1) {
                    echo "<div class='alert alert-success text-center'><strong>New user has been added successfully.</strong></div>";
                } elseif ($_REQUEST["msg"] == 2) {
                    echo "<div class='alert alert-danger text-center'><strong>User already exist.</strong></div>";
                } else {
                    echo "<div class='alert alert-danger text-center'><strong>User has not been added.</strong></div>";
                }
            }

            ?>
           <p><a href="index.php" class="btn btn-primary">Back</a></p>
        </form>
    </div>
</div>
</body>
</html>