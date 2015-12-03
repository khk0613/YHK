$(function(){
  $("#sticker").sticky({topSpacing:0}); // 네비게이션 스티키
  /*------------------------------------- 네비게이션 드롭다운 시작 -------------------------------------*/
  $('.ul_head_sub').hide();
  $('.li_head').hover(function(){
    navCount = $('.ul_head_sub', this).find('li').length; // 드롭다운 내비게이션 개수
    navHeight = 34; // 드롭다운 내비게이션 1개의 높이
    ulHeight = navCount * navHeight ; // 드롭다운 내비게이션 높이값 
    $('.ul_head_sub', this).show().stop().animate({'height':ulHeight},140);
  }, function(){
    $('.ul_head_sub', this).stop().animate({'height':0},100).hide();
  });
  /*------------------------------------- 네비게이션 드롭다운 끝 ---------------------------------------*/

});


