$(document).ready(function(){

    /*스프링 섹션1*/
    $(".box").animate({
        borderWidth : "200px 100px 50px 100px" ,
        paddingTop : "250px"
    }, 1000); 

    /*스프링 섹션2*/

    //display : none 숨겨주는 역활이고 자리도 사라짐
    //"visibility","hidden" 숨겨주는 역활이며 자리는 그대로 보존
    //find 는 후손 찾기 . children 은 자식을 찾기
    //siblings()는 제외한 나머지를 찾기
    
    
    $(".Zs_img>img").css("visibility","hidden");
    $(".Zs span").hide();
    $(".Zs>p").css("visibility","hidden");
    $(".Zs").mouseenter(function(){
        $(this).siblings().find(".Zs_img>img").css("visibility","hidden");
        $(this).siblings().find("span").hide();
        $(this).siblings().find("p").css("visibility","hidden").animate({top:"50px"});
        $(this).siblings().find("h4").removeClass("Active");
        
        $(this).find("img").css("visibility","visible");
        $(this).find("span").fadeIn();//$("#div1").fadeIn();
        $(this).find("p").css("visibility","visible").animate({top:"0"});
        $(this).find("h4").addClass("Active");
    })


    // spring 탭
    var swiper = new Swiper(".s_list", {
        spaceBetween: 10,
        slidesPerView: 6,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".s_slide", {
        spaceBetween: 10,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
        thumbs: {
        swiper: swiper,
        },
    });
    
    $(".swiper-wrapper").click(function(){
        $(".swiper-slide-thumb-active").css("color","#000");
        $(".swiper-slide-thumb-active").css("font-weight","bold");
        $(".swiper-slide-thumb-active").css("border-bottom","4px solid #0890c0");
        $(".swiper-slide-thumb-active").siblings().css("color","#888");
        $(".swiper-slide-thumb-active").siblings().css("font-weight","400");
        $(".swiper-slide-thumb-active").siblings().css("border-bottom","none");
    })
});

