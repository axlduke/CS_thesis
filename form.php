<!DOCTYPE html>
<ht lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loading.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Create Account</title>
</head>
<body>
    
    <div class="header">
        <div class="loader-wrapper">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
        <!--Content before waves-->
        <div class="flex items-center justify-center py-12 px-3 lg:py-6">
            <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
                <div class="text-center">
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">
     <!--                    Login -->
                    </h2>
                </div>
                <div class="z-10 w-full max-w-md space-y-8 rounded-xl bg-white">
                    <div class="text-center">
                        <h2 class="mt-6 text-3xl font-bold text-gray-900">Welcome User 😊</h2>
                        <span class="text-sm text-gray-400">please choose one flatform to register</span>
                    </div>
                    <div>
                        <a href="form/form1.php">
                            <button id="btn" type="submit" class="focus:shadow-outline flex w-full cursor-pointer justify-center rounded-full bg-indigo-500 p-4 font-semibold tracking-wide text-gray-100 shadow-lg transition duration-300 ease-in hover:bg-green-400 focus:outline-none">
                                User
                            </button>
                        </a>
                    </div>
                    <div>
                        <a href="form/form2.php">
                            <button id="btn" type="submit" class="focus:shadow-outline flex w-full cursor-pointer justify-center rounded-full bg-indigo-500 p-4 font-semibold tracking-wide text-gray-100 shadow-lg transition duration-300 ease-in hover:bg-orange-400 focus:outline-none">
                                Seller
                            </button>
                        </a>
                        </div>
                    <div>
                        <a href="form/form3.php">
                            <button id="btn" type="submit" class="focus:shadow-outline flex w-full cursor-pointer justify-center rounded-full bg-indigo-500 p-4 font-semibold tracking-wide text-gray-100 shadow-lg transition duration-300 ease-in hover:bg-blue-400 focus:outline-none">
                                Employer
                            </button>
                        </a>
                    </div>
                    <p class="text-md mt-10 flex flex-col items-center justify-center text-center text-gray-500">
                        <span>Have an account?</span>
                        <a href="login.php" class="hover:text-indigo-500 no-underline cursor-pointer text-indigo-500 transition duration-300 ease-in hover:underline">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
        


        <!--Waves Container-->
        <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
        <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
        </defs>
        <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
        </g>
        </svg>
        </div>
        <!--Waves end-->
    </div>

    <!--End of Header-->
</body>
</html>