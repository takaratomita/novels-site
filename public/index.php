<?php
$title = '';
?>
<?php require '../app/functions.php'?>
<?php include './common/_head.php'?>

<!-- ↓ヘッダー読み込み↓ -->
<?php include './common/_header.php'?>
<!-- ↑ヘッダー読み込み↑ -->

<main>
  <section class="top-mv">
    <div id="app">
    <hooper :auto-play="true" :play-speed="6000" :wheel-control="false" :hover-pause="false" :centerMode="true">
        <slide>
          <h2>そこは、暗くて<br class="pc-hide">僅かに明るい場所<br></h2>
          <div class="btn sliders-btn"><a href="./novel">第１章はこちら</a></div>
        </slide>
        <slide>
          <h2>そこは、誇り高き<br class="pc-hide">騎士の国<br></h2>
          <div class="btn sliders-btn"><a href="./novel">第２章はこちら</a></div>
        </slide>
        <!-- <slide>
          slide 3
        </slide>
        <slide>
          slide 4
        </slide> -->
      </hooper>
    </div>
  </section>

  <section class="top-story__content l-container">
  <h2 class="page-ttl page-ttl_underlay">最新話</h2>
  <?php # if($results[0]['id'] !== 1):?>
    <ul class="novels-list cards">
        <?php foreach($results as $result):?>
            <li class="card">
                <form action="./novel/novel.php" method="post">
                    <button type="submit">
                        <span class="card_title"><?= $result["title"]?></span>
                        <span class="card_posted"><?= $result["posted"]?></span>
                    </button>
                    
                    <input type="hidden" value="<?= $result["title"]?>" name="title">
                    <input type="hidden" value="<?= $result["story"]?>" name="story">
                    <input type="hidden" value="<?= $result["id"]?>" name="id">
                </form>
            </li>
        <?php endforeach;?>
    </ul>
    <?php  # endif;?>
    <div class="btn btn-wrap">
    <a class="non-wrap_btn" href="./novel" class="">一覧はこちら</a>
    </div>
    
  </section>

</main>

<!-- ↓フッター読み込み↓ -->   
<?php include './common/_footer.php'?>
<!-- ↑フッター読み込み↑ -->
<?php include './common/_loading.php';?>
<!-- Vue CDN -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>

<!-- ホッパー（スライダーライブラリ） -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hooper@0.2.1/dist/hooper.css">
<script src="https://cdn.jsdelivr.net/npm/hooper@0.2.1/dist/hooper.min.js"></script>
<script>
new Vue({
  el: "#app",
  components: {
      Hooper: window.Hooper.Hooper,
      Slide: window.Hooper.Slide
  },
})
</script>
</body>
</html>