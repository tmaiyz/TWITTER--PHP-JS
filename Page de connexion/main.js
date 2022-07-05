$('#Connect_Signup').on('click', function(){
    $('body').append('<div class="fondNoir"><div class="fondBlanc"><p id="Close">X</p><img src="img/Logo_Twitter.png" alt="LOGO TWITTER" width="70px" height="70px"><h3>Create your account</H3><form action="../php/inscription.php" method="POST"><input type="text" name="Username" placeholder="Username"><input type="text" name="Name" placeholder="Name"><br><select name="Genre" id="genre"><option value="m">Homme</option><option value="f">Femme</option><option value="x">Autre</option></select><br><input type="date" name="Birthdate"><input type="text" name="Country" placeholder="Country"><input type="tel" name="Phone" placeholder="Phone"><input type="email" name="Email" placeholder="Email"><input type="password" name="Password" placeholder="Password"><input id="Connect_Signup" type="submit" name="envoyer"></form></div></div>');
    
    $('#Close').on('click',function(){
        $('.fondNoir').remove();
    })
})

$('#Connect_Signin').on('click', function(){
    $('body').append('<div class="fondNoir"><div class="fondBlanc"><p id="Close">X</p><img src="img/Logo_Twitter.png" alt="LOGO TWITTER" width="70px" height="70px"><h3>Connection</H3><form action="../php/connection.php" method="POST"><input type="email" name="email" placeholder="email"><input type="tel" name="Phone" placeholder="Phone"><input type="password" name="password" placeholder="Password"><input id="Connect_Signin" type="submit" name="envoyer"></form></div></div>');
    
    $('#Close').on('click',function(){
        $('.fondNoir').remove();
    })
})
