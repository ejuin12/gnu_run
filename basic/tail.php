<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');
    return;
}
?>
<?php 
if(!defined('_INDEX_')) {
    include_once(G5_THEME_PATH.'/tail-d.php');
}
?>

    <footer class="footer">
        <ul>
            <li>한국하와이훌라교육협회(KoHHEA)</li>
            <li>서울 강남구 강남대로78길 33-3 해오름빌 지하 1층</li>
            <li>대표자 : 카이마나 심은주</li>
            <li>사업자등록번호 : 607-09-98424</li>
            <li>Tel : 010-5508-7415</li>
            <li>e-mail : wizhwang@hanmail.net</li>
        </ul>
        <address>© KoHHEA All Rights Reserved.</address>
    </footer>
</div>

<button type="button" id="top_btn">
    <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
</button>
<script>

var pageNum = <?=$num?>;

$('aside li').eq(pageNum-1).addClass('on');

$(function() {
    $("#top_btn").on("click", function() {
        $("html, body").animate({scrollTop:0}, '500');
        return false;
    });
});
</script>


<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_THEME_URL ?>/js/slick.min.js"></script>
<script src="<?php echo G5_THEME_URL ?>/js/main.js"></script>
<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");