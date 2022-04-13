<body class="<?= $body_class?>">
<header <?php $body_id = '';
$uri === '/' ? $body_id="id='top'" : $body_id;
echo $body_id;
?> >
    <input type="checkbox" name="humberger" id="humberger">
    <label for="humberger" class="humberger">
        <span></span>
        <span></span>
        <span></span>
    </label>
    <div class="l-container">
        <div class="header-left">
            <div class="menus">
                <div class="menu"><a href="/">TOP<span>トップ</span></a></div>
                <div class="menu"><a href="/story">STORY<span>物語</span></a></div>
                <div class="menu"><a href="/character">CHARACTER<span>登場人物</span></a></div>
            </div>
        </div>
        <div class="header-logo">
            <img src="/images/common/header-logo.png" alt="">
        </div>
        <div class="header-right">
            <div class="menus">
                <div class="menu"><a href="/novel">NOVEL<span>小説</span></a></div>
                <div class="menu"><a href="/blog">BLOG<span>活動報告</span></a></div>
                <div class="menu"><a href="/contact">CONTACT<span>お問い合わせ</span></a></div>
            </div>
        </div>
        <div class="config-menus_sp">
        <ul class="config_menus">
        <li><button type="submit" id="dark-mode_sp"><i class="fas fa-moon"></i></button></li>
        </ul>
        </div>
    </div>
    <input type="checkbox" id="config-btn">
    <div class="header-config">
        <label for="config-btn">
            <span></span>
            <span></span>
            <span></span>
        </label>
    </div>
    
    <ul class="header-config_menu">
        <li><button type="submit" id="dark-mode">ダークモード</button></li>
    </ul>
</header>