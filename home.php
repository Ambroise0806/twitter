<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="login.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Twitter</title>
</head>

<body>
    <main>


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">This is where things happen.</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Sign in right now.</p>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Create your account
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            <!-- Inscription -->
            <button id="loginModal" class="p-2 bg-blue-500 text-white rounded">Login</button>     
                <div id="myLoginModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 h-screen w-full">
                    <div class="bg-white rounded shadow-lg w-64 p-4">
                        <button id="closeLoginModal" class="absolute p-2 bg-red-500 text-white rounded">X</button>
                        <form class="w-64" method="">
                            <h2 class="text-2xl mb-4 text-center">Login</h2>
                            <label for="loginEmail" class="block mb-2">Email</label>
                            <input form="loginEmail" type="email" class="w-full mb-4 p-2 border rounded">
                            <label for="loginPassword" class="block mb-2">Password</label>
                            <input form="loginPassword" type="password" class="w-full mb-4 p-2 border rounded">
                            <a href="profile.php">
                            <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded">Login</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div>                
            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <svg class="w-[16px] h-[16px] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" d="M13.8 10.5 20.7 2h-3l-5.3 6.5L7.7 2H1l7.8 11-7.3 9h3l5.7-7 5.1 7H22l-8.2-11.5Zm-2.4 3-1.4-2-5.6-7.9h2.3l4.5 6.3 1.4 2 6 8.5h-2.3l-4.9-7Z"/>
            </svg>
        </div>
    </div>
</section>

</main>
</body>
</html>