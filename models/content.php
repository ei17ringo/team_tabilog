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
	function index(){
		// 初期表示ですべて検索するためのSQLの記述
		$sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 ORDER BY `created` DESC'
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $rtn1 = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$rtn1[]=$result;
			 }

			//取得結果を残す
			 return $rtn1;

	}

	function index_place($index_data){
		// // 観光地情報から検索するためのSQLの記述
		$sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 AND `place_name` like "%%%s%%" ORDER BY `created` DESC',
			$index_data['search']
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $rtn1 = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$rtn1[]=$result;
			 }


			//取得結果を残す
			 return $rtn1;
	}

	function index_ci_co($index_data){
		    $sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 AND (`country_name` like "%s" OR `city_name` like "%s") ORDER BY `created` DESC',
			$index_data['search'],
			$index_data['search']
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $rtn1 = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$rtn1[]=$result;
			 }


			//取得結果を残す
			 return $rtn1;
	}

		}

?>