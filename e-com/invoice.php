<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');

    @media print{
        body * {
            visibility: hidden;
        }
        .modal_multi{
            width: calc(5/12 * 100%);
        }
        .modal_multi, .modal_multi *{
            visibility: visible;
            
        }
    }
</style>
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
                            <img class="w-8 h-8 rounded-full mr-4" src="http://i.pravatar.cc/300" alt="Avatar of User"> <span class="hidden md:inline-block">Hi, User </span>
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
                        <a href="../shop.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-gray-900 border-b-2 border-white hover:border-pink-600">
                            <i class="fas fa-home fa-fw mr-3 text-gray-600"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="job/post.html" class="block py-1 md:py-3 pl-1 align-middle text-orange-400 no-underline hover:text-orange-400 border-b-2 border-white border-orange-400">
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
            <div class="flex justify-center items-center bg-white">
                <div class=" px-4 py-5">
                    <h1 class="lg:text-2xl text-orange-600 leading-tight mb-2">
                        <i class="mdi mdi-store-outline text-orange-400 text-2xl md:text-3xl lg:text-4xl"></i>
                        Invoice Cart
                    </h1>
                </div>
                <div class="flex  lg:ml-[62rem] lg:px-6">
                    <input name="contact" type="text" class="w-full sm:-ml-10 lg:-ml-10 lg:pl-12 lg:pr-3 lg:py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Search...">
                </div>
            </div>
            <!-- Start of Invoice -->

            <div class="">
                <div class="grid grid-cols-2 lg:grid-cols-5 lg:grid-cols-8 px-10 py-10 gap-2">
                    <div class="flex cursor-pointer flex-col items-center justify-center space-x-4 rounded-sm px-3 py-2 bg-gray-300 cursor-pointer w-40">
                        <div class="mb-2 flex items-center space-x-4">
                            <div>
                                <h1 class="mb-1 py-3 text-md font-bold text-gray-700">Mark Limpo</h1>
                            </div>
                            <button class="myBtn_multi">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition duration-200 hover:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                        </div>

                        <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto">
                            <div id="print" class="modal-content mx-auto max-w-6xl bg-white py-5 px-5 rounded-md shadow-lg">
                                <div class="flex grid grid-cols-3 sm:grid-cols-2 lg:grid-cols-3 p-4">
                                    <div class="px-2">
                                        <h1 class="text-3xl italic font-extrabold tracking-widest text-indigo-500">JobEcom</h1>
                                        <p class="text-base">If account is not paid within 7 days the credits details supplied as
                                            confirmation.</p>
                                    </div>
                                    <div class="flex flex-col items-center p-2 border-l-2 border-indigo-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                        </svg>
                                        <span class="text-sm">
                                            www.jobEcom.com
                                        </span>
                                    </div>
                                    <div class="flex flex-col p-2 border-l-2 border-indigo-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        <span class="text-sm">
                                            Ziga Ave,Tabaco City, Albay 4511 PHI
                                        </span>
                                    </div>
                                </div>
                                <div class="w-full h-0.5 bg-indigo-500"></div>
                                <div class="flex grid grid-cols-4 gap-2 lg:grid-cols-4 p-3">
                                    <div>
                                        <h6 class="font-bold">Order Date : <span class="text-sm font-medium"> 12/12/2022</span></h6>
                                        <h6 class="font-bold">Order ID : <span class="text-sm font-medium"> 00001</span></h6>
                                    </div>
                                    <div class="w-40">
                                        <address class="text-sm">
                                            <span class="font-bold"> Billed To : </span>
                                            Mark Limpo
                                            Legazpi City
                                            63+ (093) 456-7890
                                        </address>
                                    </div>
                                    <div class="w-40 px-2">
                                        <address class="text-sm">
                                            <span class="font-bold">Ship To :</span>
                                            Mark Limpo
                                            Legazpi City
                                            63+ (093) 456-7890
                                        </address>
                                    </div>
                                    <div class="w-40 px-2">
                                        <h3 class="text-xl">Terms And Condition :</h3>
                                        <ul class="text-xs list-disc list-inside">
                                            <li>All accounts are to be paid within 7 days from receipt of invoice.</li>
                                            <li>To be paid by cheque or credit card or direct payment online.</li>
                                            <li>If account is not paid within 7 days the credits details supplied.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex justify-center mb-2">
                                    <div class="w-full overflow-x-auto">
                                        <table class="w-full">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                                        #
                                                    </th>
                                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                                        Product Name
                                                    </th>
                                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                                        Quantity
                                                    </th>
                                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                                        Rate
                                                    </th>
                                                    <th class="px-4 py-2 text-xs text-gray-500 ">
                                                        Subtotal
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                <tr class="whitespace-nowrap">
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        1
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-900">
                                                            Amazon Brand - Symactive Men's Regular Fit T-Shirt
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-500">4</div>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        ₱20
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        ₱30
                                                    </td>
                                                </tr>
                                                <tr class="whitespace-nowrap">
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        2
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-900">
                                                            Amazon Brand - Symactive Men's Regular Fit T-Shirt
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-500">2</div>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        ₱60
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        ₱12
                                                    </td>
                                                </tr>
                                                <tr class="border-b-2 whitespace-nowrap">
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        3
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-900">
                                                            Amazon Brand - Symactive Men's Regular Fit T-Shirt
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        <div class="text-sm text-gray-500">1</div>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500">
                                                        ₱10
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        ₱13
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td colspan="3"></td>
                                                    <td class="text-sm">Sub Total</td>
                                                    <td class="text-sm tracking-wider"><b>₱900</b></td>
                                                </tr>
                                                <!--end tr-->
                                                <tr>
                                                    <th colspan="3"></th>
                                                    <td class="text-sm"><b>Shipping</b></td>
                                                    <td class="text-sm"><b>₱60</b></td>
                                                </tr>
                                                <!--end tr-->
                                                <tr class="text-white bg-gray-800">
                                                    <th colspan="3"></th>
                                                    <td class="text-sm "><b>Total</b></td>
                                                    <td class="text-sm font-bold text-orange-500"><b>₱960</b></td>
                                                </tr>
                                                <!--end tr-->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="w-full h-0.5 bg-indigo-500"></div>
                                <div class="p-4">
                                    <div class="flex items-center justify-center">
                                        Thank you very much for doing business with us.
                                    </div>
                                    <div class="flex items-end justify-end space-x-3">
                                        <button id="print" onclick="window.print();" class="px-4 py-2 text-sm text-green-600 bg-green-100">Print</button>
                                        <button class="close close_multi px-4 py-2 text-sm text-red-600 bg-red-100">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> COD </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End of Invoice -->
        
            <div class="flex flex-col mt-5 bg-white">
                
            </div>
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
