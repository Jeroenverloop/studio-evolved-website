$( document ).ready(function() {
    initiate();

    $('.menu-item').mouseenter(function(){
        let menuItem = $(this);
        setActive(menuItem);
    });

    $('.menu-item').mouseleave(function(){
        let menuItem = $(this);
        setInactive(menuItem);
    });

});

function initiate(){
    $('.menu-item').each(function(index){
        for(let i = 0 ; i < 6 ; i ++){
            let block = $('<div class="block"></div>');
            block.css('opacity', 0);
            $(this).prepend(block);
        }
    });

    $('.menu-item').each(function(index){
        if($(this).hasClass('active')){
            $(this).find(".block").each(function(index){
                $(this).addClass('over');
                $(this).css('opacity', 0.2*index);
            });
        }
        else{
            $(this).find(".block").each(function(index){
                if(index == 5){
                    $(this).css('opacity', 0.2);
                }
                else{
                    $(this).css('opacity', 0);
                }
            });
        }
    });
}

function setInactive(element){
    if(element == null || element.hasClass('active')) return;
    element.find(".block").each(function(index){
        $(this).removeClass('over');
        setTimeout(() => {
            if(index == 5){
                $(this).css('opacity', 0.2);
            }
            else{
                $(this).css('opacity', 0);
            }

        }, index * 50);
    });
}


function setActive(element){

    if(element == null || element.hasClass('active')) return;

    element.find(".block").each(function(index){
        $(this).addClass('over');
        $(this).css('opacity', 0);
        setTimeout(() => {
            if($(this).hasClass('over')){
                $(this).css('opacity', 0.2*index);
            }
        }, 150 - index * 25);
    });
}
