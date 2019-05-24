$(document).ready(function(){
    vhInSafari();

    $('#hero #call-to-action, ul.navbar-nav > li > a, ul.shortcuts > li > a').click(function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        $('html,body').animate({
            scrollTop: $(href).offset().top
        }, 1000);
    });

    $('.portfolio-bg-img').hover(function(){
        $(this).find('.transparent-background').fadeIn(250);
        $(this).find('.description').fadeIn(250);
    },function(){
        $(this).find('.transparent-background').fadeOut(250);
        $(this).find('.description').fadeOut(250);
    });

    // If Browser is mobile device
    var browser_device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));

    if (browser_device) {
        $('.download-game').hide();
    }

    $('#hamburger').click(function(e){
        e.preventDefault();

        if ($('.navbar-container').is(':visible')) {
            $('.navbar-container').hide();
        }
        else {
            $('.navbar-container').show();
        }
    });
});

$(window).resize(function(){
    vhInSafari();
});

function vhInSafari() {
    if (/Safari/i.test(navigator.userAgent) && /Apple Computer/.test(navigator.vendor) && !/Mobi|Android/i.test(navigator.userAgent)) {
        $('#hero').css('height', $(window).height() + 'px');
    }
}