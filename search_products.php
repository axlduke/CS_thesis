<?php
    header('Cache-Control: no cache');
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
        $mode = $row['mode'];
        $pictures = $row['pictures'];
        require_once('auth/db.php');
        if($_SESSION['type']==1){
        }
        else{
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
    <link rel="stylesheet"href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
    <script src="js/tab.js" defer></script>


</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <nav id="header" class="bg-white fixed w-full z-10 top-0 shadow">

        <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

            <div class="w-1/2 pl-2 md:pl-0">
                <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold px-3" href="#">
                    JobEcom <?php echo $mode?>
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
                <li class="active tab mx-2 cursor-pointer hover:bg-blue-400 rounded-md ease-in-out duration-500">
                    <a href="main.php">
                    <h1 class="lg:text-lg text-black hover:text-blue-600 leading-tight px-2 py-2 ease-in-out duration-500">
                        Jobs Portal
                    </h1>
                    </a>
                </li>
                <li class="tab mx-2 cursor-pointer hover:bg-blue-400 rounded-md ease-in-out duration-500">
                    <a href="main_products.php">
                    <h1 class="lg:text-lg text-black hover:text-blue-600 leading-tight px-2 py-2 ease-in-out duration-500">
                        E-commerce
                    </h1>
                    </a>
                </li>
            </ul>
        </div>
    </div>
        <!-- Ecommerce Start -->
        <div id="e-com" data-tab-content class="active">
        <form action="search_products.php" method="post">
            <input
                type="text"
                name="search"
                class="bg-gray-50 ml-52 -mt-10 border-2 border-teal-300 text-gray-900 text-sm rounded-lg block w-80 pl-10 p-2.5 outline-none" placeholder="Search Position...">
            <button type="submit" name="search_products"></button>
        </form>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-5 gap-2 px-10 mb-5">
            <?php     
               if (isset($_POST['search_products'])) {
                $connection_string = new mysqli("localhost", "root", "", "propose");
                $searchString = mysqli_real_escape_string($connection_string, trim(htmlentities($_POST['search'])));
                if ($connection_string->connect_error) {
                    echo "Failed to connect to Database";
                    exit();
                }
                if ($searchString === "" || !ctype_alnum($searchString) || $searchString < 3) {
                            $post = "SELECT * from products ORDER BY rand()";
                            $results=mysqli_query($conn, $post);
                            while($get_products=mysqli_fetch_array($results)){
                                $product_id = $get_products['product_id'];
                                $seller_id = $get_products['seller_id'];
                                $product_name = $get_products['product_name'];
                                $quantity = $get_products['quantity'];
                                $price = $get_products['price'];
                                $product_description = $get_products['product_description'];
                                $product_category = $get_products['product_category'];
                                $shipping_fee = $get_products['shipping_fee'];
                                $file1 = $get_products['file1'];
                                $file2 = $get_products['file2'];
                                $file3 = $get_products['file3'];
                                $file4 = $get_products['file4'];
                                $file5 = $get_products['file5'];                
                                $sql="SELECT SUM(quantity) as sum from orders WHERE product_id = $product_id";                 
                                $sold=mysqli_query($conn,$sql);
                                $val = $sold -> fetch_array();
                                $total = $val['sum'];                             
                            }
                }
                    $searchString = "%$searchString%";

                    // The prepared statement
                    $sql = "SELECT * FROM products WHERE product_name LIKE ? ORDER BY rand()";

                    // Prepare, bind, and execute the query
                    $prepared_stmt = $connection_string->prepare($sql);
                    $prepared_stmt->bind_param('s', $searchString);
                    $prepared_stmt->execute();

                    // Fetch the result
                    $result = $prepared_stmt->get_result();

                    if ($result->num_rows === 0) {
                        // No match found
                        echo "No match found";
                        // Kill the script
                        exit();

                    } else {
                        // Process the result(s)
                        while ($get_products = $result->fetch_assoc()) {
                            $product_id = $get_products['product_id'];
                            $seller_id = $get_products['seller_id'];
                            $product_name = $get_products['product_name'];
                            $quantity = $get_products['quantity'];
                            $price = $get_products['price'];
                            $product_description = $get_products['product_description'];
                            $product_category = $get_products['product_category'];
                            $shipping_fee = $get_products['shipping_fee'];
                            $file1 = $get_products['file1'];
                            $file2 = $get_products['file2'];
                            $file3 = $get_products['file3'];
                            $file4 = $get_products['file4'];
                            $file5 = $get_products['file5'];                
                            $sql="SELECT SUM(quantity) as sum from orders WHERE product_id = $product_id";                 
                            $sold=mysqli_query($conn,$sql);
                            $val = $sold -> fetch_array();
                            $total = $val['sum'];
            ?>
                <div id="list-of-divs">
                    <div data-contents="<?php echo $get_products['product_name']; ?>" class="divs w-40 rounded-lg bg-white shadow-md dark:border-gray-700 dark:bg-gray-800">
                        <a href="e-com/item-view.php?item=<?php echo $product_id?>&seller=<?php echo $seller_id?>&sellprof=<?php echo $pictures?>&product=<?php echo $product_name?>&quantity=<?php echo $quantity?>&price=<?php echo $price?>&desc=<?php echo $product_description?>&cat=<?php echo $product_category?>&fee=<?php echo $shipping_fee?>&a=<?php echo $file1?>&b=<?php echo $file2 ?>&c=<?php echo $file3?>&d=<?php echo $file4?>&e=<?php echo $file5?>&total=<?php echo $total?>">
                            <img class="rounded-t-lg p-5 aspect-square w-full" src="img/<?php echo $get_products['file1']; ?>" alt="product image" />
                            <div class="px-5 pb-5">
                                <h3 class="text-sm lg:text-md font-semibold tracking-tight text-gray-900 dark:text-white truncate"><?php echo $get_products['product_name']; ?></h3>
                                <div class="flex items-center justify-between">
                                    <span class="text-md lg:text-md lg:fold-bold text-md text-orange-400">₱<?php echo number_format($get_products['price'], 2, '.', ',') ?></span>
                                    <span href="#" class="text-md px-1 py-2.5 text-center text-sm font-medium text-white"><?php if ($total == null) {  
                                } else {echo $total," SOLD"; }?></span>
                                </div>
                            </div>
                        </a>
                    </div>  
                </div>                    <?php    
            } // end of while loop
        } // end of if($result->num_rows)
                       
    }else { // The user accessed the script directly

        // Tell them nicely and kill the script.
        echo "Please refresh the page.";
        exit(); 

    }?> 
            </div>

        </div>
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
    <script type="text/javascript">if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>
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