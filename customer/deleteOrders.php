<?php 
    include_once "../shared/connection.php";

    $order_id = $_GET['order_id'];
    
    $res = mysqli_query($conn,"delete from orders where order_id = $order_id");
    header("location:viewOrders.php");
?>