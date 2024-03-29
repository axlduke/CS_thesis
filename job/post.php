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
        $email = $row['email'];
        $about = $row['about'];
        $company = $row['company'];
        require_once('../auth/db.php');
        if($_SESSION['type']== 3){
        }
        else{
            header('location: ../login.php');
        }
    }
    $jobs_posted="SELECT * from jobs_post where employer_id = ".$_SESSION['user_id'];
    $results=mysqli_query($conn,$jobs_posted);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
                            <img class="w-8 h-8 rounded-full mr-4" src="../img/<?= $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block"><?= $fname ?> </span>
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
                                <li><a href="../auth/logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
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
                        <a href="post.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-teal-300 border-b-2 border-white border-teal-300">
                            <i class="fa fa-copy fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Posted Jobs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="analytic.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytic</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="applicant.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-gray-500 hover:text-teal-300 border-b-2 border-white hover:border-teal-300">
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
                <!-- <label for="table-search" class="sr-only">Search</label> -->
                <div class="flex relative mt-1 py-3 ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-white dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>

                    <input id="myInput" type="text" onkeyup="filterTextInput()" class="bg-gray-50 border-2 border-teal-300 text-gray-900 text-sm rounded-lg block w-80 pl-10 p-2.5 outline-none" placeholder="Search Position...">
                        <button class="myBtn_multi ml-2 hover:text-teal-600 hover:bg-teal-300 transition duration-700 ease-in-out p-2 hover:rounded-md">
                            <a href="#_" class="text-xs md:text-md lg:text-xl">Create Post</a>
                        </button>


                        <form action="post_action.php" method="post" role="form" enctype="multipart/form-data">

                            <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div class="bg-gray-400 border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                                        Create Job Post
                                                    </h5>
                                                    <button type="button" class="close close_multi text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                    </button>
                                                </div>
                                                <div class="border-t border-gray-200">
                                                    <dl>
                                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Job Title 1</dt>
                                                            <input name="job_title" type="text" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 p-2 border border-gray-300" required>
                                                        </div>
                                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Role</dt>
                                                            <input name="job_experience" type="text" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 p-2 border border-gray-300" required>
                                                        </div>
                                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Qualifications</dt>
                                                            <input name="job_qualification" type="text" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 p-2 border border-gray-300" required>
                                                        </div>
                                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">About</dt>
                                                            <input name="job_about" type="text" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0 p-2 border border-gray-300" required>
                                                        </div>
                                                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">logo</dt>
                                                            <input name="job_logo" type="file" class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0" required>
                                                        </div>
                                                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dt class="text-sm font-medium text-gray-500">Create: </dt>
                                                            <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                <div class="da">
                                                                    <button name="post" type="submit" class="p-3 rounded-md hover:bg-teal-400 hover:text-teal-600 ease-in-out duration-500">Save</button>
                                                                </div>
                                                            </dd>
                                                        </div>
                                                    </dl>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 lg:gap-2">
                        <?php
                        // $job_company = $row['company'];
                        while($row = $results -> fetch_assoc()){
                            $post_id = $row['post_id'];
                            // $job_company = $row['company'];
                            $logo = $row['logo'];
                        ?>
                    <div id="list-of-divs">
                        <div data-content="<?php echo $row['job_title']?>" class="div flex w-80 cursor-pointer hover:bg-gray-50 flex-col items-center justify-center rounded-lg bg-white shadow-lg">
                            <div class="mb-2 flex items-center space-x-4">
                                <img class="ml-2 w-10 rounded-full" src="../img/<?= $logo?>" alt="logo" />
                                <div>
                                    <h1 class="mb-1 py-3 text-sm md:text-md lg:text-xl font-bold text-gray-700"><?php echo $row['job_title']?></h1>
                                </div>
                                <button class="myBtn_multi">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition duration-200 hover:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                    </svg>
                                </button>
                                <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto">
    
    
                                    <form action="update_post.php" method="post" role="form">
    
                                        <div class="modal-content mx-auto max-w-md bg-white py-5 px-5 rounded-md shadow-lg">
                                            <div class="flex items-center space-x-5">
                                                <img src="../img/<?php echo $row['logo']?>" class="flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-full bg-yellow-200 font-mono text-2xl text-yellow-500" />
                                                <div class="block self-start pl-2 text-xl font-semibold text-gray-700">
                                                <h2 class="leading-relaxed">Update Jobs Information</h2>
                                                <!-- <p class="text-sm font-normal leading-relaxed text-gray-500">Job title</p> -->
                                                </div>
                                            </div>
                                            <div class="divide-y divide-gray-200">
                                                <div class="space-y-4 py-8 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Job Title</label>
                                                    <input name="job_title" type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" value="<?php echo $row['job_title']?>"/>
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Company Name</label>
                                                    <input name="job_company" type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" value="<?php echo $row['job_company']?>">
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Job Experience</label>
                                                    <input name="job_experience" type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" value="<?php echo $row['job_experience']?>">
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Job Qualification</label>
                                                    <input name="job_qualification" type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" value="<?php echo $row['job_qualification']?>">
                                                </div>
                                                <div class="flex flex-col">
                                                    <label class="leading-loose">Job Description</label>
                                                    <input name="job_about" type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" value="<?php echo $row['job_about']?>" />
                                                    <input name="post_id" type="text" class="hidden" value="<?php echo $row['post_id']?>">
                                                </div>
                                                </div>
                                                <div class="flex items-center space-x-4 pt-4">
                                                    <!-- <button type="btn" class="close close_multi flex w-full items-center justify-center rounded-md px-4 py-3 text-gray-900 focus:outline-none">
                                                        <svg class="mr-3 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel
                                                    </button> -->
                                                    <button name="updateform" type="submit" class="close close_multi flex w-full items-center justify-center rounded-md hover:bg-teal-400 transition eas-in-out duration-500 px-4 py-3 text-teal-700 focus:outline-none">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                
    
                            </div>
                                <div id="myList" class="px-5 pb-5">
                                <p style="overflow: hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 5; 
                                    -webkit-box-orient: vertical;"><?php echo $row['job_about']?></p>
                                </div>
                            <div>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                </div>
            </section>
        </div>


    </div>
    <!--/container-->
    
    <script>
        function filterTextInput() {
            var input, radios, radio_filter, text_filter, td0, i, divList;
            input = document.getElementById("myInput");
            text_filter = input.value.toUpperCase();
            divList = $(".div");
                
            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < divList.length; i++) {
                td0 = divList[i].getAttribute('data-content');
                if (td0) {
                if (td0.toUpperCase().indexOf(text_filter) > -1) {
                    divList[i].style.display = "";
                } else {
                    divList[i].style.display = "none";
                }
                } 
            }
        }
    </script>

    
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
