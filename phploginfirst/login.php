<?php
error_reporting(0);
session_start();
$userid = $_SESSION['id'];
if($userid){
    header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-200 to-blue-700 bg-no-repeat">
   <?php 
   include('connection.php');
 
    if (isset($_POST['email'])) 
        $username = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT id FROM `loginsystem` WHERE email='$username'
        AND password='" . md5($password) . "' ";
        $result =mysqli_query($conn, $query);  
        if (mysqli_num_rows($result)==1) {
            $row =mysqli_fetch_assoc($result);
            $_SESSION['id']= $row['id'];
            header("Location: dashboard.php");
            exit();
        }
         else {
            header('login.php');
         }
           ?>
<body class="bg-gradient-to-r from-blue-200 to-blue-700 ">
    <div class="container-fluid ">
        <div class="container m-auto" >
        <div class="lg:flex sm:flex-row justify-around my-[100px]" >
            <div class="m-2 sm:w-full lg:w-[50%]" >
                <img class="w-[500px] m-auto" src="./images/login.jpg" alt="" />
            </div>
            <div  class=" sm:w-full lg:w-[50%] bg-white rounded-[17px_17px_0px_17px] p-5" >
                <div class="sm:w-full lg:w-[360px] m-auto" >
                   <form method="POST">
                        <div class="m-auto flex flex-col py-5 lg:py-[100px]">
                            <input required class="w-[320px] border m-2 p-3" type="text" placeholder="Email or Username" name="email" id="email" />
                            <input required class="w-[320px] border m-2 p-3" type="password" placeholder="Password" name="password" id="password" />
                            <input class="w-[180px] lg:w-[320px] border m-2 p-3 bg-blue-500 hover:bg-blue-200" type="submit" value="Login" name="login" id="" />
                            <div  class="w-[180px] lg:w-[320px] border m-2 p-3 bg-blue-500 hover:bg-blue-200 text-center" > <a href="signup.php">Signup here</a></div>        
                        </div>
                   </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

</html>