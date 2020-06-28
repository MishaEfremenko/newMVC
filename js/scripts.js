$(document).ready(function(){
    let offset=$('.header_down_wrapper').offset().top;
    $(window).scroll(function(){
        if($(window).scrollTop()>=offset){   
            $('.header_down_wrapper').attr('id','header_down_wrapper-fixed');
            console.log("q");
        }
        else{
            $('.header_down_wrapper').attr('id','header_down_wrapper-relative');
            console.log("2");
        }
    });
    $(".menu_icon_wrapper").click(function(){
        $(".spanc").toggleClass('active');
        if ($('.katalog_menu').is(":visible"))
        $('.katalog_menu').hide();
        else
        $('.katalog_menu').show();
    });
});