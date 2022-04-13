<?php


class Utils
{
    
    // 文字実体参照
    public static function h($text){
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}

// ユーティリティ
$c_url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$uri = $_SERVER['REQUEST_URI'];

// ボディクラス
$body_class = rtrim($uri, '/');
$body_class = substr($body_class, strrpos($body_class, '/') + 1);
strpos($body_class,'.php') ? $body_class = rtrim($body_class, '.php') : $body_class;
