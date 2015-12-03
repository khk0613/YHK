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
        <div class="box_subban box_subban_siljuk">
            <div class="box_txt tech_bg">
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
                <span class="bt_title">Factory</span>
                <span class="bt_des">Dual extrusion where complete innovation in the silicone wiper</span>
            </div>
        </div>
    </div>
    <div class="box_main">
        <div class="box_com2 box_com3">
        </div>
        
        <div class="box_table_history cf">
            <ul class="ul_nav_history ul_nav_siljuk">
                <li><a class="on" href="#">Front View of Factory</a></li>
                <!-- <li><a class="" href="#">Production line</a></li> -->
                <!-- <li><a class="" href="#">2012년 ~ 2013년</a></li>
                <li><a class="" href="#">2014년 ~ 현재</a></li> -->
            </ul>
            <ul class="ul_ctt_history ul_ctt_siljuk">
                <li class="on"><img src="<?php echo G5_URL ?>/images1/factory.jpg" alt="" width="650" height="450"> 
                <p class="tit_com">Factory Location : Jiaxing , China</p> 

                </li>
                

                <li class="off"><!-- <img src="<?php echo G5_URL ?>/images/2010_2011.png" alt=""> -->
                    <!-- <ul>
                        <li><p>실리콘 배합 시스템</p><img src="<?php echo G5_URL ?>/images1/system1.jpg" alt=""></li>
                        <li><p>압출 시스템</p><img src="<?php echo G5_URL ?>/images1/system2.jpg" alt=""></li>
                        <li><p>열처리 시스템</p><img src="<?php echo G5_URL ?>/images1/system3.jpg" alt=""></li>
                        <li><p>건조 시스템</p><img src="<?php echo G5_URL ?>/images1/system4.jpg" alt=""></li>
                        <li><p>커팅 시스템</p><img src="<?php echo G5_URL ?>/images1/system5.jpg" alt=""></li>
                        <li><p>포장 시스템</p><img src="<?php echo G5_URL ?>/images1/system6.jpg" alt=""></li>
                    </ul> -->
                    
            
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>