<?php
$title = '活動報告';
require '../../app/functions.php';
include '../common/_head.php'
?>

<!-- ↓ヘッダー読み込み↓ -->
<?php include '../common/_header.php'?>
<!-- ↑ヘッダー読み込み↑ -->

<main>
<section class="novels_conts">
<?php include '../component/_underlay_mv.php'?>
    <div class="l-container">
<?php if($results[0]['id'] === 1):?>
    <ul class="novels-list cards">
        <?php foreach($results as $result):?>
            <li class="card">
                <form action="./novel.php" method="post">
                    <button type="submit">
                        <span class="card_title"><?= $result["title"]?></span>
                        <span class="card_posted"><?= $result["posted"]?></span>
                    </button>
                    
                    <input type="hidden" value="<?= $result["title"]?>" name="title">
                    <input type="hidden" value="<?= $result["body"]?>" name="story">
                    <input type="hidden" value="<?= $result["id"]?>" name="id">
                </form>
            </li>
        <?php endforeach;?>
    </ul>
    <?php  endif;?>
    </div>
</section>
</main>

<!-- ↓フッター読み込み↓ -->   
<?php include '../common/_footer.php'?>
<!-- ↑フッター読み込み↑ -->
<?php include '../common/_loading.php';?>
</body>
</html>