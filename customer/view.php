<?php 

include "authGuard.php";
include "menu.html";
include_once "../shared/connection.php";

$userId = $_SESSION['userId'];

$cursor = mysqli_query($conn,"select * from product");

echo "<div class='d-flex justify-content-center gap-2 m-3 flex-row flex-wrap'>";
while($row = mysqli_fetch_assoc($cursor))
{
    $productName = $row['productName'];
    $productPrice = $row['productPrice'];
    $productDetails = $row['productDetails'];
    $imgpath = $row['imgpath'];
    $pid = $row['pid'];

    echo " <div class='card rounded-1' style='width: 18rem;height:22rem'>
    <img src='$imgpath' class='card-img-top h-50'>
    <div class='card-body'>
      <h5 class='card-title'>$productName</h5>
      <p class='card-text'>$productDetails</p>
      <p>$ $productPrice</p>
      <div class=' d-flex justify-content-lg-between'>
      <a href='addCart.php?pid=$pid'>
      <button class='btn btn-success'>ADD TO CART 🛒</button>
      </a>
      <a href='orders.php?pid=$pid'>
      <button class='btn btn-warning '>BUY</button>
      </a>
      </div>
      </div>
</div>
";
}
echo "</div>";

?>

<html>
  <head></head>
  <body>
    <script>
      
      function search() {
        searchWord = document.getElementById("search").value.toLowerCase();
        cards =document.querySelectorAll(".card");
          
        cards.forEach(card => {
          productName = card.querySelector(".card-title").textContent.toLowerCase();
          if(productName.includes(searchWord) )
          {
            card.style.display = "block";
          }
          else{
            card.style.display = "none";
          }
        });
        
  }
    </script>
  </body>
</html>