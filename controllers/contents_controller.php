<?php
  session_start();

  date_default_timezone_set('Asia/Manila');

	//モデルの呼び出し
	require('models/content.php');

	// コントローラのクラスをインスタンス化
   	$controller = new ContentsController();
   	//$controller->index();
   	//アクション名によって、呼び出すメソッドを変える
   	switch ($action) {
   		case 'index':
   			$controller->index();
   			break;
   		case 'mypage':
   			$controller->mypage();
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
        $controller->edit($id);
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
   		default:
   			# code...
   			break;
   	}

	class ContentsController {
      function index() {
          $resource = 'posts';
          $action = 'index';
          require('views/layout/application.php');
      }

      function mypage() {
          $resource = 'posts';
          $action = 'mypage';
          require('views/layout/application.php');
      }

      function show($id) {
          $resource = 'posts';
          $action = 'show';
          require('views/layout/application.php');
      }

      function add($post_data){

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

      // function mypage(){
      //   unset($_SESSION['join']);
      // }

      function edit($id){
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

      }

      function delete($id){

      }


      }
?>