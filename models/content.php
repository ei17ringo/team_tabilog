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


	function index_place(){
		// 観光地情報から検索するためのSQLの記述
		$sql = sprintf('SELECT * FROM `contents` WHERE　`delete_flag`=0 AND `place_name` = %s ORDER BY `created` DESC',
			$place_name
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(my_sqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $rtn = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$rtn[]=$result;
			 }

			//取得結果を残す
			 return $rtn;
	}

	function index_ci_co(){
		    $sql = sprintf('SELECT * FROM `contents` WHERE `country_name` = %s OR `city_name`=%s ORDER BY `created` DESC',
			$country_name,
			$city_name
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(my_sqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $rtn = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$rtn[]=$result;
			 }

			//取得結果を残す
			 return $rtn;
	}

		}

?>