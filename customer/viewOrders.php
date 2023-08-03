<?php     
    include_once "../shared/connection.php";
    include "authGuard.php";
    include "menu.html";

    $userId = $_SESSION['userId'];

    $cursor = mysqli_query($conn,"SELECT * from orders join product on orders.pid = product.pid where userId = $userId;");
    
   
echo "<div class='d-flex justify-content-center gap-2 m-3 flex-row flex-wrap'>";

while ($row=mysqli_fetch_assoc($cursor)) {
    $img = $row['imgpath'];
    $productName = $row['productName'];
    $productDetails = $row['productDetails'];
    $productPrice = $row['productPrice'];
    $order_id = $row['order_id'];
    $pid = $row['pid'];

    echo "<div class='card rounded-1' style='width: 18rem;height:22rem'>
    <img src='$img' class='card-img-top h-50'>
    <div class='card-body'>
      <h5 class='card-title'>$productName</h5>
      <p class='card-text'>$productDetails</p>
      <p>$ $productPrice</p>
      <div class=' d-flex justify-content-between '>
      <button onClick='deleteOrders($order_id)' class='btn btn-danger'>Cancel Order 🗑️</button>
      </div>
      </div>
</div>";
}

echo "</div>";

?>

<html>
    <body>
        
    <script>
        function deleteOrders(order_id) {
            res = confirm("you sure you want to remove this orders");
            if(res)
            {
                window.location = "deleteOrders.php?order_id="+order_id;
            }
        }
    </script>
    </body>
</html>