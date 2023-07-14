<?php
session_start();
if(!isset($_SESSION["id"])){
    // $userid =$_SESSION['id'];
    header("Location: login.php");
exit(); }
?>