<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// 썸네일 크기 설정
$thumb_width = '110';    //썸네일 넓이
$thumb_height = '80';    //썸네일 높이

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<?php
// 비메오 썸네일 추출 함수
function get_vimeo($url){
	if (!function_exists('curl_init')) die('CURL is not installed!');
	$ch = curl_init(); 
	curl_setopt ($ch, CURLOPT_URL,$url); 
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
	$result=curl_exec($ch);                        // 긁어온것을 $result에 저장
	curl_close($ch); 
	return $result;
}
?>
<div class="main_slider sub_slider">
        <!-- <div class="box_subban box_subban_siljuk box_subban_custom ">
            <div class="box_txt">
                 <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_custom.png" alt="">
            </div>
        </div> -->
    <div class="box_txt tech_bg">
         <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
        <span class="bt_title">Video</span>
        <span class="bt_des">Shiny wiper test , silicone wiper VS rubber wiper comparison test</span>
    </div>

</div>
<div class="box_main box_board_basic cf">
    <div class="board_headers cf">
    <!-- 게시판 내비게이션 (탭메뉴) www 2015. 09. 04 -->
    <?php 
        if( $bo_table == 'basic' || $bo_table == 'video' || $bo_table == 'pdf') {
            echo "
            <ul class='ul_company ul_company1 cf'>
                <li><a class='' href='board.php?bo_table=video'>Video</a></li>
                <li><a class='' href='board.php?bo_table=pdf'>Brochure</a></li>
            </ul>"
            ;
        }
        if ( $bo_table == 'basic' ) {
            echo "<p class='txt_board_head'>게시판</p>";
        } else if ( $bo_table == 'video' ) {
            echo "<p class='txt_board_head'>Video</p>";
        } else if ( $bo_table == 'pdf' ) {
            echo "<p class='txt_board_head'>최고의 기술력과 노하우로 고객만족 서비스를 제공하겠습니다.</p>";
        } else if ( $bo_table == 'estimate' ) {
            echo "<p class='txt_board_head'>견적문의</p>";
        }
    ?>
    <!-- 게시판 내비게이션 www 2015. 09. 04 -->
    <!-- 게시판 검색 시작 { -->
        <div class="box_searchs">
            <fieldset id="bo_sch">
                <legend>게시물 검색</legend>

                <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <!--<select name="sfl" id="sfl">
                    <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
                    <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
                    <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
                    <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
                    <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
                    <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>작성자</option>
                    <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>작성자(코)</option>
                </select>-->
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="20">
                <input type="submit" value="검색" class="btn_submit">
                </form>
            </fieldset>
        </div>
<!-- } 게시판 검색 끝 -->
    </div>
    <script>
        var link =  document.location.href; // url 주소값
        if ( link.match('qna') ) {
            $('.ul_company li:nth-child(1) a').addClass('on');
        } else if ( link.match('quotation') ) {
            $('.ul_company li:nth-child(2) a').addClass('on');
        } else if ( link.match('news') ) {
            $('.ul_company li:nth-child(3) a').addClass('on');
        }
    </script>
    <!-- <h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->
    <!-- 게시판 내비게이션 www 2015. 09. 04 -->
    <!-- 게시판 목록 시작 { -->










<!-- <h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->

<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">

    <?php if ($is_category) { ?>

    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>

    <?php } ?>

    <div class="bo_fx">
        <div id="bo_list_total">
            <span>Total count <?php echo number_format($total_count) ?></span>
            <p><?php echo $page ?> page</p>
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <?php if ($is_checkbox) { ?>
    <!-- <div id="gall_allchk">
        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
    </div> -->
    <?php } ?>

    <ul id="gall_ul">

        <?php for ($i=0; $i<count($list); $i++) {
/*
            if($i>0 && ($i % $bo_gallery_cols == 0))
                $style = 'clear:both;';
            else
                $style = '';
            if ($i == 0) $k = 0;
            $k += 1;
            if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
*/
         ?>

		<li class="gall_li <?php if ($wr_id == $list[$i]['wr_id']) { ?>gall_now<?php } ?>">
            <span class="sound_only">
                <?php
                if ($wr_id == $list[$i]['wr_id'])
                    echo "<span class=\"bo_current\">열람중</span>";
                else
                    echo $list[$i]['num'];
                 ?>
            </span>
            <ul class="gall_con"> <!-- 이미지 출력 -->
                <li class="gall_href" style="padding:4px; border:1px solid #ddd;">
                    <a href="<?php echo $list[$i]['href'] ?>">
                    <?php
                    if ($list[$i]['is_notice']) { // 공지사항  ?>
                        <strong style="width:<?php echo $thumb_width ?>px;height:45px">공지</strong>
                    <?php } else {
                        $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $thumb_width, $thumb_height); // 썸네일 크기를 위에서 선언한 크기사용

						//  유튜브, 비메오 썸네일 추출
						if(!$thumb){ // 썸네일이 없는 경우
							if($list[$i]['wr_1']) { // 유튜브 이미지 출력
								$thumb['src'] = "http://img.youtube.com/vi/{$list[$i][wr_1]}/default.jpg";
							} elseif ($list[$i]['wr_2']){ // 비메오 이미지 출력
								$output=get_vimeo("http://vimeo.com/api/v2/video/".$list[$i]['wr_2'].".php");
								$output=unserialize($output);
								// echo "<img src='".$output[0][thumbnail_medium]."'>"; //thumbnail_small, thumbnail_medium, thumbnail_large
								$thumb['src'] = $output[0][thumbnail_medium];
							}
						}
						//  유튜브, 비메오 썸네일 추출 end 

						
						if($thumb['src']) {
                            $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
                        } else {
							$img_content = '<span style="width:'.$thumb_width.'px;height:'.$thumb_height.'px">no image</span>';
                        }

                        echo $img_content;
                    }
                     ?>
                    </a>
                </li>
			</ul>

            <ul class="gall_con2">  <!-- 제목,내용 출력 -->
                
                <li>
					<?php
		            if ($list[$i]['is_notice']) // 공지사항
			            echo '<strong>공지</strong>';
				    else
					    echo "<span class='bo_num'>".$list[$i]['num']."</span>";
					?>
					<?php
					if ($is_category && $list[$i]['ca_name'] && !$list[$i]['is_notice']) {  // 공지사항은 분류출력 안함 ?>
	                    <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a> <span class="bo_gubun">|</span>
                    <?php } ?>
					<?php echo $list[$i]['name'] ?> <span class="bo_gubun">|</span>        <!-- 작성자 -->
                    <?php echo $list[$i]['datetime2'] ?> <span class="bo_gubun">|</span>   <!-- 작성일 -->
                    <span class="gall_subject">조회 </span><?php echo $list[$i]['wr_hit'] ?>
					<?php if ($is_good) { ?><span class="gall_subject">추천</span><strong><?php echo $list[$i]['wr_good'] ?></strong><?php } ?>
	                <?php if ($is_nogood) { ?><span class="gall_subject">비추천</span><strong><?php echo $list[$i]['wr_nogood'] ?></strong><?php } ?>
				</li>

				<?php
					$wr_content = preg_replace("/<(.*?)\>/"," ",$list[$i][wr_content]); 
					$wr_content = preg_replace("/&nbsp;/"," ",$wr_content); 
					$wr_content = str_replace("//##", " ", $wr_content); 
					$wr_content = cut_str(get_text($wr_content), 100, '…');
				    if (!$list[$i]['is_notice']) { // 공지사항이 아닐경우 내용출력 ?>
					<li class="bo_content"><?php echo $wr_content?></li>
				<?php } ?>
			</ul>
        </li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
</div>
</div>
<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
</div>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

<!-- 게시물 검색 시작 { -->
<!-- <fieldset id="bo_sch">
    <legend>게시물 검색</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">검색대상</label>
    <select name="sfl" id="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
        <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
        <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
        <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
        <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
	<input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="15">
    <input type="submit" value="검색" class="btn_submit">
    </form>
</fieldset> -->
<!-- } 게시물 검색 끝 -->

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
		if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

		f.removeAttribute("target");
		f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
