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
			//重複アカウントのチェック
					  // if(empty($error)){
					    //入ったメールアドレスがデータべースに何件あるかカウントする
					    $sql = sprintf('SELECT COUNT(*) AS cnt FROM users WHERE email="%s"',$_POST['email'] );
					    // $record = mysqli_query($db, $sql) or die(mysqli_error($db));
					    // $table = mysqli_fetch_assoc($record);

					    //SQLの実行
						$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


						//実行結果を取得し、配列に格納
						
						$result = mysqli_fetch_assoc($results);

					// 	//取得結果を返す
					// 	// return $result;

					//     //カウントした数が０以上ならエラーを起こす。duplicate(重複)のエラーを起こす。
					    if($result['cnt'] > 0){
					     return $result;
					  }

					// // //取得結果を返す
						
					//   // }
					//     }

					   // }

					 //    //SQLの実行
						// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


						
						


					

			}


					


		


		

		function create($user_data){


				 $sql = sprintf("INSERT INTO `users`(`user_id`, `user_name`, `email`, `password`, `sex`, `age`, `u_created`, `u_modified`, `u_delete_flag`) 
					   	VALUES (NULL,'%s','%s',sha1('%s'),'%d','%d',now(),CURRENT_TIMESTAMP,0);",
					   	$_SESSION['join']['user_name'],
					    $_SESSION['join']['email'],
					   	sha1($_SESSION['join']['password']),
					  	$_SESSION['join']['sex'],
					   	$_SESSION['join']['age']

					   	);

					  

					  //mysqli_query()SQL文実行
					    // mysqli_query($db, $sql) or die(mysqli_error($db));
					  //SQLの実行
						$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


						
						

					    // unset ここから使わないから存在しないよと表す。指定された変数の割当を解除する。ここではセッション情報を破棄している。
					    // unset($_SESSION['join']);

					    // header('Location:/Tabilog/users/thanks');
					    // exit();
					    
					// }

					//取得結果を返す
						return $results;

			}

			function check(){

		    }





		 //    function confirm($id){

		 //    	$sql = sprintf("SELECT * FROM `users` WHERE `id` =%d",$id);
			// //$sql = "SELECT * FROM `blogs` WHERE `delete_flag` = 0 AND `id` =$id"　上記と同じ効果

			// //SQLの実行
			// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


			// //実行結果を取得し、配列に格納
			
			// $result = mysqli_fetch_assoc($results);

			// //取得結果を返す
			// return $result;
			
			// }



			function thanks(){


			// 	$sql = sprintf("SELECT * FROM `users` WHERE `id` =%d",$id);
			// // //$sql = "SELECT * FROM `blogs` WHERE `delete_flag` = 0 AND `id` =$id"　上記と同じ効果

			// // //SQLの実行
			// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


			// //実行結果を取得し、配列に格納
			
			// $result = mysqli_fetch_assoc($results);

			// //取得結果を返す
			// return $result;
			
			// }


				  // unset($_SESSION['join']);

			
		}



		

	}
?>