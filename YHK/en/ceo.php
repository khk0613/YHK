<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>

    <div class="main_slider sub_slider">
        <div class="box_subban">
            <div class="box_txt">
                <!-- <p>회사소개</p>
                <span class="ex1">새로운 생각이 새로운 가치를 창조합니다.</span><br>
                <span class="ex2">NEW THINKING. NEW POSSIBILITIES.</span>
                 -->
                 <img class="intro_com" src="<?php echo G5_URL;?>/images/intro_com.png" alt="">
            </div>
        </div>
    </div>
    <div class="box_main">
        <ul class="ul_company cf">
            <li><a class="" href="<?php echo G5_URL;?>/company.php">회사개요</a></li>
            <li><a class="on" href="<?php echo G5_URL;?>/ceo.php">CEO 인사말</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/history.php">연혁</a></li>
        </ul>
        
        <div class="box_com1 box_com2">
            <img src="<?php echo G5_URL;?>/images/ceo.png" alt="">
            <div class="box_ceo cf">
                <div class="box_left">
                    <h3 class="tit_ceo">최고의 기술력과 노하우를 바탕으로<br>고객으로부터 신뢰받는 기업이<br>되겠습니다.</h3>
                    <span class="wdot"></span>
                    <span class="ex_ceo">대표이사 </span>
                </div>
                <div class="box_right">
                    <p class="txt_ceo">
                        은 1981년 창립이래 30여년간의 축적된 기술과 노하우를 바탕으로<br> 지붕, 바닥, 방수공사 분야의 경쟁력을 강화하고 끊임없는 기술개발로 국내외 경쟁력<br> 확보를 위해 노력하고 있습니다.<br> <br> 지금의 모습으로 성장하기까지 수많은 난관과 어려움 속에서도 고객에 대한 열정과 <br> 과감한 도전정신으로 이를 극복해 나아간 결과 어느덧 국내에서 유일하게  단열도막<br> 코팅제로서 획기적인 제품인 하이포텍스 쿨 코트를 제조 판매 시공하고 있습니다.<br> <br> 그동안 축적된 기술력과 노하우로 고객에게 최고의 가치를 제공하기 위해 앞으로도<br> 도전정신, 친환경기업, 고객중심 이라는 3가지 핵심가치를 기반으로 신뢰받는 기업이<br> 될 수 있도록 더욱 정진해 나가겠습니다. <br> <br> 감사합니다.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>