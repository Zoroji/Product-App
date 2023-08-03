<?php 

include "authGuard.php";
include "menu.html";
include_once "../shared/connection.php";

$userId = $_SESSION['userId'];
$cursor = mysqli_query($conn,"SELECT * from orders join product on orders.pid = product.pid where uploaded_by = $userId;");


echo "<div class='d-flex justify-content-center gap-2 m-3 flex-row flex-wrap'>";

    while($row = mysqli_fetch_assoc($cursor))
    {
        $productName = $row['productName'];
        $productPrice = $row['productPrice'];
        $productDetails = $row['productDetails'];
        $imgpath = $row['imgpath'];
        $userId = $row['userId'];
        $pid = $row['pid'];
    
        echo " <div class='card rounded-1' style='width: 18rem;height:22rem'>
        <img src='$imgpath' class='card-img-top h-50'>
        <div class='card-body'>
          <h5 class='card-title'>$productName</h5>
          <p class='card-text'>$productDetails</p>
          <p>$ $productPrice</p>
          <div class=' d-flex gap-2'>
          <p>Ordered by $userId</p>
          </div>
          </div>
    </div>
    ";
    }
    echo "</div>";


?>