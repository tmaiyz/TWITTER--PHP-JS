<?php

require_once("connection.php");
require_once("connect_db.php");


if ($_SESSION) {
    if ($_POST) {
        $follower = $_SESSION['id'];
        $follow = $_POST['OtherIdUser'];
        $date = "now()";

        $sql = "INSERT INTO follow (follow_id, follower_id, follow_date) VALUES ('$follower', '$follow', $date)";

        $db->query($sql);

        header("Location: http://localhost/TWITTER/Page_Recherche/recherche.php");
    } else {
        header("Location: http://localhost/TWITTER/Page_Recherche/recherche.php");
    }
} else {

    header("Location: http://localhost/TWITTER/Page%20de%20connexion/index.php");
}
