
<?php

include "connection.php";
$username = $_POST["tbuname"];
strtolower($username);
$password = $_POST["tbpass"];
$email = $_POST["tbemail"];
$mobile = $_POST["tbmobile"];


$selectquery = "select * from user";
$res = mysqli_query($conn, $selectquery);
$flag = 0;
while ($row = mysqli_fetch_array($res)) {
    if ($username == $row[0]) {
        $flag = 1;
        break;
    }
}
$insertqurey = "insert into user VALUES ('$username','$password','$email','$mobile')";
if ($flag == 0) {


    $result = mysqli_query($conn, $insertqurey);

    if ($result) {
        header("location:usersignup.php?msg=1");
//        echo "added";
    } else {

        header("location:usersignup.php?msg=0");
    }
} else {
    echo "user already exist";
    header("location:usersignup.php?msg=2");
}
?>