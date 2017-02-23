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



	function edit($id){


			$sql = sprintf("SELECT * FROM `contents` WHERE `c_delete_flag` = 0 AND `content_id` =%d",$id);
			
			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


			//実行結果を取得し、配列に格納
			
			// $result['contents'] = mysqli_fetch_assoc($results);
			$keka['contents'] = mysqli_fetch_assoc($results);

 		
			// $sql = sprintf("SELECT * FROM `contents` WHERE `c_delete_flag` = 0 AND `content_id` =%d",$id);
			
			// //SQLの実行
			// $results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


			// //実行結果を取得し、配列に格納
			
			// $result = mysqli_fetch_assoc($results);


			$sql = 'SELECT * FROM `countries` WHERE 1';
			//sqlの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			// while ($result = mysqli_fetch_assoc($results)) {
 			// 	$rtn[] = $result;
 			// }
 			
 			// $result['countries'] = $rtn;

 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}
 			
 			$keka['countries'] = $rtn;


 			$sql = 'SELECT * FROM `cities` WHERE 1';
			//sqlの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
 			//実行結果を取得し、配列に格納
 			$rtn = array();
 			// while ($result = mysqli_fetch_assoc($results)) {
 			// 	$rtn[] = $result;
 			// }

 			// $result['cities'] = $rtn;

 			while ($result = mysqli_fetch_assoc($results)) {
 				$rtn[] = $result;
 			}

 			$keka['cities'] = $rtn;


			//取得結果を返す
			// 
			return $keka;
		}

	function update($id,$post_data){
			
			$sql = sprintf("UPDATE `contents` SET `title`='%s',`content`='%s',`rating`=%d,`country_name`='%s',`city_name`='%s',`place_name`='%s',
				`picture_path1`= '%s',`picture_path2`= '%s',`picture_path3`= '%s',`picture_path4`= '%s',`picture_path5`= '%s',`picture_path6`= '%s',`picture_path7`= '%s',`picture_path8`= '%s',`picture_path9`='%s'
				WHERE `c_delete_flag` = 0 AND `content_id`=%d",
				$post_data['title'],
				$post_data['content'],
				$post_data['rating'],
				$post_data['country_name'],
				$post_data['city_name'],
				$post_data['place_name'],
				$post_data['picture_path1'],
				$post_data['picture_path2'],
				$post_data['picture_path3'],
				$post_data['picture_path4'],
				$post_data['picture_path5'],
				$post_data['picture_path6'],
				$post_data['picture_path7'],
				$post_data['picture_path8'],
				$post_data['picture_path9']
				// ,$id,$post_data);	
				,$id);	

  //SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));



			
			//取得結果を返す
			return $results;
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

		function mypage($id){
			// SQLの記述(SELECT文)
			$sql = sprintf('SELECT * FROM `contents` LEFT JOIN `places` ON `contents`.`place_id` = `places`.`place_id` WHERE `c_delete_flag` = 0 AND `user_id` = %d',$id);
			
			// SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));
			// 実行結果を取得し、変数に格納
			$content = array();
			while ($result = mysqli_fetch_assoc($results)) {
				$content[]=$result;
			}
			//　取得結果を返す
			return $content;
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
			sha1(mysqli_real_escape_string($this->dbconnect, sha1($login_data['password'])))	
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



			
			//取得結果を返す
			return $results;
		}

	function delete($id){
			$sql = sprintf('UPDATE `contents` SET `c_delete_flag`=1 WHERE `content_id`=%d',
				mysqli_real_escape_string($this->dbconnect, $id)
				);


			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			return $results;

	}


		function sort_eva(){
		//　並び替え　はいの数でソートを実施
		$sql = sprintf('SELECT `contents`.`content_id`, `contents`.`title`, `content`, `contents`.`rating`, `contents`.`country_name`, `contents`.`city_name`, `contents`.`place_name`, `contents`.`picture_path1`, `contents`.`picture_path2`, `contents`.`picture_path3`, `contents`.`picture_path4`, `contents`.`picture_path5`, `contents`.`picture_path6`, `contents`.`picture_path7`, `contents`.`picture_path8`, `contents`.`picture_path9`, `contents`.`created`, `contents`.`modified`, `contents`.`c_delete_flag`, `contents`.`user_id` FROM (SELECT `content_id`, count(*) as evaSUM FROM `evaluations` WHERE `e_delete_flag`=0 GROUP BY `evaluations`.`content_id`) ev RIGHT OUTER JOIN `contents` ON ev.`content_id` = `contents`.`content_id` WHERE `c_delete_flag`=0 ORDER BY ev.`evaSUM` DESC'
		 	);

		// デバッグ用
		// $sql = sprintf('SELECT * FROM (SELECT `content_id`, count(*) as evaSUM FROM `evaluations` WHERE `e_delete_flag`=0 GROUP BY `evaluations`.`content_id`) ev RIGHT OUTER JOIN `contents` ON ev.`content_id` = `contents`.`content_id` WHERE `c_delete_flag`=0 ORDER BY ev.`evaSUM` DESC'
		// 	);

		// デバッグ用
		// $sql = sprintf('SELECT * FROM `contents` WHERE `c_delete_flag`=0 ORDER BY `created` DESC'
		// 	);

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