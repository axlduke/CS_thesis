<?php
    session_start();
    include "../auth/db.php";
    if (!isset($_SESSION['user_id'])){
        echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
        echo '<script>window.location.replace("../login.php");</script>';
    }
    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM user WHERE user_id ='$user_id'";
    $result = $conn->query($sql_query);
    while($row = $result->fetch_array()){
        $user_id = $row['user_id'];
        $fname = $row['fname'];
        $contact = $row['contact'];
        $pictures = $row['pictures'];
        require_once('../auth/db.php');
        
    }
    $jobs_posted="SELECT * from jobs_post where employer_id = ".$_SESSION['user_id'];
    $result=mysqli_query($conn,$jobs_posted);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posted Jobs</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>



</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold px-3" href="#">
                    Job Management
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="../img/<?= $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block"><?= $fname?> </span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="profile.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="block lg:hidden pr-4">
                        <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <title>Menu</title>
                                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>


            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
                <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">
                    <li class="mr-6 my-2 md:my-0">
                        <a href="../admin-jobs.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 hover:text-teal-300 no-underline border-b-2 hover:border-teal-300">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="post.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
                            <i class="fa fa-copy fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Posted Jobs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="analytic.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytic</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="applicant.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-teal-300 border-b-2 border-white border-teal-300">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Applicant</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="message.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
                            <i class="fa fa-comment-alt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Message</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0" disabled>
                        <a href="#_" class="block py-1 md:py-3 pl-1 align-middle no-underline text-gray-500 hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
                            <i class="uil uil-user-square fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">View Profile</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-12">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!--Console Content-->
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-3">
                <div class="grid lg:grid-cols-2 gap-4">
                <?php
                    if (mysqli_num_rows($result) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                            $applicant="SELECT * from applicants where job_id = ".$row['post_id'];
                    ?>
                    <div class="mt-10">
                        <div class="inline-block min-w-full bg-teal-100 overflow-hidden rounded-lg shadow-lg">
                            <div class="flex mt-5 items-center ml-4">
                                <div class="h-10 w-10 flex-shrink-0">
                                    <img class="h-full w-full rounded-full" src="../img/<?php echo $row['logo']?>" alt="" />
                                </div>
                                <div class="mt-5">
                                    <h1 class="ml-4 font-bold"><?php echo $row['job_title']?></h1>
                                </div>
                            </div>
                            <?php
                            if(isset($_POST['search']))
                            {
                                $valueToSearch = $_POST['valueToSearch'];
                                // $sql = "SELECT * FROM jobs_post INNER JOIN applicants ON jobs_post.post_id = applicants.apply_id WHERE CONCAT(`fname`, `date_applied`) LIKE '%".$valueToSearch."%'";
                                $query = "SELECT * FROM `applicants` INNER JOIN jobs_post WHERE CONCAT(`fname`, `date_applied`) LIKE '%".$valueToSearch."%'";
                                $search_result = filterTable($query);
                                
                            }
                            else {
                                $query = "SELECT * FROM `applicants` WHERE user_id = $user _id ";
                                $search_result = filterTable($query);
                            }
                            function filterTable($query)
                            {
                                $connect = mysqli_connect("localhost", "root", "", "propose");
                                $filter_Result = mysqli_query($connect, $query);
                                return $filter_Result;
                            }
                            ?>
                            <div class="pt-3 pl-3">
                                <input name="valueToSearch" type="text" class="border-2 border-teal-300 rounded-md pl-3 py-1 outline-none" placeholder="Search....">
                                <button name="search" type="submit"><i class="uil uil-search hover:text-lg"></i></button>
                            </div>
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th class="border-b-2 border-gray-200 bg-teal-100 px-5 py-3 text-left text-xs font-semibold font-bold uppercase tracking-wider text-gray-600">Name</th>
                                        <th class="border-b-2 border-gray-200 bg-teal-100 px-5 py-3 text-left text-xs font-semibold font-bold uppercase tracking-wider text-gray-600">....</th>
                                        <th class="border-b-2 border-gray-200 bg-teal-100 px-5 py-3 text-left text-xs font-semibold font-bold uppercase tracking-wider text-gray-600">....</th>
                                        <th class="border-b-2 border-gray-200 bg-teal-100 px-5 py-3 text-left text-xs font-semibold font-bold uppercase tracking-wider text-gray-600">....</th>
                                        <th class="border-b-2 border-gray-200 bg-teal-100 px-5 py-3 text-left text-xs font-semibold font-bold uppercase tracking-wider text-gray-600">Date Applied</th>
                                    </tr>
                                </thead>
                                    <tbody class="">
                                    <?php 
                                    $fetch_applicant_id=mysqli_query($conn,$applicant);

                                    if (mysqli_num_rows($fetch_applicant_id) > 0) {
                                    while($get_row = mysqli_fetch_array($fetch_applicant_id)) { 
                                    ?>
                                                    <tr class="">
                                                    <?php 
                                                        $applicant_list="SELECT * from user where user_id = ".$get_row['user_id'];
                                                        $query=mysqli_query($conn,$applicant_list);
                                                            if (mysqli_num_rows($query) > 0) {
                                                                while($fetch = mysqli_fetch_array($query)) {
                                                    ?>
                                                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                                <div class="flex items-center">
                                                                    <div class="h-10 w-10 flex-shrink-0">
                                                                        <img class="h-full w-full rounded-full" src="../img/<?php echo $fetch['pictures']?>" alt="" />
                                                                    </div>
                                                                    <div class="ml-3">
                                                                        <p class="whitespace-no-wrap text-gray-900"><?php echo $fetch['fname']?></p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                                <a href="view-user-profile.php?user=<?php echo $fetch['user_id'];?>&name=<?php echo $fetch['fname'];?>&email=<?php echo $fetch['email'];?>&add=<?php echo $fetch['Country']?>&cont=<?php echo $fetch['contact'];?>&mod=<?php echo $fetch['mode'];?>&type=<?php echo $fetch['type'];?>&about=<?php echo $fetch['about'];?>&pic=<?php echo $fetch['pictures'];?>" class="whitespace-no-wrap text-gray-900 hover:font-bold hover:text-teal-700">VIEW</a>
                                                            </td>
                                                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                                <button name="accept" type="submit" class="whitespace-no-wrap text-gray-900 hover:font-bold hover:text-green-700">ACCEPT</button>
                                                            </td>
                                                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                                <button name="decline" type="submit" class="whitespace-no-wrap text-gray-900 hover:font-bold hover:text-red-700">DECLINE</button>
                                                            </td>
                                                            <td class="border-b border-gray-200 bg-white px-5 py-5 text-sm">
                                                                <p class="whitespace-no-wrap text-gray-900"><?php echo $get_row['date_applied']?></p>
                                                            </td>
                                                        <?php
                                                                }
                                                            }
                                                        ?>
                                                    </tr>
                                            <?php
                                                    }
                                                }
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php
                        }
                    }
                ?>
                </div>
            </section>
            <!--/ Job Profile Catalog-->

        </div>


    </div>
    <!--/container-->

    <script>
        var modalparent = document.getElementsByClassName("modal_multi");

        // Get the button that opens the modal

        var modal_btn_multi = document.getElementsByClassName("myBtn_multi");

        // Get the <span> element that closes the modal
        var span_close_multi = document.getElementsByClassName("close_multi");

        // When the user clicks the button, open the modal
        function setDataIndex() {

            for (i = 0; i < modal_btn_multi.length; i++)
            {
                modal_btn_multi[i].setAttribute('data-index', i);
                modalparent[i].setAttribute('data-index', i);
                span_close_multi[i].setAttribute('data-index', i);
            }
        }



        for (i = 0; i < modal_btn_multi.length; i++)
        {
            modal_btn_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "block";
            };

            // When the user clicks on <span> (x), close the modal
            span_close_multi[i].onclick = function() {
                var ElementIndex = this.getAttribute('data-index');
                modalparent[ElementIndex].style.display = "none";
            };

        }

        window.onload = function() {

            setDataIndex();
        };

        window.onclick = function(event) {
            if (event.target === modalparent[event.target.getAttribute('data-index')]) {
                modalparent[event.target.getAttribute('data-index')].style.display = "none";
            }
        };
    /*Toggle dropdown list*/
    /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

    var userMenuDiv = document.getElementById("userMenu");
    var userMenu = document.getElementById("userButton");

    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");

    document.onclick = check;

    function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //User Menu
        if (!checkParent(target, userMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, userMenu)) {
                // click on the link
                if (userMenuDiv.classList.contains("invisible")) {
                    userMenuDiv.classList.remove("invisible");
                } else { userMenuDiv.classList.add("invisible"); }
            } else {
                // click both outside link and outside menu, hide menu
                userMenuDiv.classList.add("invisible");
            }
        }

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
            // click NOT on the menu
            if (checkParent(target, navMenu)) {
                // click on the link
                if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                } else { navMenuDiv.classList.add("hidden"); }
            } else {
                // click both outside link and outside menu, hide menu
                navMenuDiv.classList.add("hidden");
            }
        }

    }

    function checkParent(t, elm) {
        while (t.parentNode) {
            if (t == elm) { return true; }
            t = t.parentNode;
        }
        return false;
    }
    </script>

</body>

</html>