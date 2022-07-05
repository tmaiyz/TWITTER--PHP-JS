<?php

require_once("connection.php");
require_once("connect_db.php");

if ($_SESSION) {
    if ($_POST) {
        $follower = $_SESSION['id'];
        $follow = $_POST['UnfollowOtherIdUser'];


        $sql = "DELETE FROM follow WHERE follower_id like '$follow' ";

        $db->query($sql);

        header("Location: http://localhost/TWITTER/Page_Recherche/recherche.php");
    } else {
        header("Location: http://localhost/TWITTER/Page_Recherche/recherche.php");
    }
} else {

    header("Location: http://localhost/TWITTER/Page%20de%20connexion/index.php");
}