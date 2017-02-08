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

		function mypage($id){
			// SQLの記述(SELECT文)
			$sql = sprintf('SELECT * FROM `contents` INNER JOIN `places` ON `contents`.`place_id` = `places`.`place_id` WHERE `c_delete_flag` = 0 AND `user_id` = %d',$id);
			
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

		function delete(){
			$sql=sprintf("UPDATE `contents` SET `delete_flag`=1 WHERE `id`=%d;",$id);

			$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

			return $results;
		}
	}

?>