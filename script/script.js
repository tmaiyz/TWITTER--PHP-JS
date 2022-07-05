
// Requete AJAX pour la recherche d'utilisateurs
$(document).ready(function(){
    $('#recherche-input').keyup(function(){
        $("#result-search").html('');
        let user = $(this).val();

        if(user !=""){
            $.ajax({
                type: "GET",
                url: "../users.php",
                data: "user = "+ encodeURIComponent(user),
                success: function (data) {
                    if(data !=""){
                        $('#result-search').append(data);
                        // console.log(data);
                    }
                    else {
                        document.getElementById('result-search').innerHTML = "<div style = 'font-size: 20px; text-align: center; margin-top : 1rem'>Aucun utilisateurs ou hashtag trouvés</div>";
                    }
                }
            });
        }
    })

    // requete ajax pour scroll infinie.
    var start = 0;
    var limit = 3;
    var reachedMax = false;
  
      $(window).scroll(function () {
          // End of the document reached?
          // console.log($(document).height() - $(window).height());
          // console.log(($(window).scrollTop()));
          if ($(window).scrollTop() > ($(document).height() - $(window).height()) -1.5){
            console.log("scroll");
            getData();
          }
        }); 

    //   console.log("ok");
      getData();
  
    function getData(){
      if (reachedMax)
        return;
  
      $.ajax({
        url: '../tweet.php',
        method:'POST',
        dataType: 'text',
        data: {
          getData: 1,
          start: start,
          limit: limit,
        },
        success: function(response) {
          if (response == 'Max'){
            reachedMax = true;
          }
          else {
            start += limit; 
            $('.response').append( response);
          }
        }
      })
    }
});