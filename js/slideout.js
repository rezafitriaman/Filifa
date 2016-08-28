jQuery(document).ready(function($) {
    var slider_width = $('.pollSlider').width();//get width automaticly
        $('#pollSlider-button').click(function() {
            if($(this).css("margin-right") == slider_width+"px" && !$(this).is(':animated'))
        {
        $('.pollSlider,#pollSlider-button').animate({"margin-right": '-='+slider_width});
        }
    else{
        if(!$(this).is(':animated'))//perevent double click to double margin
        {
            $('.pollSlider,#pollSlider-button').animate({"margin-right": '+='+slider_width});
        }
        }
        });
});
