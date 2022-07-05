<?php
    require_once('../php/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <title>Twitter</title>
</head>
<body>
    <?php if($_SESSION){

    ?>
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-3 col-md-2 col-2" id="navbar">
                <div class="col-12" id="largeur">
                    
                        <div class="logo-twitter">
                            <a href="../Page_Accueil/accueil.php"><img id="logo" src="../public/img/LogoTwitter.png" alt="logo twitter"></a>
                        </div>
                   
                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Accueil/accueil.php"><img id="home1" src="../public/img/home.png" alt="home"></a>
                                <a href="../Page_Accueil/accueil.php"><h5>Home</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Followers/followers.php"><img id="home1" src="../public/img/lists.png" alt="home"></a>
                                <a href="../Page_Followers/followers.php"><h5>Followers</h5></a>
                            </div>
                        </div>
                        
                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_following/following.php"><img id="home1" src="../public/img/bell.png" alt="home"></a>
                                <a href="../Page_following/following.php"><h5>Following</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Message/message.php"><img id="home1" src="../public/img/msg.png" alt="home"></a>
                                <a href="../Page_Message/message.php"><h5>Messages</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Theme/theme.php"><img id="home1" src="../public/img/bookmarks.png" alt="home"></a>
                                <a href="../Page_Theme/theme.php"><h5>Thème</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Recherche/recherche.php"><img id="home1" src="../public/img/hashtag.png" alt="home"></a>
                                <a href="../Page_Recherche/recherche.php"><h5>Recherche</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Profil/profil.php"><img id="home1" src="../public/img/profil.png" alt="home"></a>
                                <a href="../Page_Profil/profil.php"><h5>Profile</h5></a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_More/more.php"><img id="home1" src="../public/img/more.png" alt="home"></a>
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

                                <div class="dropdown">
                                    <button class="btn btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="bouton1" src="../public/img/points.png">
                                    </button>

                                    
                                </div>
                            </div>     
                        </div>
                </div>      
            </div>

            <div class="col-lg-6 col-md-10 col-xs-10 col-sm-10 col-12" id="middle1">
                <div class="col-12" id="middle">
                    <h4>Customize View</h4>
                    <p>Manage your color and background. These settings affect all the Twitter accounts on this browser.</p>
                </div>

                <div class="col-12" id="partie2">
                    <div>
                        <h5>Color</h5>
                    </div>

                    <div class="transparent">
                        <li class="colors" id="blue"></li>
                        <li class="colors" id="yellow"></li>
                        <li class="colors" id="pink"></li>
                        <li class="colors" id="purple"></li>
                        <li class="colors" id="orange"></li>
                        <li class="colors" id="green"></li>    

                    </div>

                    <div>
                        <h5>Background</h5>
                    </div>

                    <div class="transparent2">
                        <li id="white"></li>
                        <li id="black"></li>
                    </div>
                    
                    <div>
                        <h5>Font size</h5>
                    </div>

                    <div class="transparent1">
                        <li id="font_extrasmall" class="font_extrasmall">Extra small</li>
                        <li id="font_small" class="font_small">Small</li>
                        <li id="font_default" class="font_default">Default</li>
                        <li id="font_large" class="font_large">Large</li>
                        <li id="font_extralarge" class="font_extralarge">Extra large</li>
                    </div>
                </div>
            </div>  

            <div class="col-lg-3 col-md-10 col-xs-10 col-10" id="part3">
                

                <div class="trends ">
                    <div class="haut-trends">
                        <h5><img class="parametre" src="../public/img/parametre.png" alt="parametre">Trends for you</h5>     
                    </div>
                    
                    <div class="trends1">
                        <p><img class="points" src="../public/img/points.png" alt="point">Trending in France</p>
                        <h5>League of legends</h5>
                        <h6>20.6K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="../public/img/points.png" alt="point">Music. Trending</p>
                        <h5>Ninho</h5>
                        <h6>8,655 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="../public/img/points.png" alt="point">Death</p>
                        <h5>#benjaminledig</h5>
                        <h6>2.795 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="../public/img/points.png" alt="point">Fashion. Trending</p>
                        <h5>Shein</h5>
                        <h6>20.9K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="../public/img/points.png" alt="point">Trending in France</p>
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
                            <img class="personne" src="../public/img/id_icone.png">
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
                            <img class="personne" src="../public/img/id_icone.png">
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
    <!-- <script src="colors.js"></script> -->
    <?php
    } else {
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
    ?>
    <script src="theme.js"></script>

</body>
</html>