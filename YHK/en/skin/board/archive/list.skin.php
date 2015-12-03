<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- <h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->
<div class="main_slider sub_slider">
        <div class="box_txt tech_bg">
                 <!-- <img class="intro_com" src="<?php echo G5_URL;?>/images/txt_gong.png" alt=""> -->
                <span class="bt_title">Brochure Download</span>
                <!-- <span class="bt_des">브로셔 다운로드 게시판</span> -->
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
            echo "<p class='txt_board_head'>중앙산업개발의 새로운 소식을 가장 빠르게 전합니다.</p>";
        } else if ( $bo_table == 'pdf' ) {
            echo "<p class='txt_board_head'>Brochure Download</p>";
        }
    ?>
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
<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div class="bo_fx">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?></span>
            <p><?php echo $page ?> page</p>
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> 목록</caption>
        <thead>
        <tr >
            <th scope="col" style="height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;">Number</th>
            <?php if ($is_checkbox) { ?>
            <th scope="col" style="height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;">
                <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </th>
            <?php } ?>
            <th scope="col"  style="height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;">Title</th>
            <th scope="col" style="height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;">Download</th>
            <!-- <th scope="col" style="background:white;">권한</th> -->
            <th scope="col" style="height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;">Wirter</th>
            <th scope="col" style="width:130px;height:50px; border-top:2px solid #333; font-size:14px; background:#f5f5f5; font-weight:bold; border-bottom:1px solid #333;"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>Date</a></th>

            <?php if ($is_good) { ?><th scope="col"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천</a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천</a></th><?php } ?>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
			$file = get_file($bo_table, $list[$i]['wr_id']); 
			$ss_name = "ss_view_{$bo_table}_{$list[$i][wr_id]}";
			session_register($ss_name);
			$$ss_name = $HTTP_SESSION_VARS[$ss_name] = TRUE;
         ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
            <td class="td_num">
            <?php
            if ($list[$i]['is_notice']) // 공지사항
                echo '<strong>공지</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">열람중</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>
            <?php if ($is_checkbox) { ?>
            <td class="td_chk">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </td>
            <?php } ?>
            <td class="td_board">
                <a href="./write.php?w=u&bo_table=<?=$bo_table?>&wr_id=<?=$list[$i][wr_id]?>">  <?php echo $list[$i]['subject'] ?></a>

                <?php
                // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
				if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];

                 ?>
            </td>
            <td>	
			<table>
			<?      	
				 for ($j=0; $j<count($file)-1; $j++) {
							echo "<tr ><td style='border-bottom:0px solid #ddd;border-top:0px solid #ff6600;padding:3px 3px;'>";
							if( $list[$i]['wr_1'] <= $member['mb_level']) echo "<a href=\"{$file[$j][href]}\">";
							echo '<img src="'.$board_skin_url.'/img/icon_file.gif" alt="첨부"> ';							
							echo $file[$j][source]; 
							echo "(".$file[$j][size].")";
							
							if( $list[$i]['wr_1'] >= $member['mb_level'] ) echo "</a>";
							echo "</td></tr>";
					
				}
			?>
			</table>
			</td>
            <!-- <td class="td_chk sv_use"><?php if($list[$i]['wr_1'] == 1) echo "All"; else echo $list[$i]['wr_1'] ?></td> -->
            <td class="td_name sv_use"><?php echo $list[$i]['name'] ?></td>
            <td class="td_date"><?php echo $list[$i]['datetime'] ?></td>
 

            <?php if ($is_good) { ?><td class="td_num"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
            <?php if ($is_nogood) { ?><td class="td_num"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
	
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">게시물이 없습니다.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>

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
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01 btn_list">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages;  ?>

</div>
</div>
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

    if (sw == "copy")
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
