<?php
    session_start();
    include "../auth/db.php";
    
    if (!isset($_SESSION['user_id'])){
		echo '<script>window.alert("PLEASE LOGIN FIRST!!")</script>';
		echo '<script>window.location.replace("login.php");</script>';
	}
    $user_id = $_SESSION['user_id'];
    $sql_query = "SELECT * FROM user WHERE type = 1";
    $result = $conn->query($sql_query);
    while($row = $result->fetch_array()){
        $user_id = $row['user_id'];
        $fname = $row['fname'];
        $contact = $row['contact'];
        $pictures = $row['pictures'];
    }

    $item = $_GET["item"];
    $seller = $_GET["seller"];
    $product = $_GET["product"];
    $quantity = $_GET["quantity"];
    $price = $_GET["price"];
    $desc = $_GET["desc"];
    $cat = $_GET["cat"];
    $fee = $_GET["fee"];
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    $d = $_GET["d"];
    $e = $_GET["e"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Item-view</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="../dist/output.css" rel="stylesheet">

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold px-3" href="#">
                    E-commerce
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="../img/<?php echo $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block"><?php echo $fname?> </span>
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
                        <a href="../main.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-orange-400 border-b-2 hover:border-orange-400">
                            <i class="fas fa-home fa-fw mr-3 "></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="cart.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="fa fa-shopping-cart fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Cart</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto mt-20 pb-13">
        <div class="px-6 flex container">
            <div class="items-center">
                <div class="grid grid-rows-3 bg-white lg:grid-rows-2 grid-flow-col gap-4 py-10 px-5 lg:px-20 lg:h-[50rem] h-[50rem]">
                    <img id="feature" src="../img/<?php echo $a?>" class="py-6 aspect-square w-[45rem] lg:w-[26rem] lg:aspect-square" alt="item-photo">
                    <div class="grid grid-cols-4 lg:grid-cols-4 lg:w-[26rem] -mt-40 lg:-mt-32 lg:px-5 -mb-10 mb-20">
                        <div class="mt-24 lg:mt-48 w-16 h-16 lg:w-20 lg:h-20 opacity-50 hover:opacity-100 lg:opacity-50  lg:hover:opacity-100">
                            <img class="thumbnail active rounded-md" src="../img/<?php echo $b?>" alt="item-photo">
                        </div>
                        <div class="mt-24 lg:mt-48 w-16 h-16 lg:w-20 lg:h-20 opacity-50 hover:opacity-100 lg:opacity-50  lg:hover:opacity-100">
                            <img class="thumbnail active rounded-md" src="../img/<?php echo $c?>" alt="item-photo">
                        </div>
                        <div class="mt-24 lg:mt-48 w-16 h-16 lg:w-20 lg:h-20 opacity-50 hover:opacity-100 lg:opacity-50  lg:hover:opacity-100">
                            <img class="thumbnail active rounded-md" src="../img/<?php echo $d?>" alt="item-photo">
                        </div>
                        <div class="mt-24 lg:mt-48 w-16 h-16 lg:w-20 lg:h-20 opacity-50 hover:opacity-100 lg:opacity-50  lg:hover:opacity-100">
                            <img class="thumbnail active rounded-md" src="../img/<?php echo $e?>" alt="item-photo">
                        </div>
                    </div>
                    <dl class="items lg:mt-5 -mt-16">
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-52 text-sm font-medium text-gray-500">Product Name</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $product?></dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-52 text-sm font-medium text-gray-500">Price</dt>
                        <dd class="mt-1 text-sm text-orange-400 sm:col-span-2 sm:mt-0"><?php echo number_format($price, 2, '.', ',')?></dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-52 text-sm font-medium text-gray-500">Color</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"></dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-52 text-sm font-medium text-gray-500">Brand</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $product?></dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-52 text-sm font-medium text-gray-500">Quantity</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">-<?php echo $quantity?> + </dd>
                        <!-- <dd class="lg:ml-[22rem] mt-1 text-sm text-gray-400 sm:col-span-2 sm:mt-0">49 piecese available</dd> -->
                        <dt class="lg:ml-40 text-sm font-medium text-gray-500">
                            <button class="border border-2 border-red-600 text-red-600 bg-red-200 hover:bg-red-300 py-3 px-3"><i class="uil uil-shopping-cart"></i>
                            <a href="e-com/item-view.php?item=<?php echo $item ?>&seller=<?php echo $seller ?>&product=<?php echo $product ?>&quantity=<?php echo $quantity ?>&price=<?php echo $price ?>&desc=<?php echo $desc ?>&cat=<?php echo $cat ?>&fee=<?php echo $fee ?>&a=<?php echo $a ?>&b=<?php echo $b ?>&c=<?php echo $c ?>&d=<?php echo $d ?>&e=<?php echo $e ?>">Add Cart</a>
                            </button>
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <button class="border border-2 border-red-600 text-white bg-red-600 hover:bg-red-800 py-3 px-3">
                                <a href="">Buy Now</a>
                            </button>
                        </dd>
                        </div>
                        <div class="px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="lg:ml-40 text-sm font-medium text-gray-500">Product Description</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"><?php echo $desc?>
                        </dd>
                        </div>
                    </dl>
                </div>      
                
                <div class="bg-gray-100 max-w-full rounded-md py-5 sm:grid mt-5 sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dd class="mt-1 text-sm bg-white text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                            <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                                <div class="flex w-0 flex-1 items-center">
                                <!-- Heroicon name: solid/paper-clip -->
                                <img src="../img/prof1.jpg" class="w-14 lg:w-18 rounded-full" alt="">
                                <span class="px-3 w-0 flex-1 truncate">Mac Power </span>
                                </div>
                                <div class="ml-4 flex-shrink-0">
                                <a href="#" class="font-medium text-indigo-600 border border-red-500 p-1 mr-1 hover:text-indigo-500"> ViewShop </a>
                                <a href="#" class="font-medium text-red-500 border border-red-500 p-1 hover:text-indigo-500"> Message </a>
                                </div>
                            </li>
                        </ul>
                    </dd>
                </div>

                <div class="bg-gray-100 max-w-full rounded-md py-5 sm:grid -mt-2 sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dd class="mt-1 px-5 py-5 text-sm antialiased bg-white text-gray-900 sm:col-span-2 sm:mt-0">
                        <h2 class="px-3 py-3">Product Rating</h2>
                        <p class="px-3 text-2xl text-orange-400">5.0 out of 5</p>
                        <div class="flex items-center px-3 py-2 mb-3">
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        </div>
                        <p class="text-sm font-medium px-3 py-2 text-gray-500 dark:text-gray-400">1,745 overall ratings</p>
                        <hr class="py-3">
                        <div class="mb-3">
                            <div class="flex items-center justify-between">
                                <img src="../img/prof1.jpg" class="w-12 lg:w-18 rounded-full" alt="">
                                <p class="px-3 w-0 flex-1 truncate">Ace Malto</p>
                            </div>
                            <span class="text-sm px-3 w-0 ml-11 flex-1 text-gray-400 truncate">2022-03-09</span>
                            <p class="px-3 py-3 lg:px-16">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa doloribus consequatur laboriosam, distinctio maxime atque ut, nostrum nemo iusto deleniti cupiditate accusantium at, iure suscipit minima a obcaecati. Reiciendis, mollitia?</p>
                            <div class="grid grid-cols-3 gap-1 lg:grid-cols-3 lg:ml-12 lg:w-[26rem] lg:h-auto mb-3">
                                <div class="w-24 lg:w-36 px-3">
                                    <img src="../img/shoes2.jpg" alt="item-photo">
                                </div>
                                <div class="w-24 lg:w-36 px-3">
                                    <img src="../img/shoes3.jpg" alt="item-photo">
                                </div>
                                <div class="w-24 lg:w-36 px-3">
                                    <img src="../img/shoes4.jpg" alt="item-photo">
                            </div>
                        </div>
                    </dd>
                </div>
            </div>
            <!-- <dl class="">
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Product Name</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Price</dt>
                <dd class="mt-1 text-sm text-orange-400 sm:col-span-2 sm:mt-0">₱22,490 - ₱24,490</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Color</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Starlight Aluminum, Blue Aluminum, Green Aluminum <br> Midnight Aluminum, Red Aluminum</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">Quantity</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">- 1 + </dd>
                <dd class="mt-1 text-sm text-gray-400 sm:col-span-2 sm:mt-0">49 piecese available</dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-500">About</dt>
                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">Attachments</dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-gray-200 rounded-md border border-gray-200">
                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                            <div class="flex w-0 flex-1 items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 w-0 flex-1 truncate"> resume_back_end_developer.pdf </span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                            </div>
                        </li>
                        <li class="flex items-center justify-between py-3 pl-3 pr-4 text-sm">
                            <div class="flex w-0 flex-1 items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                            </svg>
                            <span class="ml-2 w-0 flex-1 truncate"> coverletter_back_end_developer.pdf </span>
                            </div>
                            <div class="ml-4 flex-shrink-0">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500"> Download </a>
                            </div>
                        </li>
                        </ul>
                    </dd>
                </div>
            </dl> -->
        </div>
    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow mt-3">
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

    // Customized Carousel card for item view like shopee

    let thumbnails = document.getElementsByClassName('thumbnail');
    let activeImages = document.getElementsByClassName('active');
    for(var i = 0; i < thumbnails.length; i++){
        thumbnails[i].addEventListener('mouseover', function(){
            /*
            if (activeImages.length > 0) {
                activeImages[0].classList.remove('active');
            }
            */
            this.classList.add('active')
            document.getElementById('feature').src = this.src;
        })
    }
    </script>

</body>

</html>
