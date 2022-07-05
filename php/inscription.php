<?php

require_once("connect_db.php");

if (
    isset($_POST['Username']) && isset($_POST['Name']) && isset($_POST['Genre']) &&
    isset($_POST['Birthdate']) && isset($_POST['Country']) && isset($_POST['Email']) &&
    isset($_POST['Password']) &&

    !empty($_POST['Username']) && !empty($_POST['Name']) && !empty($_POST['Genre']) &&
    !empty($_POST['Birthdate']) && !empty($_POST['Country']) && !empty($_POST['Email']) &&
    !empty($_POST['Password'])
) {

    

    $username = "@" . $_POST['Username'];

    $name = $_POST['Name'];

    $gender = $_POST['Genre'];

    $birthdate = $_POST['Birthdate'];

    $country = $_POST['Country'];

    $password = $_POST['Password'];

    $password = hash('ripemd160', $password);

    $email = $_POST['Email'];

    $sql = "INSERT INTO user(username, name, email, gender, birthdate, country, password)
    VALUES('$username', '$name', '$email', '$gender', '$birthdate', '$country', '$password')";

    $stmt = $db->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    $stmt3 = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt3->execute([$username]);
    $userusername2 = $stmt3->fetch();

    if ($user || $userusername2) {
        // email ou username existe
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    } else {
        // email n'existe pas
        $requette = $db->query($sql);
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
} elseif (
    isset($_POST['Username']) && isset($_POST['Name']) && isset($_POST['Genre']) &&
    isset($_POST['Birthdate']) && isset($_POST['Country']) && isset($_POST['Phone']) &&
    isset($_POST['Password']) &&

    !empty($_POST['Username']) && !empty($_POST['Name']) && !empty($_POST['Genre']) &&
    !empty($_POST['Birthdate']) && !empty($_POST['Country']) && !empty($_POST['Phone']) &&
    !empty($_POST['Password'])
) {

    $username = "@" . $_POST['Username'];

    $name = $_POST['Name'];

    $gender = $_POST['Genre'];

    $birthdate = $_POST['Birthdate'];

    $country = $_POST['Country'];

    $password = $_POST['Password'];

    $password = hash('ripemd160', $password);

    $phone = $_POST['Phone'];

    $sql = "INSERT INTO user(username, name, gender, birthdate, country, phone, password)
    VALUES('$username', '$name', '$gender', '$birthdate', '$country', '$phone', '$password')";

    $stmt2 = $db->prepare("SELECT * FROM user WHERE Phone = ?");
    $stmt2->execute([$phone]);
    $user2 = $stmt2->fetch();

    $stmt3 = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt3->execute([$username]);
    $userusername = $stmt3->fetch();

    //------------------------------------------------------

    if ($user2 || $userusername) {
        // tel existe
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    } else {
        // tel existe pas
        $requette = $db->query($sql);
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
} elseif (
    isset($_POST['Username']) && isset($_POST['Name']) && isset($_POST['Genre']) &&
    isset($_POST['Birthdate']) && isset($_POST['Country']) && isset($_POST['Email']) && isset($_POST['Phone']) &&
    isset($_POST['Password']) &&
    !empty($_POST['Username']) && !empty($_POST['Name']) && !empty($_POST['Genre']) &&
    !empty($_POST['Birthdate']) && !empty($_POST['Country']) && !empty($_POST['Email']) && !empty($_POST['Phone']) &&
    !empty($_POST['Password'])
) {

    $username = "@" . $_POST['Username'];

    $name = $_POST['Name'];

    $gender = $_POST['Genre'];

    $birthdate = $_POST['Birthdate'];

    $country = $_POST['Country'];

    $password = $_POST['Password'];

    $password = hash('ripemd160', $password);

    $phone = $_POST['Phone'];

    $email = $_POST['Email'];

    $sql = "INSERT INTO user(username, name, email, gender, birthdate, country, phone, password)
    VALUES('$username', '$name', '$email', '$gender', '$birthdate', '$country', '$phone', '$password')";

    $stmt = $db->prepare("SELECT * FROM user WHERE Email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    $stmt2 = $db->prepare("SELECT * FROM user WHERE Phone = ?");
    $stmt2->execute([$phone]);
    $user2 = $stmt2->fetch();

    $stmt3 = $db->prepare("SELECT * FROM user WHERE username = ?");
    $stmt3->execute([$username]);
    $userusername1 = $stmt3->fetch();

    if ($user || $user2 || $userusername1) {
        // email ou le tel existe
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    } else {
        // email ou le tel n'existe pas
        $requette = $db->query($sql);
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
} else {
    header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
}
