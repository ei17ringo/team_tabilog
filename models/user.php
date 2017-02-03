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

			function create(){

			}

			function check(){
				//重複アカウントのチェック
					  if(empty($error)){
					    //入ったメールアドレスがデータべースに何件あるかカウントする
					    $sql = sprintf('SELECT COUNT(*) AS cnt FROM users WHERE email="%s"',mysqli_real_escape_string($db, $_POST['email']) );
					    $record = mysqli_query($db, $sql) or die(mysqli_error($db));
					    $table = mysqli_fetch_assoc($record);

					    //カウントした数が０以上ならエラーを起こす。duplicate(重複)のエラーを起こす。
					    if($table['cnt'] > 0){
					      $error['email'] = 'duplicate';
					    }
					  }
					





				
				// if(!empty($_POST)){
 

				//   $sql = sprintf('INSERT INTO users SET user_name="%s",age="%d",sex="%d" email="%s", password="%s", created="%s"',
				   
				//     mysqli_real_escape_string($db, $_SESSION ['join']['user_name']),
				//     mysqli_real_escape_string($db, $_SESSION ['join']['age']),
				//     mysqli_real_escape_string($db, $_SESSION ['join']['sex']),
				//     mysqli_real_escape_string($db, $_SESSION ['join']['email']),


				//     mysqli_real_escape_string($db, sha1($_SESSION ['join']['password'])),
			
				//     );

				  
				//     mysqli_query($db, $sql) or die(mysqli_error($db));

				//     // unset ここから使わないから存在しないよと表す。指定された変数の割当を解除する。ここではセッション情報を破棄している。
				//     unset($_SESSION['join']);

				//     header('Location: thanks.php');
				//     exit();
				    
				// }
			}


	}
?>