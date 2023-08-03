<?php
include "authGuard.php";

$userId = $_SESSION["userId"];
$pid = $_GET['pid'];

include_once "../shared/connection.php";

$status = mysqli_query($conn,"insert into cart(pid,userId) values($pid,$userId)");

if($status)
{
    header("location:view.php");
}
?>