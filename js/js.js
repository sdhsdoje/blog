var ht = $(window).height();
$("ul.mousewheel li").height(ht);
$(window).on("resize",function(){
    var ht = $(window).height();
    $("ul.mousewheel > li").height(ht);
    });        
    $("ul.mousewheel li").on("mousewheel",function(event,delta){ 
        if ( $('html,body').is(":animated") ) return false;
            if (delta > 0) {  
                var prev = $(this).prev().offset().top;
                $("html,body").stop().animate({"scrollTop":prev},900);
            }else if (delta < 0) {  
                var next = $(this).next().offset().top;
                $("html,body").stop().animate({"scrollTop":next},900);                                                                   
            } 
    if ( $('body,html').is(":animated") ) return false;
});