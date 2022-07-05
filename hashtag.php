<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $start = $_POST['start'];
    // $limit = $_POST['limit'];
    // $key = 0;

    $hashtag = $pdo->query("SELECT hashtag as 'title' from hashtag  LIMIT 0 , 10");
    if ($hashtag -> rowCount () > 0){
            $response = "";

            while( $data = $hashtag->fetch(PDO::FETCH_ASSOC)) {
            $response .= '
            <div class="col-12 trends_hashtag">
                <span class = hashtag_title>
                    <a href= "#" style = "color : black;">'.$data['title'].'</a>
                </span>
                <span class="treizepx">XXX<span>K Tweets</span></span>
            </div>
            ';
            }
            echo($response);
    }
    else {
            exit;
    }
    $pdo = null;
    }
    catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
    } 