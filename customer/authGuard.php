<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <style>
       
.text-primary-emphasis {
    color: #5cb3de; 
    font-weight: bold; 
    font-size: 18px; 
}

    </style>
</head>
</html>

<?php

    session_start();

    if(!isSet($_SESSION['login_status']) || !$_SESSION['login_status'])
    {
        echo "illegal attempt!"; die;
    }
    if($_SESSION["user_type"] != "customer")
    {
        echo "You do not have permission to access this page ! contact the admin!"; die;
    }
  $userId =  $_SESSION["userId"]; 
  $username =  $_SESSION["username"];
  $user_type =  $_SESSION["user_type"];
   echo "<div class='d-flex gap-4 justify-content-evenly p-3 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3'>
   <div> $userId </div>
   <div> $username </div>
   <div> $user_type </div>
    </div>";

?>
