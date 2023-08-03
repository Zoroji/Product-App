<?php
    include_once "authGuard.php";
    include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<head>
    <div class="container-fluid vh-100" style='background-image:url("https://static.vecteezy.com/system/resources/previews/007/017/170/original/vivid-color-pattern-grafiti-draws-doodle-art-pattern-halloween-for-textiles-children-s-clothing-cool-background-vector.jpg");'>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="upload.php" class="bg-success p-4 d-flex justify-content-center flex-column" method="POST" enctype="multipart/form-data">
        <div class="text-center fs-4 text-bold text-white fw-bold" style='width:100%;'>
            Upload your product
        </div>
        <hr class="border border-white border-1 opacity-100">
        <input type="text" class="form-control mt-2" name="productName" placeholder="product name">
            <input type="number" class="form-control mt-2" name="productPrice"  placeholder="product price">
            <textarea name="productDetails" id="" cols="30" rows="5" class="form-control mt-2" placeholder="product details"></textarea>
            <input type="file" class="form-control mt-2" name="productImg">
            <button type="submit" class ="btn btn-primary mt-3 ">submit</button>
        </form>
    </div>
    
    </div>
</head>
<body>
   
</body>
</html>