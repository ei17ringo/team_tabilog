<?php var_dump($_SESSION['join']); ?>
<div class="container">
<div class="col-md-offset-2 col-md-8">
 <div class="form-area">
        <form role="form" method="post" action="/Tabilog/content/create">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">投稿確認</h3>
                     <h3 style align="center">この内容で投稿してよろしいでしょうか？</h3>
                     <label style align="left">タイトル</label>
                    <div class="form-group">
                        <input type="text" class="form-control" disabled="disabled" id="name" name="title" placeholder="タイトル：" value="<?php echo htmlspecialchars($_SESSION['join']['title'],ENT_QUOTES,'UTF-8');?>" required>
                    </div>
                     <label style align="left">場所</label>
                    <div class="form-group">
                     <div class="row">
                      <div class="col-md-12">
                      <!-- <div class="form-inline"> -->

                        <!-- セレクトボックス -->
                          <!-- <select name="list" class="form-control" disabled="disabled">
                           <option value="item1">日本</option>
                           <option value="item2" selected>国名</option>
                           <option value="item3">ベトナム</option>
                           <option value="item3">フィリピン</option>
                          </select> -->

                          <!-- セレクトボックス -->
                         <!--  <select name="list" class="form-control" disabled="disabled">
                           <option value="item1">日本</option>
                           <option value="item2" selected>地域</option>
                           <option value="item3">ベトナム</option>
                           <option value="item3">フィリピン</option>
                          </select> -->
                            <input type="text" class="form-control" disabled="disabled" id="mobile" name="mobile" placeholder="国名： &nbsp; &nbsp; &nbsp; &nbsp;地域： &nbsp; &nbsp; &nbsp; &nbsp;都市：" value="<?php echo htmlspecialchars($_SESSION['join']['country_name'],ENT_QUOTES,'UTF-8');?>&nbsp; &nbsp;/&nbsp; &nbsp;<?php echo htmlspecialchars($_SESSION['join']['city_name'],ENT_QUOTES,'UTF-8');?>&nbsp; &nbsp;/&nbsp; &nbsp;<?php echo htmlspecialchars($_SESSION['join']['place_name'],ENT_QUOTES,'UTF-8');?>"required>

                      <!--  </div> -->
                      </div>
                       <!-- <input type="text" class="form-control" id="mobile" name="mobile" placeholder="国：" required> -->
                     </div>
                     <!-- <div class="col-md-4">
                       <input type="text" class="form-control" id="mobile" name="mobile" placeholder="地域：" required>
                     </div> -->
                     <!-- <div class="col-md-4">
                       <input type="text" class="form-control" id="mobile" name="mobile" placeholder="都市：" required>
                     </div> -->
                    </div>
                     </div>
                     <label style align="left">オススメ度</label>
                    <div class="form-group">
                      <div class="form-inline">
                       <input type="text" class="form-control" disabled="disabled" id="mobile" name="mobile" placeholder="" value="<?php echo htmlspecialchars($_SESSION['join']['rating'],ENT_QUOTES,'UTF-8');?>" required>

                        <!-- <div class="row lead"> -->
                        <!-- <span id="stars" class="starrr"></span>
                       <span id="count">0</span> star(s) -->
                      <!-- </div> -->
                     </div>
                    </div>

              <label style align="left">内容</label>
                <div class="form-group">
                 <textarea class="form-control" disabled="disabled" id="mobile" name="content"  rows="15" placeholder="内容：" required><?php echo htmlspecialchars($_SESSION['join']['content'],ENT_QUOTES,'UTF-8');?></textarea>
                </div>
             <!--  </form> -->

               <div class="form-group">
             <label for="InputFile">写真</label>
              <!-- <input disabled="disabled" type="file" id="InputFile">
              <h6>*最大９枚までアップロードができます</h6> -->
              <p class="help-block"></p>
            </div>


                     <!-- 画像の表示 モーダル -->
<!-- <div class="container"> -->
    <div class="row">
        <div class="col-md-offset-2　col-md-8">
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


                     

                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path1'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100% max-height:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path2'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path3'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path4'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path5'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path6'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path7'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path8'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path9'], ENT_QUOTES,'UTF-8'); ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->

                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel" class="right carousel-control small">›</a>
                </div><!--.Carousel-->

        </div>
    </div>

                            <!-- 写真１ -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる-->
                        <div class="modal fade" id="image_Modal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle">
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path1'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle">
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path2'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path3'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path4'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path5'], ENT_QUOTES,'UTF-8'); ?>" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path6'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path7'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path8'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">

                        <div class="modal-body">
                        <img src="/tabilog/webroot/images/<?php echo htmlspecialchars($_SESSION['join']['picture_path9'], ENT_QUOTES,'UTF-8'); ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="image_Modal10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                        <div class="modal fade" id="image_Modal11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                        <div class="modal fade" id="image_Modal12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
                        <br>  <br>  <br>  <br>


                        <div class="row"></div>

                        <div class="row">
                         <div  class="col-md-2">
                         </div>

                    <!-- 戻る（新規投稿・編集画面に遷移）ボタン -->
                      <div  class="col-md-4">
                        <a href="new.html" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">戻る</a>
                      <br><br> <br><br>
                     </div>

               <!-- 確定ボタン（データベースに追加、会員投稿一覧に遷移 -->
                    <div  class="col-md-4">
                      <a href="thanks.html" target="_blank" type="button" id="button" class="btn btn-warning btn-lg btn-block login-button " style="color:#FFFFFF !important;">確定</a>
                    </div>
              </from>
          </div>

</div><!--.container-->
<!-- </div> -->
 </div>
 </div>

</div>
