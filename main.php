<?php
    session_start();
    include "auth/db.php";
    
    if (!isset($_SESSION['user_id'])){
		echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
		echo '<script>window.location.replace("login.php");</script>';
	}
    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM user WHERE user_id ='$user_id'";
    $result = $conn->query($sql_query);
    while($row = $result->fetch_array()){
        $user_id = $row['user_id'];
        $fname = $row['fname'];
        $contact = $row['contact'];
        $pictures = $row['pictures'];
        require_once('auth/db.php');
        if($_SESSION['type']==1){
        }
        else{
            header('location: login.php');
        }
            if(!isset($_SESSION['user_id'])){
                header('location: login.php');
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css">
    <script src="js/tab.js" defer></script>


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">

        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold px-3" href="#">
                    JobEcom
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="img/<?php echo $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block font-bold"><?php echo $fname?></span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible ease-in-out duration-500">
                            <ul class="list-reset">
                                <li><a href="profile.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="auth/logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
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
                        <a href="main.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-blue-400 border-b-2 border-white border-blue-400 ease-in-out duration-500">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="e-com/cart.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400 ease-in-out duration-500">
                            <i class="fa fa-shopping-cart fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Cart</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Container-->
    <div class="container w-full mx-auto pt-20">
        <div class="w-full md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <ul class="tabs flex justify-center items-center bg-white">
                <li  class="px-4 py-5 lg:-ml-[60rem] lg:mr-32">
                    <h1 class="lg:text-2xl xl:ml-44 text-blue-400 leading-tight mb-2">
                        JobEcom
                    </h1>
                </li>
                <li data-tab-target="#job" class="active tab mx-2 cursor-pointer hover:bg-blue-400 rounded-md ease-in-out duration-500">
                    <h1 class="lg:text-lg text-black hover:text-blue-600 leading-tight px-2 py-2 ease-in-out duration-500">
                        Jobs Portal
                    </h1>
                </li>
                <li data-tab-target="#e-com" class="tab mx-2 cursor-pointer hover:bg-blue-400 rounded-md ease-in-out duration-500">
                    <h1 class="lg:text-lg text-black hover:text-blue-600 leading-tight px-2 py-2 ease-in-out duration-500">
                        E-commerce
                    </h1>
                </li>
            </ul>
        </div>
    </div>

    <!-- Jobs Part -->
    <main class="tab-content">
        <div id="job" data-tab-content class="active">
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-3">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    <?php
                    $post = "SELECT * from jobs_post";
                    $results=mysqli_query($conn, $post);
                    while($row=mysqli_fetch_array($results)){
                    ?>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img src="img/<?php echo $row['logo']?>" class="flex h-14 w-14 flex-shrink-0 items-center justify-center rounded-full bg-yellow-200 font-mono text-2xl text-yellow-500" />
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold"><?php echo $row['job_company']?></p>
                            <p class="text-base text-gray-400 font-normal"><?php echo $row['job_title']?></p>
                            <button class="myBtn_multi hover:bg-blue-400 hover:text-blue-600 text-base text-black p-1 rounded-md mt-4 ease-in-out duration-500">
                                <a href="#_" class="p-1">
                                    View 
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div class="bg-gray-400 border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                                            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                                    <?php echo $row['job_title']?>
                                                </h5>
                                                <button type="button" class="close close_multi text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                                </div>
                                                <div class="border-t border-gray-200">
                                                <dl>
                                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">Company Name</dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $row['job_company']?></dd>
                                                    </div>
                                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">Job Description</dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $row['job_about']?></dd>
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">Job Experience</dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $row['job_experience']?></dd>
                                                    </div>
                                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                        <dt class="text-sm font-medium text-gray-500">Qualifications</dt>
                                                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $row['job_qualification']?></dd>
                                                    </div>
                                                    <form action="job/apply-auth.php" method="post" role="form">
                                                        <div class="flex justify-center bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                            <dd class=" mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                                                <div class="da">
                                                                    <input name="employer_id" class="hidden" type="text" value="<?php echo $row['employer_id']?>">
                                                                    <input name="job_id" class="hidden" type="text" value="<?php echo $row['post_id']?>">
                                                                    <input name="user_id" class="hidden" type="text" value="<?php echo $user_id?>">
                                                                    <input name="fname" class="hidden" type="text" value="<?php echo $fname;?>">
                                                                    <button name="apply" type="submit" class="items-center p-3 rounded-md hover:bg-blue-400 ease-in-out duration-500">Apply</button>
                                                                </div>
                                                            </dd>
                                                        </div>
                                                    </form>
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                                }
                        
                    ?>
                    

                </div>
            </section>
        </div>
        <!-- End Jobs -->

        <!-- Ecommerce Start -->
        <div id="e-com" data-tab-content>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-2 px-10 mb-5">
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-md lg:text-2xl font-bold text-gray-900 text-orange-500">₱59,990</span>
                                <span href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://dlcdnwebimgs.asus.com/gain/A654A144-0A8F-4D73-AB7A-464ADA58041B" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">
                                ROG - ASUS 2021 ROG Strix G15 G513 | Gaming Laptops</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-md lg:text-2xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>     
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://theaxo.com/wp-content/uploads/2020/06/1-1-1024x679.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">
                                Acer Nitro 5 And Predator Triton 500 Refreshed With Intel 10th Gen</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱59,999</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://w7.pngwing.com/pngs/217/10/png-transparent-laptop-video-card-dell-alienware-intel-core-i7-alienware-electronics-computer-computer-wallpaper.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">
                                Laptop Video card Dell Alienware Intel Core i7, Alienware, electronics</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱98,545</span>
                                <span href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="max-w-sm rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                    <a href="#">
                        <img class="rounded-t-lg p-5 aspect-square w-full" src="https://flowbite.com/docs/images/products/product-1.png" alt="product image" />
                        <div class="px-5 pb-5">
                            <h3 class="text-sm lg:text-xl font-semibold tracking-tight text-gray-900 dark:text-white truncate">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h3>
                            <!-- <div class="mt-2.5 mb-5 flex items-center">
                                <svg class="h-5 w-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="mr-2 ml-3 rounded bg-blue-100 px-2.5 py-0.5 text-xs font-semibold text-blue-800 dark:bg-blue-200 dark:text-blue-800">5.0</span>
                            </div> -->
                            <div class="flex items-center justify-between">
                                <span class="text-sm lg:text-xl font-bold text-gray-900 text-orange-500">₱599</span>
                                <a href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white">15 sold</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <!-- <div class="flex justify-center py-4">
            <nav aria-label="Page navigation example">
                <ul class="flex list-style-none">
                    <li class="page-item disabled"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-500 pointer-events-none focus:shadow-none"
                        href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                    <li class="page-item active"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-blue-600 outline-none transition-all duration-300 rounded text-white hover:text-white hover:bg-blue-600 shadow-md focus:shadow-md"
                        href="#">1</a></li>
                    <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">2</a></li>
                    <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">3</a></li>
                    <li class="page-item"><a
                        class="page-link relative block py-1.5 px-3 rounded border-0 bg-transparent outline-none transition-all duration-300 rounded text-gray-800 hover:text-gray-800 hover:bg-gray-200 focus:shadow-none"
                        href="#">Next</a></li>
                </ul>
            </nav>
        </div> -->


    </main>
    <!-- E-commerce End -->
    
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

            for (i = 0; i < modal_btn_multi.length; i++){
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

    // PRINT
    function printContent(el){
        var restorepage = $('body').html();
        var printcontent = $('#' + el).clone();
        $('body').empty().html(printcontent);
        window.print();
        $('body').html(restorepage);
    }
    </script>

</body>

</html>