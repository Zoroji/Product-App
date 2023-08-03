<?php

session_start();
$_SESSION["login_status"] = false;

$uname = $_POST['username'];
$upass = md5($_POST['password']);

include_once "connection.php";

$cursor = mysqli_query($conn,"select * from user where username = '$uname' and password ='$upass'");

$sqlRows = mysqli_num_rows($cursor);

if($sqlRows == 0)
{
    echo "incorrect crendentials";
}
else{

    $row = $cursor->fetch_assoc();
    $uType = $row['user_type'];
    $uname = $row['username'];
    $userId = $row['userId'];

    $_SESSION["login_status"] = true;
    $_SESSION["userId"] = $userId;
    $_SESSION["username"] = $uname;
    $_SESSION["user_type"] = $uType;

    if($uType == 'vendor')
    {   
        header("location:../vendor/home.php");
    }

    else if($uType == 'customer')
    {

        header("location:../customer/home.php");
    }

}
$conn->close();
?>