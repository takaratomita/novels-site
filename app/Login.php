<?php
class Login
{

  // ログイン用
  public static function In()
  {
      // session_start();
      $pdo = Database::getPdo();
      $stmt = $pdo->query("select * from users");
      $results = $stmt->fetchAll();
      // var_dump($results);
    
      // if(!$_SESSION['ID'] && $uri !== '/admin/'){
      //   $alert = "<script>alert('ログインしてください。');</script>";
      //   header('Location: HOST/admin/');
      //   echo $alert;
      // }

      if ($_SERVER['REQUEST_METHOD'] === 'POST'){

        // $login = false;
    
        $inputUseName = Utils::h($_POST['user_name']);
        $inputPassword = Utils::h($_POST['password']);
    
        foreach($results as $result){
            if( $result['user'] == $inputUseName && $result['password'] == $inputPassword){
                // $login = true;
                // $_SESSION['ID'] = $login;
                header('Location:' . HOST . '/admin/admin.php');
                exit;
            }
            $alert = "<script>alert('ユーザー名かパスワードが違います。');</script>";
            echo $alert;
        }
      }

  }

}
