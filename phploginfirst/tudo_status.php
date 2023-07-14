<?php
include('connection.php');
if(isset($_POST['id'])) {
    $numb = $_POST['id'];
    if (!empty($_POST['status'])) {
        $selected = $_POST['status'];
        
        $sql = "UPDATE tudo SET `status`='$selected' WHERE id=$numb";
        // print_r($sql);die;
        if ($conn->query($sql) === TRUE) {
            header('location: dashboard.php');
        }
    } else {
        echo 'Please select the value.' ;
    }
}
?>