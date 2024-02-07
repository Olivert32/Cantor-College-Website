
//show more info
$("#showMore").on('click', function(){
    $("#moreContent").toggle("fast", function(){
    if($(this).is(':hidden')){
    $("#showMore").text("Show Details")
    }else{
    $("#showMore").text("Hide Details")
    }
    });
    });
    
   //burger menu
    $(".burger").on("click", function () {
        $("nav").slideToggle("fast")
        });
        
   //lightslider

        $("#lightSlider").lightSlider({
            item: 1,
            slideMargin: 0,
            loop: true,
          });
       

