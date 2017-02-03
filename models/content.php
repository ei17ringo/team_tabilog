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
		function create($post_data){
		//INDERT文の記述
		$sql= sprintf("INSERT INTO `contents`(`content_id`, `title`, `content`, `rating`, `country_name`, `city_name`, `place_name`, `picture_path1`, `picture_path2`, `picture_path3`, `picture_path4`, `picture_path5`, `picture_path6`, `picture_path7`, `picture_path8`, `picture_path9`, `created`, `modified`, `c_delete_flag`, `user_id`, `place_id`) VALUES (NULL, '%s', '%s', '%s', '%s', '%s', '%s', now(), CURRENT_TIMESTAMP, '0')", $post_data['title'], $post_data['content'], $post_data['country_name'], $post_data['city_name'], $post_data['place_name']);
		//splの実行
		$results = mysqli_query($this->dbconnect, $sql) or die(mysqli_error($this->dbconnect));

		//実行結果を返す
		return $results;


	 }
  }


?>