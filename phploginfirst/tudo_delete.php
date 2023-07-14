<?php
include("auth.php");
?>
<?php
include ('connection.php');
if(isset($_GET['id'])){
    // $taking = "SELECT * FROM tudo";
    $numb= $_GET['id']; 
    $sql = "DELETE FROM tudo WHERE id=$numb";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
        header('location: dashboard.php');
    } else {
        echo "Error deleting record: ";
    }
    
    $conn->close();
}
?>