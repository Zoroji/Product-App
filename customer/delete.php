<?php
$cartId = $_GET['cartId'];

include_once "../shared/connection.php";

$status = mysqli_query($conn,"delete from cart where cartId = $cartId");
if($status)
{
    header("location:viewCart.php");
}

?>