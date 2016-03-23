$(document).ready(function(e) {
    if(screen.width <= 500) {
        var mvp = document.getElementById('myViewport');
        mvp.setAttribute('content','width=500');
    }

    $(window).scroll(function() {
        handleScroll();
    });
    handleScroll();

    $('.email-link').click(function() {
        window.location = "mailto:nic@wielens.net";
    });
});

function handleScroll(){
    var st = $(window).scrollTop();

    if(st < 0){
        st = 0;
    }

    var sc = Math.min(1,st/80);
    sc = 1-sc;
    sc = 0.7 + (sc*0.3)
    var headerheight = sc * 90;

    $('#top-header').height(headerheight);

    $('#header-phone-number img').height(sc*35);

    $('#header-phone-number p').css({fontSize:sc*35, marginTop:sc*24});

    $('#header-logo').css({top:sc*10});


    $('#header-logo img').height(sc * 70);


}
















