<?php 
    include_once "../shared/connection.php";
    include "authGuard.php";
    include "menu.html";
    $pid = $_GET['pid'];
    $cursor = mysqli_query($conn,"select * from product where pid = $pid");
    $row = mysqli_fetch_assoc($cursor);
    $productName = $row['productName'];
    $productPrice = $row['productPrice'];
    $productDetails = $row['productDetails'];
    $imgpath = $row['imgpath'];

?>

<html>
    <head>
       
    </head>
    <body>
        <div class="container-fluid h-100 " style='background-image:url("https://static.vecteezy.com/system/resources/previews/007/017/170/original/vivid-color-pattern-grafiti-draws-doodle-art-pattern-halloween-for-textiles-children-s-clothing-cool-background-vector.jpg");'>
        <div class="container d-flex align-items-center justify-content-center h-100 w-50">
        <form action="editQuery.php?pid=<?php echo $pid ?>" class="bg-success p-4 d-flex justify-content-center flex-column" method="POST" enctype="multipart/form-data">
        <div class="text-center fs-4 text-bold text-white fw-bold" style='width:100%;'>
            EDIT YOUR PRODUCT
        </div>
        <div class="d-flex justify-content-center">
        <img src="<?php echo $imgpath; ?>" class="w-25 h-50 p-4">
        </div>
        <hr class="border border-white border-1 opacity-100">
        <input required type="text" class="form-control mt-2" name="productName" placeholder="product name" value="<?php  echo $productName;?> ">
            <input  required type="number" class="form-control mt-2" name="productPrice"  placeholder="product price" value="<?php echo $productPrice; ?>">
            <textarea required name="productDetails" id="" cols="30" rows="5" class="form-control mt-2" placeholder="product details" ><?php echo $productDetails?></textarea>
            <input required type="file" class="form-control mt-2" name="productImg">
            <button   type="submit" class ="btn btn-warning mt-3 ">APPLY CHANGES</button>
        </form>
        </div>
        </div>
    </body>
</html>