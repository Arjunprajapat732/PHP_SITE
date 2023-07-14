<?php
include("auth.php");
include('connection.php');
if (isset($_POST['addtask'])) {
    $useremail = $_SESSION['id'];
    $dashboard_title = $_POST['dashboard_title'];
    $dashboard_message = $_POST['dashboard_message'];
    $pending = "pending";
    // $num =$row['id'];
    $sqll = "INSERT INTO `tudo` ( `user_name`, `title`, `message`,`status`, `created_at`) VALUES(  '$useremail', '$dashboard_title','$dashboard_message','$pending', current_timestamp()) ";
    $data = mysqli_query($conn, $sqll);
    if ($data) {
        header('location: dashboard.php');
    } else {
        echo "failed";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deshborad</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    html{
        scroll-behavior: smooth;
    }
    footer ul li {
        padding: 7px;
        cursor: pointer;
        margin: 2px;
        transition: all 0.3s;
    }
    footer ul li:hover {
        transform: translateX(20px);
        background-color: white;
        color: black;
    }
</style>

<body class=" bg-blue-900">
    <div class="fixed bg-blue-900 shadow-md">
        <div class="container-fluid">
            <div class="container bg-blue-900  py-5 px-2 m-auto">
                <div class="flex justify-between items-center">
                    <div>
                        <img class="w-[50px] lg:w-[70px]" src="./images/logo.png" alt="">
                    </div>
                    <div>
                        <ul class="gap-5 hidden text-white lg:flex">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#tudolist">Tudo</a></li>
                            <li><a href="#view">View</a></li>
                            <li><a href="#user">Users</a></li>
                            <li><a href="#footer">Contect</a></li>
                        </ul>
                    </div>
                        <a class="text-black" href="logout.php"> <button
                                class="bg-blue-200 p-2 lg:ml-[50px]">Logout</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    <div id="home">
    <div class="container-fluid" >
        <div class="container m-auto">
            <div class="container block lg:flex mt-[50px]">
                <div class="w-full lg:w-[50%] bg-white py-5">
                    <div class="w-[100%] mt-[100px] p-5"><img class="w-full" src="./images/laptop.jpg" alt=""></div>
                </div>
                <div class="w-full lg:w-[50%] bg-white py-5 lg:pt-[100px]">
                    <p class=" lg:text-2xl px-3">INDIA KA BATTLEGROUNDS</p>
                    <p class="py-2 px-3">Each round, the plane's flight path across the map changes, requiring players
                        to quickly
                        determine
                        the best time to eject and parachute to the ground. Players begin with no equipment other than
                        customised clothing options equipment. Finished players can also be looted for their gear.
                        Players
                        can choose to play in first-person or third-person, with each having advantages and
                        disadvantages in
                        combat and situational awareness.
                        Every few minutes, the map's playable area shrinks towards a random location, with any player
                        caught
                        outside the safe zone taking incremental damage and eventually being eliminated if the safe zone
                        is
                        not entered in time; in game, the boundary appears as a shimmering blue wall that contracts over
                        time. This results in a more A plane will occasionally fly over different parts of the playable
                        map at random, or wherever a player uses a flare gun, and drop a loot package containing items
                        that
                         <p  id="tudolist">are normally unobtainable during normal gameplay. These packages emit highly visible red or
                        yellow
                        smoke, attracting interested players and resulting in additional confrontations. A full round
                        takes about 30</p> minutes.</p>
                </div>
            </div>
        </div>
        <div class="container m-auto py-5">
            <div class="lg:flex justify-around bg-white pt-5 ">
                <div>
                    <form method="POST">
                        <input required name="dashboard_title" placeholder="Enter your title" type="text">
                        <input required name="dashboard_message" placeholder="Enter your Desicription" type="text"
                            id="">
                        <input class="p-3 bg-blue-200" type="submit" name="addtask">
                    </form>
                </div>
                <div class="bg-white rounded-[10px] p-5">
                    <?php
                    $useremail = $_SESSION['id'];
                    $Sno = "SELECT * FROM tudo WHERE user_name = '$useremail' ";
                    $idnum = mysqli_query($conn, $Sno);
                    ?>
                    <table class="sm:w-full lg:w-[700px] p-5 ">
                        <tr>
                            <th class="p-5">id</th>
                            <th class="p-5">title</th>
                            </th>
                            <th class="p-5">
                            </th>
                        </tr>
                        <?php while ($row = $idnum->fetch_assoc()) { ?>
                            <form action="dashboard.php" method="POST">

                                <tr class="border">
                                    <th class="lg:p-5 bg-blue-500 ">
                                        <?php
                                        echo $row['id'];
                                        ?>
                                    </th>
                                    <th class="lg:p-5 bg-blue-500 ">
                                        <?php
                                        echo $row['title'];
                                        ?>
                                    </th>
                                    <th class="lg:p-5 bg-red-500 sm:flex-row">
                                        <a class="bg-blue-500 lg:p-3" id="delete"
                                            href="tudo_update.php?id= <?php echo $row['id']; ?>">update</a>
                                        <a class="bg-blue-500 lg:p-3" id="delete"
                                            href="tudo_delete.php?id= <?php echo $row['id']; ?>">delete</a>
                                    </th>
                            </form>
                            <th class="p-5 bg-red-500 ">
                                <select id="check" class=" w-[100px]" name="status"
                                    onchange="loadclick('<?= $row['id'] ?>', this.value)">
                                    <option class="bg-blue-500" <?php if ($row['status'] == 'pending')
                                        echo 'selected'; ?>
                                        value="pending">pending</option>
                                    <option class="bg-blue-500" <?php if ($row['status'] == 'incomplete')
                                        echo 'selected'; ?>
                                        value="incomplete">incomplete</option>
                                    <option class="bg-blue-500" <?php if ($row['status'] == 'completed')
                                        echo 'selected'; ?>
                                        value="completed">completed</option>
                                </select>
                            </th>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="container m-auto py-2">
        <div class="pt-[50px]" id="view">
            <?php include('autoplay.php'); ?>
            <div class="bg-white p-5">
                <p id="user">Each round, the plane's flight path across the map changes, requiring players to quickly
                    determine the best time to eject and parachute to the ground. Players begin with no equipment
                    other than customised clothing options equipment. Finished players can also be looted for their
                    gear. Players can choose to play in first-person or third-person, with each having advantages
                    and disadvantages in combat and situational awareness. Every few minutes, the map's playable
                    area shrinks towards a random location, with any player caught outside the safe zone taking
                    incremental damage and eventually being eliminated if the safe zone is not entered in time; in
                    game, the boundary appears as a shimmering blue wall that contracts over time. This results in a
                    more A plane will occasionally fly over different parts of the playable map at random, or
                    wherever a player uses a flare gun, and drop a loot package containing items that are normally
                    unobtainable during normal gameplay. These packages emit highly visible red or yellow smoke,
                    attracting</p>
            </div>
        </div>
        <div>
            <div class="block lg:flex justify-around mt-[100px]">
                <div class="hover:scale-105">
                    <div class="m-auto ">
                        <img class="px-5 rounded-[50%]" src="./images/user1.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-white text-center">Harry Lucy</p>
                        <p class="text-white text-center"> This results in a more A plane will occasionally fly over
                            different parts of the
                            playable map at random, or wherever a player uses a flare gun, and drop a loot package
                            containing items that are normally unobtainable during normal gameplay. These packages
                            emit highly visible red or yellow smoke</p>
                    </div>
                </div>
                <div class="hover:scale-105">
                    <div class="m-auto ">
                        <img class="px-5 rounded-[50%]" src="./images/user2.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-white text-center">Harry Lucy</p>
                        <p class="text-white text-center"> This results in a more A plane will occasionally fly over
                            different parts of the
                            playable map at random, or wherever a player uses a flare gun, and drop a loot package
                            containing items that are normally unobtainable during normal gameplay. These packages
                            emit highly visible red or yellow smoke</p>
                    </div>
                </div>
                <div class="hover:scale-105">
                    <div class="m-auto ">
                        <img class="px-5 rounded-[50%]" src="./images/user1.jpg" alt="">
                    </div>
                    <div class="p-5">
                        <p class="text-white text-center">Harry Lucy</p>
                        <p class="text-white text-center"> This results in a more A plane will occasionally fly over
                            different parts of the
                            playable map at random, or wherever a player uses a flare gun, and drop a loot package
                            containing items that are normally unobtainable during normal gameplay. These packages
                            emit highly visible red or yellow smoke</p>
                    </div>
                </div>
            </div>
            <div class="block lg:flex justify-between mt-[50px]">
                <div class="w-full lg:w-[45%] text-white py-5 px-2">
                    <video controls autoplay src="./images/anim.mp4"></video>
                </div>
                <div class="w-full lg:w-[45%] m-3 bg-white py-5 rounded-[0px_0px_0px_10px]">
                    <p class="p-5">Buildings under construction, aerial view</p>
                    <p class="p-5">High point of view of a building under construction with cranes around it between
                        the
                        buildings of a large metropolis. Aerial view to the skyline of the City of London with the
                        construction of new buildings.</p>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container-fluid bg-[#181818]">
            <div class="container m-auto bg-[#181818] py-5 mt-[100px]">
                <div>
                    <h4 class="text-white p-2">Go Make Something Awesome</h4>
                    <p class="text-black p-2 font-serif bg-white">Font Awesome is the internet's icon library and
                        toolkit used by
                        millions of
                        designers, developers,
                        and content creators.</p>
                </div>
                <div class="block lg:flex justify-around">
                    <div>
                        <ul class="text-white p-2">
                            <p class="text-white p-2 text-xl font-serif">About us</p>
                            <li>Download</li>
                            <li>Site</li>
                            <li>Setup</li>
                            <li>Location</li>
                            <li>About</li>

                        </ul>
                    </div>
                    <div>
                        <ul class="text-white p-2">
                            <p class="text-white p-2 text-xl font-serif">Projects</p>
                            <li>download</li>
                            <li>download</li>
                            <li>download</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-white p-2">
                            <p class="text-white p-2 text-xl font-serif">Contect</p>
                            <li><i class="fa-solid fa-envelope"></i> focuswithcode433@gmail.com</li>
                            <li><i class="fa-solid fa-phone"></i> +91 785985264</li>
                            <li><i class="fa-duotone fa-phone-office"></i> +01-5454454</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="text-white p-2">
                            <p class="text-white p-2 text-xl font-serif">Social</p>
                            <li><i class="fa-brands fa-instagram"> Instagram </i></li>
                            <li><i class="fa-brands fa-facebook"> Facebook</i></li>
                            <li><i class="fa-brands fa-youtube">Youtube</i> </li>
                        </ul>
                        <input class="p-5" placeholder="search here" type="text">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
</body>
<script>
    function loadclick(id, status) {
        var data = new FormData();
        data.append('id', id);
        data.append('status', status);
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            // console.log(id);
            // console.log(status);
        }
        xhttp.open("POST", "tudo_status.php", true);
        xhttp.send(data);
    }
</script>

</html>