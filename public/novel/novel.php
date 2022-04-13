<?php
require '../../app/functions.php';
include '../common/_head.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $story = trim($_POST['story']);
    $id = (int) $_POST['id'];
}

if(isset($_POST['next'])){
  [$id, $title ,$story] = Post::nextBtn($id);
}

if(isset($_POST['prev'])){
  [$id, $title ,$story] = Post::prevBtn($id); 
}

$is_last = Post::is_last($id);
$is_first = Post::is_first($id);

// echo '<pre>';
// var_dump($id);
// var_dump($is_last);
// var_dump($is_first);
// echo '</pre>';

// uSession_start();

?>

<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php'?>
<!-- ↑ヘッダー読み込み↑ -->

<main>
<section class="novels_conts">
    <div class="l-container">
<?php include '../component/_underlay_mv.php'?>
<div class="article">
    <p class="article-body">
        <?= Post::ruby(nl2br($story));?>
    </p>
</div>
<div class="control-btns">
    <form action="" method="post">
    <div class="btn <?php if($is_first == true){echo 'non-select';};?>">
        <input id="prev" type="submit" name="prev" value="前の話">
        <input type="hidden" name="id" value="<?= $id?>">
    </div>
    </form>

    <div class="btn">
        <a href="./">一覧に戻る</a>
    </div>
    <form action="" method="post">
    <div class="btn <?php if($is_last == true){echo 'non-select';};?>">
        <input id="next" type="submit" name="next" value="次の話">
        <input type="hidden" name="id" value="<?= $id?>">
    </div>
    </form>

</div>

</div>
</section>
<div class="sp-control-btns">
    <form action="" method="post">
    <div class="btn <?php if($is_first == true){echo 'non-select';};?>">
        <button id="prev" type="submit" name="prev">前の話</button>
        <input type="hidden" name="id" value="<?= $id?>">
    </div>
    </form>
    <div class="btn">
        <a href="./">一覧</a>
    </div>
    <form action="" method="post">
    <div class="btn <?php if($is_last == true){echo 'non-select';};?>">
        <button id="next" type="submit" name="next">次の話</button>
        <input type="hidden" name="id" value="<?= $id?>">
    </div>
    </form>
</div>

</main>

<!-- ↓フッター読み込み↓ -->   
<?php include '../common/_footer.php'?>
<!-- ↑フッター読み込み↑ -->
<?php include '../common/_loading.php';?>
</body>
</html>