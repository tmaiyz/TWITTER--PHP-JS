<?php
require_once("../php/connection.php");
require_once("../php/connect_db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recherche.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <title>Twitter</title>
</head>

<body>
    <?php

    if ($_SESSION) {

    ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-1" id="navbar">
                    <div class="col-12" id="largeur">

                        <div class="logo-twitter">
                            <a href="../Page_Accueil/accueil.php"><img id="logo" src="img/LogoTwitter.png" alt="logo twitter"></a>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Accueil/accueil.php"><img id="home1" src="img/home.png" alt="home"></a>
                                <a href="../Page_Accueil/accueil.php">
                                    <h5>Home</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Followers/followers.php"><img id="home1" src="img/lists.png" alt="home"></a>
                                <a href="../Page_Followers/followers.php">
                                    <h5>Followers</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_following/following.php"><img id="home1" src="img/bell.png" alt="home"></a>
                                <a href="../Page_following/following.php">
                                    <h5>Following</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Message/message.php"><img id="home1" src="img/msg.png" alt="home"></a>
                                <a href="../Page_Message/message.php">
                                    <h5>Messages</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Theme/theme.php"><img id="home1" src="img/bookmarks.png" alt="home"></a>
                                <a href="../Page_Theme/theme.php">
                                    <h5>Thème</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="recherche.php"><img id="home1" src="img/hashtag.png" alt="home"></a>
                                <a href="recherche.php">
                                    <h5>Recherche</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_Profil/profil.php"><img id="home1" src="img/profil.png" alt="home"></a>
                                <a href="../Page_Profil/profil.php">
                                    <h5>Profile</h5>
                                </a>
                            </div>
                        </div>

                        <div class="home1">
                            <div id="hover">
                                <a href="../Page_More/more.php"><img id="home1" src="img/more.png" alt="home"></a>
                                <a href="../Page_More/more.php">
                                    <h5>More</h5>
                                </a>
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
                                <img class="bouton1" src="img/points.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-10 col-xs-10 col-sm-10 col-12" id="middle1">

                    <form action="" method="GET">
                        <div class="col-12" id="recherche">
                            <img class="recherche" src="img/recherche.png" alt="recherche">
                            <input type="text" id="recherche-input" name="search" placeholder="Search Twitter">
                        </div>
                    </form>

                    <div>

                        <?php
                        if (isset($_GET['search']) && !empty($_GET['search'])) {
                            $name = $_GET['search'];

                            $sql = "SELECT id, username, name, token, avatar FROM user WHERE username LIKE '$name%' or name LIKE '$name%'";

                            $requette = $db->query($sql);

                            $user = $requette->fetchAll(PDO::FETCH_ASSOC);

                            if ($requette->rowCount() > 0) {

                                foreach ($user as $info) {

                                    $infoID = $info['id'];

                                    $sql2 = "SELECT user.id, follow.follow_id ,follow.follower_id FROM user JOIN follow ON user.id = follow.follower_id WHERE user.id = '$infoID'";

                                    $requette2 = $db->query($sql2);

                                    $user2 = $requette2->fetchAll(PDO::FETCH_ASSOC);
                        ?>

                                    <div class="profil_user">
                                        <div class="profil_complet">
                                            <div>
                                                <img class="profil2" src="<?= $info['avatar'] ?>">
                                            </div>

                                            <div class="info_user">
                                                <div>

                                                    <form action="profil_user.php" method="GET">
                                                        <button type="submit" id="name_profil" class="margin2"><a href="profil_user.php?id=<?= $info['id'] ?>"><?= $info['name'] ?> </a> </button>
                                                    </form>

                                                    <p class="margin"><?= $info['username'] ?></p>
                                                    <p class="margin"><?= $info['token'] ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        if ($_SESSION['id'] === $info['id']) {

                                            echo null;
                                        } else {
                                            if ($user2) {
                                        ?>
                                                <form action="../php/unfollow.php" method="POST">
                                                    <button name="UnfollowOtherIdUser" value="<?= $info['id'] ?>" type="submit" class="follow_button">Unfollow</button>
                                                </form>
                                            <?php
                                            } else {
                                            ?>



                                                <form action="../php/follow.php" method="POST">
                                                    <button name="OtherIdUser" value="<?= $info['id'] ?>" type="submit" class="follow_button">Follow</button>
                                                </form>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                        <?php

                                }
                            } else {

                                echo "Username ou tweet introuvable";
                            }
                        }

                        ?>

                    </div>

                </div>

                <div class="col-lg-3 col-md-10 col-xs-10 col-10" id="part3">
                    <!-- <div class="col-12" id="recherche">
                        <img class="recherche" src="img/recherche.png" alt="recherche">
                        <input type="text" id="recherche-input" placeholder="Search Twitter">
                    </div> -->

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
                                <button id="follow" type="button">Follow</button>
                            </div>
                        </div>

                        <div class="following">
                            <div>
                                <img class="personne" src="img/id_icone.png">
                            </div>

                            <div>
                                <h5>Edwy Plenel</h5>
                                <h6>@edwyplenel</h6>
                            </div>

                            <div class="separation">
                                <button id="follow" type="button">Follow</button>
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
    <script src="search.js"></script>
</body>

</html>