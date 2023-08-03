<?php 

include "authGuard.php";
include "menu.html";
include_once "../shared/connection.php";

$userId = $_SESSION['userId'];

$cursor = mysqli_query($conn,"select * from product where uploaded_by = '$userId'");

echo "<div class='d-flex justify-content-center gap-2 m-3 flex-row flex-wrap' >";

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
      <div class=' d-flex gap-2'>
      <button class='btn btn-warning' onClick='edit($pid)'>EDIT🖋️</button>
      <button onClick='confirmDelete($pid)' class='btn btn-danger'>Delete🗑️</button>
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
      function confirmDelete(pid) {
        res = confirm("are u sure u want to delete "+pid);
        if(res)
        {
          // window.location = `delete.php?pid=${pid}`;
          window.location = "delete.php?pid="+pid;
        }
      }

      function edit(pid) {
        window.location = `edit.php?pid=${pid}`;
      }
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