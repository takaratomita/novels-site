<?php
require '../../../app/functions.php';
include '../common/_head.php';
  
;?>


<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php' ;?>
<!-- ↑ヘッダー読み込み↑ -->

<main class="create">
<!-- ↓ナビ読み込み↓ -->
<?php include '../common/_nav.php'; ?>
<div class="create_form__wrapper novel_form article_form__wapper">
    <form class="create_form"  method="post" action="">
        <input class="title" type="text" name="title" id="" placeholder="タイトルを入力"><br><br>
        <textarea class="story" name="story" id="story" cols="30" rows="10" placeholder="本文を入力"></textarea><br>
        <div class="btn btn-flat">
          <input type="submit" value="作成">
        </div>       
    </form>
    <p style="text-align: center; color: #fff;" id="count">0文字</p>
</div>
<!-- <p>
    <?php
    
    ?>
</p> -->
<!-- ↑ナビ読み込み↑ -->
</main>

<!-- ↓フッター読み込み↓ -->   
<?php include '../common/_footer.php'; ?>
<!-- ↑フッター読み込み↑ -->
<script>
  const countTarget = document.getElementById("story");

  countTarget.addEventListener('keydown',(e)=>{
    let count = countTarget.value.length;
    document.getElementById("count").textContent = `${count}文字`;
  })
</script>
</body>
</html>