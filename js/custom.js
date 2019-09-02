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

    // Hamburger slide toggle
    $('#hamburger').click(function(e){
        e.preventDefault();
        $('.navbar-container .nav').slideToggle(500);
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

function progressBar(skill, progress) {
    var skillBar = $('#' + skill + ' .my-progress');
    var skillPercentage = $('#' + skill + ' .percentage');
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= progress) {
            clearInterval(id);
        } else {
            width++;
            skillBar.css('width', width + '%');
            skillPercentage.text(width + '%');
        }
    }
}