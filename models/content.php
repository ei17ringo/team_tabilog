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
		// $sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 AND `place_name` like "%%%s%%" ORDER BY `created` DESC',
		// 	$index_data['search']
		// 	);

		// 観光地情報から検索するためのSQLの記述
		$sql = sprintf('SELECT * FROM `contents` INNER JOIN `places` ON `contents`.`place_id` = `places`.`place_id` WHERE `c_delete_flag`=0 AND (`places`.`place_name_jp` like "%%%s%%" or `places`.`place_name_en` like "%%%s%%") ORDER BY `created` DESC',
			// $index_data['search'],
			// $index_data['search']

			mysqli_real_escape_string($this->dbconnect, $index_data['search']),
			mysqli_real_escape_string($this->dbconnect, $index_data['search'])			
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
		    $sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 AND (`country_name` like "%%%s%%" OR `city_name` like "%%%s%%") ORDER BY `created` DESC',
			// $index_data['search'],
			// $index_data['search']

			mysqli_real_escape_string($this->dbconnect, $index_data['search']),
			mysqli_real_escape_string($this->dbconnect, $index_data['search'])	
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

	function show($id){
			$sql = sprintf('SELECT * FROM `contents` INNER JOIN `users` ON `contents`.`user_id` = `users`.`user_id` WHERE `c_delete_flag`=0 AND `content_id` = %d',
			// $id
				mysqli_real_escape_string($this->dbconnect, $id)	
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $userviews = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$userviews[]=$result;
			 }


			//取得結果を残す
			 return $userviews;

	}
	function login($login_data){
		$sql=sprintf('SELECT * FROM `users` WHERE `u_delete_flag`=0 AND `email` = "%s" AND `password` = "%s"',
			// $login_data['email'],
			// $login_data['password']

			mysqli_real_escape_string($this->dbconnect, $login_data['email']),
			mysqli_real_escape_string($this->dbconnect, $login_data['password'])	
			);


			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $loginviews  = mysqli_fetch_assoc($results);


			//取得結果を残す
			 return $loginviews;

	}

	//はい　いいえ　が押下されたときにDBに情報を挿入 
	function eva($eva_data){

			$sql = sprintf('INSERT INTO `evaluations` (`eva_id`, `eva`, `e_modified`, `e_delete_flag`, `user_id`, `content_id`) VALUES (NULL, %d, CURRENT_TIMESTAMP, 0, %d, %d)',
				// $eva_data['eva'],
				// $_SESSION['id'],
				// // hiddenパラメータにて実施
				// $eva_data['content_id']

				mysqli_real_escape_string($this->dbconnect, $eva_data['eva']),
				mysqli_real_escape_string($this->dbconnect, $_SESSION['id']),
				// hiddenパラメータにて実施
				mysqli_real_escape_string($this->dbconnect, $eva_data['content_id'])
				);

			// $sql = sprintf('SELECT * FROM `contents` INNER JOIN `users` ON `contents`.`user_id` = `users`.`user_id` WHERE `c_delete_flag`=0 AND `content_id` = %d',
			// $id
			// );

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			//  //実行結果を取得し、配列に格納
			//  // $blogs = mysqli_fetch_assoc($result);

			//  $userviews = array();
			//  while($result = mysqli_fetch_assoc($results)){
			//  	$userviews[]=$result;
			//  }


			// //取得結果を残す
			//  return $userviews;
			return $results;
	}

	function eva_show(){
			$sql=sprintf('SELECT * FROM `evaluations` INNER JOIN `contents` ON `evaluations`.`content_id` = `contents`.`content_id` WHERE e_delete_flag = 0'
			);

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			 //実行結果を取得し、配列に格納
			 // $blogs = mysqli_fetch_assoc($result);

			 $evaviews = array();
			 while($result = mysqli_fetch_assoc($results)){
			 	$evaviews[]=$result;
			 }


			//取得結果を残す
			 return $evaviews;
	}
	function eva_delete($eva_data){
				$sql = sprintf('UPDATE `evaluations` SET `e_delete_flag`=1 WHERE `content_id`=%d AND `user_id` = %d AND `e_delete_flag` = 0',
				// hiddenパラメータにて実施
				// $eva_data['content_id'],
				// $_SESSION['id']
					
				// hiddenパラメータにて実施
				mysqli_real_escape_string($this->dbconnect, $eva_data['content_id']),
				mysqli_real_escape_string($this->dbconnect, $_SESSION['id'])
				);

			// $sql = sprintf('SELECT * FROM `contents` INNER JOIN `users` ON `contents`.`user_id` = `users`.`user_id` WHERE `c_delete_flag`=0 AND `content_id` = %d',
			// $id
			// );

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			//  //実行結果を取得し、配列に格納
			//  // $blogs = mysqli_fetch_assoc($result);

			//  $userviews = array();
			//  while($result = mysqli_fetch_assoc($results)){
			//  	$userviews[]=$result;
			//  }


			// //取得結果を残す
			//  return $userviews;
			return $results;
	}

		}

?>