<?php
require_once("../php/connection.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="following.css">
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
                                <a href="following.php"><img id="home1" src="img/bell.png" alt="home"></a>
                                <a href="following.php"><h5>Following</h5></a>
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

            <div class="col-lg-5 col-md-10 col-xs-10 col-sm-10 col-12" id="middle1">
                <div class="col-12" id="middle">
                    <div class="quatre">
                        <div class="head-followers">
                            <div class="img-fleche"> 
                                <a href="../Page_Profil/profil.php"><img id="fleche" src="img/fleche.png" alt="retour"></a>
                            </div>

                            <div class="nom_profil">
                                <h6><?= $_SESSION['name'] ?></h6>
                                <p><?= $_SESSION['username'] ?></p>
                            </div>
                        </div>

                        <div class="deux">
                                <h4><a href="../Page_Followers/followers.php">Followers</h4></a>
                                <h5><a href="following.php">Following</a></h5>  
                        </div>
                    </div>                       
                </div>

                <?php

                    $IdSession = $_SESSION['id'];

                    $sql = "SELECT token, avatar, follower_id, follow_id, user.name, user.username from follow JOIN user ON follow.follower_id = user.id where follow_id like '$IdSession'";

                    $requette = $db->query($sql);

                    $user = $requette->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($user as $value) {
                
                    ?>
                        <div class="txt-followers">

                            <div>
                                <img class="profil2" src="<?= $value['avatar'] ?>">
                            </div>
                            <div>
                                <form action="../Page_Recherche/profil_user.php" method="GET">
                                    <button type="submit" id="name_profil" class="margin2"><a href="../Page_Recherche/profil_user.php?id=<?= $value['follower_id'] ?>"><?= $value['name'] ?> </a> </button>
                                </form>
                                <p class="margin"><?= $value['username'] ?></p>
                                <p class="margin"><?= $value['token'] ?></p>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
            </div>

            <div class="col-lg-4 col-md-10 col-xs-10 col-10" id="part3">
           

                <div class="trends">
                    <div class="haut-trends">
                        <h5><img class="parametre" src="img/parametre.png" alt="parametre">Trends for you</h5>     
                    </div>
                    
                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Trending in France</p>
                        <h5>League of legends</h5>
                        <h6>20.6K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Music. Trending</p>
                        <h5>Ninho</h5>
                        <h6>8,655 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Death</p>
                        <h5>#benjaminledig</h5>
                        <h6>2.795 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Fashion. Trending</p>
                        <h5>Shein</h5>
                        <h6>20.9K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Trending in France</p>
                        <h5>#musulmanie</h5>
                        <h6>1,098 Tweets</h6>
                    </div>

                    <div class="show">
                        <p>Show more</p>
                    </div>
                </div>

                <div class="follow">
                    <div class="who">
                        <h5>Who to follow</h5>
                    </div>
                    
                    <div class="following">
                        <div>
                            <img class="personne" src="img/id_icone.png">
                        </div>
                        <div> 
                            <h5>Brut FR</h5>
                            <h6>@brutofficiel</h6>
                        </div>
                        
                        <div class="separation">
                            <button id="follow" type="button" >Follow</button>
                        </div>      
                    </div>

                    <div class="following">
                        <div>
                            <img class="personne" src="img/id_icone.png">
                        </div>

                        <div > 
                            <h5>Edwy Plenel</h5>
                            <h6>@edwyplenel</h6>
                        </div>
                        
                        <div class="separation">
                            <button id="follow" type="button" >Follow</button>
                        </div>      
                    </div>

                    <div class="show">
                        <p>Show more</p>  
                    </div>
                </div>

                <div class="terms">
                    <p>Terms of Service Privacy Policy Cookie Policy Accessibility Ads info More © 2022 Twitter, Inc.</p>
                </div>
            </div>
        </div>
    </div>
    <?php
} else{
    header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
}
?>
    <script src="following.js"></script>

</body>
</html>