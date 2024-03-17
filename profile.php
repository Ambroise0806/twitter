<?php
session_start();
include './back/connexion.php';
$con = new Connexion('twitter');

if (isset($_SESSION['mail'])) {
    $userMail = $_SESSION['mail'];
    $sql = "SELECT * FROM user WHERE mail = :email";
    $statement = $con->getPDO()->prepare($sql);
    $statement->bindParam(':email', $userMail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
} else {
    echo "No user found.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/css/output.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="front/css/profile.css"> -->
    <script src="front/javascript/editProfile.js"></script>
    <script src="front/javascript/light_mode.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <title>Twitter</title>
</head>


<body class="bg-gray-200 dark:bg-gray-800">
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-900">
            <a href="homepage.php" class="flex items-center ps-2.5 mb-5">
                <i class="fa-brands fa-x-twitter p-2 bg-blue-200 rounded-full dark:bg-white"></i></a>
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">X</span>
            </a>
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="homepage.php"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path fill-rule="evenodd"
                                d="M11.3 3.3a1 1 0 0 1 1.4 0l6 6 2 2a1 1 0 0 1-1.4 1.4l-.3-.3V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3c0 .6-.4 1-1 1H7a2 2 0 0 1-2-2v-6.6l-.3.3a1 1 0 0 1-1.4-1.4l2-2 6-6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 18">
                            <path
                                d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">User</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Inbox</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign out</span>
                    </a>
                </li>
                <li>
                    <button id="theme-toggle" type="button"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group rounded-full text-gray-600  hover:bg-gray-100  dark:text-gray-400 dark:hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Light/Dark mode</span>
                    </button>
                </li>
            </ul>
        </div>
    </aside>
    </header>

    <main class="flex flex-col m-2" style="margin-top: 30%; margin-bottom: 20%;">

        <body>
            <div class="flex flex-wrap">
                <img src="/uploads/<?php echo htmlspecialchars($user['banner']); ?>" alt="user banner">
                <img class="w-16 h-16 m-4 rounded-full ring-2 ring-gray-400 dark:ring-gray-500"
                    src="/uploads/<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="user photo">
                </div>
    <!-- Modal toggle -->
            <button id="editProfile"
                    class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    Edit Profile
            </button>
            <!-- <div class="edit-popup" id="editMyProfile"> -->
            <div id="myProfileModal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Edit your profile
                            </h3>
                                <button type="button" id="closeProfileModal"
                                    class="end-2.5 text-red-400 bg-transparent hover:bg-gray-200 hover:text-red-400 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form action="" class="form-container space-y-4" method="POST" enctype="multipart/form-data">
                        <div>
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <b>Username</b></label>
                        <input type="text" name="username"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                        <label for="at_user_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <b>@ Username</b></label>
                        <input type="text" name="at_user_name"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                        <label for="profile_picture"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 
                            <b>Profile Pic</b></label>
                        <input type="file"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white"
                            name="profile_picture" accept=".jpg, .jpeg, .png">
                        </div>
                        <div>
                        <label for="bio"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <b>Biography</b></label>
                        <input type="text" name="bio"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                        <label for="banner"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <b>Banner</b></label>
                        <input type="file" name="banner" accept=".jpg, .jpeg, .png"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>
                        <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            <b>Password</b></label>
                        <input type="text" name="password"
                            class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                        </div>
                    <div class="flex flex-row space-x-4">
                        <input type="radio" id="private" name="private" value="true">
                        <label for="private"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Private Account
                        </label>
                        <input type="radio" id="public" name="private" value="false">                        
                        <label for="public"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Public Account
                    </label>
                    </div>
                    <div>
                        <label for="city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        <b>Your City</b></label>
                        <input type="text" name="city"
                        class="bg-gray-50 border text-gray-900 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-600 dark:placeholder-gray-400 dark:text-white">
                    </div>
                    <div class="flex flex-row">
                        <button type="submit" class="editbtn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" name="edit" id="saveEdit">Save changes</button>
                        <button type="button" class="cancel-btn focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" id="closeEdit">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
            
            <?php
            if (isset ($_POST['edit'])) {
                $userMail = $_SESSION['mail'];
                $updates = array();
                $params = array(':email' => $userMail);

                if (!empty ($_POST['username'])) {
                    $updates[] = 'username = :username';
                    $param[':username'] = $_POST['username'];
                }
                if (!empty ($_POST['at_user_name'])) {
                    $at_user_name = '@' . $_POST['at_user_name'];
                    $updates[] = 'at_user_name = :at_user_name';
                    $params[':at_user_name'] = $at_user_name;
                }
                if (!empty ($_FILES['profile_picture']['name'])) {
                    $profile_pic = $_FILES['profile_picture']['name'];
                    $profile_pic_tmp = $_FILES['profile_picture']['tmp_name'];
                    $profile_pic_path = "/$profile_pic";
                    move_uploaded_file($profile_pic_tmp, $profile_pic_path);
                    $updates[] = 'profile_picture = :profile_picture';
                    $params[':profile_picture'] = $profile_pic_path;
                }
                if (!empty ($_POST['bio'])) {
                    $updates[] = 'bio = :bio';
                    $params[':bio'] = $_POST['bio'];
                }
                if (!empty ($_FILES['banner']['name'])) {
                    $banner = $_FILES['banner']['name'];
                    $banner_tmp = $_FILES['banner']['tmp_name'];
                    $banner_path = "/$banner";
                    move_uploaded_file($banner_tmp, $banner_path);
                    $updates[] = 'banner = :banner';
                    $params[':banner'] = $banner_path;
                }
                if (!empty ($_POST['password'])) {
                    $updates[] = 'password = :password';
                    $params[':password'] = $_POST['password'];
                }
                if (!empty ($_POST['privacy'])) {
                    $updates[] = 'private = :private';
                    $params[':private'] = $_POST['private'];
                }
                if (!empty ($_POST['city'])) {
                    $updates[] = 'city = :city';
                    $params[':city'] = $_POST['city'];
                }
                $sql = "UPDATE user SET " . implode(', ', $updates) . " WHERE mail = :email";
                $update = $con->getPDO()->prepare($sql);
                $update->execute($params);

                if ($update) {
                    echo "Congrats! Your profile is up to date.";
                } else {
                    echo "Sorry, we weren't able to update your profile.";
                }
            }
            print_r($user)
            ?>

            <div class="text-gray-900 font-bold text-lg dark:text-white">
                <?php echo htmlspecialchars($user['username'] . ' ') ?>
            </div>
            <div class="text-gray-600 dark:text-gray-500">
                <?php echo htmlspecialchars($user['at_user_name'] . ' ') ?>
            </div>
            <div>
                <?php echo htmlspecialchars($user['bio']) ?>
            </div>
            <div>
                <?php echo htmlspecialchars($user['city']) ?>
            </div>
            <div>
                <?php echo htmlspecialchars($user['birthdate']) ?>
            </div>
            <div class="flex flex-wrap">
                <svg class="w-[24px] h-[24px] text-gray-800 dark:text-gray-500" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14c.6 0 1-.4 1-1V7c0-.6-.4-1-1-1H5a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Zm3-7h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Zm-8 4h0v0h0v0Zm4 0h0v0h0v0Zm4 0h0v0h0v0Z" />
                </svg>
                <span class="text-gray-800 dark:text-gray-500">
                    <p>Joined
                        <?php
                        echo htmlspecialchars($user['creation_time'] . ' ')
                            ?>
                    </p>
                </span>
            </div>
            <div class="text-gray-800 dark:text-gray-500">
                5 Following
                100 Followers
            </div>

        </body>
    </main>

    <!-- Footer -->
    <div
        class="fixed z-50 w-full h-16 max-w-lg -translate-x-1/2 bg-white border border-gray-200 bottom-0 left-1/2 dark:bg-gray-700 dark:border-gray-600">
        <div class="grid h-full max-w-lg grid-cols-5 mx-auto">
            <button data-tooltip-target="tooltip-home" type="button"
                class="inline-flex flex-col items-center justify-center px-5 rounded-s-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="homepage.php">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                </a>
                </svg>
                <span class="sr-only">Home</span>
            </button>
            <div id="tooltip-home" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Home
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <button data-tooltip-target="tooltip-search" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="search.php">
                    <svg class="w-5 h-5 mb-1 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        id="iconSearch" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </a>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <div id="tooltip-search" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Search
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <div class="flex items-center justify-center">
                <button data-tooltip-target="tooltip-new" type="button"
                    class="inline-flex items-center justify-center w-10 h-10 font-medium bg-blue-600 rounded-full hover:bg-blue-700 group focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
                    <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                    <span class="sr-only">New tweet</span>
                </button>
            </div>
            <div id="tooltip-new" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Add new tweet
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <button data-tooltip-target="tooltip-inbox" type="button"
                class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="inbox.php">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"" aria-hidden="
                        true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="m3.5 5.5 7.9 6c.4.3.8.3 1.2 0l7.9-6M4 19h16c.6 0 1-.4 1-1V6c0-.6-.4-1-1-1H4a1 1 0 0 0-1 1v12c0 .6.4 1 1 1Z" />
                </a>
                </svg>
                </svg>
                <span class="sr-only">Inbox</span>
            </button>
            <div id="tooltip-inbox" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Inbox
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <button data-tooltip-target="tooltip-profile" type="button"
                class="inline-flex flex-col items-center justify-center px-5 rounded-e-full hover:bg-gray-50 dark:hover:bg-gray-800 group">
                <a href="profile.php">
                    <svg class="w-5 h-5 mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                </a>
                </svg>
                <span class="sr-only">Profile</span>
            </button>
            <div id="tooltip-profile" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Profile
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>