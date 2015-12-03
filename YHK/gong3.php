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
                <span class="bt_title">제품 및 공법</span>
                <span class="bt_des">발수 기능 특수 실리콘 소재로 만든 프리미엄 와이퍼</span>
            </div>
        </div>
    </div>
    <div class="box_main box_main_gong">
        <ul class="ul_company cf">
            <li><a class="" href="<?php echo G5_URL;?>/gong1.php">기술</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong2.php">제품/브랜드</a></li>
            <li><a class="on" href="<?php echo G5_URL;?>/gong3.php">성능</a></li>
        </ul>
        <!-- <img class="gongban" style="margin-top:50px; margin-bottom:40px;" src="<?php echo G5_URL; ?>/images1/balsu.png" alt=""> -->
        
        <span class="wdot mgbt20"></span>
        <h3 class="head_gong">이중압출 실리콘 와이퍼(샤이니)의 강력한 발수 기능</h3>
        <div class="shiny_balsu_wrap">
        <div class="shiny_balsu">
            <ul class="cf">
                <li class="mgl"><img src="images1/balsu_effect.png" alt=""></li>
                <li class="sbbg"><p class="ex_gong">· 특수 처리한 그라파이트 혼합 실리콘 소재가  강력한 발수 기능을 제공합니다.</p>
                    <br>

                    <p class="ex_gong">· 우천 시 빗방울이 차창 유리면에 닿는 순간, 발수(방울로 맺힘)되어 튕겨져</p>
                    <p class="ex_gong" style="text-indent:7px;">선명한 전방 시야 확보가 가능합니다.</p>
                </li>
            </ul>

            
        </div>

        
        <div class="shiny_balsu2 shiny_common">
            <ul class="sb_common cf">
                <li>
                    <img  src="images1/basic_wiper.png" alt="">
                    <img  src="images1/basic_wiper2.png" alt="">
                    <div class="bb">
                    <ul class="cf">
                        <li>일반고무와이퍼</li>
                        <li>|</li>
                        <li class="mgr">전방 시야 확보가 어려움</li>
                    </ul>
                    </div>
                </li>
                <li style="border-right:1px solid #cdcdcd; width:1px; height:208px;">
                    
                </li>  
                <li class="mgr bb_last"> 
                    <img  src="images1/shiny_wiper.png" alt="">
                    <img  src="images1/shiny_wiper2.png" alt="">
                     <div class="bb bb1">
                     <ul class="cf">
                        <li>샤이니 와이퍼</li>
                        <li>|</li>
                        <li class="mgr">전방 시야 확보가 쉬움</li>
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
            <h3 class="head_gong">이중 압출 실리콘 와이퍼(샤이니)의 발수 기능 메커니즘</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <p class="ex_gong">· 발수 각도가 80° 이상일 때 부터 발수 기능이 발생하며, </p>
            <p class="ex_gong">· 발수 각도가 90° 이상 되면 최적의 발수효과가 
            나타납니다.</p>
            
            <ul class="cf">
                <li class="sb_degree mgl">
                    <h4>발수기능 발생 각도</h4>
                    <img src="../images1/balsu_degree.png" alt="" width="400" height="100">
                    <ul class="sb_common sb_common1 cf">
                        <li><p class="ex_gong">발수 각도 60도 이하</p></li>
                        <li><p class="ex_gong">발수 각도 90도 이상</p></li>
                    </ul>

                </li>
                <li class="sb_effect">
                    <h4>최적의 발수 효과</h4>
                    <ul class="sb_common1 cf">
                        <li>
                            <img src="images1/best.png" alt="" height="100">
                        </li>
                        <li class="se_des">
                            <ul>
                                <li><p class="ex_gong">·유리면에 수막 발생이 없음</p></li>
                                <li><p class="ex_gong">·빗방울이 동그랗게 응집되어 튕겨짐</p></li>
                                <!-- <li><p class="ex_gong">·선명한 시야 확보</p></li>
                                <li><p class="ex_gong">·떨림 현상 없는 유연한 브러싱</p></li> -->
                            </ul>
                        </li>
                    </ul>
                    <ul class="sb_common sb_common1 cf" style="padding-top:20px;">
                        <li style="padding-left:30px;"><p class="ex_gong">*선명한 시야 확보와 떨림 현상이 없는 유연한 브러싱 가능</p></li>
                        <!-- <li><p class="ex_gong">떨림 현상 없는 유연한 브러싱</p></li> -->
                    </ul>
                    
                </li>
            </ul>
                <p class="ex_gong">· 샤이니와이퍼로 교체 후 50회 정도 와이퍼를 왕복 작동하게 되면 </p>
                <p class="ex_gong">· 우천시 유리면에 빗방울이 튕겨지는 발수 현상을 뚜렷하게 확인할 수 있습니다. </p>
                <ul class="sb_count sb_common sb_common1 cf">
                    <li class="mgl">
                        <img src="images1/50db_1.png" alt="">
                        <p class="ex_gong">50회 작동 이전 상황</p>
                    </li>
                    <li><img src="images1/50db_2.png" alt=""></li>
                    <li>
                        <img src="images1/50db_3.png" alt="">
                        <p class="ex_gong">50회 작동 이후 상황</p>
                    </li>
                </ul>
                </div>
                </div><!-- gray_common -->
        </div> <!-- shiny_balsu3 -->

        <span class="wdot mgbt20"></span>
        <div class="shiny_balsu4 shiny_common">
            <h3 class="head_gong">탁월한 세척력과 경제성을 가진 친환경 와이퍼</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <p class="ex_gong">·이중압출 실리콘 와이퍼(샤이니)는</p>
            <p class="ex_gong" style="text-indent:4px;">실리콘 소재의 탄성과 유연성으로 황사,  송진, 미세먼지, 기름때 등을 깨끗하게 제거하며,</p>
            <p class="ex_gong" style="text-indent:4px;">온도 변화에도 강해 겨울 또는 여름에도 변함없는 세척력을 제공합니다.</p>
            <ul class="sb_season sb_common sb_common1 cf">
                <li class="mgl"><img src="images1/sun.png" alt="">
                <p>태양열이 강한 여름</p>
                </li>
                <li><img src="images1/snow.png" alt="">
                <p>폭설과 한파의 겨울</p>
                </li>
                <li><img src="images1/rain.png" alt="">
                <p>우천,장마</p>
                </li>
            </ul>
            <div class="season_wiper cf">
                <p class="ex_gong">샤이니와이퍼는 자외선, 오존, 산성에 강해 </p>
                <p class="ex_gong" style="padding-bottom:40px;">제품 수명이 길어 경제적이며, 블레이드 리필이 가능한 친환경 와이퍼입니다.</p>
                <img src="images1/season.png" alt="" width="865" height="180">
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