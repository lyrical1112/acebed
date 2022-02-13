$(document).ready(function(){
    /*왼쪽 반응형*/
    $(".sub, .kor").hide();
    $(".h_left>ul>li").mouseenter(function(){
        $(".sub").fadeIn(500);
        $("header").animate({height: "400px"});
        $(".h_logo").fadeOut(300);
        $(".eng").hide();
        $(".kor").show();
    });
    
    $(".h_left").mouseleave(function(){
        $(".sub").hide(100);
        $("header").animate({height: "150px"});
        $(".h_logo").fadeIn(100);
        $(".eng").show();
        $(".kor").hide();
    });

    /*(오른쪽 반응형)*/
    $(".sub_r").hide();
    $(".h_right>ul>li").mouseenter(function(){
        $(".sub_r").fadeIn(500);
        $("header").animate({height: "400px"});
        $(".h_logo").fadeOut(300);
        $(".h_right").css("width", "50%");
    });

    $(".h_right").mouseleave(function(){
        $(".sub_r").hide(100);
        $("header").animate({height: "150px"});
        $(".h_logo").fadeIn(100);
        $(".h_right").css("width", "40%");
    });
    
    /*돋보기 반응형*/
    $("#search_wrap").hide();
    $("#search_wrap").slideUp();
    $(".search").click(function(){
        $("#search_wrap").slideDown();
        $("header").animate({height: "400px"});
    })
    $(".search_close").click(function(){
        $("#search_wrap").slideUp();
        $("header").animate({height: "150px"});
    })

    /*top + 버튼*/
    $(".top").hide()
    $(window).scroll(function(){
        var sct = $(window).scrollTop();
        if(sct > 100){
            $(".top").show(700);
        }
    });

    /*첫번째 섹션*/
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    /*뉴스섹션*/
    $(".event_img2").hide();
    $(".event_img3").hide();
    $(".news_event1").click(function(){
        $(".event_img1").show();
        $(".event_img2").hide();
        $(".event_img3").hide();
        $(".news_event1").css("color","#0890c0");
        $(".news_event2").css("color","#999");
        $(".news_event3").css("color","#999");
    })
    $(".news_event2").click(function(){
        $(".event_img2").show();
        $(".event_img1").hide();
        $(".event_img3").hide();
        $(".news_event2").css("color","#0890c0");
        $(".news_event1").css("color","#999");
        $(".news_event3").css("color","#999");
    })
    $(".news_event3").click(function(){
        $(".event_img3").show();
        $(".event_img1").hide();
        $(".event_img2").hide();
        $(".news_event3").css("color","#0890c0");
        $(".news_event1").css("color","#999");
        $(".news_event2").css("color","#999");
    })

    /*푸터 셀렉트 박스
    
    $(".footer_select").hide();
    $(".footer_view").click(function(){
        $(".footer_select").toggle();
    })
    $(".footer_select").click(function(){
        $(".footer_select").hide();
    })
    */
    

    // 탑버튼 

    jQuery( '.top1' ).click( function() {
        var htmloffset = jQuery( 'html' ).offset();
        jQuery( 'html, body' ).animate( { scrollTop : htmloffset.top }, 400 );
    });

});

$(".select_wrap>p").click(function(){
    $(".select").slideToggle(300);
})


// ham fullpage

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}