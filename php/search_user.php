<?php

require_once("connect_db.php");

if($_GET){

    $name = $_GET['search'];

    $sql = "SELECT * FROM user WHERE username LIKE '$name' ";
    
    $requette = $db->query($sql);
    $user = $requette->fetchAll(PDO::FETCH_ASSOC);
    
    if($requette->rowCount() > 0){
        
        foreach($user as $info){
            echo "<pre>";
            print_r($info);
            echo "</pre>";
        }
    }else{

        echo "Nom introuvable";

    }


}else{

    header("Location: http://localhost/TWITTER/Page_Recherche/recherche.php");

}

