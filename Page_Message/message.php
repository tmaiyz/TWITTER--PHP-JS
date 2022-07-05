<?php
require_once("../php/connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="message.css">
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
            <div class="col-lg-3 col-md-2 col-xs-2 col-sm-2" id="navbar">
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
                                <a href="message.php"><img id="home1" src="img/msg.png" alt="home"></a>
                                <a href="message.php"><h5>Messages</h5></a>
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
                                <a href="../Page_More/more.php"><img id="home1" src="img/more.png" alt="home"></a>
                                <a href="../Page_More/more.php"><h5>More</h5></a>
                            </div>
                        </div>

                        <div class="tweeting">
                            <a href="../Page_Accueil/accueil.php"><button class="tweeting1" type="button">tweet</button></a>
                        </div>

                        <div class="profil">
                            <div>
                                <a href="../Page_Profil/profil.php"><img class="profil1" src="<?= $_SESSION['avatar'] ?>"></a>
                            </div>
    
                            <div class="mode"> 
                                <h5><?= $_SESSION['name'] ?></h5>
                                <h6><?= $_SESSION['username'] ?></h6>
                            </div>
                            
                            <div class="separation1">
                                <a href=""></a><img class="bouton1" src="img/points.png">
                            </div>      
                        </div>
                </div>      
            </div>

            <div class="col-lg-4 col-md-5 col-xs-5 col-sm-5" id="middle1">
                <div class="col-12" id="middle">
                    <div class="head-message">
                        <div>
                            <a href="message.php"><p>Messages</p></a>
                        </div>

                        <div>
                            <img src="img/parametre.png" alt="parametre">
                            <a href="message.php"><img id="para-message" src="img/msg.png" alt="message"></a>    
                        </div>
                    </div>

                    <div class="col-12" id="recherche">
                        <img class="recherche" src="img/recherche.png" alt="recherche">
                        <input type="text" id="recherche-input" placeholder="Search for people or groups">
                    </div>                  
                </div>

                <div class="profil2">
     
                        <img class="profil3" src="img/id_icone.png">
       
                        <h5>Le Monde</h5>
              
                        <h6>@lemonde</h6>
            
                        <a href=""></a><img class="bouton1" src="img/points.png">
                    </div>      

            </div>

            <div class="col-lg-5 col-md-5 col-xs-5 col-sm-5" id="part3">
                <div class="col-12">
                    <div class="message-timeline">
                        <div id="message-navbar">
                            <div class="photo-message" >
                                <img id="photo-message" src="img/id_icone.png" alt="photo de profil">
                            </div>

                            <div class="nom-message">
                                <h6>Le Monde</h6>
                                <p>@lemonde</p>
                            </div>

                            <div>
                                <img class="parametre-message" src="img/parametre.png" alt="parametre">
                            </div>
                        </div>

                        <div class="ForMessage">

                           <!-- <form method="POST">
                                <label>Destinataire:</label>
                                <select name="destinataire">
                                    <option>Boucle</option>
                                </select>
                                <br /><br />
                                <textarea placeholder="Votre message" name="messafe"></textarea>
                                <br /><br />
                                <input type="submit" value="Envoyer" name="envoi_message"/>
                           </form> -->

                        </div>

                        <div>

                        </div>
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

<script src="messages.js"></script>

</body>
</html>