<?php

require_once("connect_db.php");
require_once("../php/connection.php");



$id = $_SESSION['id'];

$email = $_POST['email'];
$username = $_POST['username'];
$name = $_POST['name'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$biographie =  $_POST['biographie'];
$location = $_POST['location'];
$siteweb = $_POST['siteweb'];
$pdp = $_FILES['ProfilPicture'];
$backgroundprofil = $_FILES['BackgroundProfil'];


if (!empty($email)) {
    $stmt = $db->prepare("SELECT * FROM user WHERE Email = ?");

    $stmt->execute([$email]);

    $user = $stmt->fetch();

    if ($user) {
        // email existe
        header("Location: http://localhost/TWITTER/Page_More/more.php");
    } {
        // email n'existe pas
        $sql = "UPDATE `user` SET email = '$email' WHERE id like '$id'";
        $db->query($sql);
        $_SESSION['email']  = $email;
        header("Location: http://localhost/TWITTER/Page_More/more.php");
    }
}

if (!empty($username)) {
    $stmt = $db->prepare("SELECT * FROM user WHERE username = ?");

    $stmt->execute([$username]);

    $user = $stmt->fetch();

    if ($user) {
        header("Location: http://localhost/TWITTER/Page_More/more.php");
    } else {
        $sql2 = "UPDATE `user` SET username = '$username' WHERE id like '$id'";
        $db->query($sql2);
        $_SESSION['username'] = $username;
        header("Location: http://localhost/TWITTER/Page_More/more.php");
    }
}

if (!empty($name)) {
    $sql3 = "UPDATE `user` SET name = '$name' WHERE id like '$id'";
    $db->query($sql3);
    $_SESSION['name'] = $name;
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}

if (!empty($country)) {

    $sql4 = "UPDATE `user` SET country = '$country' WHERE id like '$id'";
    $db->query($sql4);
    $_SESSION['country'] = $country;
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}

if (!empty($phone)) {

    $stmt = $db->prepare("SELECT * FROM user WHERE phone = ?");

    $stmt->execute([$phone]);

    $user = $stmt->fetch();

    if ($user) {
        header("Location: http://localhost/TWITTER/Page_More/more.php");
    } else {
        $sql5 = "UPDATE `user` SET phone = '$phone' WHERE id like '$id'";
        $db->query($sql5);
        $_SESSION['phone'] = $phone;

        header("Location: http://localhost/TWITTER/Page_More/more.php");
    }
}

if (!empty($biographie)) {
    $sql6 = "UPDATE `user` SET token = '$biographie' WHERE id like '$id'";
    $db->query($sql6);
    $_SESSION['token'] = $biographie;
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}

if (!empty($location)) {
    $sql7 = "UPDATE `user` SET location = '$location' WHERE id like '$id'";
    $db->query($sql7);
    $_SESSION['location'] = $location;
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}

if (!empty($siteweb)) {
    $sql8 = "UPDATE `user` SET website = '$siteweb' WHERE id like '$id'";
    $db->query($sql8);
    $_SESSION['website'] = $siteweb;
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}

if (!empty($pdp)) {

    $imagefilename = $pdp['name'];
    $filetmp = $pdp['tmp_name'];
    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));
    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = '../image/' . $imagefilename;
        move_uploaded_file($filetmp, $upload_image);
        $sql9 = "UPDATE `user` SET avatar = '$upload_image' WHERE id like '$id'";
        $db->query($sql9);
        $_SESSION['avatar'] = $upload_image;
        header("Location: http://localhost/TWITTER/Page_More/more.php");
        // var_dump($_SESSION['avatar']);
    }
}

if (!empty($backgroundprofil)) {

    $imagefilename2 = $backgroundprofil['name'];
    $filetmp2 = $backgroundprofil['tmp_name'];
    $filename_separate2 = explode('.', $imagefilename2);
    $file_extension2 = strtolower(end($filename_separate2));
    $extension2 = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension2, $extension2)) {
        $upload_image2 = '../image/' . $imagefilename2;
        move_uploaded_file($filetmp2, $upload_image2);

        $sql10 = "UPDATE `user` SET cover = '$upload_image2' WHERE id like '$id'";
        $db->query($sql10);
        $_SESSION['cover'] = $upload_image2;
        header("Location: http://localhost/TWITTER/Page_More/more.php");
        // var_dump($_SESSION['cover']);
    }
}

header("Location: http://localhost/TWITTER/Page_More/more.php");
