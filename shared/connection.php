<?php
    $conn = new mysqli('localhost','root','','raj_db');
    if($conn->connect_error)
    {
        echo "sql error";
        die;
    }

?>