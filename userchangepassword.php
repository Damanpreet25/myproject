<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change Password</title>
</head>
<body>
<?php
//include "header.php";
?>
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h1 class='text-center text-capitalize'>User Change Password</h1>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <div class="col-md-12">
        <form action="changepasswordaction.php" method="post" class="form-horizontal text-center">
            <div class="form-group">
                <label class="col-md-3">Old Password</label>
                <div class="col-md-offset-3"><input type="password" name="tbopass" id="tbopass"
                                                    data-rule-required="true" data-msg-required="Enter Old Password"
                                                    class="form-control"></div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-md-3">New Password</label>
                <div class="col-md-offset-3"><input type="password" name="tbpass" id="tbpass"
                                                    data-rule-required="true" data-msg-required="Enter Password"
                                                    class="form-control"></div>
            </div>
            <br>
            <div class="form-group">
                <label class="col-md-3">Confirm New Password</label>
                <div class="col-md-offset-3"><input type="password" name="tbcpass" data-rule-equalto="#tbpass"
                                                    data-msg-equalto="Password & Confirm Password not match"
                                                    data-rule-required="true" data-msg-required="Enter Confirm Password"
                                                    class="form-control"></div>
            </div>
            <br>
            <div class="form-group">
            <div class="col-md-offset-3">
                <button type="submit" class="btn btn-primary btn-lg"> SUBMIT</button>
                <button type="reset" class="btn btn-primary btn-lg"> RESET</button>
            </div>
            </div>
            <br>
            <?php
            if (isset($_REQUEST["msg"])) {
                if ($_REQUEST["msg"] == 1) {
                    echo "<div class='alert alert-success'><strong>Password Changed Successfully</strong></div>";
                }
                elseif ($_REQUEST["msg"] == 2){
                    echo "<div class='alert alert-success'><strong>Failed :Incorrect Old Password</strong></div>";
                }
                else {

                    echo "<div class='alert alert-success'><strong>FAILED</strong></div>";
                }
            }
            ?>
            
            <p><a href="userhome.php" class="btn btn-primary">Back to Homepage</a></p>

        </form>
    </div>
</div>

<?php
//include "footer.php";
?>
</body>
</html>


