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
        <!-- <div class="box_subban"> -->
            <div class="box_txt tech_bg">
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
                <span class="bt_title">새로운 생각이 새로운 가치를 창조합니다.</span>
                <span class="bt_des">NEW THINKING. NEW POSSIBILITIES.</span>
            </div>
        <!-- </div> -->
    </div>
    <div class="box_main">
        <ul class="ul_company ul_company1 cf">
            <li><a class="" href="<?php echo G5_URL;?>/company.php">본사/해외지사</a></li>
            <!-- <li><a class="" href="<?php echo G5_URL;?>/ceo.php">CEO 인사말</a></li> -->
            <li><a class="on" href="<?php echo G5_URL;?>/history.php">연혁</a></li>
        </ul>
        
        <div class="box_com2 box_com3">
            <h3><span class="">집념과 도전으로 새로운 역사를 시작하다.</span></h3>
            <span class="wdot"></span>
            <p class="txt_com">YHK KOREA는 혁신 정신과 축적된 기술력으로 <br>YHK KOREA만의 경쟁력을 만들어갑니다.</p>
            <!-- <img class="bg_history" src="<?php echo G5_URL ?>/images/bg_history.png" alt=""> -->
        </div>
        
        <div class="box_table_history cf">
            <ul class="ul_nav_history ul_nav_history2">
                <li><a class="on" href="#">2014년</a></li>
                <li><a class="" href="#">2015년</a></li>
                
            </ul>
            <ul class="ul_ctt_history">
                <li class="history history1 on"><!-- <img src="<?php echo G5_URL ?>/images/1970.png" alt=""> -->
                    <ul>
                        <li class="history_des1">
                            <ul>
                                <li>2014.10</li>
                                <li>YHK KOREA 주식회사 설립</li>
                            </ul>
                        </li>
                        <li class="history_des2">
                            <ul>
                                <li>2014.11</li>
                                <li>부설 연구소 설립</li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <li class="history history2 off"><!-- <img src="<?php echo G5_URL ?>/images/1980.png" alt=""> -->
                    <ul>
                        <li class="history_des3">
                            <ul>
                                <li>2015.6</li>
                                <li>세계 최초로 이중 압출 방식 자동차용 실리콘 와이퍼 시제품 개발</li>
                            </ul> 
                        </li>
                        <li class="history_des4">
                            <ul>
                                <li>2015.7</li>
                                <li>두개의 평행 실리콘 압출 실린더를 적용한 이중 압출 장치' 국제 특허 출원
                                </li>
                            </ul> 
                        </li>
                        <li class="history_des5">
                            <ul>
                                <li>2015.8</li>
                                <li>중국 원창전자과기유한공사와 자동차용 와이퍼 생산을 위한 합자 회사 설립 계약 체결</li>
                            </ul> 
                        </li>
                        <li class="history_des6">
                            <ul>
                                <li>2015.9</li>
                                <li>합자회사 JYAT(Jiaxing Yixia Auto Technology Co.,Ltd)설립<br>
                                    중국 저장성 자싱 소재
                                </li>
                            </ul> 
                        </li>
                        <li class="history_des7">
                            <ul>
                                <li>2015.11</li>
                                <li>이중 압출 실리콘 와이퍼 양산 공장 준공</li>
                            </ul> 
                        </li>  
                    </ul>
                </li>
                <li class="off"><img src="<?php echo G5_URL ?>/images/1990.png" alt=""></li>
                <li class="off"><img src="<?php echo G5_URL ?>/images/2000.png" alt=""></li>
                <li class="off"><img src="<?php echo G5_URL ?>/images/2010.png" alt=""></li>
            </ul>
        </div>
    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>