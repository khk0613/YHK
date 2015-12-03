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
                <span class="bt_title">Shiny : 샤이니</span>
                <span class="bt_des">발수 기능이 탁월한 특수복합소재로 만든 프리미엄 실리콘 와이퍼</span>
            </div>
        </div>
    </div>
    <div class="box_main box_main_gong">
        <ul class="ul_company cf">
            <li><a class="on" href="<?php echo G5_URL;?>/gong1.php">기술</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong2.php">제품/브랜드</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong3.php">성능</a></li>
        </ul>
        <!-- <img class="gongban" style="margin-top:50px; margin-bottom:40px;" src="<?php echo G5_URL; ?>/images/ban_gong2.png" alt=""> -->
        
        <!-- 구조 -->
        <!-- <div class="pt_blue">
            <h2>Technology</h2>
        </div> -->
        <span class="wdot mgbt20"></span>
        <div class="shiny_blade shiny_common">
            <h3 class="head_gong">이중 압출 실리콘 와이퍼(샤이니)의 블레이드 구조</h3>
            <div class="glass" style="text-align:left;">
                <!-- <img src="<?php echo G5_URL; ?>/images1/blade.png" alt=""> -->
                <img src="<?php echo G5_URL; ?>/images1/glass.jpg" alt="">
                <p class="ex_gong blade_des1">상부 실리콘 : 다양한 컬러로 제품 생산 가능</p>
                <p class="ex_gong blade_des2">하부 실리콘 : 그레이 컬러, 발수 기능 특수 실리콘 소재 사용</p>
            </div>
        </div>

        <span class="wdot mgbt20"></span>
        <div class="shiny_blade3 shiny_common">    
        <h3 class="head_gong">이중 압출 실리콘 와이퍼(샤이니)의 블레이드 기능 및 물성</h3>
        <table class="tbl_gong">
            <tr>
                <th style="text-align:center;">시공부위</th>
                <th style="text-align:center;">역할</th>
                <th style="text-align:center;">물성</th>
                
            </tr>
            <tr>
                <td>상부 실리콘</td>
                <td>프레임을 지탱하고 하부 실리콘의 밸런스 유지</td>
                <td>높은 경화도</td>
            </tr>
            <tr>
                <td>하부 실리콘</td>
                <td>유연한 브러싱으로 차창의 빗방울을 완벽하게 제거</td>
                <td>낮은 경화도</td>
            </tr>
        </table>
        </div> <!-- shiny_blade3 -->
        
        <span class="wdot mgbt20"></span>
        <div class="shiny_blade2 shiny_common">
        <h3 class="head_gong">이중 압출 실리콘 와이퍼(샤이니)의 발수 메커니즘</h3>
        <div class="gray_common">
        <div class="gray_margin">
        <p class="ex_gong">· 발수 와이퍼 외부에 코팅한 타사의 실리콘 와이퍼와는 달리 샤이니 와이퍼는 하부 실리콘 블레이드 원료 배합단계에서</p>
        <p class="ex_gong" style="text-indent:7px;">  특수 발수 기능 소재가 들어가 발수력이 반 영구적입니다.</p>
        <ul class="sb_common cf">
            <li class="mgl">
                <img src="<?php echo G5_URL; ?>/images1/maker1.png" alt="">
                <p>타사 실리콘 와이퍼</p>
            </li>
            <li>
                <img src="<?php echo G5_URL; ?>/images1/maker2.png" alt="">
                <p>이중 압출 실리콘 와이퍼(샤이니)</p>
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
                        <p>Silicone Wiper <br>(타사 제품)</p>
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
                <th style="text-align:center;">구분</th>
                <th style="text-align:center;">역할</th>
                <th style="text-align:center;">기능</th>
                
            </tr>
            <tr>
                <td>타사 실리콘 와이퍼</td>
                <td>실리콘 블레이드 겉면에 발수코팅제 처리</td>
                <td>발수 효과 일시적</td>
            </tr>
            <tr>
                <td>이중 압축 실리콘 와이퍼(샤이니)</td>
                <td>특수 처리한 발수 코팅 물질을 하부 실리콘 
                    <br>
                    블레이드용 혼합 소재에 포함해 압출</td>
                <td>반영구적인 발수효과</td>
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