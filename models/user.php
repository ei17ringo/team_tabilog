<?php
	class User{

		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';

		//コンストラクタ
		// function __construct(){
		// 	// DB接続ファイルを読み込む
		// 	require('dbconnect.php');
		function __construct(){
			
			require('dbconnect.php');

		// 	// DB接続設定の値をプロパティに代入
		// 	$this->dbconnect = $db;
		// }
			$this->dbconnect = $db;
		}

		function signup(){


					


		}


		function confirm(){
			
			}

			function create($user_data){

				// if(!empty($user_data)){
  
  
					  $sql = sprintf('INSERT INTO users SET user_name="%s", age="%d", sex="%d" email="%s", password="%s", u_created="now()"',
					   
					    mysqli_real_escape_string($db, $_SESSION['join']['user_name']),
					    mysqli_real_escape_string($db, $_SESSION['join']['age']),
					    mysqli_real_escape_string($db, $_SESSION['join']['sex']),
					    mysqli_real_escape_string($db, $_SESSION['join']['email']),

					    // sha1(シャーワン)暗号化する関数　16進数の４０byteの文字列を取得する
					    mysqli_real_escape_string($db, sha1($_SESSION['join']['password']))
					);

					   // $sql = sprintf("INSERT INTO `users`(`user_id`, `user_name`, `email`, `password`, `sex`, `age`, `u_created`, `u_modified`, `u_delete_flag`) 
					   // 	VALUES (NULL,'%s','%s',sha1('%s'),'%d','%d',now(),CURRENT_TIMESTAMP,0);"
					   // 	,$user_data['user_name'],$user_data['email'],$user_data['password'],$user_data['sex'],$user_data['age']
					   // 	);

					   // 	INSERT INTO `users`(`id`, `user_name`, `email`, `delete_flag`, `created`, `modified`) 
								// VALUES (NULL,'%s','%s',0,'%d','%d',now(),CURRENT_TIMESTAMP,0);",$blog_data['title'],$blog_data['body']'
					  

					  //mysqli_query()SQL文実行
					    // mysqli_query($db, $sql) or die(mysqli_error($db));
					  //SQLの実行
						$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


						
						

					    // unset ここから使わないから存在しないよと表す。指定された変数の割当を解除する。ここではセッション情報を破棄している。
					    unset($_SESSION['join']);

					    // header('Location:/Tabilog/users/thanks');
					    // exit();
					    
					// }

					//取得結果を返す
						return $results;

			}

			function check(){
				//重複アカウントのチェック
					 //  if(empty($error)){
					 //    //入ったメールアドレスがデータべースに何件あるかカウントする
					 //    $sql = sprintf('SELECT COUNT(*) AS cnt FROM users WHERE email="%s"',mysqli_real_escape_string($db, $_POST['email']) );
					 //    $record = mysqli_query($db, $sql) or die(mysqli_error($db));
					 //    $table = mysqli_fetch_assoc($record);

					 //    //カウントした数が０以上ならエラーを起こす。duplicate(重複)のエラーを起こす。
					 //    if($table['cnt'] > 0){
					 //      $error['email'] = 'duplicate';
					 //    }

					 //    //SQLの実行
						// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


						
						// //取得結果を返す
						// return $results;
					 //  }


					

			}


	}
?>