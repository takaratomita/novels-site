<?php require('../../app/functions.php'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css"></link>
    <title>ログイン画面</title>
</head>
<body>
    <main class="p-admin-login">
        <div class="l-container">
            <div class="admin-form_wrapper">
            <h1 class="page-ttl">ログイン</h1>
                <form action="" method="post" class="admin-form">
                    <input type="text" name="user_name"><br>
                    <input type="password" name="password" id="password"><br><br>
                    <div class="btn btn-flat">
                        <input type="submit" value="ログイン">
                    </div>
                </form>
            </div>
        </div>
    </main>  
</body>
</html>