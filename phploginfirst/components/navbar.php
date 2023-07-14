<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="container bg-blue-900  py-5 px-2 m-auto">
            <div class="flex justify-between items-center">
                    <div>
                        <img class="w-[50px] lg:w-[70px]" src="./images/logo.png" alt="">
                    </div>
                    <div>
                        <ul class="gap-5 hidden text-white lg:flex">
                            <li ><a href="">Home</a></li>
                            <li ><a href="">Tudo</a></li>
                            <li ><a href="">Users</a></li>
                            <li ><a href="">About</a></li>
                            <li ><a href="">Contect</a></li>
                        </ul>
                    </div>
                    <div>
                       <a class="text-black" href="logout.php"> <button class="bg-blue-200 p-2 lg:ml-[50px]">Logout</button></a>
                    </div>
                </div>
            </div>
    </div>  
</body>
</html>