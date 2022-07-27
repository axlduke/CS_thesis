Skip to content
Search or jump to…
Pulls
Issues
Marketplace
Explore
 
@axlduke 
axlduke
/
CS_thesis
Public
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
More
CS_thesis/job/applicant.php /
@axlduke
axlduke umay
Latest commit ab414f4 2 days ago
 History
 2 contributors
@axlduke@AEArtemis
458 lines (399 sloc)  28 KB

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
                                <li><a href="#" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
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
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-12">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!--Console Content-->
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-3">
                <label for="table-search" class="sr-only">Search</label>
                <div class="flex relative mt-1 py-3 ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Position...">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                            $applicant="select * from applicants where job_id = ".$row['post_id'];
                    ?>
                    <div class="mr-3 flex w-80 cursor-pointer flex-col items-center justify-center rounded-lg bg-white shadow-lg">

                        <div class="mb-2 flex items-center space-x-4">
                            <img class="ml-2 w-10 rounded-full" src="../img/<?php echo $row['logo']?>" alt="logo" />
                            <div>
                                <h1 class="mb-1 py-3 text-xl font-bold text-gray-700"><?php echo $row['job_title']?></h1>
                            </div>
                            <button class="myBtn_multi">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition duration-200 hover:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                            <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-7 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto">  
                                <div class="modal-content mx-auto max-w-md bg-white py-5 px-5 rounded-md shadow-lg">
                                    <div class="flex items-center space-x-5">
                                        <img src="../img/<?php echo $row['logo']?>" class="flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-full bg-yellow-200 font-mono text-2xl text-yellow-500" />
                                        <div class="block self-start pl-2 text-xl font-semibold text-gray-700">
                                        <h2 class="leading-relaxed"><?php echo $row['job_title']?></h2>
                                        <p class="text-sm font-normal leading-relaxed text-gray-500">Job title</p>
                                        </div>
                                    </div>
                                    <div class="divide-y divide-gray-200">
                                        <body class="antialiased font-sans bg-gray-200">
                                            <div class="container mx-auto px-4 sm:px-8">
                                                <div class="py-8">
                                                    <div>
                                                        <h2 class="text-2xl font-semibold leading-tight">Applicants List</h2>
                                                    </div>
                                                    <div class="my-2 flex sm:flex-row flex-col">
                                                        <div class="flex flex-row mb-1 sm:mb-0">
                                                            <div class="relative">
                                                                <select
                                                                    class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                                    <option>5</option>
                                                                    <option>10</option>
                                                                    <option>20</option>
                                                                </select>
                                                                <div
                                                                    class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="block relative">
                                                            <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                                                <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                                                    <path
                                                                        d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                            <input placeholder="Search"
                                                                class="appearance-none rounded-r rounded-l sm:rounded-l-none border border-gray-400 border-b block pl-8 pr-6 py-2 w-full bg-white text-sm placeholder-gray-400 text-gray-700 focus:bg-white focus:placeholder-gray-600 focus:text-gray-700 focus:outline-none" />
                                                        </div>
                                                    </div>
                                                    <div class="-mx-4 h-80 overflow-y-auto sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                                                        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                                            <table class="min-w-full leading-normal">
                                                                <thead>
                                                                    <tr>
                                                                        <th
                                                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                            Name
                                                                        </th>
                                                                        <th
                                                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                                            Date Applied
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php 
                                                                    $fetch_applicant_id=mysqli_query($conn,$applicant);

                                                                    if (mysqli_num_rows($fetch_applicant_id) > 0) {
                                                                    while($get_row = mysqli_fetch_array($fetch_applicant_id)) { 
                                                                    ?>                                                                   
                                                                    <tr>
                                                                        <?php 
                                                                            $applicant_list="select * from user where user_id = ".$get_row['user_id'];
                                                                            $query=mysqli_query($conn,$applicant_list);
                                                                                if (mysqli_num_rows($query) > 0) {
                                                                                    while($fetch = mysqli_fetch_array($query)) {
                                                                        ?>
                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                            <div class="flex items-center">
                                                                                <div class="flex-shrink-0 w-10 h-10">
                                                                                    <img class="w-full h-full rounded-full"
                                                                                        src="../img/<?php echo $fetch['pictures']?>"
                                                                                        alt="" />
                                                                                </div>
                                                                                <div class="ml-3">
                                                                                    <p class="text-gray-900 whitespace-no-wrap">
                                                                                        
                                                                                        <?php echo $fetch['fname'];} }?>

                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                                            <p class="text-gray-900 whitespace-no-wrap">
                                                                                <?php echo $get_row['date_applied'];?>
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                            }
                                                                        } 
                                                                    ?>
                                                                </tbody>

                                                            </table>
                                                            <div
                                                                class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                                                                <span class="text-xs xs:text-sm text-gray-900">
                                                                    Showing 1 to 4 of 50 Entries
                                                                </span>
                                                                <div class="inline-flex mt-2 xs:mt-0">
                                                                    <button
                                                                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                                                        Prev
                                                                    </button>
                                                                    <button
                                                                        class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                                                        Next
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </body>
                                        <div class="flex items-center space-x-4 pt-4">
                                            <button class="close close_multi flex w-full items-center justify-center rounded-md px-4 py-3 text-gray-900 focus:outline-none">
                                                <svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                                            </button>
                                            <button class="flex w-full items-center justify-center rounded-md bg-blue-500 px-4 py-3 text-white focus:outline-none">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="px-5 pb-6" maxlength='20'><?php echo $row['job_about']?></p>
                        <div>

                </div>
                </div>  
                        <?php
                        }
                        ?>

                        <?php
                        }
                        ?> 
            </section>
            <!--/ Job Profile Catalog-->

        </div>


    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow">
        <div class="container max-w-md mx-auto flex py-8">

            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full md:w-1/2 ">
                    <div class="px-8">
                        <h1 class="font-bold font-bold text-gray-900">DWCL BS - Computer Science 4</h1>
                        <h3 class="font-bold font-bold text-gray-900">Developer</h3>
                        <p class="py-4 text-gray-600 text-sm">
                            Ace Malto <br>
                            Mark Limpo
                        </p>
                    </div>
                </div>

                <div class="flex w-full md:w-1/2">
                    <div class="px-8">
                        <h3 class="font-bold font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center text-sm pt-3">
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1" href="#">Facebook</a>
                            </li>
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1" href="#">Instagram</a>
                            </li>
                            <li>
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:underline py-1" href="#">LinkedIn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

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