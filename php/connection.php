<?php

session_start();

require_once("connect_db.php");



if (isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    //--------------------------------------------------------------------

    $stmt = $db->prepare("SELECT * FROM user WHERE Email = ?");

    $stmt->execute([$email]);

    $user = $stmt->fetch();

    $hash = $user['password'];

    $password = hash('ripemd160', $password);

    if ($user) {
        if ($password === $hash) {
            header("Location: http://localhost/TWITTER/Page_Accueil/accueil.php");

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['birthdate'] = $user['birthdate'];
            $_SESSION['gender'] = $user['gender'];
            $_SESSION['avatar'] = $user['avatar'];
            $_SESSION['cover'] = $user['cover'];
            $_SESSION['website'] = $user['website'];
            $_SESSION['register_date'] = $user['register_date'];
            $_SESSION['visibility'] = $user['visibility'];
            $_SESSION['country'] = $user['country'];
            $_SESSION['language'] = $user['language'];
            $_SESSION['location'] = $user['location'];
            $_SESSION['timezone'] = $user['timezone'];
            $_SESSION['connect'] = $user['connect'];
            $_SESSION['active'] = $user['active'];
            $_SESSION['token'] = $user['token'];
        } else {
            header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
        }
    } else {
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
} elseif (isset($_POST['Phone']) && isset($_POST['password']) && !empty($_POST['Phone']) && !empty($_POST['password'])) {

    $phone = $_POST['Phone'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM user WHERE Phone = ?");
    $stmt->execute([$phone]);
    $user = $stmt->fetch();

    $hash = $user['password'];

    $password = hash('ripemd160', $password);
    if ($user) {
        if ($password === $hash) {
            header("Location: http://localhost/TWITTER/Page_Accueil/accueil.php");

            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['birthdate'] = $user['birthdate'];
            $_SESSION['gender'] = $user['gender'];
            $_SESSION['avatar'] = $user['avatar'];
            $_SESSION['cover'] = $user['cover'];
            $_SESSION['website'] = $user['website'];
            $_SESSION['register_date'] = $user['register_date'];
            $_SESSION['visibility'] = $user['visibility'];
            $_SESSION['country'] = $user['country'];
            $_SESSION['language'] = $user['language'];
            $_SESSION['location'] = $user['location'];
            $_SESSION['timezone'] = $user['timezone'];
            $_SESSION['connect'] = $user['connect'];
            $_SESSION['active'] = $user['active'];
            $_SESSION['token'] = $user['token'];
        } else {
            header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
        }
    } else {
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
} elseif (isset($_POST['email']) && empty($_POST['password']) || isset($_POST['Phone']) && empty($_POST['password']) || isset($_POST['password']) && empty($_POST['email']) || isset($_POST['password']) && empty($_POST['Phone'])) {
    header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
}
