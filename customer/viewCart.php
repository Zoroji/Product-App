<?php 
include "authGuard.php";
include "menu.html";
include_once "../shared/connection.php";

$userId = $_SESSION['userId'];

$cursor = mysqli_query($conn,"select * from cart join product on cart.pid = product.pid where userId = $userId");

echo "<div class='d-flex justify-content-center gap-2 m-3 flex-row flex-wrap'>";

while ($row=mysqli_fetch_assoc($cursor)) {
    $img = $row['imgpath'];
    $productName = $row['productName'];
    $productDetails = $row['productDetails'];
    $productPrice = $row['productPrice'];
    $cartId = $row['cartId'];
    $pid = $row['pid'];

    echo "<div class='card rounded-1' style='width: 18rem;height:22rem'>
    <img src='$img' class='card-img-top h-50'>
    <div class='card-body'>
      <h5 class='card-title'>$productName</h5>
      <p class='card-text'>$productDetails</p>
      <p>$ $productPrice</p>
      <div class=' d-flex justify-content-between '>
      <button onClick='confirmDelete($cartId)' class='btn btn-danger'>Remove from Cart🗑️</button>
      <a href='orders.php?pid=$pid'>
      <button class='btn btn-warning '>BUY</button>
      </a>
      </div>
      </div>
</div>";
}

echo "</div>";

?>

<html>
    <head></head>
    <body>
        <script>
            function confirmDelete(cartId)
            {
                res = confirm("you sure you want to remove it");
                if(res)
                {
                    window.location = "delete.php?cartId="+cartId;
                }
            }
            function search() {
        //  searchWord = document.querySelector("input.searchBox").value;
        // alert("hi");
    }
        </script>
    </body>
</html>