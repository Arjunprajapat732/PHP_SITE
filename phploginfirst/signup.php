<?php  include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>signup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-200 to-blue-700 ">
    <div class="container-fluid ">
        <div class="container m-auto" >
        <div class="lg:flex sm:flex-row justify-around my-[100px]" >
            <div class="m-2 sm:w-full lg:w-[50%]" >
                <img class="w-[500px] m-auto" src="./images/signup.jpg" alt="" />
            </div>
            <div  class=" sm:w-full lg:w-[50%] bg-white rounded-[17px_17px_0px_17px] p-5" >
                <div class="sm:w-full lg:w-[360px] m-auto" >
                   <form method="POST">
                        <div class="m-auto flex flex-col py-5">
                                <h1 class="text-xl p-5">Sign Up</h1>
                                <input required class="w-full lg:w-[320px] border sm:m-1 lg:m-2 p-3" type="text" placeholder="First Name" name="fname"/>
                                <input required class="w-full lg:w-[320px] border sm:m-1 lg:m-2 p-3" type="text" placeholder="Last Name" name="lname"/>
                                <input required class="w-full lg:w-[320px] border sm:m-1 lg:m-2 p-3" type="email" placeholder="Email" name="email" />
                                <input required class="w-full lg:w-[320px] border sm:m-1 lg:m-2 p-3" type="password" placeholder="Password" name="password"/>
                                <div>
                                    <input class="w-[150px] border m-2 p-3 bg-blue-500 hover:bg-blue-200" type="submit"
                                        value="Signup" name="signup" id="" />
                                    <button class="w-[150px] border m-2 p-3 bg-black text-white hover:text-black hover:bg-blue-200"><a href="login.php">Login</a></button>
                                </div>
                                <h1 class="w-full lg:w-[320px]  bg-blue-200 text-center border m-2 py-3 px-1 ">Login if you have an account?</h1>
                    </div>
                   </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>

<?php
if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sqll = "INSERT INTO `loginsystem` ( `first-name`, `last-name`, `email`, `password`, `created-at`)VALUES('$fname','$lname','$email','$password',current_timestamp())";
    $data = mysqli_query($conn,$sqll);
    if($data){
        header('location: welcome.php');
    }else{
        echo "failed";
    }
}
?>