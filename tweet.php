<?php

require_once('./php/connection.php');
if (isset($_POST['getData'])) {
        try {
                $pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $start = $_POST['start'];
                $limit = $_POST['limit'];
                // $key = 0;
                $IdSession = $_SESSION['id'];
                $tweet = $pdo->query("SELECT username, name, content, tweet_date, media from tweet JOIN user ON tweet.user_id = user.id where user.id like '$IdSession' order by tweet_date desc LIMIT $start , $limit");
                if ($tweet->rowCount() > 0) {
                        $response = "";

                        while ($data = $tweet->fetch(PDO::FETCH_ASSOC)) {
                                if ($data['media'] == null) {
                                        $response .= '
                                <div class = tweet_content>
                                        ' . $data['username'] . " ". $data['name'] . " " . $data['tweet_date'] .'
                                        <br>
                                        ' . $data['content'] . '
                                        <br>
                                        
                                </div>
                                ';
                                } else {
                                        $response .= '
                                <div class = tweet_content>
                                '. $data['username'] . " " . $data['name'] . " " . $data['tweet_date'] .'
                                <br>
                                ' . $data['content'] . '
                                <br>
                                        <img class ="tweet_img" src= ' . $data['media'] . ' alt ="img"/>
                                        <br>
                                      
                                </div>
                                ';
                                }
                        }
                        exit($response);
                } else {
                        exit('Max');
                }
                $pdo = null;
        } catch (PDOException $e) {
                print "Erreur !: " . $e->getMessage() . "<br/>";
                die();
        }
}
