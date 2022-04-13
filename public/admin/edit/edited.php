<?php
  require '../../../app/functions.php';
?>

<?php include '../common/_head.php' ;?>


<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php' ;?>
<!-- ↑ヘッダー読み込み↑ -->

<main class="create">
<!-- ↓ナビ読み込み↓ -->
<?php include '../common/_nav.php'; ?>
<div class="l-container" style="text-align: center;">
    <h1 class="page-ttl">編集しました</h1>
    <div class="btn">
      <a class="non-wrap_btn" href="../admin.php" class="">戻る</a>
    </div>
    <h2 style="margin-top: 20px;"><?= $title?></h2>
    <p><?= Post::ruby(nl2br($story));?></p>
</div>

</main>

<!-- ↓フッター読み込み↓ -->   
<?php include '../common/_footer.php'; ?>
<!-- ↑フッター読み込み↑ -->
</body>
</html>