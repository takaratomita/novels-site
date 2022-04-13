<?php

require 'Config.php';
require 'Utils.php';
require 'Database.php';
require 'Post.php';
require 'Login.php';


  // 各関数発動の制御
  switch($uri){
    case '/admin/create/?novel':
      Post::create();
      break;
    case '/admin/create/?blog':
      BlogPost::create();
      break;
    case '/admin/create/created.php':
      [$title, $story] = Post::created();
      break;
    case '/admin/create/created.php?blog':
      [$title, $story] = BlogPost::created();
      break;
    case '/admin/edit/?novel':
    case '/novel/?novel':
      $results = Post::showAllEp();
      break;
    case '/novel/':
      $results = Post::showAllEp();
      break;
    case '/blog/':
      $results = BlogPost::showAllEp();
      break;
    case '/':
      $results = Post::showAllEp_r();
      break;
    case '/admin/edit/edited.php?novel':
      [$title, $story, $id] = Post::edit();
      break;
    case '/admin/edit/edited.php?blog':
      [$title, $story, $id] = BlogPost::edit();
      break;
    case '/admin/':
      Login::In();
      break;
    case '/admin/admin.php':
      // Login::In();
      break;
    default:
      break;
  }

  // if(preg_match("/admin/", $uri)) {
  // }
