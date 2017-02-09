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

			// 国名を選択
			$sql = 'SELECT * FROM `countries` WHERE 1';
			//sqlの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}

 			$result_country['countries']= $rtn ;

 			//取得結果を返す
 			// return $rtn;

 			// 都市名を選択
 			$sql = 'SELECT * FROM `cities` WHERE 1';
			//sqlの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}

 			$result_country['cities']=$rtn ;
 			//取得結果を返す
 			return $result_country;

		}

		// function check(){
		//    }

     function create($post_data){
     	$sql = sprintf('SELECT  * FROM `places` WHERE `place_name_jp` = "%s" or `place_name_en` = "%s"',
     		$_SESSION['join']['place_name'],
     		$_SESSION['join']['place_name']
     		);

     	//SQLの実行
				$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
					//取得結果を返す
						// return $results;

     	if ($results == false) {
     		$place_id = null ;
     	} else {
     		$result = mysqli_fetch_assoc($results);
     		$place_id = $result['place_id'];
     	}
     		//Spq文
     		$sql = sprintf("INSERT INTO `contents`
     		(`content_id`, `title`, `content`, `rating`, `country_name`, `city_name`, `place_name`, `picture_path1`, `picture_path2`, `picture_path3`, `picture_path4`, `picture_path5`, `picture_path6`, `picture_path7`, `picture_path8`, `picture_path9`, `created`, `modified`, `c_delete_flag`, `user_id`, `place_id`)
     		VALUES(NULL,'%s','%s','%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s',now(),CURRENT_TIMESTAMP,0,'%d','%d');",
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
					   	$_SESSION['join']['user_id'],
					   	$place_id
					   	);

					  //SQLの実行
						$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
					//取得結果を返す
						return $results;
					}
	}

?>