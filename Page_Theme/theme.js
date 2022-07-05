//////////////////////Button_Color/////////////////////////

$('#blue').on('click', function(){
    $('button').css('background', '#66bbed');
    localStorage.removeItem("button");
})

$('#yellow').on('click', function(){
    $('button').css('background', '#fcff47');
    localStorage.setItem("button", "yellow");
})

$('#pink').on('click', function(){
    $('button').css('background', '#ff3fef');
    localStorage.setItem("button", "pink");
})

$('#purple').on('click', function(){
    $('button').css('background', '#7b38e7');
    localStorage.setItem("button", "purple");
})

$('#orange').on('click', function(){
    $('button').css('background', '#ff9c08');
    localStorage.setItem("button", "orange");
})

$('#green').on('click', function(){
    $('button').css('background', '#51ec7f');
    localStorage.setItem("button", "green");
})

/////////////////////////Background_Theme///////////////////////////

$('#white').on('click', function(){
    $('div').removeClass('theme_black');
    $('h5').removeClass('theme_black');
    localStorage.removeItem("theme");
})

$('#black').on('click', function(){
    $('div').addClass('theme_black');
    $('h5').addClass('theme_black');
    localStorage.setItem("theme", "black");
})

/////////////////////////Font_size///////////////////////////

$('.font_extrasmall').on('click', function(){
    $('*').removeClass('font_extrasmall')
    $('*').removeClass('font_small')
    $('*').removeClass('font_large')
    $('*').removeClass('font_extralarge')

    $('*').addClass('font_extrasmall')
    localStorage.removeItem('font')
    localStorage.setItem("font", "extrasmall");
})

$('.font_small').on('click', function(){
    $('*').removeClass('font_extrasmall')
    $('*').removeClass('font_small')
    $('*').removeClass('font_large')
    $('*').removeClass('font_extralarge')

    $('*').addClass('font_small')
    localStorage.removeItem('font')
    localStorage.setItem("font", "small");
})

$('.font_default').on('click', function(){
    $('*').removeClass('font_extrasmall')
    $('*').removeClass('font_small')
    $('*').removeClass('font_large')
    $('*').removeClass('font_extralarge')
    localStorage.removeItem("font");
})

$('.font_large').on('click', function(){
    $('*').removeClass('font_extrasmall')
    $('*').removeClass('font_small')
    $('*').removeClass('font_large')
    $('*').removeClass('font_extralarge')

    $('*').addClass('font_large')
    localStorage.removeItem('font')
    localStorage.setItem("font", "large");
})

$('.font_extralarge').on('click', function(){
    $('*').removeClass('font_extrasmall')
    $('*').removeClass('font_small')
    $('*').removeClass('font_large')
    $('*').removeClass('font_extralarge')

    $('*').addClass('font_extralarge')
    localStorage.removeItem('font')
    localStorage.setItem("font", "extralarge");
})

var theme = localStorage.getItem("theme");
var button = localStorage.getItem("button");
var font = localStorage.getItem("font");

if(theme == 'black'){
    $('div').addClass('theme_black');
    $('h5').addClass('theme_black');
}

if(button == 'yellow'){
    $('button').css('background', '#fcff47');
}

if(button == 'pink'){
    $('button').css('background', '#ff3fef');
}

if(button == 'purple'){
    $('button').css('background', '#7b38e7');
}

if(button == 'orange'){
    $('button').css('background', '#ff9c08');
}

if(button == 'green'){
    $('button').css('background', '#51ec7f');
}

if(font == 'extrasmall'){
    $('*').addClass('font_extrasmall')
}

if(font == 'small'){
    $('*').addClass('font_small')
}

if(font == 'large'){
    $('*').addClass('font_large')
}

if(font == 'extralarge'){
    $('*').addClass('font_extralarge')
}