<?php 
include_once "../shared/connection.php";

$pid = $_GET['pid'];
$productName = $_POST['productName']; 
$productPrice = $_POST['productPrice']; 
$productDetails = $_POST['productDetails']; 
$destFilePath = "../shared/images/".$_FILES['productImg']['name'];
move_uploaded_file($_FILES['productImg']['tmp_name'],$destFilePath);

$status = mysqli_query($conn,"update product set productName = '$productName', productPrice = $productPrice, productDetails = '$productDetails', imgpath = '$destFilePath' where pid=$pid;");
header("location:view.php");



?>