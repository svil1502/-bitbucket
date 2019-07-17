$(document).ready(function(){
    $('a').nivoLightbox();
});

$('a').nivoLightbox({

    // The effect to use when showing the lightbox
    // fade, fadeScale, slideLeft, slideRight, slideUp, slideDown, fall
    effect: 'fade',

    // The lightbox theme to use
    theme: 'default',

    // Enable/Disable keyboard navigation
    keyboardNav: true,

    // Click image to close
    clickImgToClose: false,

    // Click overlay to close
    clickOverlayToClose: true,

    // Callback functions
    onInit: function(){},
    beforeShowLightbox: function(){},
    afterShowLightbox: function(lightbox){},
    beforeHideLightbox: function(){},
    afterHideLightbox: function(){},
    beforePrev: function(element){},
    onPrev: function(element){},
    beforeNext: function(element){},
    onNext: function(element){},

    // Error message
    errorMessage: 'The requested content cannot be loaded. Please try again later.'

});

$('.lightzoom').lightzoom({speed: 400, viewTitle: true});

$(function(){
    $('.minimized').click(function(event) {
        var i_path = $(this).attr('src');
        $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
        $('#magnify').css({
            left: ($(document).width() - $('#magnify').outerWidth())/2,
            // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
            top: ($(window).height() - $('#magnify').outerHeight())/2
        });
        $('#overlay, #magnify').fadeIn('fast');
    });

    $('body').on('click', '#close-popup, #overlay', function(event) {
        event.preventDefault();

        $('#overlay, #magnify').fadeOut('fast', function() {
            $('#close-popup, #magnify, #overlay').remove();
        });
    });
});
