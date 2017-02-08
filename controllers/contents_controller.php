<?php

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
   			$controller->mypage($id);
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
   		default:
   			# code...
   			break;
   	}

	class ContentsController {
      function index() {
          $resource = 'contents';
          $action = 'index';
          require('views/layout/application.php');
      }

      function mypage($id) {

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

      function show($id) {
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
        $blog=new Blog();
         // モデルのdeleteメソッドを実行する(モデルのdeleteメソッドはupdate文を実行してdelete_flagを1に更新する)
        $return=$blog->delete($id);
        header('Location: /tabilog/contents/mypage');

      }
   }
?>