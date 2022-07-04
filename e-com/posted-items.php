<?php
    session_start();
    include "../auth/db.php";
    
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
    }
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
                    Item List
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
                                <li><a href="seller-profile.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
                                <li>
                                    <hr class="border-t mx-2 border-gray-400">
                                </li>
                                <li><a href="../logout.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">Logout</a></li>
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
                        <a href="../admin-seller.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline hover:text-blue-600 border-b-2 border-white hover:border-blue-600">
                            <i class="fas fa-home fa-fw mr-3 hover:text-blue-400"></i><span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="seller-order.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="uil uil-shopping-cart fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Orders</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="posted-items.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-orange-400 border-b-2 border-white border-orange-400">
                            <i class="uil uil-clipboard-notes fa-fw mr-3 text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Items</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#_" class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="uil uil-comment-question fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Support</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!-- Start of E-commerce -->
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 mt-28">
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
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Items...">
                    <button class="myBtn_multi ml-3 bg-blue-500 text-white rounded-md hover:text-white hover:bg-blue-700 p-2 cursor-pointer">
                        Create Post
                    </button>
                    <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto">
                        <div class="modal-content mx-auto max-w-md bg-white py-5 px-5 rounded-md shadow-lg">
                            <div class="divide-y divide-gray-200">
                                <div class="space-y-4 py-8 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose">Product Name</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="Product Name" />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Price</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="₱2,000" />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Color</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="Color" />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Brand</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="Description" />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Quantity</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="5" />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Product Description</label>
                                    <input type="text" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, suscipit pariatur at rerum neque in repellat optio dolorem rem provident." />
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose">Images</label>
                                    <input type="file" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm"/>
                                    <input type="file" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm"/>
                                    <input type="file" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm"/>
                                    <input type="file" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm"/>
                                    <input type="file" class="w-full rounded-md border border-gray-300 px-4 py-2 text-gray-600 focus:border-gray-900 focus:outline-none focus:ring-gray-500 sm:text-sm"/>
                                </div>
                                </div>
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
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-1 mt-5">
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
                </div>
                <!-- Pagination Start -->
                <div class="flex justify-center py-4">
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
                </div>
                <!-- Pagination End -->
            </section>
            <!--/ Job Profile Catalog-->

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
