<?php

  //モデルの呼び出し
  require('models/user.php');

  // コントローラのクラスをインスタンス化
    $controller = new UsersController();
    //$controller->index();
    //アクション名によって、呼び出すメソッドを変える
    switch ($action) {
      case 'signup':
        $controller->register();
        break;
      case 'check':
        $controller->check();
        break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'thanks':
        $controller->thanks();
        break;
      case 'login':
        $controller->login();
        break;  
      case 'logout':
        $controller->logout();
        break;
      default:
        # code...
        break;
    }

  class UsersController {
      function signup() {
          $resource = 'users';
          $action = 'signup';
          require('views/layout/application.php');
      }

      function check() {
          $resource = 'users';
          $action = 'check';
          require('views/layout/application.php');
      }
      function create($post_data){

      }

      function thanks() {
          $resource = 'users';
          $action = 'thanks';
          require('views/layout/application.php');
      }

      function login() {
          $resource = 'users';
          $action = 'login';
          require('views/layout/application.php');
      }

      function logout(){

      }


   }
?>