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

    <!-- <div class="main_slider"> -->
        <!-- <ul class="ul_slider cf"> -->
            <!-- <li class="sl1"> -->
                <!-- <div class="box_txt"> -->
                    <!-- <img class="text text1" src="<?php echo G5_URL;?>/images1/foodone.jpg" alt="국내유일 하이포텍스쿨" width="1024" height="316"> -->
                    <!-- <img class="text text2" src="<?php echo G5_URL;?>/images/txt_main2.png" alt="Hipotex Cool Coat">
                    <img class="text text3" src="<?php echo G5_URL;?>/images/txt_main3.png" alt="국내유일 획기적인 방수, 단열, 차열, 도막재!">
                    <img class="text text4" src="<?php echo G5_URL;?>/images/txt_main4.png" alt="하이포텍스쿨 시공기업 중앙산업개발입니다."> -->
                <!-- </div> -->
            <!-- </li> -->
            <!-- <li class="sl2"> -->
                <!-- <div class="box_txt"> -->
                    <!-- <img class="text text1" src="<?php echo G5_URL;?>/images1/foodone.jpg" alt="국내유일 하이포텍스쿨" width="980" height="316"> -->
                    
                    <!-- <img class="text text1" src="<?php echo G5_URL;?>/images/txt_main9.png" alt="고객만족을 위한"> -->
                    <!-- <img class="text text2" src="<?php echo G5_URL;?>/images/txt_main10.png" alt="차별화된 기술과 소재"> -->
                    <!-- <img class="text text3" src="<?php echo G5_URL;?>/images/txt_main11.png" alt="30년의 역사를 바탕으로 국내 유일의 독보적 기술력과"> -->
                    <!-- // <img class="text text4" src="<?php echo G5_URL;?>/images/txt_main12.png" alt="환경을 생각한 친환경시공 전문기업 중앙산업개발입니다."> -->
                <!-- </div> -->
            <!-- </li> -->
            <!-- <li class="sl3"> -->
                <!-- <div class="box_txt"> -->
                    <!-- <img class="text text1" src="<?php echo G5_URL;?>/images1/foodone.jpg" alt="국내유일 하이포텍스쿨" width="980" height="316"> -->
                    
                    <!-- <img class="text text1" src="<?php echo G5_URL;?>/images/txt_main5.png" alt="고객만족을 위한">
                    <img class="text text2" src="<?php echo G5_URL;?>/images/txt_main6.png" alt="차별화된 기술과 소재">
                    <img class="text text3" src="<?php echo G5_URL;?>/images/txt_main7.png" alt="30년의 역사를 바탕으로 국내 유일의 독보적 기술력과">
                    <img class="text text4" src="<?php echo G5_URL;?>/images/txt_main8.png" alt="환경을 생각한 친환경시공 전문기업 중앙산업개발입니다."> -->
                <!-- </div> -->
            <!-- </li> -->
        <!-- </ul> -->
        <!-- <div class="paging"> -->
            <!-- <a class="page1 on" href="#"></a> -->
            <!-- <a class="page2" href="#"></a> -->
            <!-- <a class="page3" href="#"></a> -->
        <!-- </div> -->
    <!-- </div> -->
    
    <div class="box_main box_first">
        <div class="main_text">
        <!-- <div style="text-align:center;">
            
        </div> -->
        <p class="txt_tech">
            <!-- <img src="<?php echo G5_URL;?>/images/txt_tech.png" alt=""> -->
            Premium silicone wiper made of special composites for water repellent
            <img src="images1/shiny_logo.png" alt="" width="150">
        </p>
        

        
        </div>
    </div>
    
    <div class="main_copy_wrap" style="filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='images1/blue1.jpg', sizingMethod='scale');">
        <div class="main_copy">
            <p class="mc2">Falling raindrops!</p>
            <p class="mc1">Would you like to bail out ? or bounce off ?</p>   
        </div>
    </div>
    

    <div class="main_vs_wrap cf">
        <div class="main_vs shiny_balsu2 shiny_common">
            <ul class="sb_common cf">
                <li class="bb_first mgr cf">
                    <div class="bb_left bb_common">
                        
                    
                    <div class="head_gong">Powerful Repellent Function of “Shiny” wiper</div>
                    <span class="wdot mgbt20"></span>        
                    <div class="bb_img1 bb_img">
                        <img  src="images1/basic_wiper.png" alt="">
                        <img  src="images1/basic_wiper2.png" alt="">
                        
                    </div>
                    <div class="bb">
                    <ul class="cf circle">
                        <li>General Rubber Wiper</li>
                        <li>|</li>
                        <li class="mgr">Front Eye view is very uncelar</li>
                    </ul>
                    </div>
                    </div>
                </li>
                
                <li class="mgr bb_last cf"> 
                    <div class="bb_right bb_common">
                    <ul>
                        <li>
                            <p class="ex_gong ex_gong1">01.</p>
                            <p class="ex_gong">Silicone material mixed with specially treated graphite enables a powerful repellent function</p>
                        </li>
                        <li>
                            <p class="ex_gong ex_gong1">02.</p>
                            <p class="ex_gong">When raining, raindrops become oval shaped form on a glass and front eye view is very clear</p>
                        </li>
                    </ul>
                    <div class="bb_img"> 
                        <img  src="images1/shiny_wiper.png" alt="">
                        <img  src="images1/shiny_wiper2.png" alt="">
                    </div>
                     <div class="bb bb1">
                     <ul class="cf circle">
                        <li>Shiny Silicone Wiper</li>
                        <li>|</li>
                        <li class="mgr">Front Eye View is very clear</li>
                    </ul> 
                    </div>
                </div>
                </li>
            </ul>
        </div>
        </div>
    
    
    
    <a name="estimate">
   
    <div class="box_quot">
        <h2 class="txt_tech"><img src="<?php echo G5_URL;?>/images/txt_quo.png" alt=""></h2>
        <div class="box_quotation cf">
            <ul class="cf">
                <li class="box_left">
                    <ul>
                        <li>With the best technology and quality</li>
                        <li>For customer satisfaction</li>
                        <li>We will do best.</li>
                        <li><span></span></li>
                    </ul>
                </li>
                <li class="box_mail">
                    <form name="mailform" action="mail.php" method="post" target="hiddenifr">
                    <iframe id="" class="blind" name="hiddenifr" src="" frameborder="0"></iframe>
                    <h3>ONLINE QUOTATION</h3>
                    <input  type="text" name="u_name" id="u_name" placeholder="name" >
                    <input  type="text" name="u_company" id="u_company" placeholder="company" >
                    <input  type="text" name="u_email" id="u_email" placeholder="email">
                    <input  type="text" name="u_phone" id="u_phone" placeholder="phone (ex : 010-0000-0000)">
                    <textarea name="u_quotation" id="u_quotation" cols="30" rows="5" placeholder="please write your content"></textarea>
                    <div class="box_check">
                        <span class="checkbox"></span><input class="blind" type="checkbox" name="privacy_agree" id="privacy_agree"><label for="privacy_agree">I agree with the privacy policy</label>
                    </div>
                    <div class="box_submit">
                        <span class="btn_submits">Apply</span>
                        <input class="blind" type="submit" value="신청하기">
                    </div>
                </form>    
                </li>
            </ul>
            
            
        </div>
    </div>
    </a>
    
    <div class="box_main map_wrap">
    <div class="company_adress_wrap">
        <div id="google_map" style="width:100%; margin:0 auto; height:400px; position: relative;"></div>
        <!-- <div class="p_map">
            <img src="images1/p_map.gif" alt="">
        </div> -->
        <div class="company_adress">
            <span class="wdot mgbt20"></span>
            <h3><img src="<?php echo G5_URL;?>/images1/logo.png" alt=""></h3>
            <ul class="box_com4">
                <li>
                    <span class="tit_name">Adress</span>  
                    <p class="tit_des">Room411, Kumho-town, 26 Gongwon-ro, Guro-gu,<br>Seoul, Korea </span></li>
                <li>
                    <span class="tit_name">Tel</span> 
                    <p class="tit_des">+82-70-7500-2293</span></li>
                <li>
                    <span class="tit_name">Fax</span>
                    <p class="tit_des">+82-70-7500-2245</span></li>  
            </ul>
        </div> <!-- company_adress -->
        </div> <!-- company_adree_wrap -->
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
    google.maps.event.addDomListener(window, 'load', initialize);
 
function initialize(){
    if($("#google_map").length) {
 
    var mapOptions = { //구글 맵 옵션 설정
        zoom : 16, //기본 확대율
        center : new google.maps.LatLng(37.499899, 126.892132), // 지도 중앙 위치
        scrollwheel : false, //마우스 휠로 확대 축소 사용 여부
        mapTypeControl : false //맵 타입 컨트롤 사용 여부
    };
 
    var map = new google.maps.Map(document.getElementById('google_map'), mapOptions); //구글 맵을 사용할 타겟
    
    var image = 'http://remainlab5.godohosting.com/images1/map_logo.png'; //마커 이미지 설정
 
    var marker = new google.maps.Marker({ //마커 설정
        map : map,
        position : map.getCenter(), //마커 위치
        icon : image //마커 이미지
    });
    google.maps.event.addDomListener(window, "resize", function() { //리사이즈에 따른 마커 위치
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
    });
 
    }//if-end
}//function-end
 
});//jQuery-end
</script>
<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>