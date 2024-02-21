<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="./output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="/homepage.js"></script>
    <title>Twitter</title>
</head>

<body style="margin: 0; display: flex; flex-direction: column;">

    <!-- <header
        style="position: fixed; top: 0; background-color: lightblue; width: 100%; height: fit-content; transition: top 0.2s ease-in-out;">
        <nav>
            pp->redirection->bar nav lateral && logo centrer -->
            <!-- <ul style="display: flex; list-style-type: none;">
                <div style="display: flex; justify-content: space-between; width: 100%;">
                    <li><img src="assets/pp_nav.jpg" style="border-radius: 100%; width: 50%;" alt="Photo de profile"
                            id="button_pp">
                        <div id="nav_section" style="display: none;">
                            <nav>
                                <ul style="list-style-type: none;">
                                    <li><img src="assets/profile_icon.png" style="width: 10%;" alt="Icon de profile"><a
                                            href="#">Profile</a></li>
                                    <li><img src="assets/dayNight_icon.jpg" style="width: 30%;"
                                            alt="Icon changement de theme"><a href="#">Thème</a></li>
                                </ul>
                            </nav>
                        </div>
                    </li>
                    <li style="margin-right: 50%;"><a href="homepage.html"><img src="assets/x_logo.png"
                                style="width: 58px;" alt="logo aigle"></a>
                    </li>
                </div>
            </ul>
        </nav> -->


        <nav class="bg-gray-50 border-blue-200 dark:bg-gray-800 dark:border-gray-700">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="homepage.php" class="flex items-center space-x-3">
                    <img src="assets/pp_nav.jpg" class="h-8" alt="Profil Picture"/>
                    <span class="self-center text-2xl font-semibold whitespace-nonwrap dark:text-white">X</span>
                </a>
                <button data-collapse-toggle="navbar-hamburger" type="button" class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 dark:text-blue-800" aria-controls="navbar-hamburger"aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" strole-width="2" d="M1 1h15m1 7h15M1 13h15"/>
                    </svg>
                </button>

        <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-400 dark:border-gray-400">
                <li>
                <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-blue-800">
                        <i class="fas fa-user p-2 bg-blue-200 rounded-full"></i>Profile</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-blue-800">
                    <i class="fa-brands fa-x-twitter p-2 bg-blue-200 rounded-full"></i>Premium</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-blue-800">
                        <i class="fas fa-search p-2 bg-blue-200 rounded-full"></i>Rechercher</a>
                </li>
                <li>
                    <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 dark:text-blue-800">
                    <i class="fa-solid fa-arrow-right-from-bracket p-2 bg-blue-200 rounded-full"></i>Se déconnecter</a>
                </li>
            </div>
        </ul>
    </div>
</nav>
</header>

<main style="display: flex; flex-direction: column; margin-top: 30%; margin-bottom: 20%;">
    <div class="flex flex-col justify-center ml-3">
        <input type="checkbox" name="light-switch" class="light-switch sr-only" />
            <label class="relative cursor-pointer p-2" for="light-switch">
    <span class="sr-only">Switch to light / dark version</span>
    </label>
    </div>
        <!-- Ajouter un tweet au fil -->
        <div style="display: flex; justify-content: center; align-items: center;">
            <div style="width: 600px; display: flex; justify-content: center; align-items: center; border: 1px solid lightgray;">
                <input id="newPost_container" type="text" placeholder="Quoi de neuf aujourd'hui ?" max="140">
                <button type="submit" style="width: fit-content; height: 25px; background-color: white;   background-color: blue; border: none; color: white; padding: 0px 32px;text-align: center;text-decoration: none;">POST</button>
            </div>
        </div>
        <!-- fil d'actualite -->
        <div style="display: flex; justify-content: center;">
            <div style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/pp_nav.jpg" style="width: 7%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/image_tweet_test.jpg" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/brook.jpg" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/brook.jpg" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/chopper.webp" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/chopper.webp" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/franky.webp" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/franky.webp" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/jimbe.webp" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/jimbe.webp" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/nami.webp" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/nami.webp" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/robin.jpg" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/robin.jpg" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/sanji.jpg" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/sanji.jpg" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/ussop.webp" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/ussop.webp" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
                <div style="height: fit-content;">
                    <div style="display: flex; justify-content: center; width: fit-content;">
                        <img src="assets/zoro.png" style="width: 5%; height: 25%; border-radius: 100%;"
                            alt="Icon de profile">
                        <div style="display: flex; flex-direction: column;">
                            <div style="display: flex;">
                                <h1 style="margin: 0px 15px;">Username</h6>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 0px;">@useraccount</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 5px;margin-left: 15px; font-size: larger; font-weight: bolder;">.</span>
                                    <span
                                        style="align-items: self-start;display: flex;padding-top: 11px;margin-left: 15px;">Feb-19</span>
                            </div>
                            <div style="width: fit-content;margin-left: 20px;">
                                <p>User comment blablablabla</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; justify-content: center;">
                    <img src="assets/zoro.png" style="width: 30%;" alt="Image d'un tweetos">
                </div>
            </div>
        </div>
    </main>
    <footer style="background-color: #e0e0d3; position: fixed; bottom: 0; width: 100%;">
        <nav>
            <!-- icon button, search, message ->redirection vers la page respective -->
                <div style="display: flex; justify-content: space-around; width: 100%;">
                <ul class="flex font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-400 dark:border-gray-400">

                <li><a href="#" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 dark:text-blue-800">
                        <i class="fa-solid fa-house"></i>
                    </li>
                 <li><a href="#" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 dark:text-blue-800">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </li>
                    <li><a href="#" class="block py-2 px-3 text-gray-900 hover:bg-gray-100 dark:text-blue-800">
                        <i class="fa-solid fa-envelope"></i>
                    </li>
                </div>
            </ul>
        </nav>
    </footer>
</body>
</html>