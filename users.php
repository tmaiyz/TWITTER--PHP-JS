<?php
// require_once('../inc/users.php');
try {
        $pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $str = $_GET['user_'];
        $user = (string) trim($_GET['user_']);
        // $user = (String) ltrim($_GET['user_'], "@");
        // echo "str = ";
        // var_dump($str);
        // echo "user = ";
        // var_dump($);
        $users = $pdo->query("SELECT id, username, name, email, gender, birthdate from user where username like '%$user%' limit 10");
        $hashtag = $pdo->query("SELECT id, hashtag as 'title' from hashtag where hashtag like '%$user%' LIMIT 0 , 10");
        $users = $users->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($users); $i++) {
                if ($users[$i]['username'] != "") {
?>
                        <div style='font-size: 20px; text-align: center; margin-top : 1rem'>
                                <form action="./Page_Recherche/profil_user.php" method="GET">
                                        <a href="../Page_Recherche/profil_user.php?id=<?= $users[$i]['id'] ?>"><?= $users[$i]['username'] ?></a>
                                </form>
                        </div>
                <?php
                }
        }
        if ($hashtag->rowCount() > 0) {
                while ($data = $hashtag->fetch(PDO::FETCH_ASSOC)) {
                ?>
                        <div style='font-size: 20px; text-align: center; margin-top : 1rem'>
                                <a href="#"><?= $data['title'] ?></a>
                        </div>
<?php
                }
        }
        // $users = null;
        $pdo = null;
} catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
}
?>