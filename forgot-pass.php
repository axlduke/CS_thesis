<?php
    session_start();
    include 'auth/db.php';
    // include_once 'auth/register-auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loading.css">
    <link rel="stylesheet" href="loader.css">
    <script src="jquery-2.1.4.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="js/script.js"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="header">
        <!-- <div id="loader" class="building-blocks">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div> -->
        <div class="flex items-center justify-center py-12 px-3">
            <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
                <div class="text-center">
                    <h2 class="mt-6 text-3xl font-bold text-gray-900">
                        Forgot Password
                    </h2>
                </div>
                <?php
                    if(isset($_SESSION['failed'])) {
                        echo $_SESSION['failed'];
                        unset($_SESSION['failed']);
                    }
                ?>
                <form class="space-y-6" action="auth/register-auth.php" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="relative">
                        <label class="text-sm font-bold text-gray-700 tracking-wide">Email Address</label>
                        <input name="email" type="email" class=" w-full text-black text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" placeholder="mail@gmail.com" required>
                    </div>
                    <div>
                        <button name="check-email" type="submit" class="w-full flex justify-center bg-indigo-500 text-gray-100 p-4  rounded-full tracking-wide
                                        font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                            Continue
                        </button>
                    </div>
                    <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                        <span>Do you have an account?</span>
                        <a href="form.php" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Log in</a>
                    </p>
                </form>
            </div>
        </div>

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
    </div>

    <script>
        // request permission on page load
        document.addEventListener('DOMContentLoaded', function () {
        if (Notification.permission !== "granted")
            Notification.requestPermission();
        });

        function notifyMe() {
        if (!Notification) {
            //alert('Desktop notifications not available in your browser. Try Chromium.'); 
            return;
        }

        if (Notification.permission !== "granted")
            Notification.requestPermission();
        else {
            var notification = new Notification('Notification');

            notification.onclick = function () {
                window.focus();
            };

            setTimeout(notification.close, 2000);
            // Result: Uncaught TypeError: Illegal invocation

            // also tried.....

            // setTimeout(notification.close(), 2000);
            // Result: notification stays open forever

            // setTimeout('notification.close', 2000);
            // Result: ReferenceError: notification is not defined

        }

        }
    </script>
</body>
</html>