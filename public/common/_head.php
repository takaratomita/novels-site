<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.min.css"></link>
    <link rel="shortcut icon" href="/favicon.ico" >
    <!-- font awsome -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <title>小説サイト<?php 
    $_SERVER['REQUEST_URI'] === '/' ? $page_title = '' : $page_title=' - ' . $title;
    echo $page_title;
    ?></title>
</head>