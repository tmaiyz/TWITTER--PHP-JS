<?php
require_once("../php/connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="more.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Twitter</title>
</head>
<body>
<?php

if($_SESSION){

?>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-3 col-md-2 col-1" id="navbar">
                <div class="col-12" id="largeur">
                    
                        <div class="logo-twitter">
                            <a href="../Page_Accueil/accueil.php"><img id="logo" src="img/LogoTwitter.png" alt="logo twitter"></a>
                        </div>
                   
                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Accueil/accueil.php"><img id="home1" src="img/home.png" alt="home"></a>
                                <a href="../Page_Accueil/accueil.php"><h5>Home</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Followers/followers.php"><img id="home1" src="img/lists.png" alt="home"></a>
                                <a href="../Page_Followers/followers.php"><h5>Followers</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_following/following.php"><img id="home1" src="img/bell.png" alt="home"></a>
                                <a href="../Page_following/following.php"><h5>Following</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Message/message.php"><img id="home1" src="img/msg.png" alt="home"></a>
                                <a href="../Page_Message/message.php"><h5>Messages</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Theme/theme.php"><img id="home1" src="img/bookmarks.png" alt="home"></a>
                                <a href="../Page_Theme/theme.php"><h5>Thème</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Recherche/recherche.php"><img id="home1" src="img/hashtag.png" alt="home"></a>
                                <a href="../Page_Recherche/recherche.php"><h5>Recherche</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Profil/profil.php"><img id="home1" src="img/profil.png" alt="home"></a>
                                <a href="../Page_Profil/profil.php"><h5>Profile</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                            <a href="more.php"><img id="home1" src="img/more.png" alt="home"></a>
                            <a href="more.php"><h5>More</h5></a>
                            </div>
                        </div>

                        <div class="tweeting">
                            <a href="../Page_Accueil/accueil.php"><button class="tweeting1" type="button">tweet</button></a>
                        </div>

                        <div class="profil">
                            <div>
                                <img class="profil1" src="<?= $_SESSION['avatar'] ?>">
                            </div>
    
                            <div> 
                                <h5><?= $_SESSION['name'] ?></h5>
                                <h6><?= $_SESSION['username'] ?></h6>
                            </div>
                            
                            <div class="separation1">
                                <a href=""></a><img class="bouton1" src="img/points.png">
                            </div>      
                        </div>
                </div>      
            </div>

            <div class="col-lg-9 col-md-10 col-11" id="more">
                <div class="container-fluid">
                    <div class="row">
                        <a href="more_profil.php"><div class="col-12" id="lien_modif_profil1">
                            <h1>MODIFIER LE PROFIL DE L'UTILISATEUR</h1>
                        </div></a>

                        <a href="more_mdp.php"><div class="col-12" id="lien_modif_profil2">
                            <h1>MODIFIER LE MOT DE PASSE</h1>
                        </div></a>

                        <form  class="col-12" action="../php/deconnexion.php" method="POST">
                            <button type="submit">DECONNEXION</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else{
    header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
}
?>
    <script src="more.js"></script>

</body>
</html>