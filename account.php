<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>myaccount</title>
    <link rel="stylesheet" href="account.css">
    <script src="account.js"></script>
</head>
<body>
    <div class="profil">
        <div class="pp">pp</div>
        <span class="username">username</span>
        <span class="@">@</span>    
        
        <div id="open-btn">
            <button class="open-button" onclick="openForm()"><strong>Editer le profil</strong></button>
        </div>
        <div class="editform" id="popupForm">
            <form action=".php" class="form-container">
                <label for="profilePic">
                    <input type="file" name="profilePic" accept="image/png, image/jpg">
                </label>
                <label for="username">
                    <input type="text" name="username">
                </label>
                <label>
                    <input type="text" name="bio">
                </label>
                <label>
                    <input type="date" name="birthdate">
                </label>
                <button type="submit" id="saveChanges">Enregistrer</button>
                <button type="submit" id="cancelChanges" onclick="closeForm()">Annuler</button>
            </form>
        </div>
        
        
        
        <h4>Abonnements</h4><p>data abonnements</p>
        <h4>Abonnés</h4><p>data abonnés</p>
    </div>
    <hr>
    <p>data des tweets du user</p>
    <footer style="background-color: #e0e0d3; position: fixed; bottom: 0; width: 100%;">
        <nav>
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
<?php
    include('user.php');
    $user = $_POST['user'];
?>