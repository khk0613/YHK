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
            <div class="box_txt tech_bg">
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
                <span class="bt_title">새로운 생각이 새로운 가치를 창조합니다.</span>
                <span class="bt_des">NEW THINKING. NEW POSSIBILITIES.</span>
            </div>
                <!-- <p>회사소개</p>
                <span class="ex1">새로운 생각이 새로운 가치를 창조합니다.</span><br>
                <span class="ex2">NEW THINKING. NEW POSSIBILITIES.</span>
                 -->
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/intro_com.png" alt=""> -->
        </div>
    </div>
    <div class="box_main">
        
        <ul class="ul_company ul_company1 cf">
            <li><a class="on" href="<?php echo G5_URL;?>/company.php">본사/해외지사</a></li>
            <!-- <li><a class="" href="<?php echo G5_URL;?>/ceo.php">CEO 인사말</a></li> -->
            <li><a class="" href="<?php echo G5_URL;?>/history.php">연혁</a></li>
        </ul>
        
        <div class="box_com1">
            <!-- <h3>미래를 향한 <span class="">끊임없는 도전정신</span><br>차별화된 기술력을 추구하는 <span class="">혁신기업</span></h3>
            <span class="wdot"></span>
            <p class="txt_com">중앙산업개발은 30년 이상 축적된 기술과 노하우를 바탕으로<br> <span class="bold">국내에서 유일하게 친환경 개선에 사용 할 수 있는 특허품을 <br> 제조 시공</span>하고 있습니다.  앞으로도  중앙산업개발은 <br> 지속적인 기술개발과 끊임없는 도전정신으로 세계로 나아가는 <br> 첨단 기술을 보유한 기업으로 도약하겠습니다.<br> </p> -->
           <span class="wdot mgbt20"></span>
           <h3 class="tit_coms">본사</h3>
            <ul>
                <li>
                    <span class="tit_name">회사명:</span> 
                    <span class="tit_des">와이에이치코리아 주식회사</span>
                </li>
                <li>
                    <span class="tit_name">주소:</span> 
                    <span class="tit_des">서울특별시 구로구 공원로 26 금호타운빌딩 411호</span>
                </li>
                <li>
                    <span class="tit_name">대표전화:</span> 
                    <span class="tit_des">+82-70-7500-2293</span>
                </li>
                <li>
                    <span class="tit_name">Fax:</span> 
                    <span class="tit_des">+82-70-7500-2245</span>
                </li>
            
            </ul>
            <ul>
                <li>
                    <span class="tit_name">사업개발 및 연구제휴 문의:</span> 
                    <span class="tit_des">와이에이치코리아 주식회사</span>
                </li>
                <li>
                    <span class="tit_name">영업 및 마케팅 문의:</span> 
                    <span class="tit_des">서울특별시 구로구 공원로 26 금호타운빌딩 411호</span>
                </li>
                <li>
                    <span class="tit_name">채용 문의:</span> 
                    <span class="tit_des">+82-70-7500-2293</span>
                </li>
                <li>
                    <span class="tit_name">일반 사항 문의:</span> 
                    <span class="tit_des">info@yhkkorea.com</span>
                </li>


                
            </ul>


        </div>
        <span class="wdot mgbt20"></span>
        <h3 class="tit_coms">해외 네트워크</h3>
        <ul class="ul_col3 cf ul_col3_sub">
            <li>
                <img src="<?php echo G5_URL;?>/images1/oversea1.jpg" alt=""> 
                <p class="tit_com ">Jiaxing Yixia<br>auto technology co.Ltd.</p> 
                <span class="ex_com">
                    <span class="tit_name">주소 : </span>
                    <span class="tit_des">Zhejiang Province Jiaxing Fengqiao Kaifaqu, China</span>
                    <br>
                    <!-- <span class="tit_name">E-mail : </span><span class="tit_des">tiger@yhkkorea.com</soan>
                    <br>
                    <span class="tit_name">Tel : </span><span class="tit_des">86-1856-396-1773</soan> -->
                </span>
            </li>
            <li>
                <img src="<?php echo G5_URL;?>/images1/oversea2.jpg" alt=""> 
                <p class="tit_com ">Demeton co., Ltd</p> 
                <span class="ex_com">
                    <span class="tit_name">주소 : </span>
                    <span class="tit_des">48 Nancy Street, West Babylon, NY 11704, U.S.A</span>
                    <br>
                    <!-- <span class="tit_name">E-mail : </span><span class="tit_des">tiger@yhkkorea.com</soan>
                    <br>
                    <span class="tit_name">Tel : </span><span class="tit_des">86-1856-396-1773</soan> -->
                </span>
            </li>
            <li class="mgr">
                <img src="<?php echo G5_URL;?>/images1/oversea3.jpg" alt=""> 
                <p class="tit_com ">Nishizaki Corporation</p> 
                <span class="ex_com">
                    <span class="tit_name">주소 : </span>
                    <span class="tit_des">Colorado 1871 Bis, Apt. 2, C.P. 11800, Montevideo-Uruguay </span>
                    <br>
                    <!-- <span class="tit_name">E-mail : </span><span class="tit_des">tiger@yhkkorea.com</soan>
                    <br>
                    <span class="tit_name">Tel : </span><span class="tit_des">86-1856-396-1773</soan> -->
                </span>
            </li>
            <li>
                <img src="<?php echo G5_URL;?>/images1/oversea4.jpg" alt=""> 
                <p class="tit_com ">ANA Ukraine Limited</p> 
                <span class="ex_com">
                    <span class="tit_name">주소 : </span>
                    <span class="tit_des">Uborevicha 27, KIEV, 03179, Ukraine</span>
                    <br>
                    <!-- <span class="tit_name">E-mail : </span><span class="tit_des">tiger@yhkkorea.com</soan>
                    <br>
                    <span class="tit_name">Tel : </span><span class="tit_des">86-1856-396-1773</soan> -->
                </span>
            </li>
            <li>
                <img src="<?php echo G5_URL;?>/images1/oversea5.jpg" alt=""> 
                <p class="tit_com ">Japan Promotion Agency</p> 
                <span class="ex_com">
                    <span class="tit_name">주소 : </span>
                    <span class="tit_des">New Tokyo Bldg. 5F, Suginami-ku Asagaya Minami 
             1-34-6, Tokyo, Japan 166-0004</span>
                    <br>
                    <!-- <span class="tit_name">E-mail : </span><span class="tit_des">tiger@yhkkorea.com</soan>
                    <br>
                    <span class="tit_name">Tel : </span><span class="tit_des">86-1856-396-1773</soan> -->
                </span>
            </li>

        </ul>
    </div>
</div>

<!--} 컨텐츠 끝 -->

<?php
include_once(G5_PATH.'/tail.php');
?>