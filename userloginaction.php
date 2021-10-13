<?php

$username=$_POST["tbuname"];
$password=$_POST["tbpass"];
include "connection.php";
$selectquery="select * from user";
$result=mysqli_query($conn,$selectquery);
$flag=0;
while ($row=mysqli_fetch_array($result))
{
    if($row["username"]==$username && $row["password"]==$password)
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    session_start();
    $_SESSION["uname"]=$username;

    header("location:userhome.php");
}
else{
//    echo "login fail";
    header("location:userlogin.php?msg2=1");
}
