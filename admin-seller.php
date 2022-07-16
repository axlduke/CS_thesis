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
        if($_SESSION['type']==2){
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="main.css">
    <script src="js/tab.js" defer></script>


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">


        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold px-3" href="#">
                    Dashboard | Hi 😊<?php echo $fname?>
                </a>
            </div>
            <div class="w-1/2 pr-0">
                <div class="flex relative inline-block float-right">

                    <div class="relative text-sm">
                        <button id="userButton" class="flex items-center focus:outline-none mr-3">
                            <img class="w-8 h-8 rounded-full mr-4" src="img/<?php echo $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block"><?php echo $fname?></span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="e-com/seller-profile.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
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
                        <a href="admin-seller.php" class="block py-1 md:py-3 pl-1 align-middle no-underline text-orange-400 border-b-2 border-white border-orange-400">
                            <i class="fas fa-home fa-fw mr-3 text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Dashboard</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="e-com/seller-order.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-400 no-underline hover:text-orange-400 border-b-2 border-white hover:border-orange-400">
                            <i class="uil uil-shopping-cart fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Orders</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="e-com/posted-items.php" class="block py-1 md:py-3 pl-1 align-middle no-underline hover:text-orange-400 text-gray-400 border-b-2 border-white hover:border-orange-400">
                            <i class="uil uil-clipboard-notes fa-fw mr-3 hover:text-orange-400"></i><span class="pb-1 md:pb-0 text-sm">Items</span>
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
    <div class="flex justify-center w-full mt-28 mb-5">
        <div class="flex grid grid-cols-1 lg:grid-cols-5 grid-flow-row lg:gap-3 justify-items-stretch px-5">
            <div class="w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                <div class="mb-5">
                    <i class="uil uil-bill text-5xl text-orange-400"></i>
                </div>
                <div class="text-center">
                    <p class="text-md text-gray-700 font-bold">₱2,500,800</p>
                    <p class="text-base text-gray-400">End of the Year</p>
                </div>
            </div>
            <div class="w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                <div class="mb-5">
                    <i class="uil uil-arrow-growth text-5xl text-orange-400"></i>
                </div>
                <div class="text-center">
                    <p class="text-md text-gray-700 font-bold">₱208,400</p>
                    <p class="text-base text-gray-400">Revenue Per Month</p>
                    
                </div>
            </div>
            <div class="w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                <div class="mb-5">
                    <i class="uil uil-chart-line text-5xl text-orange-400"></i>
                </div>
                <div class="text-center">
                    <p class="text-md text-gray-700 font-bold">₱70.9%</p>
                    <p class="text-base text-gray-400">Conversation Rate</p>
                </div>
            </div>
            <div class="w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                <div class="mb-5">
                    <i class="uil uil-money-insert text-5xl text-orange-400"></i>
                </div>
                <div class="text-center">
                    <p class="text-md text-gray-700 font-bold">₱70.9%</p>
                    <p class="text-base text-gray-400">Gross Profit Margin</p>
                </div>
            </div>
            <div class="row-span-2 container max-w-full mx-auto items-center text-center bg-white rounded drop-shadow-lg px-5 md:px-0">
                <div class="mb-1 tracking-wide px-4 py-6" >
                    <h2 class="text-gray-800 font-semibold mt-1">67 Users reviews</h2>
                    <div class="border-b -mx-8 px-8 pb-3">
                        <div class="flex items-center mt-1 py-3">
                            <div class=" w-1/5 text-indigo-500 tracking-tighter">
                            <span>5 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-7/12 bg-green-500 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">51%</span>
                            </div>
                        </div><!-- first -->
                        <div class="flex items-center mt-1 py-3">
                            <div class="w-1/5 text-indigo-500 tracking-tighter">
                            <span>4 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class="w-1/5 bg-green-400 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">17%</span>
                            </div>
                        </div><!-- second -->
                        <div class="flex items-center mt-1 py-3">
                            <div class="w-1/5 text-indigo-500 tracking-tighter">
                            <span>3 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-3/12 bg-yellow-400 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">19%</span>
                            </div>
                        </div><!-- thierd -->
                        <div class="flex items-center mt-1 py-3">
                            <div class=" w-1/5 text-indigo-500 tracking-tighter">
                            <span>2 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-1/5 bg-yellow-500 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">8%</span>
                            </div>
                        </div><!-- 4th -->
                        <div class="flex items-center mt-1 py-3">
                            <div class="w-1/5 text-indigo-500 tracking-tighter">
                            <span>1 star</span>
                            </div>
                            <div class="w-3/5">
                            <div class="bg-gray-300 w-full rounded-lg h-2">
                                <div class=" w-2/12 bg-red-400 rounded-lg h-2"></div>
                            </div>
                            </div>
                            <div class="w-1/5 text-gray-700 pl-3">
                            <span class="text-sm">5%</span>
                            </div>
                        </div><!-- 5th -->
                    </div>
                </div>
                <div class="w-full px-4">
                    <p class="text-gray-700 text-sm py-1">
                        Here is the result for the latest Responsible would recommmend this 100 customers
                    </p>
                </div>
            </div>
            <div class="col-span-2 w-full bg-white shadow-2xl overflow-hidden rounded-lg flex flex-col justify-center items-center">
                <div class="mb-1">
                    Goal Completion
                </div>
                <div class="">
                    <canvas class="p-10" id="chartBar"></canvas>
                </div>
            </div>
            <div class="col-span-2 justify-self-stretch w-full bg-white shadow-2xl rounded-lg p-5 flex flex-col justify-center items-center">
                <div class="mb-1 font-bold">
                    Order Status    
                </div>
                <div class="aspect-square w-72">
                    <canvas class="p-10" id="chartDoughnut"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Jobs Part -->
    
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
        const labelsBarChart = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
        ];
        const dataBarChart = {
            labels: labelsBarChart,
            datasets: [
            {
                label: "My First dataset",
                backgroundColor: "hsl(252, 82.9%, 67.8%)",
                borderColor: "hsl(252, 82.9%, 67.8%)",
                data: [0, 10, 5, 2, 20, 30, 45],
            },
            ],
        };

        const configBarChart = {
            type: "bar",
            data: dataBarChart,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartBar"),
            configBarChart
        );
    </script>

    <script>
        const dataDoughnut = {
            labels: ["JavaScript", "Python", "Ruby"],
            datasets: [
            {
                label: "My First Dataset",
                data: [300, 50, 100],
                backgroundColor: [
                "rgb(133, 105, 241)",
                "rgb(164, 101, 241)",
                "rgb(101, 143, 241)",
                ],
                hoverOffset: 4,
            },
            ],
        };

        const configDoughnut = {
            type: "doughnut",
            data: dataDoughnut,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartDoughnut"),
            configDoughnut
        );
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
