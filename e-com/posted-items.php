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
                        <a href="../admin-seller.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="fas fa-home fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Dashboard</span>
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
                        <a href="invoice.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-gray-400 hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="uil uil-receipt fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Invoice</span>
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
                    <form action="" method="post">
                        <div class="flex modal modal_multi fade fixed hidden top-0 left-0 h-full w-full px-5 py-20 outline-none sm:py-32 lg:py-20 lg:mt-10">
                            <div class="modal-content mx-auto w-[80rem] rounded-md bg-white py-5 px-5 shadow-lg">
                                <div class="divide-gray-200">
                                    <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2 text-base leading-6 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Product Name</div>
                                            <input name="productName" type="text" class="border border-gray-300 rounded-md pl-3">
                                        </div>
                                        <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Product Description</div>
                                            <input name="productDes" type="text" class="border border-gray-300 rounded-md pl-3">
                                        </div>
                                        <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Categories</div>
                                            <input list="categories" name="category" class="border border-gray-300 rounded-md pl-3" placeholder="Search...">
                                            <datalist id="categories">
                                                <option value="women clothes">
                                                <option value="men clothes">
                                                <option value="beauty">
                                                <option value="health">
                                                <option value="fashion accessories">
                                                <option value="home appliances">
                                                <option value="men shoes">
                                                <option value="mobile & gadget">
                                                <option value="travel & luggage">
                                                <option value="women bags">
                                                <option value="women shoes">
                                                <option value="men bags">
                                                <option value="watches">
                                                <option value="audio">
                                                <option value="food & beverage">
                                                <option value="pets">
                                                <option value="mom & baby">
                                                <option value="baby & kids fashion">
                                                <option value="gaming & consoles">
                                                <option value="cameras & drones">
                                                <option value="home & living">
                                                <option value="sports & outdoors">
                                                <option value="stationary">
                                                <option value="hobbies & collections">
                                                <option value="automobiles">
                                                <option value="motorcycles">
                                                <option value="books & magazines">
                                                <option value="computers & accessories">
                                            </datalist>
                                        </div>
                                        <div class="grid lg:grid-cols-3 grid-cols-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Weight</div>
                                            <input name="weight" type="text" class="border border-gray-300 rounded-md pl-3" placeholder="max 50kg">
                                            <input list="kilo" name="shippingFee" class="border border-gray-300 rounded-md pl-1" placeholder="W ≥ F">
                                            <datalist id="kilo">
                                                <option value="100 = 10kg">
                                                <option value="200 = 20kg">
                                                <option value="300 = 30kg">
                                                <option value="400 = 40kg">
                                                <option value="500 = 50kg">
                                            </datalist>
                                        </div>
                                        <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Quantity</div>
                                            <input name="quantity" type="text" class="border border-gray-300 rounded-md pl-3">
                                        </div>
                                        <div class="grid lg:grid-cols-2 grid-cols-1 py-2 py-2">
                                            <div class="px-4 py-2 font-semibold text-sm">Price</div>
                                            <input name="price" type="text" class="border border-gray-300 rounded-md pl-3">
                                        </div>
                                    </div>
                                    <div class="grid lg:grid-cols-4 grid-cols-1 py-2">
                                        <div class="grid-cols-4 relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> 
                                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                                <i class="uil uil-image text-gray-300 text-4xl"></i>
                                                <span class="block text-gray-400 font-normal">or</span>
                                                
                                                <span class="block text-blue-400 font-normal">Browse files</span>
                                                
                                                </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="permit">
                                        </div>
                                        <div class="grid-cols-4 relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> 
                                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                                <i class="uil uil-image text-gray-300 text-4xl"></i>
                                                <span class="block text-gray-400 font-normal">or</span>
                                                
                                                <span class="block text-blue-400 font-normal">Browse files</span>
                                                
                                                </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="permit">
                                        </div>
                                        <div class="grid-cols-4 relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> 
                                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                                <i class="uil uil-image text-gray-300 text-4xl"></i>
                                                <span class="block text-gray-400 font-normal">or</span>
                                                
                                                <span class="block text-blue-400 font-normal">Browse files</span>
                                                
                                                </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="permit">
                                        </div>
                                        <div class="grid-cols-4 relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> 
                                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                                <i class="uil uil-image text-gray-300 text-4xl"></i> 
                                                <span class="block text-gray-400 font-normal">or</span>
                                                
                                                <span class="block text-blue-400 font-normal">Browse files</span>
                                                
                                                </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="permit">
                                        </div>
                                        <div class="grid-cols-4 relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> 
                                                <i class="fa fa-cloud-upload fa-3x text-gray-200"></i> 
                                                <i class="uil uil-image text-gray-300 text-4xl"></i> 
                                                <span class="block text-gray-400 font-normal">or</span>
                                                
                                                <span class="block text-blue-400 font-normal">Browse files</span>
                                                
                                                </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="permit">
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
                    </form>
                </div>
            </section>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="flex justify-center mb-3">
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Items...">
                    <button class="myBtn_multi ml-3 bg-blue-500 text-white rounded-md hover:text-white hover:bg-blue-700 p-2 cursor-pointer">
                        Create Post
                    </button>
                </div>
                <div class="mb-5 flex justify-center">
                    <div class="flex max-w-full">
                        <table class="table-auto bg-white px-5"> 
                        <thead class="">
                            <tr class="bg-slate-700">
                            <th class="py-5 lg:px-28"><i class="uil uil-bars text-white">Order ID</i></th>
                            <th class="py-5 lg:px-28"><i class="uil uil-calendar-alt text-white">Order Date</i></th>
                            <th class="py-5 lg:px-28"><i class="uil uil-shopping-bag text-white">View</i></th>
                            <th class="py-5 lg:px-28"><i class="uil uil-pricetag-alt text-orange-400">Price</i></th>
                            <th class="py-5 lg:px-28"><i class="uil uil-signal text-green-300">Status</i></th>
                            </tr>
                        </thead>
                        <!-- PHP script -->
                        <tbody class="">
                            <tr class="">
                            <td class="py-5 lg:px-28">#123456</td>
                            <td class="py-5 lg:px-28">03/07/2022</td>
                            <td class="py-5 text-red-300 underline lg:px-28">
                                <a href="invoice.php">view</a> <!-- ID OF THE CURRENT ORDER-->
                            </td>
                            <td class="py-5 lg:px-28">₱1,500</td>
                            <td class="py-5 lg:px-28">Shipping</td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </form>
            <!--/ Job Profile Catalog-->

        </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow mt-[13.5rem]">
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
