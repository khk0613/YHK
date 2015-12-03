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
                <span class="bt_title">NEW THINKING. NEW POSSIBILITIES.</span>
                <!-- <span class="bt_des"></span> -->
            </div>
        <!-- </div> -->
    </div>
    <div class="box_main">
        <ul class="ul_company ul_company1 cf">
            <li><a class="" href="<?php echo G5_URL;?>/company.php">Headquarter / Foreign Branch</a></li>
            <!-- <li><a class="" href="<?php echo G5_URL;?>/ceo.php">CEO 인사말</a></li> -->
            <li><a class="on" href="<?php echo G5_URL;?>/history.php">History</a></li>
        </ul>
        
        <div class="box_com2 box_com3">
            <h3><span class="">It is a commitment and a challenge to start a new history.</span></h3>
            <span class="wdot"></span>
            <p class="txt_com">YHK has pioneered the market and led the change comes 30 years accumulated technology 
has created a unique competitive YHK KOREA.</p>
            <!-- <img class="bg_history" src="<?php echo G5_URL ?>/images/bg_history.png" alt=""> -->
        </div>
        
        <div class="box_table_history cf">
            <ul class="ul_nav_history ul_nav_history2">
                <li><a class="on" href="#">2014</a></li>
                <li><a class="" href="#">2015</a></li>
                
            </ul>
            <ul class="ul_ctt_history">
                <li class="history history1 on"><!-- <img src="<?php echo G5_URL ?>/images/1970.png" alt=""> -->
                    <ul>
                        <li class="history_des1">
                            <ul>
                                <li>2014.10</li>
                                <li>YHK Korea CO., Ltd is established</li>
                            </ul>
                        </li>
                        <li class="history_des2">
                            <ul>
                                <li>2014.11</li>
                                <li>R&D Center is established</li>
                            </ul>
                        </li>
                    </ul>

                </li>
                <li class="history history2 off"><!-- <img src="<?php echo G5_URL ?>/images/1980.png" alt=""> -->
                    <ul>
                        <li class="history_des3">
                            <ul>
                                <li>2015.6</li>
                                <li>Developed the world’s first silicone wiper in double extrusion technology</li>
                            </ul> 
                        </li>
                        <li class="history_des4">
                            <ul>
                                <li>2015.7</li>
                                <li>Applied the patent on double extrusion device with double parallel cylinder
                                </li>
                            </ul> 
                        </li>
                        <li class="history_des5">
                            <ul>
                                <li>2015.8</li>
                                <li>Entered joint venture with Jiaxing Yixia Auto Technology Co., Ltd for wiper production</li>
                            </ul> 
                        </li>
                        <li class="history_des6">
                            <ul>
                                <li>2015.9</li>
                                <li>Established Joint Venture Company at Jiaxing in China <br></li>
                            </ul> 
                        </li>
                        <li class="history_des7">
                            <ul>
                                <li>2015.11</li>
                                <li>Established factory for mass production of silicone wiper</li>
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