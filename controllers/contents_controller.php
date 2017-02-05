<?php
  session_start();

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
        $controller->check();
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
          // //国が未入力の場合
          // if(empty($post_data['country_place'])){
          // // $error_email = '国名を選択してください。';
          // $error['country_place'] = 'blank';
          // }
          // //都市が未入力の場合
          // if(empty($post_data['city_name'])){
          // // $error_email = '都市名を選択してください。';
          // $error['city_name'] = 'blank';
          // }
          //観光地が未入力の場合
          if(empty($post_data['place_name'])){
          // $error_email = '観光地を選択してください。';
          $error['place_name'] = 'blank';
          }
          // //星評価が未入力の場合
          // if(empty($post_data['rating'])){
          // // $error_email = '評価を入力してください。';
          // $error['rating'] = 'blank';
          // }
          //内容が未入力の場合
          if(empty($post_data['content'])){
          // $error_email = '内容を入力してください。';
          $error['content'] = 'blank';
          }
        }

        //エラーがない場合に便利　
             if(empty($error)){

               //セッションに値を保存
              $_SESSION['join'] = $post_data;
              // $_SESSION['join']['picture_path'] = $picture_path;

              // var_dump($_SESSION);
              //check.phpにへ遷移

              // header('Location:/team_tabilog/contents/check');
              exit();
            }

               //書き直し
           if(isset($_REQUEST['action']) && $_REQUEST['action']== 'rewrite'){
             $_POST = $_SESSION['join'];
             //画像の再選択エラーメッセージを表示するために必要
             $error['rewrite'] = true;
           }

            $resource = 'contents';
            $action = 'add';
            require('views/layout/application.php');
         }


      function create($post_data){
        //モデルを呼び出す
        $content = new Content();
        //モデルのcreateメソッドを実行する
        $return = $content->create($post_data);
        header('location:/team_tabilog/contents/index');
        exit();

      }

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