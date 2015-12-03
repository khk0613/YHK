$(function(){

    $("#sticker").sticky({topSpacing:0});

    /*-- 메인 슬라이드 --*/
    var i = 0;
    $('.sl1 .text1').delay(100).animate({'left':0, 'opacity':1},600);
    $('.sl1 .text2').delay(150).animate({'left':0, 'opacity':1},800);
    $('.sl1 .text3').delay(250).animate({'left':0, 'opacity':1},900);
    $('.sl1 .text4').delay(300).animate({'left':0, 'opacity':1},1000);

    mainSlider = setInterval(function(){
        i++;    
        mainSlide();
    }, 5000);

    function mainSlide() {
        $('.main_slider .paging a').removeClass('on');
        $('.main_slider .page' + (i + 1) ).addClass('on');

        /* 2015. 08. 31 슬라이드 변경 -----------------------------------------------------------------
        if ( i == 1 ) {
            
            $('.sl1').transition({ y: -470, easing: 'easeInOutCirc', duration: 500 }, function(){
                $('.sl2').css({'z-index':5});
                $('.sl3').css({'z-index':4});
                $(this).css({'z-index':3}).transition({ y: 0, easing: 'easeInOutCirc', duration: 0 });
                $('.sl1 .text').css({'left':30, 'opacity':0});
                $('.sl2 .text1').delay(100).animate({'left':0, 'opacity':1},600);
                $('.sl2 .text2').delay(150).animate({'left':0, 'opacity':1},800);
                $('.sl2 .text3').delay(250).animate({'left':0, 'opacity':1},900);
                $('.sl2 .text4').delay(300).animate({'left':0, 'opacity':1},1000);
            });
            
        } else if ( i == 2 ) {
            $('.sl2').transition({ y: -470, easing: 'easeInOutCirc', duration: 500 }, function(){
                $('.sl3').css({'z-index':5});
                $('.sl1').eq(0).css({'z-index':4});
                $(this).css({'z-index':2}).transition({ y: 0, easing: 'easeInOutCirc', duration: 0 });
                $('.sl2 .text').css({'left':30, 'opacity':0});
                $('.sl3 .text1').delay(100).animate({'left':0, 'opacity':1},600);
                $('.sl3 .text2').delay(150).animate({'left':0, 'opacity':1},800);
                $('.sl3 .text3').delay(250).animate({'left':0, 'opacity':1},900);
                $('.sl3 .text4').delay(300).animate({'left':0, 'opacity':1},1000);
            });
            
        } else if ( i == 3 ) {
            $('.main_slider .page1').addClass('on');
            i = 0 ;
            $('.sl3').transition({ y: -470, easing: 'easeInOutCirc', duration: 500 }, function(){
                $('.sl1').eq(0).css({'z-index':5});
                $('.sl2').css({'z-index':4});
                $(this).css({'z-index':1}).transition({ y: 0, easing: 'easeInOutCirc', duration: 0 });
                $('.sl3 .text').css({'left':30, 'opacity':0});
                $('.sl1 .text1').delay(100).animate({'left':0, 'opacity':1},600);
                $('.sl1 .text2').delay(150).animate({'left':0, 'opacity':1},800);
                $('.sl1 .text3').delay(250).animate({'left':0, 'opacity':1},900);
                $('.sl1 .text4').delay(300).animate({'left':0, 'opacity':1},1000);                
            });
        }
        2015. 08. 31 슬라이드 변경 ----------------------------------------------------------------- */ 
        if ( i == 1 ) {
            
            $('.sl1').animate({'opacity':0},500);
            $('.sl2').animate({'opacity':1},500);
            $('.sl1 .text').css({'left':30, 'opacity':0});
            $('.sl2 .text1').delay(100).animate({'left':0, 'opacity':1},600);
            $('.sl2 .text2').delay(150).animate({'left':0, 'opacity':1},800);
            $('.sl2 .text3').delay(250).animate({'left':0, 'opacity':1},900);
            $('.sl2 .text4').delay(300).animate({'left':0, 'opacity':1},1000);
        
        } else if ( i == 2 ) {

            $('.sl2').animate({'opacity':0},500);
            $('.sl3').animate({'opacity':1},500);
            $('.sl2 .text').css({'left':30, 'opacity':0});
            $('.sl3 .text1').delay(100).animate({'left':0, 'opacity':1},600);
            $('.sl3 .text2').delay(150).animate({'left':0, 'opacity':1},800);
            $('.sl3 .text3').delay(250).animate({'left':0, 'opacity':1},900);
            $('.sl3 .text4').delay(300).animate({'left':0, 'opacity':1},1000);
        
        } else if ( i == 3 ) {
            $('.main_slider .page1').addClass('on');
            i = 0 ;
            $('.sl3').animate({'opacity':0},500);
            $('.sl1').animate({'opacity':1},500);
            $('.sl3 .text').css({'left':30, 'opacity':0});
            $('.sl1 .text1').delay(100).animate({'left':0, 'opacity':1},600);
            $('.sl1 .text2').delay(150).animate({'left':0, 'opacity':1},800);
            $('.sl1 .text3').delay(250).animate({'left':0, 'opacity':1},900);
            $('.sl1 .text4').delay(300).animate({'left':0, 'opacity':1},1000);                
        }
    }
    
    function slidePage() {
        var current = $('.pnaging').find('.on').index();

        p1 = $('.page1');
        p2 = $('.page2');
        p3 = $('.page3');

        p1.click(function(){
            clearInterval(mainSlider);
            i = 3;
            mainSlide();
            mainSlider = setInterval(function(){
                i++;    
                mainSlide();
            }, 5000);
        });
        p2.click(function(){
            clearInterval(mainSlider);
            i = 1;
            mainSlide();
            mainSlider = setInterval(function(){
                i++;    
                mainSlide();
            }, 5000);
        });
        p3.click(function(){
            clearInterval(mainSlider);
            i = 2;
            mainSlide();
            mainSlider = setInterval(function(){
                i++;    
                mainSlide();
            }, 5000);
        });
    }
    slidePage();

    /*-- 메인 슬라이드 // --*/



    /*-- 메인 포트폴리오 더보기 --*/
    $('.box_port_more .btn_more').hover(function(){
        $('.back', this).stop().transition({ x: 100, easing: 'easeInOutCirc', duration: 300 });
    }, function(){
        $('.back', this).stop().transition({ x: 0, easing: 'easeInOutCirc', duration: 300 });
    });
    /*-- 메인 포트폴리오 더보기 // --*/


    /*--  네비게이션 드롭다운 --*/
    $('.box_head').mouseenter(function(){
        $('.wrap_head').stop().animate({'height':225},120);
        $('.box_drop .ul_drop li:nth-child(1) a').stop().delay(120).animate({'opacity':1, 'top':0 },150);
        $('.box_drop .ul_drop li:nth-child(2) a').stop().delay(150).animate({'opacity':1, 'top':0 },200);
        $('.box_drop .ul_drop li:nth-child(3) a').stop().delay(210).animate({'opacity':1, 'top':0 },270);
    });
    $('.wrap_head').mouseleave(function(){
        $('.wrap_head').stop().animate({'height':100},250);
        $('.box_drop .ul_drop li a').stop().animate({'opacity':0, 'top':20 },300);
    });
    /*--  네비게이션 드롭다운 // --*/

    /*--  중앙산업개발 기술 호버  --*/
    $('.ul_col3 li a').hover(function(){
        $('.cover', this).stop().animate({'opacity':0.8},180);
    }, function(){
        $('.cover', this).stop().animate({'opacity':0},100);
    });
    /*--  중앙산업개발 기술 호버 // --*/


    $('#u_name').focus(function(){
        if ( $(this).val().match('이름') ) {
            $(this).val('');
        }
    });
    $('#u_company').focus(function(){
        if ( $(this).val().match('회사명') ) {
            $(this).val('');
        } 
    });
    $('#u_email').focus(function(){
        if ( $(this).val().match('이메일') ) {
            $(this).val('');
        }
    });
    $('#u_phone').focus(function(){
        if ( $(this).val().match('연락처') ) {
            $(this).val('');
        } 
    });

    /*-- 온라인견적 Validation --*/
    $('#u_name').blur(function(){      
        var u_name = $(this).val(); 
        if ( u_name.length < 2) {       // 이름
            $(this).addClass('alert');
            // alert('이름을 정확하게 기입해주세요.');
        } else {
            $(this).removeClass('alert');
        }
        // if ( u_name.length == 0 ) {
        //     $(this).val('이름');
        // } 
    });    
    $('#u_company').blur(function(){   
        var u_company = $(this).val(); // 회사명
        if ( u_company.length == 0 ) {
            $(this).addClass('alert');
            // alert('회사명을 정확하게 기입해주세요.');
        } else {
            $(this).removeClass('alert');
        } 
        // if ( u_company.length == 0 ) {
        //     $(this).val('회사명');
        // } 
    }); 

    $('#u_email').blur(function(){     
        var u_email = $(this).val();  // 이메일
        if ( u_email.match('@') ) {
            if ( u_email.match('.com') ) {
                $(this).removeClass('alert');
                return true;
            } else if ( u_email.match('.co.kr') ) {
                $(this).removeClass('alert');
                return true;
            } else if ( u_email.match('.net') ) {
                $(this).removeClass('alert');
                return true;
            } else if ( u_email.match('.or.kr') ) {
                $(this).removeClass('alert');
                return true;
            }
        } else {
            $(this).addClass('alert');
            // alert('이메일을 정확하게 기입해주세요.');
        }
        // if ( u_email.length == 0 ) {
        //     $(this).val('이메일');
        // } 
    });  

    $('#u_phone').blur(function(){    
        var u_phone = $(this).val();   // 연락처
        if ( !u_phone.match('-') ) {
            $(this).addClass('alert');
            // alert('연락처를 정확하게 기입해주세요. 예)010-0000-0000');
        } else if ( u_phone.length < 12 || u_phone.length > 13 ) {
            $(this).addClass('alert');
            // alert('연락처를 정확하게 기입해주세요. 예)010-0000-0000');
        } else if ( u_phone.match('-') ) {
            $(this).removeClass('alert');
        } 
        // if ( u_phone.length == 0 ) {
        //     $(this).val('연락처 (예 : 010-0000-0000)');
        // } 
    });   

    /*-- 온라인견적 Validation // --*/
    


    // 견적 신청하기 버튼 클릭
    $('.box_submit .btn_submits').click(function(){
        if ( !$('.box_mail .box_check .checkbox').hasClass('checked') || $('#u_name').val().length == 0 || $('#u_company').val().length == 0 || $('#u_email').val().length == 0 || $('#u_phone').val().length == 0 || $('.box_mail input[type=text]').hasClass('alert') ) {
            if ( !$('.box_mail .box_check .checkbox').hasClass('checked') ) {
                alert('개인정보 보호방침에 동의해주세요.');
            } else {
                alert('입력사항을 정확히 기입해주세요.');    
            }
        } else {
            $(this).parent().find('input[type=submit]').click();    
            alert('(YHK KOREA로 문의가 정상적으로 접수되었습니다. 감사합니다.');
        }
    });    

    

    // 개인보호방침 동의 체크
    $('.box_check .checkbox, .box_check label').click(function(){
        if ( $(this).parent().find('.checkbox').hasClass('checked') ) {
            $(this).parent().find('.checkbox').removeClass('checked');
            $(this).parent().find('input[type=checkbox]').removeAttr('checked')
        } else {
            $(this).parent().find('.checkbox').addClass('checked');
            $(this).parent().find('input[type=checkbox]').attr('checked','checked');
        }
    });


    /*--  온라인 견적  // --*/
    $('.ul_nav li, .ul_drop li').hover(function(){
        $('.nav_off', this).hide();
        $('.nav_on', this).show();
    }, function(){
        $('.nav_off', this).show();
        $('.nav_on', this).hide();
    })

    // 서브페이지 회사개요 네비게이션
    function navOn() {
        var current = $('.ul_company li .on').parent().index();
        $('.ul_company li a').hover(function(){
            $(this).parent().parent().find('a').removeClass('on');
            $(this).addClass('on');
        }, function(){
            $(this).parent().parent().find('a').removeClass('on');
            $(this).parent().parent().find('li:nth-child(' + (current+1)  + ') a').addClass('on');
        });
    }
    navOn();

    // var link =  document.location.href; // url 주소값
    // if ( link.match('ceo') || link.match('company') || link.match('history') ) {
    //     $('.wrap_head .wrap_drop .box_drop').css({'background-image':'url("../images1/nav_bg2.png")'});
    // } else if ( link.match('siljuk') ) {
    //     $('.wrap_head .wrap_drop .box_drop').css({'background-image':'url("../images1/nav_siljuk.png")'});
    // } else if ( link.match('gong') ) {
    //     $('.wrap_head .wrap_drop .box_drop').css({'background-image':'url("../images1/prodct_bg.png")'});
    //  }

    function historyTable() {
        // var current = $('.ul_nav_history').find('.on').parent().index();
        $('.ul_nav_history li a').click(function(){
            $(this).parent().parent().find('a').removeClass('on');
            $(this).addClass('on');
            var current = $(this).parent().index();
            //console.log(current);
            $('.ul_ctt_history > li').removeClass('on').addClass('off');
            $('.ul_ctt_history > li:nth-child(' + (current+1) + ')').addClass('on');
            return false;
        });  
    }
    historyTable();


    /* 2015. 09. 06 시공사진 썸네일 이미지 생성*/
    function thumbgal() {
        $('.box_contt_gal p img:eq(0)').clone().appendTo('.box_gal_cover');
    }
    thumbgal();

    /*--  시공사진 호버  --*/
    $('.gall_sigong li a').hover(function(){
        $('.cover', this).stop().animate({'opacity':0.7},180);
        $('.sigong_baljuchu', this).stop().animate({'opacity':0.9},180);
        $('.sigong_yeongyeok', this).stop().animate({'opacity':0.9},180);
    }, function(){
        $('.cover', this).stop().animate({'opacity':0},100);
        $('.sigong_baljuchu', this).stop().animate({'opacity':0},100);
        $('.sigong_yeongyeok', this).stop().animate({'opacity':0},100);
    });
    /*--  시공사진 호버 // --*/

    /* top 버튼 */
    var offset = 320;  
    var duration = 500;  
    $(window).scroll(function() {  
        if ($(this).scrollTop() > offset) {  
            $('.back_to_top').fadeIn(300);  
        } else {  
            $('.back_to_top').fadeOut(300); 
        }  
    });
    $('.back_to_top').click(function(event) {  
        event.preventDefault();  
        $('html, body').animate({scrollTop: 0}, duration);  
        return false;
    });
      
   
    $('input, textarea').placeholder();




});