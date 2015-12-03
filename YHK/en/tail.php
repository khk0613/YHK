<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
<a href="#" class="back_to_top">top▲</a>
<div class="wrap_footer cf">
    <div class="box_footer cf">
        <h4><img src="<?php echo G5_URL;?>/images1/logo.png" alt="YHK로고"></h4>
        <div class="box_foot_txt">
            <span class="txt_foot">사업자등록번호 : 000-00-0000<span class="bar"></span></span>
            <span class="txt_foot">YHK KOREA<span class="bar"></span></span>
            <span class="txt_foot"><!-- 대표 : 홍길동 --></span></span><br>
            <!-- <span class="txt_foot">주소 : 서울시 구로구 공원로 26 금호타운 411호(구로동 49번지)<br></span> -->
            <span class="txt_foot">Address : Room411, Kumho-town, 26 Gongwon-ro, Guro-gu, Seoul, Korea</span><br />
            <span class="txt_foot">TEL : +82-70-7500-2293 <span class="bar"></span></span>
            <span class="txt_foot">FAX : +82-70-7500-2245</span><br />
            <span class="txt_foot copyright">Copyright ⓒ 2015 YHK KOREA. All rights reserved.</span>
        </div>
    </div>
</div>
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");
?>