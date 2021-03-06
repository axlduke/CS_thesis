<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tailwind Starter Template - Day Admin Template: Tailwind Toolbox</title>
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
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
                        <a href="../jobs.html" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600">
                            <i class="fas fa-home fa-fw mr-3 text-pink-600"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-purple-500">
                            <i class="fa fa-copy fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Posted Jobs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="analytic.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-green-500">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytic</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Proposed</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="message.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                            <i class="fa fa-comment-alt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Message</span>
                        </a>
                    </li>
                </ul>

                <div class="relative pull-right pl-4 pr-4 md:pr-0">
                    <input type="search" placeholder="Search" class="w-full bg-gray-100 text-sm text-gray-800 transition border focus:outline-none focus:border-gray-700 rounded py-1 px-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 0.375rem;left: 1.75rem;">
                        <svg class="fill-current pointer-events-none text-gray-800 w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </div>

            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-20 sm:-pt-10">
            <style>
                /* can be configured in tailwind.config.js */
                .group:hover .group-hover\:block {
                display: block;
                }
                .hover\:w-64:hover {
                width: 45%;
                }
                
                
                /* NO NEED THIS CSS - just for custom scrollbar which can also be configured in tailwind.config.js*/
                ::-webkit-scrollbar {
                width: 2px;
                height: 2px;
                }
                ::-webkit-scrollbar-button {
                width: 0px;
                height: 0px;
                }
                ::-webkit-scrollbar-thumb {
                background: #2d3748;
                border: 0px none #ffffff;
                border-radius: 50px;
                }
                ::-webkit-scrollbar-thumb:hover {
                background: #2b6cb0;
                }
                ::-webkit-scrollbar-thumb:active {
                background: #000000;
                }
                ::-webkit-scrollbar-track {
                background: #1a202c;
                border: 0px none #ffffff;
                border-radius: 50px;
                }
                ::-webkit-scrollbar-track:hover {
                background: #666666;
                }
                ::-webkit-scrollbar-track:active {
                background: #333333;
                }
                ::-webkit-scrollbar-corner {
                background: transparent;
                }
                
            </style>
            
            <!-- Messenger Clone -->
            <div class="h-min w-full flex antialiased text-gray-200 bg-gray-900 overflow-hidden">
                <div class="flex-1 flex flex-col">
                    <main class="flex-grow flex flex-row min-h-full">
                        <section class="flex flex-col flex-none overflow-auto w-24 hover:w-64 group lg:max-w-sm md:w-2/5 transition-all duration-300 ease-in-out">
                            <div class="header p-4 flex flex-row px-6 py-6 justify-between items-center flex-none">
                                <p class="text-md font-bold hidden md:block group-hover:block">Jobsender</p>
                            </div>
                            <div class="search-box p-4 flex-none">
                                <form onsubmit="">
                                    <div class="relative">
                                        <label>
                                            <input class="rounded-full py-2 pr-6 pl-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                                    type="text" value="" placeholder="Search Messenger"/>
                                            <span class="absolute top-0 left-0 mt-2 ml-3 inline-block">
                                                <svg viewBox="0 0 24 24" class="w-6 h-6">
                                                    <path fill="#bbb"
                                                            d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z"/>
                                                </svg>
                                            </span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                            
                            <div class="contacts p-2 flex-1 overflow-y-scroll">
                                <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/271919246_4959474254071230_101675513135552467_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFuhVFDmpiSE6r2NoFimjbi0vlXcy3U9G_S-VdzLdT0b5ZOC7WgJ87pt0jpY1u0FOHqPc8kXOKvxdCKMez-c4ne&_nc_ohc=QedZsXv-gH4AX-AwhxE&_nc_ht=scontent.flgp1-1.fna&oh=00_AT9LEEV0rJdUquH4IOs9mZKIri5dLJNa4LSBPp12-0adjg&oe=629ABC7B"
                                            alt=""
                                        />
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                        <p>Mark Limpo</p>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <div class="min-w-0">
                                                <p class="truncate">Ok, see you at the subway in a bit.</p>
                                            </div>
                                            <p class="ml-2 whitespace-no-wrap">Just now</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/281434393_1894895184042188_3675025308728198655_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGP_c3W7ZtklmHHZs3BqPoQVsZ1POv7Xb5WxnU86_tdvkzRpK-BtLTFcknrnCspxVxnqA2bYaQJpFhy4Jw02Iqs&_nc_ohc=uNyUpZmeENQAX9HKwM7&_nc_ht=scontent.flgp1-1.fna&oh=00_AT940ivnFk8B3mFfajltKzMlSW1YdQi8Nc7Xpi-qv0uK2g&oe=629B5085"
                                            alt=""
                                        />
                                        <div class="absolute bg-gray-900 p-1 rounded-full bottom-0 right-0">
                                            <div class="bg-green-500 rounded-full w-3 h-3"></div>
                                        </div>
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                        <p class="font-bold">Dianne Binucas</p>
                                        <div class="flex items-center text-sm font-bold">
                                            <div class="min-w-0">
                                                <p class="truncate">Hey, Are you there?</p>
                                            </div>
                                            <p class="ml-2 whitespace-no-wrap">10min</p>
                                        </div>
                                    </div>
                                    <div class="bg-blue-700 w-3 h-3 rounded-full flex flex-shrink-0 hidden md:block group-hover:block"></div>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-gray-800 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-1/141976682_101773405260254_787459022870459801_n.jpg?stp=c0.53.320.320a_dst-jpg_p320x320&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGy0Cz8mxwHrdqAoA2XZQT_Mlw4XHJPhEsyXDhcck-ES5jqkdgxIYBBh2sN1hWnNLlddmqUihxOlAYbEDJBGSQS&_nc_ohc=gPFELEmnF_kAX_m059P&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT88GSH-zSyZi3TJkjcxhhJFYqRTsb1m0zCj5wdSe_sHCA&oe=62BABB77"
                                            alt=""
                                        />
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                        <p>Aldon Rodriguez</p>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <div class="min-w-0">
                                                <p class="truncate">You sent a photo.</p>
                                            </div>
                                            <p class="ml-2 whitespace-no-wrap">1h</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-1/283006632_400971931892239_3354325272535607331_n.jpg?stp=dst-jpg_p160x160&_nc_cat=111&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeF_k8EbQ08rpS8zc_hgLXuhXX6jQKHIs_pdfqNAociz-tmNqWhUE29Urm-iA10GPdXTuQJIlWQgBhJcVR4Xspp7&_nc_ohc=7sVHPtbxLUEAX89B64B&_nc_ht=scontent.flgp1-1.fna&oh=00_AT85aKoTKyGcGuASHidh-tpf1FohPAeMNETBemmb2loPMA&oe=629AFB2E"
                                            alt=""
                                        />
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                        <p>Ivy Toledo</p>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <div class="min-w-0">
                                                <p class="truncate">You missed a call John.
                                                </p>
                                            </div>
                                            <p class="ml-2 whitespace-no-wrap">4h</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center p-3 hover:bg-gray-800 rounded-lg relative">
                                    <div class="w-16 h-16 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/273882517_2461635537300443_2635345525996557337_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeFgchKr2P2RLSjq3ffgzabuBrEAqxZhfwsGsQCrFmF_C4_pvRCQ6rCBs_WKu2_P4qg5IRker4usUGI1NQXPVoxd&_nc_ohc=mR6nME5LHKcAX8caMO0&_nc_ht=scontent.flgp1-1.fna&oh=00_AT9eWrDWIWV-Js2CGM8ZtIWYpJeF4ylfvOdOup0oFLluxg&oe=629AFD91"
                                            alt="User2"
                                        />
                                    </div>
                                    <div class="flex-auto min-w-0 ml-4 mr-6 hidden md:block group-hover:block">
                                        <p>Patrick Cobilla</p>
                                        <div class="flex items-center text-sm text-gray-600">
                                            <div class="min-w-0">
                                                <p class="truncate">Luto na Ace .
                                                </p>
                                            </div>
                                            <p class="ml-2 whitespace-no-wrap">11 Feb</p>
                                        </div>
                                    </div>
                                    <div class="w-4 h-4 flex flex-shrink-0 hidden md:block group-hover:block">
                                        <img class="rounded-full w-full h-full object-cover" alt="user2"
                                            src="https://randomuser.me/api/portraits/women/23.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="flex flex-col flex-auto border-l border-gray-800">
                            <div class="chat-header px-6 py-7 flex flex-row flex-none justify-between items-center shadow">
                                <div class="flex">
                                    <div class="w-12 h-12 mr-4 relative flex flex-shrink-0">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-1/141976682_101773405260254_787459022870459801_n.jpg?stp=c0.53.320.320a_dst-jpg_p320x320&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGy0Cz8mxwHrdqAoA2XZQT_Mlw4XHJPhEsyXDhcck-ES5jqkdgxIYBBh2sN1hWnNLlddmqUihxOlAYbEDJBGSQS&_nc_ohc=gPFELEmnF_kAX_m059P&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT88GSH-zSyZi3TJkjcxhhJFYqRTsb1m0zCj5wdSe_sHCA&oe=62BABB77"
                                            alt=""
                                        />
                                    </div>
                                    <div class="text-sm">
                                        <p class="font-bold">Aldon Rodriguez</p>
                                        <p>Active 1h ago</p>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-body p-4 flex-1 overflow-y-scroll">
                                <div class="flex flex-row justify-start">
                                    <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-1/141976682_101773405260254_787459022870459801_n.jpg?stp=c0.53.320.320a_dst-jpg_p320x320&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGy0Cz8mxwHrdqAoA2XZQT_Mlw4XHJPhEsyXDhcck-ES5jqkdgxIYBBh2sN1hWnNLlddmqUihxOlAYbEDJBGSQS&_nc_ohc=gPFELEmnF_kAX_m059P&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT88GSH-zSyZi3TJkjcxhhJFYqRTsb1m0zCj5wdSe_sHCA&oe=62BABB77"
                                            alt=""
                                        />
                                    </div>
                                    <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-t-full rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Hey! How are you?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-r-full bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Shall we go for Hiking this weekend?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-md bg-gray-800 max-w-xs lg:w-auto text-gray-200">Hello umayos kana pota haha dhshsdshdshs pota hahaajjajddoiawpdoaw ioseidje Hello umayos kana pota haha dhshsdshdshs pota hahaajjajddoiawpdoaw ioseidje</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="p-4 text-center text-sm text-gray-500">FRI 3:04 PM</p>
                                <div class="flex flex-row justify-end">
                                    <div class="messages text-sm text-white grid grid-flow-row gap-2">
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-t-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Hey! How are you?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Shall we go for Hiking this weekend?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-md bg-blue-700 max-w-xs lg:w-auto">Lorem ipsum
                                                dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="p-4 text-center text-sm text-gray-500">SAT 2:10 PM</p>
                                <div class="flex flex-row justify-start">
                                    <div class="w-8 h-8 relative flex flex-shrink-0 mr-4">
                                        <img class="shadow-md rounded-full w-full h-full object-cover"
                                            src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-1/141976682_101773405260254_787459022870459801_n.jpg?stp=c0.53.320.320a_dst-jpg_p320x320&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGy0Cz8mxwHrdqAoA2XZQT_Mlw4XHJPhEsyXDhcck-ES5jqkdgxIYBBh2sN1hWnNLlddmqUihxOlAYbEDJBGSQS&_nc_ohc=gPFELEmnF_kAX_m059P&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT88GSH-zSyZi3TJkjcxhhJFYqRTsb1m0zCj5wdSe_sHCA&oe=62BABB77"
                                            alt=""
                                        />
                                    </div>
                                    <div class="messages text-sm text-gray-700 grid grid-flow-row gap-2">
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-md bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Hey! How are you?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-md bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Shall we go for Hiking this weekend?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center group">
                                            <p class="px-6 py-3 rounded-md bg-gray-800 max-w-xs lg:max-w-md text-gray-200">Lorem ipsum
                                                dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <p class="p-4 text-center text-sm text-gray-500">12:40 PM</p>
                                <div class="flex flex-row justify-end">
                                    <div class="messages text-sm text-white grid grid-flow-row gap-2">
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-t-full rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Hey! How are you?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-l-full bg-blue-700 max-w-xs lg:max-w-md">Shall we go for Hiking this weekend?</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center flex-row-reverse group">
                                            <a class="block w-64 h-64 relative flex flex-shrink-0 max-w-xs lg:max-w-md" href="#">
                                                <img class="absolute shadow-md w-full h-full rounded-l-lg object-cover" src="https://unsplash.com/photos/8--kuxbxuKU/download?force=true&w=640" alt="hiking"/>
                                            </a>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="flex items-center flex-row-reverse group">
                                            <p class="px-6 py-3 rounded-md bg-blue-700 max-w-xs lg:max-w-md">Lorem ipsum
                                                dolor sit
                                                amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                                dolore magna aliqua. Volutpat lacus laoreet non curabitur gravida.</p>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10.001,7.8C8.786,7.8,7.8,8.785,7.8,10s0.986,2.2,2.201,2.2S12.2,11.215,12.2,10S11.216,7.8,10.001,7.8z
                                                        M3.001,7.8C1.786,7.8,0.8,8.785,0.8,10s0.986,2.2,2.201,2.2S5.2,11.214,5.2,10S4.216,7.8,3.001,7.8z M17.001,7.8
                                                        C15.786,7.8,14.8,8.785,14.8,10s0.986,2.2,2.201,2.2S19.2,11.215,19.2,10S18.216,7.8,17.001,7.8z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M19,16.685c0,0-2.225-9.732-11-9.732V2.969L1,9.542l7,6.69v-4.357C12.763,11.874,16.516,12.296,19,16.685z"/>
                                                </svg>
                                            </button>
                                            <button type="button" class="hidden group-hover:block flex flex-shrink-0 focus:outline-none mx-2 block rounded-full text-gray-500 hover:text-gray-900 hover:bg-gray-700 bg-gray-800 w-8 h-8 p-2">
                                                <svg viewBox="0 0 24 24" class="w-full h-full fill-current">
                                                    <path
                                                            d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.54-4.46a1 1 0 0 1 1.42-1.42 3 3 0 0 0 4.24 0 1 1 0 0 1 1.42 1.42 5 5 0 0 1-7.08 0zM9 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm6 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="chat-footer flex-none">
                                <div class="flex flex-row items-center p-4">
                                    <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M11,13 L8,10 L2,16 L11,16 L18,16 L13,11 L11,13 Z M0,3.99406028 C0,2.8927712 0.898212381,2 1.99079514,2 L18.0092049,2 C19.1086907,2 20,2.89451376 20,3.99406028 L20,16.0059397 C20,17.1072288 19.1017876,18 18.0092049,18 L1.99079514,18 C0.891309342,18 0,17.1054862 0,16.0059397 L0,3.99406028 Z M15,9 C16.1045695,9 17,8.1045695 17,7 C17,5.8954305 16.1045695,5 15,5 C13.8954305,5 13,5.8954305 13,7 C13,8.1045695 13.8954305,9 15,9 Z" />
                                        </svg>
                                    </button>
                                    <div class="relative flex-grow">
                                        <label>
                                            <input class="rounded-full py-2 pl-3 pr-10 w-full border border-gray-800 focus:border-gray-700 bg-gray-800 focus:bg-gray-900 focus:outline-none text-gray-200 focus:shadow-md transition duration-300 ease-in"
                                                    type="text" value="" placeholder="Aa"/>
                                            <button type="button" class="absolute top-0 right-0 mt-2 mr-3 flex flex-shrink-0 focus:outline-none block text-blue-600 hover:text-blue-700 w-6 h-6">
                                                <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                                    <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM6.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm7 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm2.16 3a6 6 0 0 1-11.32 0h11.32z" />
                                                </svg>
                                            </button>
                                        </label>
                                    </div>
                                    <button type="button" class="flex flex-shrink-0 focus:outline-none mx-2 block text-blue-600 hover:text-blue-700 w-6 h-6">
                                        <svg viewBox="0 0 20 20" class="w-full h-full fill-current">
                                            <path d="M11.0010436,0 C9.89589787,0 9.00000024,0.886706352 9.0000002,1.99810135 L9,8 L1.9973917,8 C0.894262725,8 0,8.88772964 0,10 L0,12 L2.29663334,18.1243554 C2.68509206,19.1602453 3.90195042,20 5.00853025,20 L12.9914698,20 C14.1007504,20 15,19.1125667 15,18.000385 L15,10 L12,3 L12,0 L11.0010436,0 L11.0010436,0 Z M17,10 L20,10 L20,20 L17,20 L17,10 L17,10 Z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </section>
                    </main>
                </div>
            </div>
    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow ">
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
