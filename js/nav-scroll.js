jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if($(this).scrollTop() > 150) {
            $('.navbar-fixed-top').addClass('opaque');
        } 
        else {
            $('.navbar-fixed-top').removeClass('opaque');
        }
    });
    
    $(window).scroll(function() {
        if($(this).scrollTop() > 150) {
            $('.navbar-brand>img').addClass('bigger');
        } 
        else {
            $('.navbar-brand>img').removeClass('bigger');
        }
    });
});    