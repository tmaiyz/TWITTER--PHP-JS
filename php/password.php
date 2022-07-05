<?php

require_once("connect_db.php");
require_once("../php/connection.php");

if (isset($_POST['Password']) && !empty($_POST['Password'])) {

    $id = $_SESSION['id'];

    $password = $_POST['Password'];

    $password = hash('ripemd160', $password);

    $sql = "UPDATE `user` SET password = '$password' WHERE id like '$id'";

    $db->query($sql);

    $_SESSION['password'] = $_POST['Password'];

    header("Location: http://localhost/TWITTER/Page_More/more.php");

} else {
    header("Location: http://localhost/TWITTER/Page_More/more.php");
}
