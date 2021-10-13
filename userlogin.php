<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User login</title>
    <?php
   // include "connection.php";
    ?>
</head>
<body>
<div class="probootstrap-service-2 probootstrap-animate">
    <div class="col-md-6 col-md-offset-3" style="margin-top:10%;margin-bottom: auto;">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    <h1 class="text-center" style="font-weight: bolder">
                        User Login
                    </h1>
                </div>
            </div>
            <div class="panel-body">
                <form action="userloginaction.php" method="post" class="form-horizontal text-center">
                    <div class="form-group">
                        <label class="col-md-2">Username</label>
                        <div class="col-md-offset-2 col-md-6">
                            <input type="text" data-rule-required="true"
                                   data-msg-required="Can't leave this field empty" name="tbuname" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="form-group"><label class="col-md-2">Password</label>
                        <div class="col-md-offset-2 col-md-6">
                            <input type="password" name="tbpass" class="form-control" data-rule-required="true" data-msg-required="Can't leave this field empty">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-md-offset-2">
                            <input type="submit" class="btn btn-primary btn-lg" value="Login">
                            <input type="reset" class="btn btn-primary btn-lg" value="Reset">
                        </div>
                    </div>
                    <br>
                    <?php
                    if (isset($_REQUEST["msg2"])) {
                        if ($_REQUEST["msg2"] == 1) {
                           echo "<div class='alert alert-danger text-center'><strong>Login Failed</strong></div>";
                       }
                   }
                    ?>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
