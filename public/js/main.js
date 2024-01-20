$(document).ready(function(){
    window.onscroll = function() {scrollFunction()};
})

function scrollFunction() {

    if(220<document.body.scrollTop||200<document.documentElement.scrollTop){
        document.querySelector("header").style.position="fixed";
        document.querySelector("header").style.backgroundColor="#000";
        document.querySelector("header").style.boxShadow="0 0 10px rgba(0,0,0,.8)";
        document.querySelector("header").style.marginTop="0px"
        document.querySelector("header").style.padding="20px 0px 10px 0px";

    }else{
        document.querySelector("header").style.position="absolute";
        document.querySelector("header").style.backgroundColor="transparent";
        document.querySelector("header").style.boxShadow="none";
        document.querySelector("header").style.marginTop="50px"
        document.querySelector("header").style.padding="0px";
    }

}

$(window).scroll(function(){
    var skrolovano = $(this).scrollTop();
    if(skrolovano > 700){
    $('#scrollToTop').fadeIn();
    } else {
    $('#scrollToTop').fadeOut();
    }
});

$('#scrollToTop').click(function(){
    $('html').animate({scrollTop: 0}, 2000);
});

