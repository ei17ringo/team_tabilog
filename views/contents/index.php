<!-- 		<?php var_dump($indexplaceviews);  ?> -->
<!-- 		<?php foreach ($indexviews as $indexview): ?>
			<?php echo $indexview['content_id'] ?>
		<?php endforeach ?> -->
<!--         <br>
        <br>
        <?php echo $index_data['search'] ?>
        <?php echo $place; ?> -->

        <!-- 必須のため、消さない -->
        <!-- 観光地情報が入っていたら、最初の配列を取り出す -->
        <?php if (isset($place)&&$place=='sightseen'): ?>
        <?php $firstcontent=array_shift($indexplaceviews); ?> 
        <?php endif ?>        

					<!-- modal表示 -->
		                            <!-- 写真１ -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真2 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真3 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真4 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>



                            <!-- 写真5 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真6 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真7 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真8 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                         
                        </div>
                        </div>
                        </div>


                          <!-- 写真9 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="images/1.jpeg" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                        </div>
                        </div>
                        </div>

                          <!-- 写真10 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                        </div>
                        </div>
                        </div>

                          <!-- 写真11 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                        </div>
                        </div>
                        </div>


                          <!-- 写真12 -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="image_Modal12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="http://placehold.it/250x250" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
                        </div>
                        <div class="modal-img_footer center-text">
                        <p>モーダル商品</p> <!-- //テキスト表示 -->
                        <button type="button" class="btn btn-success center-block" data-dismiss="modal">Close</button> 
                        <!-- //ボタンを取り付け -->
                        </div>
                        </div>
                        </div>
                        </div>


  		<!-- パンくずリスト -->
  		<ol class="breadcrumb">場所：
	<li><a href="http://bootstrap3.cyberlab.info">フィリピン</a></li>
	<li><a href="http://bootstrap3.cyberlab.info/components/">セブ</a></li>
	<li class="active">カルボンマーケット</li>
		</ol>

		<!-- 検索ボタン -->
		<p>
		<form method="post" action="/tabilog/contents/index" class="form-horizontal" role="form">
		<div class="input-group col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1">
	  <input type="text" class="form-control" name="search" placeholder="観光地を入力してください" value="<?php if (isset($_POST['search'])): ?><?php echo $_POST['search']; ?><?php endif ?>">
	  <span class="input-group-btn">
	    <button class="btn btn-default own-hover" type="submit">検索</button>
	  </span>
		</div>
		</form>
		</p>

        <!-- 検索キーワードがなかった場合 -->
		<?php if (isset($search_fail)): ?>
		<p class="text-danger h4 col-md-offset-1"><?php echo $search_fail; ?></p>
		<?php endif ?>

<style>/*
		<!-- 並び替え　ドロップダウンリスト -->
		<div class="dropdown col-md-offset-1">
		  <button class="btn btn-default dropdown-toggle own-hover" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		  <!-- own-hoverがhoverしたときに灰色表示 -->
		    並び替え
		    <span class="caret"></span>
		  </button
		  		<!-- 総合評価 -->
				    <span class="h3 col-sm-offset-2"> ★★★☆☆　3.50</span>

		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><a href="#">評価の高い順</a></li>
		    <li><a href="#">コメント数の多い順</a></li>
		    <li><a href="#">コメント数の少ない順</a></li>
		  </ul>

		</div>
*/</style>


		<!-- 本文 -->
        <!-- 検索ワードが観光地に設定されていないときはコメントアウト -->
        <?php if (isset($place)&&$place !='sightseen'): ?>
            <?php echo '<style>/*' ?>
        <?php endif ?>  


        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">

                        		
                            <h2><a href="#"><?php echo $firstcontent['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <!-- 本文 -->
                                <p><?php echo $firstcontent['content'] ?></p>
<!-- 
                                <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p> -->
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>






                        </div>
                    </div>
         


	<!-- Google Map -->
    <div id="map" class="" style="width:500px; height:600px"></div>
    <script type="text/javascript" src="../webroot/assets/js/tabilog.js">
    </script>
        <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
 
        </script>
    </div>

						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- 検索ワードが観光地に設定されていないときは非表示 -->
        <?php if (isset($place)&&$place!='sightseen'): ?>
            <?php echo '*/</style>' ?>
        <?php endif ?>


				<!-- 本文 -->
                <!-- 検索キーワードが入力されていないとき -->


                <!-- 検索ワードが設定されているときは非表示 -->
                <?php if (isset($index_data['search'])): ?>
                    <?php echo '<style>/*' ?>
                <?php endif ?>
        <div id="fh5co-content-section">
            <div class="container">
            <?php foreach ($indexviews as $indexview): ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                            <h2><a href="#"><?php echo $indexview['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <p><?php echo $indexview['content'] ?></p>

<!--                                 <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p> -->
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>






                        </div>
                    </div>
                    <?php endforeach ?>

                 <!-- 検索ワードが設定されているときは非表示 -->
                <?php if (isset($index_data['search'])): ?>
                    <?php echo '*/</style>' ?>
                <?php endif ?>




                <!-- 本文 -->
                <!-- 検索キーワードが入力されたときに本文表示 -->

                <!-- 検索キーワードが入力されていないときコメントアウト -->
                 <?php if (!isset($index_data['search'])): ?>
                        <?php echo '/*<style>' ?>
                 <?php endif ?>
        <div id="fh5co-content-section">
            <div class="container">
            <!-- 検索キーワードが入力されたとき -->
            <?php foreach ($indexplaceviews as $indexplaceview): ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                            <h2><a href="#"><?php echo $indexplaceview['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <p><?php echo $indexplaceview['content'] ?></p>

<!--                                 <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p> -->
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
    <div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>






                        </div>
                    </div>
                    <?php endforeach ?>
                    <!-- 検索キーワードが入力されていないときコメントアウト -->
                    <?php if (!isset($index_data['search'])): ?>
                        <?php echo '*/</style>' ?>
                    <?php endif ?> 



                    <style>/*

                    		<!-- 本文 -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                            <h2><a href="#">カルボンマーケットについて</a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <p>Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.</p>

                                <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p>
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>






                        </div>
                    </div>






				<!-- 本文 -->

        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                            <h2><a href="#">aaaaa</a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <p>Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.</p>

                                <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p>
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>






                        </div>
                    </div>                        








                    		<!-- 本文 -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">
                            <h2><a href="#">カルボンマーケットについて</a></h2>
                            <figure>
                                <h5 class="text-right">★★☆☆☆</h5>
                            </figure>
                            <h4>
                                <p>Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.</p>

                                <p>続きを読むには   
                                <a href="#">会員登録</a>が必要です。
                                </p>
                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
        
                <div id="Carousel" class="carousel slide">
                 
                <ol class="carousel-indicators">
                    <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel" data-slide-to="1"></li>
                    <li data-target="#Carousel" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->


                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>

                       <div class="col-md-6"><button type="button" class="btn btn-sm btn-default">はい</button>10人<button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>   
    </div>




                           */</style>  


                        </div>

                    </div>



</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
