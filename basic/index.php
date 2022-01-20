<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<main>
    <section class="main">
        <div class="m_slider">
            <figure class="item01"></figure>
            <figure class="item02"></figure>
            <figure class="item03"></figure>
        </div>
        <div class="slogan">
            <h2>KoHHEA</h2>
            <p>KoHHEA는 하와이훌라지도자 • 워십훌라지도자 자격증 양성교육기관입니다.<br>본 협회의 지도자 교육과정은 전문적이고 체계적인 교육프로그램으로 구성되어 있으며,<br>현장수업에 최적화된
                프로그램을 항상 연구하여 교육에 적용하고 있습니다.
            </p>
        </div>
    </section>
    <section class="customer">
        <div class="container">
            <div class="lf">
                <h3>
                    News&amp;Notice
                    <a href="/bbs/board.php?bo_table=notice"><i class="fa fa-arrow-right"></i></a>
                    <?php echo latest('theme/basic', 'notice', 4, 23); ?>
                </h3>
            </div>
            <div class="cn">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div id="daumRoughmapContainer1642488932163" class="root_daum_roughmap root_daum_roughmap_landing"
                    style="width:100%"></div>

                <!--
	                2. 설치 스크립트
	                * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
                -->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp": "1642488932163",
                    "key": "28ucm",
                    // "mapWidth" : "640",
                    "mapHeight": "200"
                }).render();
                </script>
            </div>
            <div class="rt">
                <strong>
                    <a href="tel:010-5508-7415"><i class="fa fa-phone"></i></a>
                    <a href="tel:010-5508-7415">010-5508-7415</a>
                </strong>
                <span>
                    Fax : 055-329-3890
                    <a href="mailto:wizhwang@hanmail.net">E-mail : wizhwang@hanmail.net</a>
                </span>
            </div>
        </div>
    </section>
</main>

<?php
include_once(G5_THEME_PATH.'/tail.php');