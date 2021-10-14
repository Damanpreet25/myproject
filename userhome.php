<?php
include "connection.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Home</title>
</head>
<body>

<?php
//include "header.php";
?>

<section class="probootstrap-section probootstrap-section-colored">

<div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
               
               <?php
               echo "Welcome to user panel.";
                ?>

            </div>
        </div>
    </div>
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <a href="userchangepassword.php">
                    <input type="submit" class="btn btn-primary btn-lg" value="Change Password">
                </a>
                <a href="userlogout.php">
                    <input type="submit" class="btn btn-primary btn-lg" value="Logout">
                </a>
            </div>
        </div>
    </div>
</section>

<br>
<?php
// include "footer.php"; 
?>
</body>
</html>

               