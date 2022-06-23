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
                        <a href="#_" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 border-pink-600">
                            <i class="fas fa-home fa-fw mr-3 text-pink-600"></i><span class="pb-1 md:pb-0 text-sm">Home</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="job/post.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-purple-500">
                            <i class="fa fa-copy fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Posted Jobs</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="job/analytic.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-green-500">
                            <i class="fas fa-chart-area fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Analytic</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="job/post.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                            <i class="fa fa-wallet fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Applicant</span>
                        </a>
                    </li>
                    <li class="mr-6 my-2 md:my-0">
                        <a href="job/message.html" class="block py-1 md:py-3 pl-1 align-middle text-gray-500 no-underline hover:text-gray-900 border-b-2 border-white hover:border-red-500">
                            <i class="fa fa-comment-alt fa-fw mr-3"></i><span class="pb-1 md:pb-0 text-sm">Message</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <!--Console Content-->

            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-green-600"><i class="fa fa-briefcase fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Jobs Posted</h5>
                                <h3 class="font-bold text-3xl">49 <span class="text-green-500"><i class="fas fa-copy"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-pink-600"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Hired</h5>
                                <h3 class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fa fa-exchange-alt"></i></span></h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                    <!--Metric Card-->
                    <div class="bg-white border rounded shadow p-2">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded p-3 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h5 class="font-bold uppercase text-gray-500">Total Proposed</h5>
                                <h3 class="font-bold text-3xl">30</h3>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>
            
            <!--Divider-->
            <!-- <hr class="border-b-2 border-gray-400 my-8 mx-4"> -->

            <!-- component -->
            <!-- Start of Job Profile Seeker -->
            <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-3">
                <div class="text-center pb-12">
                    <h2 class="text-base font-bold text-indigo-600">
                        We have the best equipment
                    </h2>
                    <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-gray-900">
                        Freelancer Available to Any Fields
                    </h1>
                </div>
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
                    <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Position...">
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
                    <div class="w-full bg-white shadow-2xl rounded-lg p-10 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full flex h-20 w-20" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/274870967_2735914446554639_6345518842819396572_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=174925&_nc_eui2=AeEJlQp8jrTOX5UL6Tc6K3ZeAT0tFiPxqVgBPS0WI_GpWCizNTlILq2jMHvwJD3Mpmf7npdLUInlc0BKJPmXtz96&_nc_ohc=Ya9BWjUGe4IAX_H9u6w&_nc_oc=AQkpQyD1YtxH_5fXUFutYaxDUNW9WEQ5G77V0gopeuydHRjOKJ4NJzo6MzmKfPTP5ys&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT9Z6vjPMMuJOSYt4tzISEAMQCTDGWeeoKioehNY6co3Qw&oe=62979B5D" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold">Ace Malto</p>
                            <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
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
                                                    User Candidate Profile
                                                </h5>
                                                <button type="button" class="close close_multi text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                                </button>
                                                </div>
                                                <div class="border-t border-gray-200">
                                                <dl>
                                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Full name</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Margot Foster</dd>
                                                    </div>
                                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Application for</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">Backend Developer</dd>
                                                    </div>
                                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Email address</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">margotfoster@example.com</dd>
                                                    </div>
                                                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                                    <dt class="text-sm font-medium text-gray-500">Salary expectation</dt>
                                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">$---,---</dd>
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
                                                                <!-- Heroicon name: solid/paper-clip -->
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
                                                                <!-- Heroicon name: solid/paper-clip -->
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
                                                </dl>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-20 w-20" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/271919246_4959474254071230_101675513135552467_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFuhVFDmpiSE6r2NoFimjbi0vlXcy3U9G_S-VdzLdT0b5ZOC7WgJ87pt0jpY1u0FOHqPc8kXOKvxdCKMez-c4ne&_nc_ohc=QedZsXv-gH4AX-AwhxE&_nc_ht=scontent.flgp1-1.fna&oh=00_AT9LEEV0rJdUquH4IOs9mZKIri5dLJNa4LSBPp12-0adjg&oe=629ABC7B" alt="photo">
                        </div>
                        <div class="text-center ">
                            <p class="text-md text-gray-700 font-bold">Mark Limpo</p>
                            <p class="text-base text-gray-400 font-normal">Software Engineer</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
                                <a href="#_" class="p-1">
                                    View
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed hidden top-0 left-0 py-24 px-6 lg:py-40 lg:px-96 sm:px-16 sm:py-32 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div
                                        class="bg-gray-400 border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                            User Candidate Profile
                                            </h5>
                                            <button type="button" class="close close_multi text-black bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                                            </button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            <div class="flex justify-center items-center">
                                                <img class="object-center object-cover rounded-md h-24 w-24" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/271919246_4959474254071230_101675513135552467_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFuhVFDmpiSE6r2NoFimjbi0vlXcy3U9G_S-VdzLdT0b5ZOC7WgJ87pt0jpY1u0FOHqPc8kXOKvxdCKMez-c4ne&_nc_ohc=QedZsXv-gH4AX-AwhxE&_nc_ht=scontent.flgp1-1.fna&oh=00_AT9LEEV0rJdUquH4IOs9mZKIri5dLJNa4LSBPp12-0adjg&oe=629ABC7B" alt="photo">
                                            </div>
                                            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                                                <div>
                                                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">First name</label>
                                                    <p type="text" id="first_name" class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Mark Limpo</p>
                                                </div>
                                                <div>
                                                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Education</label>
                                                    <p type="text" id="last_name" class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Divine Word College of Legazpi</p>
                                                    <span class="text-xs text-white px-6">Bachelor of Computer Science (BCompSci), Computer science</span>
                                                </div>
                                                <div>
                                                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Work experience</label>
                                                    <p type="text" id="company" class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Full Stack Engineer</p>
                                                </div>  
                                                <div>
                                                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone number</label>
                                                    <p type="tel" id="phone" class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">+63 975 645 2345</p>
                                                </div>
                                                <div>
                                                    <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Portfolio URL</label>
                                                    <p type="url" id="website" class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Meta.com</p>
                                                </div>
                                                <div>
                                                    <label for="Birthday" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Birthday</label>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> 12 / 12 / 2012</p>
                                                </div>
                                                <div>
                                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">marklimpo@gmail.com</p>
                                                </div>
                                                <div>
                                                    <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Resume letter</label>
                                                    <p class="text-white text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 hover:text-red-400 underline dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">download</p>
                                                </div>
                                                <div>
                                                    <label for="certificates" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Certificates</label>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Udemy - Machine Learning</p>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Udemy - Artificial Intelligence</p>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Udemy - Data Science</p>
                                                    <p class="text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">Udemy - Data Analytics</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-20 w-20" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-6/281434393_1894895184042188_3675025308728198655_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeGP_c3W7ZtklmHHZs3BqPoQVsZ1POv7Xb5WxnU86_tdvkzRpK-BtLTFcknrnCspxVxnqA2bYaQJpFhy4Jw02Iqs&_nc_ohc=uNyUpZmeENQAX9HKwM7&_nc_ht=scontent.flgp1-1.fna&oh=00_AT940ivnFk8B3mFfajltKzMlSW1YdQi8Nc7Xpi-qv0uK2g&oe=629B5085" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold">Dianne Binucas</p>
                            <p class="text-base text-gray-400 font-normal">Animator</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
                                <a href="#_" class="p-1">
                                    View
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div
                                        class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                            Modal title
                                            </h5>
                                            <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            ...
                                        </div>
                                        <div
                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="button"
                                            class="close close_multi inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-20 w-20" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t1.6435-1/141976682_101773405260254_787459022870459801_n.jpg?stp=c0.53.320.320a_dst-jpg_p320x320&_nc_cat=108&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeGy0Cz8mxwHrdqAoA2XZQT_Mlw4XHJPhEsyXDhcck-ES5jqkdgxIYBBh2sN1hWnNLlddmqUihxOlAYbEDJBGSQS&_nc_ohc=gPFELEmnF_kAX_m059P&tn=PSAzJFMiISETfc0R&_nc_ht=scontent.flgp1-1.fna&oh=00_AT88GSH-zSyZi3TJkjcxhhJFYqRTsb1m0zCj5wdSe_sHCA&oe=62BABB77" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold">Aldon Rodriguez</p>
                            <p class="text-base text-gray-400 font-normal">IT QA</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
                                <a href="#_" class="p-1">
                                    View
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div
                                        class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                            Modal title
                                            </h5>
                                            <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            ...
                                        </div>
                                        <div
                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="button"
                                            class="close close_multi inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-20 w-20" src="https://scontent.flgp1-1.fna.fbcdn.net/v/t39.30808-1/283006632_400971931892239_3354325272535607331_n.jpg?stp=dst-jpg_p160x160&_nc_cat=111&ccb=1-7&_nc_sid=7206a8&_nc_eui2=AeF_k8EbQ08rpS8zc_hgLXuhXX6jQKHIs_pdfqNAociz-tmNqWhUE29Urm-iA10GPdXTuQJIlWQgBhJcVR4Xspp7&_nc_ohc=7sVHPtbxLUEAX89B64B&_nc_ht=scontent.flgp1-1.fna&oh=00_AT85aKoTKyGcGuASHidh-tpf1FohPAeMNETBemmb2loPMA&oe=629AFB2E" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold">Ivy Toledo</p>
                            <p class="text-base text-gray-400 font-normal">Graphic Designer</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
                                <a href="#_" class="p-1">
                                    View
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div
                                        class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                            Modal title
                                            </h5>
                                            <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            ...
                                        </div>
                                        <div
                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="button"
                                            class="close close_multi inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full bg-white shadow-2xl rounded-lg p-12 flex flex-col justify-center items-center">
                        <div class="mb-8">
                            <img class="object-center object-cover rounded-full h-20 w-20" src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1176&q=80" alt="photo">
                        </div>
                        <div class="text-center">
                            <p class="text-md text-gray-700 font-bold">Jade Bradley</p>
                            <p class="text-base text-gray-400 font-normal">Dev Ops</p>
                            <button class="myBtn_multi bg-blue-600 text-base text-white p-1 rounded-md mt-2">
                                <a href="#_" class="p-1">
                                    View
                                </a>
                            </button>
                            <div class="modal modal_multi fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                                id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-content relative w-auto pointer-events-none">
                                    <div
                                        class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                                        <div
                                            class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                            <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                                            Modal title
                                            </h5>
                                            <button type="button"
                                            class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body relative p-4">
                                            ...
                                        </div>
                                        <div
                                            class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                            <button type="button"
                                            class="close close_multi inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                                            data-bs-dismiss="modal">Close</button>
                                            <button type="button"
                                            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
