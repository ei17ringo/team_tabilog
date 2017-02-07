<?php

session_start();
  //モデルの呼び出し
  require('models/user.php');

  // コントローラのクラスをインスタンス化
    $controller = new UsersController();
    //$controller->index();
    //アクション名によって、呼び出すメソッドを変える
    switch ($action) {
      case 'signup':
        $controller->signup($_POST);
        break;


      
      case 'create':
        $controller->create($_POST);
        break;
      case 'check':
        $controller->check();
        break;


      case 'comfirm':
        $controller->comfirm();
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
      function signup($user_data) {


       


         $error = array();



          if(isset($user_data) && !empty($user_data)){


          //ニックネームが未入力の場合
            if (empty($user_data['user_name'])){
              // $error_nick_name =  'ニックネームを入力してくだささい。';
              $error['user_name'] = 'blank';
              //blankは未入力
            }
          //年齢が未入力の場合
            if (empty($user_data['age'])){
              // $error_nick_name =  'ニックネームを入力してくだささい。';
              $error['age'] = 'blank';
              //blankは未入力
            }
           //性別が未入力の場合
            if (empty($user_data['sex'])){
              // $error_nick_name =  'ニックネームを入力してくだささい。';
              $error['sex'] = 'blank';
              //blankは未入力
            }





          // メールが未入力の場合
            if (empty($user_data['email'])) {
                // $error_email =  'メールアドレスを入力してくだささい。';
              $error['email'] = 'blank';

              
            }

            //
             $user = new User();
      
    
             $return = $user->signup();

             //重複登録時のエラー時
             if (!empty($return)) {
                // $error_email =  'メールアドレスを入力してくだささい。';
              $error['email'] = 'duplicate';

              
            }




           //確認メールが未入力の場合
             if (empty($user_data['e_comfirm'])){
              // $error_nick_name =  'ニックネームを入力してくだささい。';
              $error['e_comfirm'] = 'blank';
              //blankは未入力
            }elseif($user_data['email'] !== $user_data['e_comfirm']){
             
              $error['e_comfirm'] = 'notsame';

            }





                   //パスワードが未入力の場合
            if (empty($user_data['password'])){
                
                // $error_password =  'パスワードを入力してくだささい。';
              $error['password'] = 'blank';

            }elseif(strlen($user_data['password']) < 8){
              //パスワードが４文字より少ない
              $error['password'] = 'length';

            }






          //パスワードが未入力の場合
            if (empty($user_data['p_comfirm'])){
                
                // $error_password =  'パスワードを入力してくだささい。';
              $error['p_comfirm'] = 'blank';

            }elseif(strlen($user_data['password']) < 8){
              //パスワードが４文字より少ない
              $error['p_comfirm'] = 'length';

            }elseif($user_data['password'] !== $user_data['p_comfirm']){
              //パスワードが４文字より少ない
              $error['p_comfirm'] = 'notsame';

            }



                
                 
            //    //モ デルを呼び出す
                  // $user = new User();

                  // if (!empty($return)) {
                  
                  // //モデルのcreateメソッドを実行する（モデルのcreateメソッドは、insert文を実行してブログを保存する）
                  // $return = $user->signup();

                  // header('Location:/tabilog/users/signup');

                  // }
                  


            
          //エラーがない場合に便利　
            if(empty($error)){

                      
                  // $return['email'] == $error['email'];

                  // if(!empty($error['email'])){
                   
                  // header('Location:/tabilog/users/signup');
                  // }

              //セッションに値を保存
              $_SESSION['join'] = $user_data;
              // $_SESSION['join']['picture_path'] = $picture_path;

              // var_dump($_SESSION);
              //check.phpにへ遷移

              header('Location:/tabilog/users/check');
              
            }


          //書き直し
          if(isset($_REQUEST['action']) && $_REQUEST['action']== 'rewrite'){
            // $_POST = $_SESSION['join'];

            $user_data = $_SESSION['join'];
            //画像の再選択エラーメッセージを表示するために必要
            $error['rewrite'] = true;
          }
        }






  




          $resource = 'users';
          $action = 'signup';
          require('views/layout/application.php');



      }

      


      function check() {

      //   $user = new User();
      
      // //モデルのcreateメソッドを実行する（モデルのcreateメソッドは、insert文を実行してブログを保存する）
      // $return = $user->create($user_data);

      // header('Location:/tabilog/users/thanks');


       

          $resource = 'users';
          $action = 'check';
          require('views/layout/application.php');

         
          

      }


      function create($user_data){

        // if(empty($_SESSION['join'])){
        //   header('Location:/Tabilog/users/signup');
        //   exit();
        // }

       //モ デルを呼び出す
      $user = new User();
      
      //モデルのcreateメソッドを実行する（モデルのcreateメソッドは、insert文を実行してブログを保存する）
      $return = $user->create($user_data);

      // header('Location:/tabilog/users/comfirm/$user_data["id"]');
      header('Location:/tabilog/users/thanks');

      }



      // function comfirm($id) {


      //       //モデルを呼び出す
      // $user = new User();

      // //モデルのshowメソッドを実行する（モデルのshowメソッドは、select文を実行してidで指定したブログデータを取得する）
      // //モデルのshowメソッドに$idを引数として渡す
      //   //モデルのshowメソッドから返ってきた取得結果を、変数に格納
      // $return = $user->comfirm($id);
      // header('Location:/tabilog/users/thanks');
          
      // }

      function thanks() {

      //   $user = new User();
      
      // //モデルのcreateメソッドを実行する（モデルのcreateメソッドは、insert文を実行してブログを保存する）
      //    $return = $user->thanks($user_data);

      
          $resource = 'users';
          $action = 'thanks';
          require('views/layout/application.php');

          unset($_SESSION['join']);

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