<?php var_dump($showviews) ?>

        <?php foreach ($showviews as $showview): ?>

        <!-- モーダル表示 -->
        	<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path1'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>	


				  		<!-- パンくずリスト -->
  		<ol class="breadcrumb">場所：
	<li><a href="http://bootstrap3.cyberlab.info"><?php echo $showview['country_name'] ?></a></li>
	<li><a href="http://bootstrap3.cyberlab.info/components/"><?php echo $showview['city_name'] ?></a></li>
	<li><a href="http://bootstrap3.cyberlab.info/components/"><?php echo $showview['place_name'] ?></a></li>
	<li class="active">投稿者：
	<?php echo $showview['user_name'] ?>
	</li>
		</ol>

		<!-- 一覧に戻る -->
		<br>
		<a href="#" class="btn btn-primary col-md-offset-1"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>一覧に戻る</a>



		<!-- 投稿内容 -->
        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                        	<h2 class="text-left">投稿者：
                        	<span><?php echo $showview['user_name'] ?></span>
                        	</h2>
                            <h2><a href="#"><?php echo $showview['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">
                                <!-- おすすめ度 -->
                                <?php for ($i=0; $i < $showview['rating'] ; $i++) { 
                                    echo "★";
                                } ?><?php for ($i=0 ; $i < 5-$showview['rating'] ; $i++ ) { 
                                    echo "☆";
                                } ?>
                                </h5>
                            </figure>
                            <h4>
                                <p><?php echo $showview['content'] ?></p>
<!-- 
                                <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p> -->
                            </h4>


                            </div>
                            </div>
                            </div>
                            </div>

        					<div class="col-md-12 text-right">この記事が参考になった人　　　はい　◯◯人　|　いいえ　◯◯人</div>
        					 <!-- ユーザー投稿内容の下線 -->
                    		<hr size="1" color="black" >


            <!-- モーダル -->
			   <!-- 写真１ -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path1'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4 " data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path1'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="<?php echo $showview['picture_path1'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p class="text-center">モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>


			   <!-- 写真2 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path2'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 

			   <!-- 写真3 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path3'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path3'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path3'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>


			   <!-- 写真4 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path4'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path4'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path4'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>


						   <!-- 写真5 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path5'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4 " data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path5'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="<?php echo $showview['picture_path5'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p class="text-center">モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>


			   <!-- 写真6 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path6'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path6'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path6'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>	

			   <!-- 写真7 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path7'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path7'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path7'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>


			   <!-- 写真8 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path8'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path8'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path8'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>	

			   <!-- 写真9 -->
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path9'] ?>" width="1920" height="1440" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425 col-md-4" data-toggle="modal" data-target="#image_Modal" style="cursor:pointer" /> 
			<!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる
			 --> 
			<div class="modal fade" id="image_Modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
			<div class="modal-dialog modal-lg modal-middle"> 
			<!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
			 --><div class="modal-content">
			 
			<div class="modal-body">
			<img src="images/1.jpeg" alt="<?php echo $showview['picture_path9'] ?>" width="720" height="540" class="aligncenter size-full wp-image-425" alt="<?php echo $showview['picture_path9'] ?>" />
			</div>
			<div class="modal-img_footer">
			<p>モーダル商品</p> <!-- //テキスト表示 -->
			<button type="button" class="btn btn-success" data-dismiss="modal">Close</button> 
			<!-- //ボタンを取り付け -->
			</div>
			 
			</div>
			</div>
			</div>

        <?php endforeach ?>

			<!-- modal　エンド -->