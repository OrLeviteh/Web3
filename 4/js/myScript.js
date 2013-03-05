var isOk2SlideUp = true;
$(document).ready(function () {

   $("ul.day ul.fun li").hover(function () {
        isOk2SlideUp = false;
    }, function () {
        isOk2SlideUp = true;
    });


    $("ul.day ul.fun").click(function () {
        if (isOk2SlideUp == true) {
            $(this).parents("ul").find("ul").slideUp();
       
        if ($(this).find("ul").is(':visible')) {
            $(this).find("ul").slideUp();
        } else {
            $(this).find("ul").slideDown();
        }
    }
    });


});