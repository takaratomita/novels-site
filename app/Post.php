<?php

class Post
{
  // 小説登録の関数
    public static function create(){
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
          $postedTitle = Utils::h(filter_input(INPUT_POST, 'title'));
          $postedTitle = $postedTitle !== '' ? $postedTitle : '何も入力されていません';
      
          $postedStory = Utils::h(filter_input(INPUT_POST, 'story'));
          $postedStory = $postedStory !== '' ? $postedStory : '何も入力されていません';
    
        $pdo->query("INSERT INTO novels (title, story, posted) VALUES 
        ('$postedTitle',
        '$postedStory',
        NOW()
        )");
          header('Location: created.php');
          exit;
        }
      }

      // 作成完了画面の関数
  public static function created(){
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM novels ORDER BY id DESC
    LIMIT 1;");
    $result = $stmt->fetch();
    return [$result["title"], $result["story"]];
  }

    // 一覧表示の関数
    public static function showAllEp(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM novels");
        $results = $stmt->fetchAll();
        return $results;
      }
      public static function showAllEp_r(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM novels ORDER BY id DESC LIMIT 3");
        $results = $stmt->fetchAll();
        return $results;
      }
      
      // 編集機能
      public static function edit(){
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
          $postedTitle = Utils::h(filter_input(INPUT_POST, 'title'));
          $postedTitle = $postedTitle !== '' ? $postedTitle : '何も入力されていません';
      
          $postedStory = Utils::h(filter_input(INPUT_POST, 'story'));
          $postedStory = $postedStory !== '' ? $postedStory : '何も入力されていません';
    
          $id = trim(filter_input(INPUT_POST, 'id'));
          $id = $id !== '' ? $id : '何も入力されていません';
    
          $stmt = $pdo->prepare("UPDATE novels SET title = ?, story = ?, posted = NOW() WHERE id=?");
          $stmt->execute([$postedTitle, $postedStory, $id]);
        return [$postedTitle, $postedStory, $id];
      }
      }
    
      // 削除ボタン
      public static function deleteBtn($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM novels WHERE id = ?");
        $stmt->execute([$id]);
      }
    
      // 次へボタン
      public static function nextBtn($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM novels WHERE id > ? ORDER BY id LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        $title = $result['title'];
        $story = $result['story'];
        $id = $result['id'];
    
        return [$id, $title ,$story];
      }
    
      // 前へボタン
      public static function prevBtn($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM novels WHERE ? > id ORDER BY id DESC LIMIT 1");
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        $title = $result['title'];
        $story = $result['story'];
        $id = $result['id'];
        $is_first = '';
    
        return [$id, $title ,$story];
      }
    
      // レコード最初、最後判定
    public static function is_last($id){
      global $pdo;
        $is_last = false;
        $stmt = $pdo->query("SELECT * FROM novels ORDER BY id DESC LIMIT 1");
        $result = $stmt->fetch();
        $id === $result['id'] ? $is_last = true : $is_last;
        return $is_last;
    }
    
    public static function is_first($id){
      global $pdo;
        $is_first = false;
        $stmt = $pdo->query("SELECT * FROM novels ORDER BY id ASC LIMIT 1");
        $result = $stmt->fetch();
        $id === $result['id'] ? $is_first = true : $is_first;
        return $is_first;
    }

    // ルビ振り関数
    public static function ruby($story){
    $replace = '<ruby>$1<rt>$2</rt></ruby>';
    $pattern = '/\|(.+?)《(.+?)》/';
    $ruby = preg_replace($pattern, $replace, $story);
    return $ruby; 
  }
}

class BlogPost extends Post
{
    // ブログ登録の関数
    public static function create(){
      global $pdo;
      if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  
        $postedTitle = Utils::h(filter_input(INPUT_POST, 'title'));
        $postedTitle = $postedTitle !== '' ? $postedTitle : '何も入力されていません';
    
        $postedStory = Utils::h(filter_input(INPUT_POST, 'story'));
        $postedStory = $postedStory !== '' ? $postedStory : '何も入力されていません';
  
      $pdo->query("INSERT INTO blogs (title, body, posted) VALUES 
      ('$postedTitle',
      '$postedStory',
      NOW()
      )");
        header('Location: created.php?blog');
        exit;
      }
    }

     // 作成完了画面の関数
  public static function created(){
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM blogs ORDER BY id DESC
    LIMIT 1;");
    $result = $stmt->fetch();
    return [$result["title"], $result["body"]];
  }

    // 一覧表示の関数
    public static function showAllEp(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM blogs");
        $results = $stmt->fetchAll();
        return $results;
      }
      public static function showAllEp_r(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM blogs ORDER BY id DESC LIMIT 3");
        $results = $stmt->fetchAll();
        return $results;
      }
      
      // 編集機能
      public static function edit(){
        global $pdo;
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
          $postedTitle = Utils::h(filter_input(INPUT_POST, 'title'));
          $postedTitle = $postedTitle !== '' ? $postedTitle : '何も入力されていません';
      
          $postedStory = Utils::h(filter_input(INPUT_POST, 'story'));
          $postedStory = $postedStory !== '' ? $postedStory : '何も入力されていません';
    
          $id = trim(filter_input(INPUT_POST, 'id'));
          $id = $id !== '' ? $id : '何も入力されていません';
    
          $stmt = $pdo->prepare("UPDATE blogs SET title = ?, body = ?, posted = NOW() WHERE id=?");
          $stmt->execute([$postedTitle, $postedStory, $id]);
        return [$postedTitle, $postedStory, $id];
      }
      }
    
      // 削除ボタン
      public static function deleteBtn($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM blogs WHERE id = ?");
        $stmt->execute([$id]);
      }
}
