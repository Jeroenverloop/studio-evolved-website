$( document ).ready(function() {

    $('.action').mouseenter(function(){
        $(this).find('.arrow').attr('src','/img/arrows/blue-white-right.png');
    });
    $('.action').mouseleave(function(){
        $(this).find('.arrow').attr('src','/img/arrows/blue-right.png');
    });

});
