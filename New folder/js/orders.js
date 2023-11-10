$(function(){
    
    //variables
    let orderReadyBtn = $('#orderReady');
    let orderDelBtn = $('#delOrder');


    orderReadyBtn
        .on('click', function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            confirm('Mark order as done?');
    });

    orderDelBtn
        .on('click', function(ev){
            ev.preventDefault();
            ev.stopPropagation();
            confirm('Delete selected order?');
    });
});