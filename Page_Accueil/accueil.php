<?php

require_once("../php/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="n_accueil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../script/script.js" defer></script>
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

                                <div class="dropdown">
                                    <button class="btn btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img class="bouton1" src="img/points.png">
                                    </button>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="#">Deconnexion</a>
                                    </div>
                                </div>
                            </div>      
                        </div>
                </div>      
            </div>

            <div class="col-lg-6 col-md-10 col-xs-10 col-sm-10 col-12" id="middle1">
                <div class="col-12" id="middle">

                    <div class="col-12" id="home">
                        <a href="../Page_Theme/theme.php"><h5><img class="etoile" src="img/etoile.png" alt="top tweet">Home</h5></a>
                    </div>
                    <div class="input-home">
                        <a href="../Page_Profil/profil.php"><img class="id" src="<?= $_SESSION['avatar'] ?>" alt="photo utilisateur"></a>  
                    </div>

                    <div class="col-12" id="input1">
                        <form class="send_tweet" action="./publication_tweet.php" method="POST" enctype="multipart/form-data">
                            <input type="text" id="input_tweet" placeholder="What's happening ? " maxlength="140" name = "input_tweet" >

                            <div id="icone">
                                <div class="image-upload">
                                    <label for="file-input">
                                        <img class="img-icone" src="img/icone_img.png" alt="image">
                                    </label>
                                
                                    <input id="file-input" type="file" name = "file_input"/>
                                </div>
                                <!-- <img class="img-icone" src="img/icone_img.png" alt="image">
                                <img class="img-gif" src="img/gif.png" alt="gif">
                                <img class="statistique" src="img/statistique.png" alt="question statistique">
                                <img class="img-smiley" src="img/smiley.png" alt="smiley">
                                <img class="calendrier" src="img/calendrier.png" alt="calendrier">
                                <img class="img-localisation" src="img/localisation_icone.png" alt="localisation"> -->
                                <button class="tweet" type="submit">Tweet</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                
                <div class="col-12" id="middle2">
                    <div class="response"></div>
                    <!-- <h3>Welcome to Twitter!</h3>
                    <p>This is the best place to see what’s happening in your world. Find some people and topics to follow now.</p>
                    <button class="go" type="button">Let's go!</button> -->
                </div>
            </div>

            <div class="col-lg-3 col-md-10 col-xs-10 col-10" id="part3">
                <div class="col-12" id="recherche">
                    <img class="recherche" src="img/recherche.png" alt="recherche">
                    <input type="text" id="recherche-input" placeholder="Search Twitter">
                    <div style="margin-top: 20px">
                        <div id="result-search"></div>
                    </div>
                </div>

                <div class="trends">
                    <div class="haut-trends">
                        <h5><img class="parametre" src="img/parametre.png" alt="parametre">Trends for you</h5>     
                    </div>
                    
                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Trending in France</p>
                        <h5>#UkraineRussiaWar</h5>
                        <h6>40.6K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Music. Trending</p>
                        <h5>Death Note</h5>
                        <h6>8,655 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Death</p>
                        <h5>#poupettekenza</h5>
                        <h6>2.795 Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Fashion. Trending</p>
                        <h5>Donbass</h5>
                        <h6>20.9K Tweets</h6>
                    </div>

                    <div class="trends1">
                        <p><img class="points" src="img/points.png" alt="point">Trending in France</p>
                        <h5>Cohen</h5>
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
    } else {
        header('Location: http://localhost/TWITTER/Page%20de%20connexion/index.php');
    }
    ?>
<script src="main.js"></script>
</body>
</html>