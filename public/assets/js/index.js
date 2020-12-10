$(function() {
  'use strict';
  
  // $("section").height($(window).height());


  var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 600,
      speedAsDuration: true
  });

  $(".owl-carousel").owlCarousel({
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:true
        }
    }
  });

    var btn = $('#button');
    function sco() {
        if ($(window).scrollTop() > 600) {
            btn.addClass('showBtnUpPageToFirst');
        } else {
            btn.removeClass('showBtnUpPageToFirst');
        }
    }
    sco();
    $(window).scroll(function() {
        sco();
    });

    btn.on('click', function(e) {
        
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });


    // social list 
    var windowWidth = $(window).height();
    
    var windowsize = ($(window).width()) - 30;
        
        
        
        var topList = (windowWidth - $('.social-list').outerHeight())/2;

        var widthList = ($('.social-list').outerWidth()) - 40;
        
        
        $('.social-list').css({
            'top': topList+'px'
        })

        function funresizewidth() { 
            
            if ($(window).width() < 425) { 
                $('.social-list').css({
                    'width': '95%'
                })
            } else {
                $('.social-list').css({
                    'width': '400px'
                })
            }
        }

        funresizewidth();

        $(window).on('resize', function(){
            funresizewidth();          
        });

        $('.btn-bar-show').on('click',function () {
            if($('.btn-bar-show i').hasClass('fa-bars')) {
                $('.btn-bar-show i').removeClass('fa-bars').addClass('fa-times');
                $('.social-list').animate({
                    'right': '0px'
                });
            } else {
                if ($(window).width() < 425) { 

                    $('.social-list').animate({
                        'right': "-"+windowsize+'px'
                    });
                }else {
                    $('.social-list').animate({
                        'right': "-"+widthList+'px'
                    });
                }
                $('.btn-bar-show i').removeClass('fa-times').addClass('fa-bars');
            }
        })

        // -353px 
});
