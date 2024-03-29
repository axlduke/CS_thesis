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
        // require_once('auth/db.php');
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
    <title>Cart</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');</style>
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
                            <img class="w-8 h-8 rounded-full mr-4" src="../img/<?php echo $pictures?>" alt="Avatar of User"> <span class="hidden md:inline-block  font-bold"><?php echo $fname?> </span>
                            <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                                <g>
                                    <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                                </g>
                            </svg>
                        </button>
                        <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                            <ul class="list-reset">
                                <li><a href="../profile.php" class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">My account</a></li>
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
                        <a href="../main.php" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-blue-400 border-b-2 border-white hover:border-blue-400">
                            <i class="fas fa-home fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#_" class="block py-1 md:py-3 pl-1 align-middle text-orange-400 no-underline hover:text-orange-400 border-b-2 border-white border-orange-400">
                            <i class="fa fa-shopping-cart fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Cart</span>
                            <?php
                                if(isset($_SESSION['notif'])) {
                                    echo $_SESSION['notif'];
                                }
                            ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Container-->
    <div class="container w-full mx-auto pt-20">
        <div class="w-full md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <div class="flex justify-center items-center bg-white">
                <div class=" px-4 py-5">
                    <h1 class="lg:text-2xl text-orange-600 leading-tight mb-2">
                        <i class="mdi mdi-store-outline text-orange-400 text-2xl md:text-3xl lg:text-4xl"></i>
                        Shopping Cart
                    </h1>
                </div>
                <div class="flex  lg:ml-[62rem] lg:px-6">
                    <!-- <div class="w-10 z-10 lg:pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-magnify text-gray-400 text-lg"></i></div>
                    <input name="contact" type="text" class="w-full sm:-ml-10 lg:-ml-10 lg:pl-12 lg:pr-3 lg:py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Search..."> -->
                </div>
            </div>
            <!-- Start of E-commerce -->
            <div class="flex flex-col mt-5 bg-white">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full ">
                                <thead class="border-b">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                                            
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                                            Product
                                        </th>
                                        <th scope="col" class="text-xs font-medium text-gray-900 px-2 py-4 text-left">
                                            Unit Price
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                                            Quantity
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-gray-900 px-2 py-4 text-left">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    $products_posted="SELECT * from cart WHERE user_id ='$user_id'";                
                                    $results=mysqli_query($conn,$products_posted);      
                                        $cartTotal = 0;           
                                        while($row = $results -> fetch_assoc()){
                                            $products_ordered="SELECT * from products WHERE product_id = ".$row['product_id'];  
                                            $res=mysqli_query($conn,$products_ordered);
                                            while($fetch = $res-> fetch_assoc()){       
                                                $cartTotal += ($fetch["price"] * $row["quantity"] );  
                                                // $totalPayment += ($cartTotal + $row['shipping_fee']);  
                                                $shipping_fee = $fetch['shipping_fee'];
                                    ?>                                   
                                    <tr class="border-b">
                                        <td class="whitespace-nowrap hidden text-sm font-medium text-gray-900">
                                            <?php echo $i;?>
                                        </td>
                                        <td class="whitespace-nowrap text-sm font-medium text-gray-900">
                                            <img src="product_images/<?php echo $fetch['file1'] ?>" class="w-36 lg:w-36" alt="product_image">
                                        </td>
                                        <td class="pl-2">
                                            <div class="text-xs lg:text-base lg:font-bold lg:w-full w-32 font-bold text-gray-900 py-4 whitespace-nowrap tracking-tight truncate">
                                                <p>
                                                    <?php echo $fetch['product_name']; ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="text-sm text-orange-500 font-light px-2 py-4 whitespace-nowrap">
                                            ₱ <?php echo number_format($fetch['price'], 2, '.', ',') ?>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-2 py-4 whitespace-nowrap">
                                            <?php echo $row['quantity']; ?>
                                        </td>
                                        <td class="text-sm text-red-500 font-light py-4 whitespace-nowrap">
                                            <a href="delete-cart.php?id=<?php echo $row['cart_id']?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php $i +=1;
                                        } 
                                    }?>
                                </tbody>
                                <?php 
                                    if($i >= 0){
                                        echo $notif = '<div class="flex absolute bottom-5 mt-11 ml-4 h-5 w-5 sm:top-2 rounded-full border-4 border-white bg-green-400 sm:invisible md:visible"></div>';
                                        echo $i;
                                    } else{

                                    }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center items-center bg-white mt-4">
                <div class="flex px-4 py-5 lg:ml-52">
                    <a href="../main.php">
                        <h1 class="lg:text-2xl text-orange-600 leading-tight mb-2">
                            <i class="mdi mdi-arrow-left text-orange-400 text-2xl md:text-3xl lg:text-3xl"></i>
                            Continue Shopping
                        </h1>
                    </a>
                    <h1 class="lg:text-2xl text-orange-600 leading-tight mt-[13px] pl-8 lg:ml-[26rem]">
                        ₱<?php echo number_format($cartTotal, 2, '.', ',') ?>
                        <input type="hidden" name="cart_total" value="<?php echo $cartTotal ?>">
                    </h1>
                </div>
                <div class="flex">
                    <div>
                        <a href="check-out.php">
                            <button class="text-white bg-orange-500 p-2 rounded-md lg:p-4">
                                Check Out
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Recommended Items -->

            <div class="flex justify-center items-center bg-white mt-4">
                <div class="flex items-center justify-between py-5">
                    <h1 class="lg:text-2xl text-orange-500 leading-tight mb-2 mr-52 lg:mr-[75rem]">
                        You May Also Like
                    </h1>
                    <!-- <a href="" class="text-orange-500">See All ></a> -->
                </div>
            </div>
            <div class="flex justify-center items-center bg-white mt-2 py-5">
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-2 px-4">
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes1.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes2.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes3.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes4.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                    <div class="border border-orange-300">
                        <div class="">
                            <img src="../img/shoes1.jpg" alt="">
                        </div>
                        <div class="flex justify-center pb-2">
                            <h2 class=" font-semibold px-2">Nike Air max</h2>
                        </div>
                        <div class="flex items-center justify-between pb-2">
                            <p class="text-orange-500 pl-10">₱2,300</p>
                            <span class="pr-5">15 sold</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recommended Items Ends -->
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
