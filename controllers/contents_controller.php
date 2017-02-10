<?php
  session_start();

  date_default_timezone_set('Asia/Manila');
      // サニタイジング
  if (isset($_POST)) {

foreach ($_POST as $key => $value) {
        $_POST[$key]=htmlspecialchars($value);
}
  }
  if (isset($id)) {
      $id=htmlspecialchars($id);
  }


	//モデルの呼び出し
	require('models/content.php');

	// コントローラのクラスをインスタンス化
   	$controller = new ContentsController($_POST);
   	//$controller->index();
   	//アクション名によって、呼び出すメソッドを変える


   	switch ($action) {
   		case 'index':
   			$controller->index($_POST,$id);
   			break;
   		case 'mypage':
   			$controller->mypage($id);
   			break;
   		case 'show':
   			$controller->show($id);
   			break;
   		case 'add':
   			$controller->add($_POST);
   			break;
      case 'create':
        $controller->create($_POST);
        break;
      case 'edit':
        $controller->edit($id,$_POST);
        break;
      case 'check':
        $controller->check($_POST);
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

      function index($index_data,$id) {

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
              $currentplaceview = current($indexplaceviews);
          // 観光地情報 観光地IDが複数ヒットした場合
            foreach ($indexplaceviews as $indexplaceview) {
              if ($currentplaceview['place_id']!=$indexplaceview['place_id']) {
              $search_fail ="※複数ヒットしました。観光地名をもっと入力してください";
              $place='none';
              }
            // 観光地情報 観光地IDが一意の場合
            elseif ($currentplaceview['place_id']==$indexplaceview['place_id']) {
                          $place='sightseen';
            }
            }
          }
          }

          // その他、検索情報が入っていない場合など(初期状態)
          else{
          // 初期表示
          if (isset($id)&&$id==0){
          $content = new Content();
          $indexviews=$content->index();
          }
          // $id=1 参考ソートが指定されたとき
          elseif (isset($id)&&$id==1) {
          $content = new Content();
          $indexviews=$content->sort_eva();
          }
          else{
            header('Location:/tabilog/contents/index');
          }

          }

          // はい　いいえが押下された場合
          if (isset($_POST['eva'])) {
            $this->eva($_POST);
          }

          // はい　いいね　取り消しが押されたとき
          if (isset($_POST['evadel'])) {
            $this->eva_delete($_POST);
          }

          // 評価情報をDBから取得
          $content = new Content();
          $evadataviews = $content->eva_show();



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



      function mypage($id) {
          if (isset($_SESSION['id'])&&$_SESSION['id']==$id) {
          //モデルを呼び出す
          $content = new Content();
          //モデルのmypageメソッドを実行する（モデルのmypageメソッドは、select文を実行してidで指定したブログデータを取得する）
          //モデルのmypageメソッドに$idを引数として渡す
          //モデルのmypageメソッドから返ってきた取得結果を、変数に格納
          $viewOptions = $content->mypage($id);

          $resource = 'contents';
          $action = 'mypage';
           // var_dump($viewOptions);
          require('views/layout/application.php');
      }
      else{
        header('location:/tabilog/contents/index');
      }
    }

      function show($id) {


          if (empty(($id))) {
            header('Location:/tabilog/contents/index');
          }
          $content = new Content();
          $showviews = $content->show($id);

          // はい　いいえが押下された場合
          if (isset($_POST['eva'])) {
            $this->eva($_POST);
          }

          // はい　いいね　取り消しが押されたとき
          if (isset($_POST['evadel'])) {
            $this->eva_delete($_POST);
          }

          // 評価情報をDBから取得
          $content = new Content();
          $evadataviews = $content->eva_show();

          $resource = 'contents';
          $action = 'show';
          require('views/layout/application.php');
      }

      function add($post_data){

        if (isset($_SESSION['id'])) {
          //国名
          $content = new Content();
          //モデルのcreateメソッドを実行する
          $return = $content->add($post_data);
          // $resource = 'contents';
          // $action = 'add';
          // require('views/layout/application.php');

        $error = array();

        if(isset($post_data) && !empty($post_data)){

          //タイトルが未入力の場合
          if(empty($post_data['title'])){
          // $error_nickname = 'タイトルを入力してください。';
          $error['title'] = 'blank';
          }


          // 国が未入力の場合
          // if($post_data['country_name']== "国名"){
          // // $error_email = '国名を選択してください。';
          // $error['country_name'] = 'blank';
          // }
          // //都市が未入力の場合
          // if(!empty($post_data['city_name'])=="都市"){
          // // $error_email = '都市名を選択してください。';
          // $error['city_name'] = 'blank';
          // }
          //観光地が未入力の場合
          if(empty($post_data['place_name'])){
          // $error_email = '観光地を選択してください。';
          $error['place_name'] = 'blank';
          }
          //星評価が未入力の場合
          // if(empty($post_data['rating'])){
          // // $error_email = '評価を入力してください。';
          // $error['rating'] = 'blank';
          // }
          //内容が未入力の場合
          if(empty($post_data['content'])){
          // $error_email = '内容を入力してください。';
          $error['content'] = 'blank';
          }


          // 画像のアップロード
          //画像１
          $fileName = $_FILES['picture_path1']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path1'] = 'type';
            }
           }
           //画像２
           $fileName = $_FILES['picture_path2']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path2'] = 'type';
            }
           }
           //画像３
           $fileName = $_FILES['picture_path3']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path3'] = 'type';
            }
           }
           //画像４
           $fileName = $_FILES['picture_path4']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path4'] = 'type';
            }
           }
           //画像５
           $fileName = $_FILES['picture_path5']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path5'] = 'type';
            }
           }
           //画像６
           $fileName = $_FILES['picture_path6']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path6'] = 'type';
            }
           }
           //画像７
           $fileName = $_FILES['picture_path7']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path7'] = 'type';
            }
           }
           //画像８
           $fileName = $_FILES['picture_path8']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path8'] = 'type';
            }
           }
           //画像９
           $fileName = $_FILES['picture_path9']['name'];
           if (!empty($fileName)) {
            $ext = substr($fileName, -3);
           if ($ext != 'jpg' && $ext != 'gif' && $ext != 'png') {
            $error['picture_path9'] = 'type';
            }
           }

            //エラーがない
           // var_dump($error);
             if(empty($error)){
              //画像１
              $picture_path1 = date('YmdHis').$_FILES['picture_path1']['name'];
              move_uploaded_file($_FILES['picture_path1']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path1);
              //画像２
              $picture_path2 = date('YmdHis').$_FILES['picture_path2']['name'];
              move_uploaded_file($_FILES['picture_path2']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path2);
              //画像３
              $picture_path3 = date('YmdHis').$_FILES['picture_path3']['name'];
              move_uploaded_file($_FILES['picture_path3']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path3);
              //画像４
              $picture_path4 = date('YmdHis').$_FILES['picture_path4']['name'];
              move_uploaded_file($_FILES['picture_path4']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path4);
              //画像５
              $picture_path5 = date('YmdHis').$_FILES['picture_path5']['name'];
              move_uploaded_file($_FILES['picture_path5']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path5);
              //画像６
              $picture_path6 = date('YmdHis').$_FILES['picture_path6']['name'];
              move_uploaded_file($_FILES['picture_path6']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path6);
              //画像７
              $picture_path7 = date('YmdHis').$_FILES['picture_path7']['name'];
              move_uploaded_file($_FILES['picture_path7']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path7);
              //画像８
              $picture_path8 = date('YmdHis').$_FILES['picture_path8']['name'];
              move_uploaded_file($_FILES['picture_path8']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path8);
              //画像９
              $picture_path9 = date('YmdHis').$_FILES['picture_path9']['name'];
              move_uploaded_file($_FILES['picture_path9']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/tabilog/webroot/images/'.$picture_path9);

               //セッションに値を保存
              $_SESSION['join'] = $post_data;
              $_SESSION['join']['picture_path1'] = $picture_path1;
              $_SESSION['join']['picture_path2'] = $picture_path2;
              $_SESSION['join']['picture_path3'] = $picture_path3;
              $_SESSION['join']['picture_path4'] = $picture_path4;
              $_SESSION['join']['picture_path5'] = $picture_path5;
              $_SESSION['join']['picture_path6'] = $picture_path6;
              $_SESSION['join']['picture_path7'] = $picture_path7;
              $_SESSION['join']['picture_path8'] = $picture_path8;
              $_SESSION['join']['picture_path9'] = $picture_path9;

              header('Location:/tabilog/contents/check');
              exit();
            }

               //書き直し
           if(isset($_REQUEST['action']) && $_REQUEST['action']== 'rewrite'){
             $_POST = $_SESSION['join'];
             //画像の再選択エラーメッセージを表示するために必要
             $error['rewrite'] = true;
           }

        }

            $resource = 'contents';
            $action = 'add';
            require('views/layout/application.php');
         }
        else{
          header('location:/tabilog/contents/index');
        }
       }

      // function changeCountry($post_data){
      //   $_SESSION['select_post'] = $post_data['country'];
      // }

      function create($post_data){
        //モデルを呼び出す
        $content = new Content();
        //モデルのcreateメソッドを実行する

        $return = $content->create($post_data);
        $_SESSION['join'] = null;
        unset($_SESSION['join']);
        header('location:/tabilog/contents/mypage');

        exit();

      }

      function edit($id){

        $content = new Content();
        $return = $content->edit($id);
          $resource = 'contents';
     	    $action = 'edit';

          require('views/layout/application.php');
          
      }


      function check() {

          $resource = 'contents';
          $action = 'check';
          require('views/layout/application.php');
      }


      function update($id,$post_data){
        if (isset($_SESSION['id'])) {
                   $content = new Content();
        $return = $content->update($id,$post_data);

        header('Location: /tabilog/contents/mypage');
        }
        //  $content = new Content();
        // $return = $content->update($id,$post_data);
        else{
        header('Location: /tabilog/contents/index');
        }


      }





      function index_delete($id){
          if (isset($_SESSION['id'])) {

           $content = new Content();
           // モデルのdeleteメソッドを実行する(モデルのdeleteメソッドはupdate文を実行してdelete_flagを1に更新する)
           $deletes = $content->delete($id);
          }
         
        header('Location: /tabilog/contents/mypage');

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

    function eva($eva_data){
          $contenteva = new Content();
          $evaviews = $contenteva->eva($eva_data);
    }

    function eva_delete($eva_data){
          $contenteva = new Content();
          $evadeleteviews = $contenteva->eva_delete($eva_data);    
    }

    // function sort_eva($id){
    //       $contenteva = new Content();
    //       $sort_evaviews = $contenteva->sort_eva($id);  
    // }

   }

?>