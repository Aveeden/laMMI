$(document).ready(function() {
    // script index.html
    $('input#index').on("click",(function(){
        console.log('oui');
        
        $('input#index').css({"opacity":"0","transition-duration":"6000ms"});
        $('h1#index').css({"opacity":"0","transition-duration":"6000ms"});
        $('p#index').css({"opacity":"0","transition-duration":"6000ms"});
        $('.fond#index').css({"filter":"blur(0px)","transition-duration":"6000ms","transform":"scale(1)"});
        $('audio#index')[0].play();
        setTimeout(() => {
            window.location.href="menu.html";
        }, 6000);
    }))

    // script menu.html

    $('.menu').css({'opacity':'1','transition-duration':'3000ms'});
})