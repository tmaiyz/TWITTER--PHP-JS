<?php

require_once("../php/connection.php");
require_once("../php/connect_db.php");

$id = $_GET['id'];


$sql = "SELECT id, avatar, name, username, cover, register_date, token, location, website FROM user WHERE id = '$id'";

$requette = $db->query($sql);

$user = $requette->fetch(PDO::FETCH_ASSOC);



$sql2 = "SELECT user.id, follow.follow_id ,follow.follower_id FROM user JOIN follow ON user.id = follow.follower_id WHERE user.id = '$id'";

$requette2 = $db->query($sql2);

$user2 = $requette2->fetchAll(PDO::FETCH_ASSOC);



$sql3 = "SELECT follower_id, follow_id from follow JOIN user ON follow.follower_id = user.id where follow_id like '$id'";

$requette3 = $db->query($sql3);

$count3 = $requette3->rowCount();

$sql4 = "SELECT follower_id, follow_id from follow JOIN user ON follow.follower_id = user.id where follower_id like '$id'";

$requette4 = $db->query($sql4);

$count4 = $requette4->rowCount();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil_user.css">
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
                <div class="col-lg-3 col-md-2 col-xs-2 col-sm-2" id="navbar">
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
                                <a href="../Page_Recherche/recherche.php"><img id="home1" src="img/hashtag.png" alt="home"></a>
                                <a href="../Page_Recherche/recherche.php">
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
                                <a href="profil.php"><img class="profil1" src="<?= $user['avatar'] ?>"></a>
                            </div>

                            <div>
                                <a href="profil.php">
                                    <h5><?= $_SESSION['name'] ?></h5>
                                </a>
                                <a href="profil.php">
                                    <h6><?= $_SESSION['username'] ?></h6>
                                </a>
                            </div>

                            <div class="separation1">
                                <a href=""></a><img class="bouton1" src="img/points.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-10 col-xs-10 col-sm-10 col-12" id="profil">
                    <div class="col-12" id="Profil_upperBar">
                        <div id="Profil_flechegauche">
                            <a href="recherche.php"><img src="img/—Pngtree—vector back icon_4267356.png" alt="fleche gauche" width="20px" height="20px"></a>
                        </div>
                        <div>
                            <span class="username"><?= $user['username'] ?></span>
                            <br>
                            <span class="treizepx">xxxK Tweets</span>
                        </div>
                    </div>

                    <!-- <div class="col-12" id="Profil_cover"> -->
                    <img src="<?= $user['cover'] ?>" id="test" alt="cover" width="100%" height="200px">
                    <!-- </div> -->

                    <div class="col-12" id="Profil_follow">

                        <div id="Profil_follow_pp" style="background-image: url('<?= $user['avatar'] ?>');">
                        </div>
                        <?php
                        if ($_SESSION['id'] === $user['id']) {
                        ?>
                            <div id="Profil_follow_buttons">
                            <div id="Profil_follow_button1"><a href="../Page_More/more.php"><img src="img/more.png" alt="3 petits points"></a></div>

                            </div>
                        <?php
                        } else {
                            if($user2){
                                ?>
                                    <div id="Profil_follow_buttons">
                                <form action="../php/unfollow.php" method="POST">
                                    <button name="UnfollowOtherIdUser" value="<?= $user['id'] ?>" type="submit" id="Profil_follow_button2">Unfollow</button>
                                </form>
                            </div>
                                <?php
                            }else{
                        ?>
                        
                            <div id="Profil_follow_buttons">
                                <form action="../php/follow.php" method="POST">
                                    <button name="OtherIdUser" value="<?= $user['id'] ?>" type="submit" id="Profil_follow_button2">Follow</button>
                                </form>
                            </div>
                        <?php
                        }
                        }
                        ?>
                    </div>

                    <div class="col-12" id="Profil_information">
                        <div class="col-12 username"> <?= $user['name'] ?></div>
                        <div class="col-12 treizepx"><?= $user['username'] ?></div>

                        <?php
                        if (empty($user['token'])) {

                            echo null;
                        } else {
                        ?>

                            <div class="col-12 quinzepx spacebetween"><?= $user['token'] ?></div>
                        <?php
                        }

                        ?>

                        <div class="col-12 flex">
                            <?php
                            if (empty($user['location'])) {

                                echo null;
                            } else {
                            ?>

                                <div class="nopadding">
                                    <img src="img/location.png" alt="location" width="20px" height="20px"> <span class="treizepx"><?= $user['location'] ?></span>
                                </div>

                            <?php
                            }

                            ?>


                            <?php
                            if (empty($user['website'])) {

                                echo null;
                            } else {
                            ?>
                                <div class="nopadding">
                                    <img src="img/link.png" alt="lien" width="20px" height="20px"> <a class="treizepx" href="<?= $user['website'] ?>"><?= $user['website'] ?></a>
                                </div>
                            <?php
                            }

                            ?>

                            <?php
                            if (empty($user['register_date'])) {

                                echo null;
                            } else {
                            ?>
                                <div class="nopadding">
                                    <img src="img/calendar.png" alt="calendar" width="20px" height="20px"> <span class="treizepx"><?= $user['register_date'] ?></span>
                                </div>
                            <?php
                            }

                            ?>
                        </div>

                        <form action="" method="GET" class="Flex_Follow">
                        <div class="col-12 flex nopadding spacebetween">
                            <div class="quinzepxgrey"> <span class="bold"><?= $count3 ?></span> <a href="../Page_following/following_user.php?id=<?= $id ?>"> Following</a></div>
                            <div class="quinzepxgrey"> <span class="bold"><?= $count4 ?></span> <a href="../Page_Followers/followers_user.php?id=<?= $id ?>"> Followers</a></div>
                        </div>
                    </form>
                        <div class="col-12 treizepx spacebetween"> Not followed by anyone you're following</div>
                    </div>

                    <div class="container-fluid" id="Profil_menu">
                        <div class="row nopadding">
                            <div class="col-3 ttest">Tweets</div>
                            <div class="col-3 ttest">Tweets & replies</div>
                            <div class="col-3 ttest">Media</div>
                            <div class="col-3 ttest">Likes</div>
                        </div>
                    </div>

                    <?php

                    $tweet = "SELECT username, name, content, tweet_date, media from tweet JOIN user ON tweet.user_id = user.id where user.id like '$id' order by tweet_date desc";
                    $execute = $db->query($tweet);
                    $tweetinfo = $execute->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($tweetinfo as $tweetvalue) {
                    ?>

                        <div class="profil_user">

                            <p class="margin"><?= $tweetvalue['username'] . " " . $tweetvalue['name'] . " " . $tweetvalue['tweet_date'] ?></p>
                            
                            <?php

                            if($tweetvalue['media']){

                            ?>
                            <img class="profil2" src="<?= $tweetvalue['media'] ?>">
                            <?php
                            }
                            else{
                                echo null;
                            }
                            ?>
                            <p class="margin"><?= $tweetvalue['content'] ?></p>


                        </div>
                    <?php
                    }
                    ?>

                </div>

                </div>

                <div class="col-lg-4 col-md-10 col-xs-10 col-10" id="part3">
                <form action="./recherche.php" method="GET">
                        <div class="col-12" id="recherche">
                            <img class="recherche" src="img/recherche.png" alt="recherche">
                            <input type="text" id="recherche-input" name="search" placeholder="Search Twitter">
                        </div>
                    </form>

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