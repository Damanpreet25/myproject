<?php
$oldpass=$_REQUEST["tbopass"];
$newpassword=$_REQUEST["tbpass"];
include "connection.php";
$select="select * from user";
$result=mysqli_query($conn,$select);
$flag=0;
while ($row=mysqli_fetch_array($result))
{
    if($row["password"]==$oldpass)
    {
        $flag=1;
        break;
    }
}
if($flag==1)
{
    $update="update user set password='$newpassword'";
    if(mysqli_query($conn,$update))
    {
        //success
        header("location:userchangepassword.php?msg=1");
    }
    else{
        //failed
        header("location:userchangepassword.php?msg=0");
    }
}
else{
//incorrect old password
    header("location:userchangepassword.php?msg=2");
}

