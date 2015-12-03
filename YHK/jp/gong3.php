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
        <div class="box_subban box_subban_gong" style="filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images1/prodct_bg.png', sizingMethod='scale');">
            <div class="box_txt tech_bg">
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
                <span class="bt_title">Shiny</span>
                <span class="bt_des">Premium silicone wiper made of special composites for water repellent</span>
            </div>
        </div>
    </div>
    <div class="box_main box_main_gong">
        <ul class="ul_company cf">
            <li><a class="" href="<?php echo G5_URL;?>/gong1.php">Technology</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong2.php">Brand & Product</a></li>
            <li><a class="on" href="<?php echo G5_URL;?>/gong3.php">Performance</a></li>
        </ul>
        <!-- <img class="gongban" style="margin-top:50px; margin-bottom:40px;" src="<?php echo G5_URL; ?>/images1/balsu.png" alt=""> -->
        
        <span class="wdot mgbt20"></span>
        <h3 class="head_gong">Powerful Repellent Function of “Shiny” wiper</h3>
        <div class="shiny_balsu_wrap">
        <div class="shiny_balsu">
            <ul class="cf">
                <li class="mgl"><img src="images1/balsu_effect.png" alt=""></li>
                <li class="sbbg"><p class="ex_gong">· Silicone material mixed with specially treated graphite enables a powerful repellent function</p>
                    <br>

                    <p class="ex_gong">· When raining, raindrops become oval shaped form on a glass and front eye view is very clear</p>
                    <!-- <p class="ex_gong" style="text-indent:7px;">선명한 전방 시야 확보가 가능합니다.</p> -->
                </li>
            </ul>

            
        </div>

        
        <div class="shiny_balsu2 shiny_common">
            <ul class="sb_common cf">
                <li>
                    <img  src="images1/basic_wiper.png" alt="">
                    <img  src="images1/basic_wiper2.png" alt="">
                    <div class="bb">
                    <ul class="cf circle">
                        <li>General Rubber Wiper</li>
                        <li>|</li>
                        <li class="mgr">Front Eye view is very uncelar</li>
                    </ul>
                    </div>
                </li>
                <li style="border-right:1px solid #cdcdcd; width:1px; height:208px;">
                    
                </li>  
                <li class="mgr bb_last"> 
                    <img  src="images1/shiny_wiper.png" alt="">
                    <img  src="images1/shiny_wiper2.png" alt="">
                     <div class="bb bb1">
                     <ul class="cf circle2">
                        <li>Shiny Silicone Wiper</li>
                        <li>|</li>
                        <li class="mgr">Front Eye View is very clear</li>
                    </ul> 
                    </div>
                </li>
            </ul>
        </div>
        </div>

        <!-- <table class="tbl_gong">
            <tr>
                <th>일반 고무 와이퍼</th>
                <td>
                    <p class="list">전방 시야 확보가 곤란</p>
                    <img src="<?php echo G5_URL;?>/images1/basic_wiper.png" alt="" width="234" height="200">
                    <img src="<?php echo G5_URL;?>/images1/basic_wiper2.png" alt="" width="234" height="200">
                </td>
            </tr>
            <tr>
                <th>샤이니 실리콘 와이퍼</th>
                <td>
                    <p class="list">전방 시야 확보가 쉬움</p>
                    <img src="<?php echo G5_URL;?>/images1/shinywiper2.png" alt="" width="234" height="200">
                    <img src="<?php echo G5_URL;?>/images1/shinywiper3.png" alt="" width="234" height="200">
                </td>
            </tr>
        </table> -->
        
        <span class="wdot mgbt20"></span>
        <div class="shiny_balsu3 shiny_common">
            <h3 class="head_gong">Double Extruded Wiper Repellent Function</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <p class="ex_gong">· Angle of raindrop is more than 80 degree, the repellent function works properly, </p>
            <p class="ex_gong">· Angle of raindrop is more than 90 degree, the repellent function is absolutely optimal</p>
            
            <ul class="cf">
                <li class="sb_degree mgl">
                    <h4>Repellent Function Angle</h4>
                    <img src="../images1/balsu_degree.png" alt="" width="400" height="100">
                    <ul class="sb_common sb_common1 cf">
                        <li><p class="ex_gong">60° Repellent Angle</p></li>
                        <li><p class="ex_gong">90° Repellent Angle</p></li>
                    </ul>

                </li>
                <li class="sb_effect">
                    <h4>Optimal Repellent Function</h4>
                    <ul class="sb_common1 cf">
                        <li>
                            <img src="images1/best.png" alt="" height="100">
                        </li>
                        <li class="se_des">
                            <ul>
                                <li><p class="ex_gong">·No water film on a glass</p></li>
                                <li><p class="ex_gong">·Raindrop is shaped oval and</p>
                                    <p class="ex_gong" style="text-indent:6px;">bounced off</p>
                                </li>
                                <!-- <li><p class="ex_gong">·선명한 시야 확보</p></li>
                                <li><p class="ex_gong">·떨림 현상 없는 유연한 브러싱</p></li> -->
                            </ul>
                        </li>
                    </ul>
                    <ul class="sb_common sb_common1 cf" style="padding-top:35px;">
                        <li style="padding-left:30px;"><span class="ex_gong">*Clear Eve View  </span>
                        <br><span class="ex_gong">*Smooth wiping movement without chattering</span></li>
                    </ul>
                    
                </li>

                <!-- <li class="sb_effect">
                    <h4>Optimal Repellent Function</h4>
                    <ul class="sb_common1 cf">
                        <li>
                            <img src="images1/best.png" alt="" width="200" height="100">
                        </li>
                        <li class="se_des">
                            <ul>
                                <li><p class="ex_gong">· No water film on a glass</p></li>
                                <li><p class="ex_gong">· Raindrop is shaped oval and</p>
                                    <p class="ex_gong" style="text-indent:6px;">bounced off</p>
                                </li>
                                
                                
                                <li><p class="ex_gong">· Visually Eve View</p></li>
                                <li><p class="ex_gong">· Smooth wiping movement </p>
                                    <p class="ex_gong" style="text-indent:6px;">without chattering </p>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                    
                </li> -->
            </ul>
                <p class="ex_gong">· Moving the wiper more than 50 times, raindrops are bounced off </p>
                <p class="ex_gong">· The clear repellent function can be visually checked. </p>
                <ul class="sb_count sb_common sb_common1 cf">
                    <li class="mgl">
                        <img src="images1/50db_1.png" alt="">
                        <p class="ex_gong">Before 50 times in motion</p>
                    </li>
                    <li><img src="images1/50db_2.png" alt="" height="150">
                        <p class="ex_gong">50 times in motion</p>
                    </li>
                    <li>
                        <img src="images1/50db_3.png" alt="">
                        <p class="ex_gong">After 50 times in motion</p>
                    </li>
                </ul>
                </div>
                </div><!-- gray_common -->
        </div> <!-- shiny_balsu3 -->

        <span class="wdot mgbt20"></span>
        <div class="shiny_balsu4 shiny_common">
            <h3 class="head_gong">Excellent Cleaning and Eco-Friendly Wiper</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <p class="ex_gong">·As elasticity and flexibility of the silicone wiper enables that “Shiny” wiper cleanly get rid of sand-dust,</p> 
            <p class="ex_gong" style="text-indent:5px;">oil and micro dust. Strong resistance to temperature provides constant cleaning function in summer and winter.</p>
            <!-- <p class="ex_gong" style="text-indent:4px;">실리콘 소재의 탄성과 유연성으로 황사,  송진, 미세먼지, 기름때 등을 깨끗하게 제거하며,</p> -->
            <!-- <p class="ex_gong" style="text-indent:4px;">온도 변화에도 강해 겨울 또는 여름에도 변함없는 세척력을 제공합니다.</p> -->
            <ul class="sb_season sb_common sb_common1 cf">
                <li class="mgl"><img src="images1/sun.png" alt="">
                <p>Summer</p>
                </li>
                <li><img src="images1/snow.png" alt="">
                <p>Winter</p>
                </li>
                <li><img src="images1/rain.png" alt="">
                <p>Rainning days</p>
                </li>
            </ul>
            <div class="season_wiper cf">
                <p class="ex_gong">·Silicone has a strong resistance against UV Ray , Ozone and Oxide. So, it has a long life time.</p> 
                <p class="ex_gong" style="text-indent:5px;padding-bottom:40px;">It is contributed to government natural prevention regulation due to economical and eco-friendly material. </p>
                <!-- <p class="ex_gong" >제품 수명이 길어 경제적이며, 블레이드 리필이 가능한 친환경 와이퍼입니다.</p> -->
                <img src="images1/season.png" alt="" width="900" height="180">
            </div>
            </div>
            </div> <!-- gray_common -->
        </div> <!-- shiny_balsu4 -->

            <!-- <table class="tbl_gong">
                <tr>
                    <th style="text-align:center">50회 작동 이전 상황</th>
                    <th style="text-align:center">50회 왕복 작동</th>
                    <th style="text-align:center">50회 작동 이후 상황</th>
                </tr>
                <tr>
                    <td><img src="<?php echo G5_URL; ?>/images1/before.png" alt=""></td>
                    <td><img src="<?php echo G5_URL; ?>/images1/now.png" alt=""></td>
                    <td><img src="<?php echo G5_URL; ?>/images1/after.png" alt=""></td>
                </tr>
                
                
            </table>     -->

        <!-- <h3 class="head_gong">샤이니와이퍼의 강력한 발수 기능3</h3>
        <p class="ex_gong">1.유리면에 수막 발생 없음</p>
        <p class="ex_gong">2.빗방울이 동그랗게 응집되어 튕겨짐</p>
        <p class="ex_gong">3.선명한 시야 확보</p>
        <p class="ex_gong">4.떨림 현상 없는 유연한 브러싱</p> -->
         
       <!--  <table class="tbl_gong">
            <tr>
                <th style="text-align:center">발수 각도 60도 이하</th>
                <th style="text-align:center">발수 각도 90도 이하</th>
                <th style="text-align:center">최적 발수 효과</th>
            </tr>
            <tr>
                <td><img src="<?php echo G5_URL; ?>/images1/balsu2.png" alt=""></td>
                <td><img src="<?php echo G5_URL; ?>/images1/balsu3.jpg" alt=""></td>
                <td><img src="<?php echo G5_URL; ?>/images1/balsu4.png" alt=""></td>
            </tr>
            
            
        </table>    
 -->



    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>