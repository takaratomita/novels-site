<?php
require '../../../app/functions.php';
include '../common/_head.php';
  
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = Utils::h($_POST['title']);
    $story = Utils::h($_POST['story']);
    $id = Utils::h($_POST['id']);
  }
// echo'<pre>';
// echo $story;
// echo'</pre>';
;?>


<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php' ;?>
<!-- ↑ヘッダー読み込み↑ -->

<main class="create">
<!-- ↓ナビ読み込み↓ -->
<?php include '../common/_nav.php'; ?>
<div class="create_form__wrapper article_form__wapper">
    <form class="create_form"  method="post" action="./edited.php">
        <input class="title" type="text" name="title" id="" value="<?= $title?>"><br><br>
        <textarea class="story" name="story" id="story" cols="30" rows="10"><?= $story;?></textarea><br>
        <input type="hidden" value="<?= $id;?>" name="id">
        <div class="btn">
          <input type="submit" value="編集">
        </div>
    </form>
    <!-- <p style="color:white"><?= $id;?></p> -->
    <p style="text-align: center; color: #fff;" id="count"><?= mb_strlen($story);?>文字</p>
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