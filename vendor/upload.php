<?php
include "authGuard.php";
session_start();
$userId = $_SESSION["userId"];

$productName = $_POST['productName'];
$productPrice = $_POST['productPrice'];
$productDetails = $_POST['productDetails'];


$destFilePath = "../shared/images/".$_FILES['productImg']['name'];
move_uploaded_file($_FILES['productImg']['tmp_name'],$destFilePath);


include_once "../shared/connection.php";


$status = mysqli_query($conn,"INSERT into product (productName,productPrice,productDetails,imgpath,uploaded_by) VALUES('$productName',$productPrice,'$productDetails','$destFilePath',$userId)");
if($status)
{
    echo "success";
    header("location:view.php");
}
else{
    echo " sql error"; 
}