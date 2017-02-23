<?php

session_start();
  //モデルの呼び出し
  require('models/user.php');

  // サニタイジング
  if (isset($_POST)) {

foreach ($_POST as $key => $value) {
        $_POST[$key]=htmlspecialchars($value);
}
  }
  if (isset($id)) {
      $id=htmlspecialchars($id);
  }


  // コントローラのクラスをインスタンス化
    $controller = new UsersController($_POST);
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
      // case 'login':
      //   $controller->login();
      //   break;  
      case 'logout':
        $controller->logout();
        break;
      default:
        # code...
        break;
    }

  class UsersController {
              // すべてのページでログイン機能実現
              // 必要ならプロパティ

          //コンストラクタ
    function __construct($logininfo){
        // モーダルログイン
        if (isset($logininfo['email'])&&isset($logininfo['password'])) {
        $this->login($_POST);
        }


    }



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

      function login($login_data){

    // 自動ログインの実装
    // cookieにemail情報があった場合は、POST情報に値をセットする
    if (isset($_COOKIE['email'])) {
      $login_data['email'] = $_COOKIE['email'];
      $login_data['password'] = $_COOKIE['password'];
      $login_data['save'] = 'on';
    }

    if (!empty($login_data)) {
      // $email = htmlspecialchars($login_data['email']);
      // ログインの処理
      if (isset($login_data['email']) && $login_data['password'] != '') {

        $userlogin = new User();
        $login_dataviews=$userlogin->login($login_data);


        // $sql=sprintf('SELECT * FROM members WHERE email = "%s" AND password = "%s"',
        //   mysqli_real_escape_string($db, $login_data['email']),
        //   mysqli_real_escape_string($db, sha1($login_data['password']))
        //   );
        // $record = mysqli_query($db, $sql) or die (mysqli_error($db));
        if ($table = $login_dataviews) {
          // ログイン成功
          // データが取れるとき、$tableに中身が入り、TRUEとなる
          // 入っていないときはFALSE(elseの処理)
          $_SESSION['id']=$table['user_id'];
          $_SESSION['time']=time();
          ///デバッグ用
          // $_SESSION['user_name']=$table['user_name'];
          // echo $_SESSION['user_name'];
          // echo $login_dataviews['email'];
          

          // ログイン情報を記録する
          // 自動ログインのチェックボックスにチェックが入っていたらCOOKIEに入力情報を保存
          if (isset($login_data['save'])&&$login_data['save']=='on') {
            setcookie('email', $login_data['email'],time()+60*60*24*14);
            setcookie('password',$login_data['password'],time()+60*60*24*14);
          }

        header('Location:/tabilog/contents/index');
          exit();
        }else{
          $error['login']='failed';
        }

      }else{
        $error['login'] = 'blank';
      }
    }


      }


    function logout(){
        // セッション情報を削除
        $_SESSION = array();
  if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() -42000,
      $params["path"], $params["domain"],
      $params["secure"],$params["httponly"]
      );
  }
  session_destroy();

  // Cookie情報も削除
  setcookie('email', '', time()-3600);
  setcookie('password', '', time()-3600);

        header('Location:/tabilog/contents/index');

  exit();

    }


   }
?>