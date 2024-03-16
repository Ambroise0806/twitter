<?php 
//Inscription//
session_start();
include("connexion.php");
$nom = $_POST['Username'];
$pseudo = $_POST['accountName'];
$email = $_POST['email'];
$password = $_POST['password'];
$mois = $_POST['mois_naissance'];
$jour = $_POST['jour_naissance']; 
$annee = $_POST['annee_naissance'];

$con = new Connexion('twitter');
$con->register($nom, $pseudo, $email, $password, $jour, $mois, $annee);

//Connexion//

$con->logIn($email,$password);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="home.js"></script>
    <script src="homepage.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="home_jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Twitter</title>
</head>

<body>
    <main class="flex flex-col w-auto h-auto">


<section class="bg-white dark:bg-gray-900">
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="mb-4 text-3xl font-extrabold dark:text-white md:text-5xl lg:text-6xl">This is
            <span class="text-current text-4xl font-black bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                where things happen.
        </h1>
            </span>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">Sign in right now.</p>
        <button id="accountModal" class="me-2 mb-2 px-5 py-2.5 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                Create your account
        </button>

        <!-- Main modal -->
        <div id="newAccountModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full" data-modal-target="newAccountModal">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Sign in to our platform
                        </h3>
                    <button type="button" id="closeAccountModal" class="end-2.5 text-red-400 bg-transparent hover:bg-gray-200 hover:text-red-400 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="newAccountModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                    </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" method="POST" action="">
                            <div>
                                <label for="Username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                <input for="Username" name="Username" id="Username" class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="Lenny" required />
                            </div>
                            <div>
                                <label for="accountName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account's name</label>
                                <input type="accountName" name="accountName" id="accountName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="@LennyK" required />
                            </div> 
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="newEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                <input type="password" name="password" id="newPassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" required />
                            </div>

            <div class="row">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your birthdate</label>
            </div>
            <div>
                <label for="mois_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month</label>
                    <select name="mois_naissance" id="mois_naissance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        <option value="01" name="mois_naissance" id="mois_naissance">January</option>
                        <option value="02" name="mois_naissance" id="mois_naissance">February</option>
                        <option value="03" name="mois_naissance" id="mois_naissance">March</option>
                        <option value="04" name="mois_naissance" id="mois_naissance">April</option>
                        <option value="05" name="mois_naissance" id="mois_naissance">May</option>
                        <option value="06" name="mois_naissance" id="mois_naissance">June</option>
                        <option value="07" name="mois_naissance" id="mois_naissance">July</option>
                        <option value="08" name="mois_naissance" id="mois_naissance">August</option>
                        <option value="09" name="mois_naissance" id="mois_naissance">September</option>
                        <option value="10" name="mois_naissance" id="mois_naissance">October</option>
                        <option value="11" name="mois_naissance" id="mois_naissance">November</option>
                        <option value="12" name="mois_naissance" id="mois_naissance">December</option>
                    </select>
                </label>
                <!-- </div> -->
                <label for="jour_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Day</label>
                    <select name="jour_naissance" id="jour_naissance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </select>
                </label>
                <!-- </div> -->
                <!-- <div> -->
                <label for="annee_naissance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                    <select name="annee_naissance" id="annee_naissance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </select>
                </div>
                            <div class="flex justify-between">
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create your account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <!-- <button type="button" class="h-auto w-auto text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-medium rounded-lg text-sm me-2 mb-2 px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 ">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 19">
                <path fill-rule="evenodd" d="M8.842 18.083a8.8 8.8 0 0 1-8.65-8.948 8.841 8.841 0 0 1 8.8-8.652h.153a8.464 8.464 0 0 1 5.7 2.257l-2.193 2.038A5.27 5.27 0 0 0 9.09 3.4a5.882 5.882 0 0 0-.2 11.76h.124a5.091 5.091 0 0 0 5.248-4.057L14.3 11H9V8h8.34c.066.543.095 1.09.088 1.636-.086 5.053-3.463 8.449-8.4 8.449l-.186-.002Z" clip-rule="evenodd"/>
                </svg>
                Sign in with Google
                </button>
                <button type="button" class="text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 me-2 mb-2">
                <svg class="w-5 h-5 me-2 -ms-1" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path></svg>
                Sign in with Apple
                </button> -->
            <!-- Inscription -->
            <!-- <button id="loginModal" class="p-2 bg-blue-500 text-white rounded">Login</button>     
                <div id="myLoginModal" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 h-screen w-full">
                    <div class="bg-white rounded shadow-lg w-auto p-4 dark:bg-gray-800">
                        <button id="closeLoginModal" class="absolute p-2 bg-red-500 text-white rounded">X</button>
                        <form class="w-64" method="">
                            <h2 class="text-2xl mb-4 w-full text-center dark:text-white">Login</h2>

                    <div class="flex p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        <span class="font-medium">Ensure that these requirements are met:</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            <li>At least 10 characters (and up to 100 characters)</li>
                            <li>At least one lowercase character</li>
                            <li>Inclusion of at least one special character, e.g., ! @ # ?</li>
                        </ul>
                    </div>
                    </div>
                            <label for="loginEmail" class="block mb-2 dark:text-white">Email</label>
                            <input form="loginEmail" type="email" class="w-full mb-4 p-2 border rounded dark:bg-gray-700">
                            <label for="loginPassword" class="block mb-2 dark:text-white">Password</label>
                            <input form="loginPassword" type="password" class="w-full mb-4 p-2 border rounded dark:bg-gray-700">
                            <a href="profile.php">
                            <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded ">Login</button>
                            </a>
                        </form>
                    </div>
                </div>
            </div> -->

<!-- Modal toggle -->
<button id="loginModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
  Login
</button>

        <!-- Main modal -->
        <div id="myLoginModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Log in to our platform
                        </h3>
                        <button type="button" id="closeLoginModal" class="end-2.5 text-red-400 bg-transparent hover:bg-gray-200 hover:text-red-400 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-4 md:p-5">
                        <form class="space-y-4" method="POST" action="">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                <input type="email" name="email" id="loginEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                <input type="password" name="password" id="loginPassword" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white" required />
                            </div>
                            <div class="flex justify-between">
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Login to your account</button>
                            <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                                Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 

            <div class="lg:mt-0 lg:col-span-5 lg:flex">
                <svg class="w-auto h-auto dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" d="M13.8 10.5 20.7 2h-3l-5.3 6.5L7.7 2H1l7.8 11-7.3 9h3l5.7-7 5.1 7H22l-8.2-11.5Zm-2.4 3-1.4-2-5.6-7.9h2.3l4.5 6.3 1.4 2 6 8.5h-2.3l-4.9-7Z"/>
            </svg>
        </div>
    </div>
</section>
</main>
</body>
</html>
