<?
if($_GET['bo_table']=='qa') {$num = 5;$c_title='질문과답변';}
else if($_GET['bo_table']=='notice') {$num = 6;$c_title='공지사항';}
?>

<section class="sub_title">
    <h2><?=$title?><?=$board[bo_subject]?></h2>
</section>

<div class="container sub_page">
    <article>
        <h2><?=$title?><?=$board['bo_subject']?> <small> / <?=$c_title?></small></h2>

