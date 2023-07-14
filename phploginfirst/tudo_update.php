<?php 
include('connection.php');
if(isset($_GET['id'])){
    $numb= $_GET['id']; 
    if(isset($_POST['clickupdate'])){
        $change=$_POST['indexupdate'];
        $title=$_POST['titleupdate'];
        $sql = "UPDATE tudo SET `message`= '$change', `title`='$title' WHERE  id=$numb";
        // print_r($sql);die;
        if ($conn->query($sql) === TRUE) {
            header('location: dashboard.php');
        } else {
            echo "Error deleting record: " ;
        }    
        $conn->close();
    }
}
?>
    <script src="https://cdn.tailwindcss.com"></script>
<div class="container m-auto bg-blue-300 py-5" >
    <div class="w-[600px] m-auto">
       <form method="POST">
                  <input required name="titleupdate" class="w-full m-3 p-3" type="text" placeholder="update title" >
                   <input required name="indexupdate" class="w-full m-3 p-3" type="text" placeholder="update message" >
                  <input name="clickupdate" class="p-3 m-3 bg-green-600" type="submit" value="update">
       </form>
    </div>
</div>
