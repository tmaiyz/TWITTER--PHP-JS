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