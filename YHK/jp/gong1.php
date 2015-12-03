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
            <li><a class="on" href="<?php echo G5_URL;?>/gong1.php">Technology</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong2.php">Brand & Product</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong3.php">Performance</a></li>
        </ul>
        <!-- <img class="gongban" style="margin-top:50px; margin-bottom:40px;" src="<?php echo G5_URL; ?>/images/ban_gong2.png" alt=""> -->
        
        <!-- 구조 -->
        <!-- <div class="pt_blue">
            <h2>Technology</h2>
        </div> -->
        <span class="wdot mgbt20"></span>
        <div class="shiny_blade shiny_common">
            <h3 class="head_gong">Structure of Extruded Silicone Wiper Blade</h3>
            <div class="glass" style="text-align:left;">
                <!-- <img src="<?php echo G5_URL; ?>/images1/blade.png" alt=""> -->
                <img src="<?php echo G5_URL; ?>/images1/glass.jpg" alt="">
                <p class="ex_gong blade_des1">Top Silicone : Diverse Color is available</p>
                <p class="ex_gong blade_des2">Bottom Silicone : Gray Color</p>
            </div>
        </div>

        <span class="wdot mgbt20"></span>
        <div class="shiny_blade3 shiny_common">    
        <h3 class="head_gong">Function of Extruded Silicone Wiper Blade</h3>
        <table class="tbl_gong">
            <tr>
                <th style="text-align:center;">Type</th>
                <th style="text-align:center;">Role</th>
                <th style="text-align:center;">Material Property</th>
                
            </tr>
            <tr>
                <td>Top Silicone</td>
                <td>Support the frame and balance bottom silicone</td>
                <td>High Hardness</td>
            </tr>
            <tr>
                <td>Bottom Silicone</td>
                <td>Completely get rid of raindrops by smooth wiping</td>
                <td>Low Hardness</td>
            </tr>
        </table>
        </div> <!-- shiny_blade3 -->
        
        <span class="wdot mgbt20"></span>
        <div class="shiny_blade2 shiny_common">
        <h3 class="head_gong">Function of Extruded Silicone Wiper Blade</h3>
        <div class="gray_common">
        <div class="gray_margin">
        <p class="ex_gong">· Unlike the rubber wiper with Graphite outside of surface,“Shiny” wiper is specialized in repellent coating material mixed with 
        <br>&nbsp;&nbsp; silicone at bottom part, so the repellent function is highly improved</p>
        <!-- <p class="ex_gong" style="text-indent:7px;">  특수 발수 기능 소재가 들어가 발수력이 반 영구적입니다.</p> -->
        <ul class="sb_common cf">
            <li class="mgl">
                <img src="<?php echo G5_URL; ?>/images1/maker1.png" alt="">
                <p>Competitor’s Silicone  Wiper</p>
            </li>
            <li>
                <img src="<?php echo G5_URL; ?>/images1/maker2.png" alt="">
                <p>Extruded SiliconeWiper</p>
            </li>
            <li class="repellent">
                <h4>Repellent Function</h4>
                <ul class="cf">
                    <li class="mgl">
                        <img src="images1/shiny_drop1.png" alt="">
                        <p>Shiny</p>
                    </li>
                    <li>
                        <img src="images1/shiny_drop2.png" alt="">
                        <p>Silicone Wiper</p>
                    </li>
                    <li>
                        <img src="images1/shiny_drop3.png" alt="">
                        <p>Rubber Wiper</p>
                    </li>
                </ul>
            </li>
        </ul>
        <table class="tbl_gong">
            <tr>
                <th style="text-align:center;">Type</th>
                <th style="text-align:center;">Role</th>
                <th style="text-align:center;">Function</th>
                
            </tr>
            <tr>
                <td>Competitor’s Silicone  Wiper</td>
                <td>Graphite and Repellent Liquid are coated on surface of wiper</td>
                <td>Temporary Repellency and Cleaning</td>
            </tr>
            <tr>
                <td>Extruded Silicone Wiper</td>
                <td>Graphite and Repellent material are mixed with silicone and stayed inside wiper</td>
                <td>Permanent Repellency and Cleaning</td>
            </tr>
            
        </table>
        </div>  <!-- gray_margin -->
        </div> <!-- gray_common -->
    </div> <!-- shiny_blade2 -->





       
    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>