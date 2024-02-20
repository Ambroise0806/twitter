<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Twitter</title>
</head>

<body style="margin: 0; display: flex; flex-direction: column;">
    <header
        style="position: fixed; top: 0; background-color: lightblue; width: 100%; height: fit-content; transition: top 0.2s ease-in-out;">
        <nav>
            <!-- pp->redirection->bar nav lateral && logo centrer -->
            <ul style="display: flex; list-style-type: none;">
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
        </nav>
    </header>
    <main style="display: flex; flex-direction: column; margin-top: 30%; margin-bottom: 20%;">
        <!-- Ajouter un tweet au fil -->
        <div style="display: flex; justify-content: center; align-items: center;">
            <div
                style="width: 600px; display: flex; justify-content: center; align-items: center; border: 1px solid lightgray;">
                <div>
                    <form action="" method="POST">
                        <input id="newPost_container" name="newTweet" type="text"
                            placeholder="Quoi de neuf aujourd'hui ?">
                        <span id="newPost_length" class="">0</span>
                        <span id="newPost_maxLength" class=""> / 140 </span>
                        <button id="newPost_button" class="disabled" type="submit"
                            style="width: fit-content; height: 25px; background-color: white;   background-color: blue; border: none; color: white; padding: 0px 32px;text-align: center;text-decoration: none;">POST</button>
                    </form>
                </div>
                <span id="error_newPost" class="error_newPost"></span>
            </div>
        </div>
        <!-- fil d'actualite -->
        <?php
            include('addTweet.php');

            $db = new Database('twitter_jour2');
            $newTweet = $_POST['newTweet'];
            if(mb_strlen($newTweet) == 0){
                return;
            }else{
                $db->addNewTweet(724, $newTweet);
            }
        ?>
        <div style="display: flex; justify-content: center;">
            <div
                style="display: flex; flex-direction: column; margin: 25px 0px; border: 1px solid lightblue; width: 600px; height: fit-content; padding: 20px 0px; background-color: rgb(236, 236, 236);">
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
            <ul style="display: flex; list-style-type: none;">
                <div style="display: flex; justify-content: space-around; width: 100%;">
                    <li style="width: 70px;"><a href="homepage.html"><img src="assets/home_icon.png" style="width: 55%;"
                                alt="Icon acceuil"></a>
                    </li>
                    <li style="width: 70px;"><a href="#"><img src="assets/search_icon.png" style="width: 55%;"
                                alt="Icon de recherche"></a>
                    </li>
                    <li style="width: 70px;"><a href="#"><img src="assets/message_icon.png" style="width: 55%;"
                                alt="Icon de messagerie"></a>
                    </li>
                </div>
            </ul>
        </nav>
    </footer>
</body>

</html>
<!-- header->sticky main->scrollable footer->fixed -->