$(document).ready(function(){
    document.cookie = "difficulty=easy";
    document.cookie = "theme=animals";
    $(".animals").css({'background-color' : 'rgb(196, 35, 35)', 'color' : 'white'});
    $(".easy").css({'background-color' : 'rgb(196, 35, 35)', 'color' : 'white'});
});

$("#difficulty a").click(function(){
    var valueDiff = $(this).attr('class');
    var cookieDiff = "difficulty";
    document.cookie = cookieDiff + "=" + valueDiff;

});

$("#theme a").click(function(){
    var valueTheme = $(this).attr('class');
    var cookieTheme = "theme";
    document.cookie = cookieTheme + "=" + valueTheme;
});

$("#parameters a").click(function(){
    $(this).css({'background-color' : 'rgb(196, 35, 35)', 'color' : 'white'});
    $(this).siblings('a').css({'background-color' : 'rgb(223, 205, 51)', 'color' : 'black'});
});
