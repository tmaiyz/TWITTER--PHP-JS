<?php 

session_start();

if($_SESSION){
    header("Location: http://localhost/TWITTER/Page_Accueil/accueil.php");
}else{

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.6.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <title>Twitter</title>
</head>

<body>
    <!-- <div class="fondNoir">
        <div class="fondBlanc">
            <p id="Close">X</p>
            <img src="img/Logo_Twitter.png" alt="LOGO TWITTER" width="70px" height="70px">
            <h3>Create your account</H3>
                <form action="../php/inscription.php" method="POST">
                    <input type="text" name="Username" placeholder="Username">
                    <input type="text" name="Name" placeholder="Name">
                    <br>
                    <select name="Genre" id="genre">
                        <option value="m">Homme</option>
                        <option value="f">Femme</option>
                        <option value="x">Autre</option>
                    </select>
                    <br>
                    <input type="date" name="Birthdate">

                    <input type="text" name="Country" placeholder="Country">
                    <input type="tel" name="Phone" placeholder="Phone">
                    <input type="email" name="Email" placeholder="Email">
                    <input type="password" name="Password" placeholder="Password">

                    <input id="Connect_Signup" type="submit" name="envoyer">
                </form>
            </div>
        </div> -->

        
    <!-- <div class="fondNoir">
        <div class="fondBlanc">
            <p id="Close">X</p>
            <img src="img/Logo_Twitter.png" alt="LOGO TWITTER" width="70px" height="70px">
            <h3>Create your account</H3>
                <form action="../php/connection.php" method="POST">
                    <input type="text" name="Name" placeholder="Name">
                    <input type="text" name="Phone" placeholder="Phone">
                    <input type="text" name="Email" placeholder="Email">
                    <input id="Connect_Signup" type="submit" name="envoyer">
                </form>
        </div>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6" id="left"></div>
            <div class="col-lg-6" id="right">
                <img id="Connect_Logo" src="img/Logo_Twitter.png" alt="LOGO TWITTER" width="200px" height="200px">
                <h2>Happening now</h2>
                <h3>Join Twitter today.</h3>

                
                <p id="Connect_Signup">Sign up with phone or email</p>

                <h3 id="Connect_msgSignIn">Already have an account?</H3>

                <p id="Connect_Signin"> <strong>Sign in</strong></p>
            </div>

            <div class="col-lg-12" id="bottom">
                <a>About</a>
                <a>Help Center</a>
                <a>Terms of Service</a>
                <a>Privacy Policy</a>
                <a>Cookie Policy</a>
                <a>Accessibility</a>
                <a>Ads info</a>
                <a>Blog</a>
                <a>Status</a>
                <a>Careers</a>
                <a>Brand Resources</a>
                <a>Advertising</a>
                <a>Marketing</a>
                <a>Twitter for Business</a>
                <a>Developers</a>
                <a>Directory</a>
                <a>Settings</a>
            </div>
        </div>
    </div>
    
    <script src="main.js"></script>
</body>
</html>

<?php
}
?>