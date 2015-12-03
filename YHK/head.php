<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>


<!-- <div id="google_translate_element">
    
</div>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ko', includedLanguages: 'es,zh-CN', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
        
        


        
<!-- 상단 시작 { -->

<div class="wrap_head" id="sticker">
<div class="translate_nav cf">
        <nav>
            <ul>
                <li><a href="<?php echo G5_URL;?>/en/index.php"><img src="<?php echo G5_URL;?>/images1/english.gif" alt="english"></a></li>
            </ul>
        </nav>
    </div>    
    <div class="box_head">
        <div class="logo">
        <a class="logos" href="<?php echo G5_URL;?>"><img  src="<?php echo G5_URL;?>/images1/logo.png" alt="YHK KOREA" width="150"></a>    
        </div>
        
        <ul class="ul_nav cf">
            <li><a href="<?php echo G5_URL;?>/company.php">Company<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/m_gnb_1.png" alt="회사소개"><img class="nav_on" src="<?php echo G5_URL;?>/images/m_gnb_1_1.png" alt="회사소개"> --></a></li>
            <li><a href="<?php echo G5_URL;?>/siljuk.php">Factory<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/m_gnb_2.png" alt="공사실적"><img class="nav_on" src="<?php echo G5_URL;?>/images/m_gnb_2_2.png" alt="공사실적"> --></a></li>
            <li><a href="<?php echo G5_URL;?>/gong1.php">Product<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/m_gnb_3.png" alt="제품 및 공법"><img class="nav_on" src="<?php echo G5_URL;?>/images/m_gnb_3_3.png" alt="제품 및 공법"> --></a></li>
            <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=video">자료실<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/m_gnb_4.png" alt="시공사진"><img class="nav_on" src="<?php echo G5_URL;?>/images/m_gnb_4_4.png" alt="시공사진"> --></a></li>
            <li class="li_nav_last"><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=basic">고객지원<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/m_gnb_5.png" alt="고객센터"><img class="nav_on" src="<?php echo G5_URL;?>/images/m_gnb_5_5.png" alt="고객센터"> --></a></li>
        </ul>
    </div>
    <div class="wrap_drop">
        <div class="box_drop cf">
            <ul class="ul_drop ul_drop1">
                <li><a href="<?php echo G5_URL;?>/company.php">본사/해외 네트워크<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_1.png" alt="회사소개"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_1_1.png" alt="회사소개"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/history.php">연혁<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_2.png" alt="ceo인사말"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_2_2.png" alt="ceo인사말"> --></a></li>
                <!-- <li><a href="<?php echo G5_URL;?>/history.php"><img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_3.png" alt="연혁"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_3_3.png" alt="연혁"></a></li> -->
            </ul>
            <ul class="ul_drop ul_drop2">
                <li><a href="<?php echo G5_URL;?>/siljuk.php">생산<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_4.png" alt="주요공사실적"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_4_4.png" alt="주요공사실적"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/rnd.php">R&D<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_4.png" alt="주요공사실적"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_4_4.png" alt="주요공사실적"> --></a></li>
            </ul>
            <ul class="ul_drop ul_drop3">
                <li><a href="<?php echo G5_URL;?>/gong1.php">기술<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_5.png" alt="하이포텍스쿨"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_5_5.png" alt="하이포텍스쿨"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/gong2.php">제품/브랜드<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_6.png" alt="바닥(탄크리트)"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_6_6.png" alt="바닥(탄크리트)"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/gong3.php">성능<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_7.png" alt="MMA바닥재"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_7_7.png" alt="MMA바닥재"> --></a></li>
            </ul>
            <ul class="ul_drop ul_drop4">
                <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=video">동영상<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb2.png" alt="싸이로공사"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb22.png" alt="싸이로공사"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=pdf">브로셔(PDF다운)<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb3.png" alt="지붕공사"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb33.png" alt="지붕공사"> --></a></li>
            </ul>
            <ul class="ul_drop ul_drop5">
                <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=basic">게시판<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb1.png" alt="바닥공사"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb11.png" alt="바닥공사"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=estimate">견적문의<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_8.png" alt="qna"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_8_8.png" alt="qna"> --></a></li>
                <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=notice">공지사항<!-- <img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_9.png" alt="견적문의"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_9_9.png" alt="견적문의"> --></a></li>
                <!-- <li><a href="<?php echo G5_URL;?>/bbs/board.php?bo_table=news"><img class="nav_off" src="<?php echo G5_URL;?>/images/d_gnb_10.png" alt="뉴스"><img class="nav_on" src="<?php echo G5_URL;?>/images/d_gnb_10_10.png" alt="뉴스"></a></li> -->
            </ul>
        </div>
    </div>
</div>
<!-- } 상단 끝  -->

<!-- 컨텐츠 시작 {-->
<div class="wrap_main">