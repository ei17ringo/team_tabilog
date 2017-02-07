<?php

  session_start();

	//モデルの呼び出し
	require('models/content.php');

	// コントローラのクラスをインスタンス化
   	$controller = new ContentsController($_POST);
   	//$controller->index();
   	//アクション名によって、呼び出すメソッドを変える
   	switch ($action) {
   		case 'index':
   			$controller->index($_POST);
   			break;
   		case 'mypage':
   			$controller->mypage();
   			break;
   		case 'show':
   			$controller->show($id);
   			break;
   		case 'add':
   			$controller->add();
   			break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'edit':
        $controller->edit($id);
        break;
      case 'check':
        $controller->check($id);
        break;
      case 'update':
        $controller->update($id,$_POST);
        break;
      case 'delete':
        $controller->delete($id);
        break;
      // case 'login':
      //   $controller->login($_POST);
      //   break;
      case 'logout':
        $controller->logout();
        break;
   		default:
   			# code...
   			break;
   	}

	class ContentsController {

    // すべてのページでログイン機能実現
    // 必要ならプロパティ


    //コンストラクタ
    function __construct($logininfo){
        // モーダルログイン
        if (isset($logininfo['email'])&&isset($logininfo['password'])) {
        $this->login($_POST);
        }

    }

      function index($index_data) {

        // 初期値
        // 観光地情報にヒットすると$placeがsightseenになる
        $place='0';

        // 出し分け
        // 検索ワードが入っていた場合
          if (isset($index_data['search'])) {
          // 検索キーワードから観光地情報をデータベースから検索
          $content= new Content();
          $indexplaceviews=$content->index_place($index_data);

          // 検索キーワードが観光地情報データベースにヒットしなかった場合
          if (empty($indexplaceviews)) {
                      $indexplaceviews=$content->index_ci_co($index_data);

            if ($indexplaceviews==false) {
              $search_fail ="※キーワードを入力し直してください";
          }          

          // 検索キーワードが観光地情報データベースにヒットした場合
          }elseif (isset($indexplaceviews)) {
            $place='sightseen';
          }
          }

          // その他、検索情報が入っていない場合など(初期状態)
          else{
          // 初期表示
          $content = new Content();
          $indexviews=$content->index();
          }

        // モーダルログイン
        // if (isset($_POST['email'])&&isset($_POST['password'])) {
        // $this->login($_POST);
        // }

        // 出し分け
        // 検索ワードが入っていた場合
      //     if (isset($index_data['search'])) {
      //     $content= new Content();
      //     $index_place=$content->index_place($index_data);

      //       if ($index_place==false) {
      //          $index_ci_co=$content->index_ci_co($index_data);
      //       }
      //       if ($index_ci_co==false) {
      //         $search_fail ="※キーワードを入力し直してください";
      //     }
      // }else{
      //     $content= new Content();
      //     $index=$content->index();
      // }

          $resource = 'contents';
          $action = 'index';
          require('views/layout/application.php');
      }

      function mypage() {
          $resource = 'contents';
          $action = 'mypage';
          require('views/layout/application.php');
      }

      function show($id) {
          if (empty(($id))) {
            header('Location:/tabilog/contents/index');
          }
          $content = new Content();
          $showviews = $content->show($id);

          $resource = 'contents';
          $action = 'show';
          require('views/layout/application.php');
      }

      function add(){
          $resource = 'contents';
          $action = 'add';
          require('views/layout/application.php');
      }

      function create($post_data){

      }

      function edit($id){
          $resource = 'contents';
     	    $action = 'edit';
          require('views/layout/application.php');
      }

      function check($id) {
          $resource = 'contents';
          $action = 'check';
          require('views/layout/application.php');
      }


      function update($id,$post_data){

      }

      function delete($id){

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

        $userlogin = new Content();
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