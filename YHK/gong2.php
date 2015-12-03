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
            <li><a class="on" href="<?php echo G5_URL;?>/gong2.php">제품/브랜드</a></li>
            <li><a class="" href="<?php echo G5_URL;?>/gong3.php">성능</a></li>
        </ul>
        <!-- <img  class="gongban" style="margin-top:50px; margin-bottom:40px;" src="<?php echo G5_URL; ?>/images/ban_gong1.png" alt=""> -->
        <div class="shiny_brand1 shiny_common">
        <span class="wdot mgbt20"></span>
        <h3 class="head_gong">Brand</h3>
        <!-- <p class="ex_gong">샤이니 와이퍼는 탁월한 발수 기능과 세척 기능으로 자동차 유리면을 반짝반짝 (shiny) 부드럽게 브러싱해 악천후에도 안전한 빗길 운행을 약속합니다.</p> -->
        
        <div class="gray_common">
        <div class="gray_margin">
            <div class="shiny_brand">
                <ul class="cf">
                    <li>
                        <img src="<?php echo G5_URL; ?>/images1/shiny_logo.png" alt="">
                    </li>
                    <li class="sb_des">
                        <ul>
                            <li>
                                <p class="ex_gong">· 특수 발수 기능을 가진 특수 실리콘 소재를 이중 압출해 생산되는
                                <br>&nbsp;&nbsp;샤이니 와이퍼는 발수력과 세척력이 월등합니다.</p>
                            </li>
                            <li>
                                <p class="ex_gong">· 샤이니 와이퍼는 자동차 유리면을  반짝반짝(Shiny) 유연하게 
                                <br>&nbsp;&nbsp;브러싱해 악천후에도 안전한 빗길 운행을 약속합니다.</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </div> <!-- shiny_brand -->
        
        












        <span class="wdot mgbt20"></span>
        <div class="shiny_package shiny_common">
            <h3 class="head_gong">Package</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <img src="images1/package.png" alt="">
            <p class="ex_gong" style="padding-top:20px;">· Product  : 350mm, 400mm, 450mm, 500mm, 550mm, 600mm, 650mm 총 7종  </p>
            </div>
        </div> <!-- gray_common -->
        </div>
        <div style="height:20px;"></div>
        
        <!-- <span class="wdot mgbt20"></span>
        <div class="shiny_brand_concept shiny_common">
            <h3 class="head_gong">샤이니 Brand Concept</h3>
        </div>  -->






        <span class="wdot mgbt20"></span>
        <div class="shiny_advantage shiny_common">

            <h3 class="head_gong">샤이니 와이퍼의 특장점</h3>
            <div class="gray_common">
            <div class="gray_margin">
            <ul>
                <li>
                    <img src="images1/icon1.png" alt="">
                    <span>강력한 발수기능</span>
                    <p class="ex_gong">소재 배합 단계에서 특수 처리된 발수 기능 실리콘 소재가 강력한 발수 기능을 제공합니다.</p>

                </li>
                <li>
                    <img src="images1/icon2.png" alt="">
                    <span>탁월한 세척력</span>
                    <p class="ex_gong">실리콘 소재가 가지고 있는  탁월한 탄성과 유연성으로 황사, 미세 먼지 등에 대한 세척력이 뛰어납니다. </p>
                </li>
                <li>
                    <img src="images1/icon3.png" alt="">
                    <span>반영구적인 제품수명</span>
                    <p class="ex_gong">실리콘 소재로 만들어져 영하 150°C~영상 250°C 의 온도에서 물성 변화가 일어나지 않으며,</p>  
                    <p class="ex_gong">강렬한 태양광, 자외선, 오존 등 환경으로 인한 노화 및 물성 변화 없이 뛰어난 내구성 제공</p>
                </li>
                <li>
                    <img src="images1/icon4.png" alt="">
                    <span>무소음 작동</span>
                    <p class="ex_gong">에어로 다이다믹 디자인 적용으로 밀착력이 강해 와이퍼 작동 시 소음과 떨림 현상이 없습니다.</p>
                </li>
            </ul>
            </div>
            <!-- <img class="package2" src="images1/package2.png" alt="" height="300"> -->
        </div>
        </div> <!-- gray_common -->
            





            
            


            
         <!--    <ul class="cf ul_gong2 ul_gong2_graph">
            <li>
                <img src="<?php echo G5_URL; ?>/images1/wiper1.jpg" alt="">
                <p class="list_head">고무 와이퍼</p>
            </li>
            <li>
                <img src="<?php echo G5_URL; ?>/images1/wiper2.jpg" alt="">
                <p class="list_head">샤이니 실리콘 와이퍼</p>
            </li>
        </ul>
        <table class="tbl_gong">
            <tr>
                <th style="text-align:center;">구분</th>
                <th style="text-align:center;">제품 수명</th>
            </tr>
            <tr>
                <td style="text-align:center;">일반 고무 와이퍼</td>
                <td style="text-align:center;">6개월 마다 교체</td>
            </tr>
            <tr>
                <td style="text-align:center;">샤이니 실리콘 와이퍼</td>
                <td style="text-align:center;">2년 이상 사용 가능</td>
            </tr>
            
        </table>

        <div class="box_clr box_clr1">
            
            
        <h3 class="head_gong">샤이니 와이퍼의 특장점 이미지</h3>

            <ul class="cf">
                
            <li><p class="list_head">폭설</p><img src="<?php echo G5_URL;?>/images1/snow.jpg"  alt=""></li>
            <li><p class="list_head">폭우</p><img src="<?php echo G5_URL;?>/images1/rain.jpg"  alt=""></li>
            <li><p class="list_head">강렬한 태양광</p><img src="<?php echo G5_URL;?>/images1/sun.jpg"  alt=""></li>
            
            </ul>
        </div>
        <div class="box_clr cf">
            <p class="list_head">다양한 색상</p>
                
            <ul>
                
            <li><img src="<?php echo G5_URL;?>/images/gong1_8.png"  alt=""></li>
            <li><img src="<?php echo G5_URL;?>/images/gong1_9.png"  alt=""></li>
            <li><img src="<?php echo G5_URL;?>/images/gong1_10.png"  alt=""></li>
            <li><img src="<?php echo G5_URL;?>/images/gong1_11.png"  alt=""></li>
            <li><img src="<?php echo G5_URL;?>/images/gong1_12.png"  alt=""></li>
            
            </ul>

        </div> -->




        
    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>