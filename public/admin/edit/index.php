<?php
require '../../../app/functions.php';
include '../common/_head.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = trim($_POST['id']);
    Post::deleteBtn($id);
    header('Location:' . 'HOST'. '/admin/edit/?novel');
    exit;
  }

;?>


<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php' ;?>
<!-- ↑ヘッダー読み込み↑ -->

<main class="edit">
<!-- ↓ナビ読み込み↓ -->
<?php include '../common/_nav.php'; ?>
<div class="l-container">
    <div class="edit__wrapper">
    <?php  if(isset($results[0])):?>
        <ul class="edit_list">
        <?php foreach($results as $result):?>
        <li>
            <span>
                <?= $result["title"] . ":" . $result["posted"];?>
            </span>
        <div class="edit-btns">
            <form action="./edit.php" method="post">
                <div class="btn">
                    <input class="non-wrap_btn" type="submit" name="edit" value="編集">
                </div>
                <input type="hidden" value="<?= $result["title"]?>" name="title">
                <input type="hidden" value="<?= $result["story"]?>" name="story">
                <input type="hidden" value="<?= $result["id"]?>" name="id">
            </form>
            <form action="" method="post">
                <div class="btn">
                    <input class="non-wrap_btn" type="submit" name="delete" value="削除">
                </div>
                <input type="hidden" value="<?= $result["id"]?>" name="id">
            </form>
        </div>
        </li>
        <?php endforeach;?>
        </ul>
        <?php  endif;?>
    </div>
</div>

<!-- ↑ナビ読み込み↑ -->
</main>

<!-- ↓フッター読み込み↓ -->   
<?php include '../common/_footer.php'; ?>
<!-- ↑フッター読み込み↑ -->
</body>
</html>