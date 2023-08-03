<?php
session_start();
include_once "../shared/connection.php";
$userId = $_SESSION['userId'];
$pid = $_GET['pid'];


$status = mysqli_query($conn,"insert into orders(pid,userId) values($pid,$userId)");
if($status)
{
    header("location:viewOrders.php");
}
?>