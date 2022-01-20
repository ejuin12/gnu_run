<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
if(defined('_INDEX_')) { // index에서만 실행
    include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    $num = 100;
}
?>

<div class="wrap">
    <header class="header">
        <div class="hd_top">
            <div class="container">
                <div class="left">
                    한국하와이훌라교육협회(KoHHEA) : 하와이훌라지도자 워십훌라지도자 자격증 양성교육기관
                </div>
                <div class="right">
                    <a href="/bbs/login.php"><i class="fa fa-sign-in"></i></a>
                </div>
            </div>
        </div>
        <div class="hd">
            <div class="container">
                <h1>
                    <a href="/">
                        <img src="<?php echo G5_THEME_URL ?>/img/logo.png" alt="logo">
                    </a>
                </h1>
                <nav class="gnb">
                    <?php include(G5_THEME_PATH.'/doc/aside.php')?>
                </nav>
            </div>
        </div>
    </header>
<?php 
if(!defined('_INDEX_')) {
    include_once(G5_THEME_PATH.'/head-d.php');
}
?>

