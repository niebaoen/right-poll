<?php require_once __DIR__ . '/../core/init.php';

$elected_list = \App\Common::getElectedList();

?>

<HTML>
<?php include 'head.php';?>
<BODY>
<?php include 'new_nav.php'; ?>

<div class="contents-box">
    <header class="home">
        <div class="welcome">
            <i class="fa fa-check" aria-hidden="true"></i>
            <h1 id="pagetitle">공약 지킴이<h1>
            <h4>우리가 직접 업데이트 하는<br>실시간 공약 이행 평가</h4>
        </div>
    </header>
    <div class="slide">
        내려서 더 보기 <i class="fa fa-angle-down" aria-hidden="true"></i>
    </div>

    <div class="wr-wrapper container">
        <div class="row">
            <?php foreach ($elected_list as $num): ?>
              <div class="col-xs-12 col-sm-6 col-md-3">
                  <div class="wr_ElectedCard">
                    <img class="thum_img img-responsive" src="<?=FILE.$num['profile']?>">
                    <div class="info">
                        <h4><?=($num['name']); ?></h4>
                        <p><?=($num['chair']); ?></p>
                        <a href="/el/<?=($num['url']);?>" class="wr_btn wr_btn_blue" role="button">공약 보기</a>
                    </div>
                </div>
              </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php include 'new_footer.php'; ?>
</BODY>
</HTML>
