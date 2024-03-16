<?php 
session_start();
if (isset($_SESSION['mail'])) {
    $userMail = $_SESSION['mail'];
    $sql = "SELECT * FROM user WHERE mail = :email";
    $statement = $con->getPDO()->prepare($sql);
    $statement->bindParam(':email', $userMail);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    ?>
        <div>
            <h1>Welcome, <?php echo htmlspecialchars($user['username'] . ' ') ?> !;</h1>
            <p>This is your informations</p>
            <p>@Username: <?php echo htmlspecialchars($user['at_user_name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($user['mail']); ?></p>
            <p>Birthdate: <?php echo htmlspecialchars($user['birthdate']); ?></p>
        </div>
    <?php
    }else {
        echo "No user found.";
    }
    // session_destroy();
