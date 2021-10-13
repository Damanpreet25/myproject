<?php
$username=$_REQUEST["tbuname"];
$oldpass=$_REQUEST["tbopass"];
$newpassword=$_REQUEST["tbpass"];
include "connection.php";
$select="select * from user";
$result=mysqli_query($conn,$select);
$flag=0;
while ($row=mysqli_fetch_array($result))
{
    if($row["username"]==$username && $row["password"]==$oldpass)
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    $update="update user set password='$newpassword' where username='$username'";
    if(mysqli_query($conn,$update))
    {
        //success
        header("location:changepasswordaction.php?msg=1");
    }
    else{
        //failed
        header("location:changepasswordaction.php?msg=0");
    }
}
else{
//incorrect old password
    header("location:changepasswordaction.php?msg=2");
}