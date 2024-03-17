<?php
session_start();

$user = 'guillaume';
$password = 'Loulou97133';
$dsn = 'mysql:dbname=twitter;host=localhost';

try {
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
    die;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['search']) && !empty($_POST['search'])) {
        $search = $_POST['search'];
        $s = $db->query("SELECT id, username FROM user LEFT JOIN follow ON follow.id_user = user.id WHERE username LIKE '$search%'");
        $res = $s->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['results'] = $res;
    } else {
        echo "Veuillez renseigner un nom";
    }
}

function UserDetails($username, $db, $search) {
    try {
        $stmt = $db->prepare("SELECT * FROM user WHERE username LIKE '$search%' ");
        $stmt->execute();
        $userDetails = $stmt->fetch(PDO::FETCH_ASSOC);
        return $userDetails;
    } catch (PDOException $e) {
        echo 'Erreur lors de la récupération des détails de l\'utilisateur : ' . $e->getMessage();
        return false;
    }
}

if(isset($_GET['username'])) {
    $username = $_GET['username'];
    if(isset($_SESSION['results'])) {
        $search = $_SESSION['results'];
    } else {
        $search = '';
    }
    $userDetails = UserDetails($username, $db, $search);
    if($userDetails) {
        echo "Nom d'utilisateur : " . $userDetails['username'];
    } else {
        echo "Utilisateurs introuvable";
    }
} else {
    echo "Nom d'utilisateur manquant";
}