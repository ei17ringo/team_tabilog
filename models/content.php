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

	function delete($id){
			

			$sql = sprintf("UPDATE `contents` SET `c_delete_flag` = 1 WHERE `content_id` =%d ",$id);
			//$sql = "SELECT * FROM `blogs` WHERE `delete_flag` = 0 AND `id` =$id"　上記と同じ効果

			//SQLの実行
			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));


			
			//取得結果を返す
			return $results;

	}




}


?>