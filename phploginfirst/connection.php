<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginsystem";
    $conn = mysqli_connect($servername,$username,$password,$database);
    if($conn){
    }else{
        echo "connection failed " .mysqli_connect_errno();
    }
?>