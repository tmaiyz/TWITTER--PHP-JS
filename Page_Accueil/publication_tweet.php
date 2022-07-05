<?php

require_once("../php/connection.php");

if($_POST) {
    publish_tweet();
}
function publish_tweet() {
    try {
        $IdSession = $_SESSION['id'];
        $target_file = null;
        if($_FILES['file_input']['name'] != "") {
            $target_dir = "../image/";
            $target_file = $target_dir . basename($_FILES["file_input"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["file_input"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
    
            // Check if file already exists
            // if (file_exists($target_file)) {
            //     echo "Sorry, file already exists.";
            //     $uploadOk = 0;
            // }
    
            // Check file size
            if ($_FILES["file_input"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
    
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            } 
        }
       
        
        $pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $publish = $pdo->query("INSERT into tweet (user_id,  tweet_date, content, media)
                                    values('$IdSession', now(),'$_POST[input_tweet]', '$target_file')");
        // $id = $this->pdo->query("SELECT id from user where name = '$_POST[Name]'");
        // $id = $id->fetch();
        // $publish = $this->pdo->query("UPDATE user
        //                                 set username = '$at$_POST[Name]$id[0]'
        //                                 WHERE name = '$_POST[Name]'");
        // $publish = $this->pdo->query("SELECT username, name, email from user where username like '$at$_POST[Name]$id[0]' ");
        $publish = $publish->fetchAll();
        // var_dump($id[0]);
        // echo "\n";
        // var_dump($publish);

        // return $publish;
        var_dump($_FILES['file_input']['name']);


        //   var_dump($target_file);
    }
    catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}

header('Location:./accueil.php');
