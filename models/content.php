<?php
	class Content{

		//プロパティ（db接続オブジェクト)
		private $dbconnect = '';

		//コンストラクタ
		function __construct(){
			// DB接続ファイルを読み込む
			require('dbconnect.php');

			// DB接続設定の値をプロパティに代入
			$this->dbconnect = $db;
		}




		// function add($post_data){

		// 	$error= arroy();
		function add($post_data){

			$sql = 'SELECT * FROM `countries` WHERE 1';
			//sqlの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}
 			//取得結果を返す
 			return $rtn;

		}

		function check(){
			//INSERT文の記述
			// $sql = sprintf("INSERT INTO `contents`(`content_id`, `title`, `content`, `rating`, `country_name`, `city_name`, `place_name`, `picture_path1`, `picture_path2`, `picture_path3`, `picture_path4`, `picture_path5`, `picture_path6`, `picture_path7`, `picture_path8`, `picture_path9`, `created`, `modified`, `c_delete_flag`, `user_id`, `place_id`) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', now(), CURRENT_TIMESTAMP, '0')",

			// 	  mysqli_real_escape_string($db, $_SESSION['join']['title']),
			// 	  mysqli_real_escape_string($db, $_SESSION['join']['content']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['rating']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['country_name']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['city_name']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['place_name']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path1']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path2']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path3']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path4']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path5']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path6']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path7']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path8']),
   //        mysqli_real_escape_string($db, $_SESSION['join']['picture_path9']),
   //        date('Y-m-d H:i:s'));

   //        mysqli_query($db, $sql) or die(mysqli_error($db));

   //        // unset ここから使わないから存在しないよと表す。指定された変数の割当を解除する。ここではセッション情報を破棄している。
   //         unset($_SESSION['join']);

   //         header('Location: thanks.php');
   //         exit();

		   }

     function create($post_data){

     	$sql = sprintf("INSERT INTO `contents`
     		(`content_id`, `title`, `content`, `rating`, `country_name`, `city_name`, `place_name`, `picture_path1`, `picture_path2`, `picture_path3`, `picture_path4`, `picture_path5`, `picture_path6`, `picture_path7`, `picture_path8`, `picture_path9`, `created`, `modified`, `c_delete_flag`, `user_id`, `place_id`)VALUES(NULL,'%s','%s','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',now(),CURRENT_TIMESTAMP,0,'%d',NULL);",
					   	$_SESSION['join']['title'],
					    $_SESSION['join']['content'],
						$_SESSION['join']['rating'],
					  	$_SESSION['join']['country_name'],
					   	$_SESSION['join']['city_name'],
					   	$_SESSION['join']['place_name'],
					   	$_SESSION['join']['picture_path1'],
					   	$_SESSION['join']['picture_path2'],
					   	$_SESSION['join']['picture_path3'],
					   	$_SESSION['join']['picture_path4'],
					   	$_SESSION['join']['picture_path5'],
					   	$_SESSION['join']['picture_path6'],
					   	$_SESSION['join']['picture_path7'],
					   	$_SESSION['join']['picture_path8'],
					   	$_SESSION['join']['picture_path9'],
					   	$_SESSION['join']['user_id']
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

}



		// //INDERT文の記述
		// $sql= sprintf("INSERT INTO `contents`(`content_id`, `title`, `content`, `rating`, `country_name`, `city_name`, `place_name`, `picture_path1`, `picture_path2`, `picture_path3`, `picture_path4`, `picture_path5`, `picture_path6`, `picture_path7`, `picture_path8`, `picture_path9`, `created`, `modified`, `c_delete_flag`, `user_id`, `place_id`) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', now(), CURRENT_TIMESTAMP, '0')", $post_data['title'], $post_data['content'], $post_data['country_name'], $post_data['city_name'], $post_data['place_name']);
		// //splの実行
		// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

		// //実行結果を返す
		// return $results;





?>