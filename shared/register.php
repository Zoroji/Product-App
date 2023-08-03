<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>


<?php
 
    $uname = $_POST["username"];
    $upass = md5($_POST["password"]);
    $utype = $_POST["user_type"];

    include_once "connection.php";

    $cursor = mysqli_query($conn,"select * from user where username ='$uname'");
    $rows = mysqli_num_rows($cursor);
    if($rows > 0)
    {
        echo "username already exist";
        echo "<html>
        <img src='https://i.redd.it/rn2085ji1hk41.jpg' style='width 100%;height:100vh;'>
    </html>";
        die;
    }
    $status = mysqli_query($conn,"insert into user(user_type,username,password) values('$utype','$uname','$upass')");
    if(!$status)
    {
        echo "check your query";
        die;
    }
    else{
        echo '<br> <div class="alert alert-success mx" role="alert">
        Succesfully Registered! 
      </div>';
        $conn->close();
    }
?>

<script>
    setTimeout(function delay(params) {
        window.location.href = "login.html";    
    },2000);
</script>
</html>
