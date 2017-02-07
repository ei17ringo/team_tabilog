        <!-- 必須のため、消さない -->
        <!-- 観光地情報が入っていたら最初におすすめ度の平均を計算する -->
        <?php if (isset($place)&&$place=='sightseen'): ?>
            <?php $total_rating=0;
                  $comentNUM=0;
                  foreach ($indexplaceviews as $indexplaceview) {
                    $total_rating=$total_rating+$indexplaceview['rating'];
                    $comentNUM++;
                  }
                  $ave_rating=$total_rating/$comentNUM;
                  // echo round($ave_rating,2);
                   ?>
        <?php endif ?>

        <!-- 観光地情報が入っていたら、最初の配列を取り出す -->
        <?php if (isset($place)&&$place=='sightseen'): ?>
        <?php $firstcontent=array_shift($indexplaceviews); ?>
                <!-- Google map用 -->
        <?php 
        $googlemap=current($indexplaceviews);
        // echo $_POST['latitude'];
         ?>
        <?php endif ?>

        <!-- パンくずリスト用 -->
        <?php if (isset($index_data['search'])): ?>
        <?php $breadplace=current($indexplaceviews) ?>
<!--         <?php var_dump($breadplace) ?> -->
        <?php endif ?>



<!-- 		<?php var_dump($indexplaceviews);  ?> -->
<!-- 		<?php foreach ($indexviews as $indexview): ?>
			<?php echo $indexview['content_id'] ?>
		<?php endforeach ?> -->
<!--         <br>
        <br>
        <?php echo $index_data['search'] ?>
        <?php echo $place; ?> -->
<!--         <?php echo $_POST['eva'] ?>
 -->        <!-- <?php var_dump($evadataviews) ?> -->


                                <!-- modal表示 -->
                                <!-- 観光地情報が入力されたとき -->

                          <!-- 観光地情報が入力されなかったとき非表示 -->
                                <?php if (isset($place) && $place!=='sightseen'): ?>
                                    <?php echo '<style>/*' ?>
                                <?php endif ?>

                                    <!-- 写真１ -->
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="<?php echo 'picture1'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path1'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture2'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path2'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture3'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path3'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture4'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path4'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture5'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path5'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture6'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path6'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture7'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path7'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture8'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path8'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture9'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $firstcontent['picture_path9'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture10'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture11'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture12'.$firstcontent['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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

                          <!-- 観光地情報が入力されなかったとき非表示 -->
                                <?php if (isset($place)&&$place!=='sightseen'): ?>
                                    <?php echo '*/</style>' ?>
                                <?php endif ?>
                                <!-- 初期表示完了 -->










                                <!-- modal表示 -->

                          <!-- 検索文字列が入力されなかったとき（初期表示） -->
                                <?php if (isset($index_data['search'])): ?>
                                    <?php echo '<style>/*' ?>
                                <?php endif ?>

                                    <!-- 写真１ -->
                          <?php foreach ($indexviews as $indexview): ?>
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="<?php echo 'picture1'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path1'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture2'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path2'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture3'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path3'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture4'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path4'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture5'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path5'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture6'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path6'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture7'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path7'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture8'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path8'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture9'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $indexview['picture_path8'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture10'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture11'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture12'.$indexview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <?php endforeach ?>
                                <!-- 検索文字列が入力されなかったとき（初期表示） -->
                                <?php if (isset($index_data['search'])): ?>
                                    <?php echo '*/</style>' ?>
                                <?php endif ?>
                                <!-- 初期表示完了 -->


                          <!-- 検索文字列が入力されたとき -->
                                <?php if (!isset($index_data['search'])): ?>
                                    <?php echo '<style>/*' ?>
                                <?php endif ?>

                                    <!-- 写真 -->
                          <?php foreach ($indexplaceviews as $indexplaceview): ?>
                          <!-- //レスポンシブ対応・サムネイルに変更・画像上にポインターを置くと矢印から指になる--> 
                        <div class="modal fade" id="<?php echo 'picture1'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path1'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture2'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path2'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture3'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path3'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture4'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path4'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture5'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path5'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture6'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path6'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture7'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path7'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture8'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path8'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture9'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
                        <div class="modal-dialog modal-lg modal-middle"> 
                        <!-- //モーダルウィンドウの縦表示位置を調整・画像を大きく見せる
                         --><div class="modal-content">
                         
                        <div class="modal-body">
                        <img src="../webroot/images/<?php echo $$indexplaceview['picture_path9'] ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <div class="modal fade" id="<?php echo 'picture10'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture11'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <div class="modal fade" id="<?php echo 'picture12'.$indexplaceview['content_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"  style="z-index: 1500">
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
                        <?php endforeach ?>

                                <!-- 検索文字列が入力されなかったとき -->
                                <?php if (!isset($index_data['search'])): ?>
                                    <?php echo '*/</style>' ?>
                                <?php endif ?>
                                <!-- 検索時表示完了 -->




  		<!-- パンくずリスト 検索情報が入力されている場合のみ -->

<!--                 <?php if (!isset($index_data['search'])): ?>
                <?php echo '<style>/*' ?>
                <?php endif ?>
        <ol class="breadcrumb">場所：
    <li><a href="http://bootstrap3.cyberlab.info"><?php echo $breadplace['country_name']; ?></a></li>
    <li><a href="http://bootstrap3.cyberlab.info/components/"><?php echo $breadplace['city_name']; ?></a></li> -->
    <!-- 本来はマスタから取得したデータを出力しなくてはならない -->
<!--     <li class="active"><?php echo $breadplace['place_name']; ?></li>
        </ol>
                <?php if (!isset($index_data['search'])): ?>
                <?php echo '*/</style>' ?>
                <?php endif ?> -->

            <!-- バックアップ用のパンくずリスト -->
            <!--   		<ol class="breadcrumb">場所：
            	<li><a href="http://bootstrap3.cyberlab.info">フィリピン</a></li>
            	<li><a href="http://bootstrap3.cyberlab.info/components/">セブ</a></li>
            	<li class="active">カルボンマーケット</li>
            		</ol> -->

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



		<!-- 観光地入力時の本文 -->
        <!-- 検索ワードが観光地に設定されていないときはコメントアウト -->
        <?php if (isset($place)&&$place !=='sightseen'): ?>
            <?php echo '<style>/*' ?>
        <?php endif ?>  

        <!-- 総合評価 -->
        <span class="h3 col-sm-offset-1">おすすめ度：<?php for ($i=0; $i < round($ave_rating) ; $i++) { 
            echo "★";
        } ?><?php for ($i=0; $i < 5-round($ave_rating) ; $i++) { 
            echo "☆";
        } ?><?php echo "    ".round($ave_rating,2)."　　　　"; ?></span>
        <span class="glyphicon glyphicon-user"><?php echo $comentNUM ?></span>
        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                        <div class=" jumbotron">

                        		
                            <h2><a href="show/<?php echo $firstcontent['content_id'] ?>"><?php echo $firstcontent['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">
                                <!-- おすすめ度 -->
                                <?php for ($i=0; $i < $firstcontent['rating'] ; $i++) { 
                                    echo "★";
                                } ?><?php for ($i=0 ; $i < 5-$firstcontent['rating'] ; $i++ ) { 
                                    echo "☆";
                                } ?>
                                </h5>
                            </figure>
                            <h4>
                                <!-- 本文 -->
                                <!-- ログインしているユーザーに表示 -->
                                 <?php if (isset($_SESSION['id'])): ?>                               
                                <p><?php echo $firstcontent['content'] ?></p>
                                <?php endif ?>

                                <!-- ログインしていないユーザーに表示 -->
                                 <?php if (!isset($_SESSION['id'])): ?>                               
                                <p><?php echo $str = mb_strimwidth($firstcontent['content'], 0, 10, '…', 'UTF-8'); ?></p>
                                <?php endif ?>
                                

                                <!-- ログインしていないユーザーに表示 -->
                                <?php if (!isset($_SESSION['id'])): ?>
                                <p>続きを読むには
                                <a href="../users/signup">会員登録</a>が必要です。
                                </p>
                                <?php endif ?>

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
                    <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture1'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture2'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture3'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture4'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture5'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture6'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture7'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture8'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture9'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture10'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture11'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture12'.$firstcontent['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

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
                     <!-- ログインしているユーザーに表示 -->
                                <?php if (isset($_SESSION['id'])): ?>
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>
                       <div class="col-md-6">
                        <form method="post">
                       <button type="submit" class="btn btn-sm btn-default">はい</button>10人
                       <button type="submit" class="btn btn-sm btn-default">いいえ</button>10人
                        </form>
                     </div>
                   </div>   
                                    <?php endif ?>
    </div>







                        </div>
                    </div>
         


	<!-- Google Map -->
    <div id="map" class="" style="width:500px; height:600px"></div>
    <script type="text/javascript" >
    function initMap() {


  var opts = {
    zoom: 15,
    center: new google.maps.LatLng(<?php echo $googlemap['latitude'] ?>, <?php echo $googlemap['longtitude'] ?>)
  };
  var map = new google.maps.Map(document.getElementById("map"), opts);



             // 情報ウィンドウ
            // var infowindow1 = new google.maps.InfoWindow({
            //  position:map.getCenter(), 
   //              map:map,
            //   content: '場所：'+'メルボルン'+"<br />"+'おすすめ度：'+'★★★☆☆',
            // });


              // マーカー
             var marker = new google.maps.Marker({ 
                position:map.getCenter(), 
                map:map,
            }); 

            　//マーカークリック時に動作する情報ウィンドウ 
            google.maps.event.addListener(marker, "click", function() {
            var infowindow = new google.maps.InfoWindow({
            content: '場所：'+'<?php echo $googlemap['place_name_jp'] ?>'+"<br />"+'おすすめ度：'+'<?php for ($i=0; $i < round($ave_rating) ; $i++) { 
            echo "★";
        } ?><?php for ($i=0; $i < 5-round($ave_rating) ; $i++) { 
            echo "☆";
        } ?><?php echo "    ".round($ave_rating,2); ?>'
            });
            infowindow.open(map, marker);
            });

}
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
        <?php if (isset($place)&&$place!=='sightseen'): ?>
            <?php echo '*/</style>' ?>
        <?php endif ?>


				<!-- 本文 -->
                <!-- 検索キーワードが入力されていないとき（初期表示） -->

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
                            <h2><a href="show/<?php echo $indexview['content_id'] ?>"><?php echo $indexview['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">
                                <!-- おすすめ度 -->
                                <?php for ($i=0; $i < $indexview['rating'] ; $i++) { 
                                    echo "★";
                                } ?><?php for ($i=0 ; $i < 5-$indexview['rating'] ; $i++ ) { 
                                    echo "☆";
                                } ?>
                                
                                </h5>
                            </figure>
                            <h4>
<!--                                 <p><?php echo $indexview['content'] ?></p> -->
                                <!-- 本文 -->
                                <!-- ログインしているユーザーに表示 -->
                                 <?php if (isset($_SESSION['id'])): ?>                               
                                <p><?php echo $indexview['content'] ?></p>
                                <?php endif ?>

                                <!-- ログインしていないユーザーに表示 -->
                                 <?php if (!isset($_SESSION['id'])): ?>                               
                                <p><?php echo $str = mb_strimwidth($indexview['content'], 0, 10, '…', 'UTF-8'); ?></p>
                                <?php endif ?>


                               <!-- ログインしていないユーザーに表示 -->
                                <?php if (!isset($_SESSION['id'])): ?>
                                <p>続きを読むには
                                <a href="../users/signup">会員登録</a>が必要です。
                                </p>
                                <?php endif ?>

                            </h4>
                            </div>
                            
    <!-- 画像の表示 モーダル -->

    <div class="row">
  	<div class="col-md-12">
                <?php $cal_id = 0; ?>            
                <div id="Carousel<?php echo $cal_id ?>" class="carousel slide">             
                <ol class="carousel-indicators">
                    <li data-target="#Carousel<?php echo $cal_id ?>" data-slide-to="0" class="active"></li>
                    <li data-target="#Carousel<?php echo $cal_id ?>" data-slide-to="1"></li>
                    <li data-target="#Carousel<?php echo $cal_id ?>" data-slide-to="2"></li>
                </ol>
                 
                <!-- Carousel items -->
                <div class="carousel-inner">
                    
                <div class="item active">
                    <div class="row">


                      <div class="col-md-3">
                  	<img src="../webroot/images/<?php echo $indexview['picture_path1'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture1'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                      	<img src="../webroot/images/<?php echo $indexview['picture_path2'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture2'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="../webroot/images/<?php echo $indexview['picture_path3'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture3'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                      	<img src="../webroot/images/<?php echo $indexview['picture_path4'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture4'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path5'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture5'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path6'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture6'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path7'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture7'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path8'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture8'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path9'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture9'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture10'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture11'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture12'.$indexview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                </div><!--.carousel-inner-->
                  <a data-slide="prev" href="#Carousel<?php echo $cal_id; ?>" class="left carousel-control small">‹</a>
                  <a data-slide="next" href="#Carousel<?php echo $cal_id; ?>" class="right carousel-control small">›</a>
                </div><!--.Carousel-->
                     <?php $cal_id++; ?>

                 <!-- ユーザー投稿内容の下線 -->
                    <hr size="1" color="black" >
                 </div>
                     <!-- 参考になったーはい/いいえボタン -->
                    <!-- ログインしているユーザーに表示 -->
                                <?php if (isset($_SESSION['id'])): ?>
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>
                            <!-- 評価人数をカウント -->
                            <?php 
                            $yes=0;
                            $no=0;
                            $other=0;

                            // ログインした人がボタンを押下できなくする
                            $evaset='default';

                            foreach ($evadataviews as $evadataview) {

                            if (($indexview['content_id']==$evadataview['content_id'])&&($evadataview['eva']==1)) {
                                $yes++;
                            }elseif (($indexview['content_id']==$evadataview['content_id'])&&($evadataview['eva']==2)) {
                                $no++;
                            }
                            // else{
                            //     $other++;
                            // }

                            // はいを押下した場合
                            if (($_SESSION['id']==$evadataview['user_id'])&&($indexview['content_id']==$evadataview['content_id'])&&($evadataview['eva']==1)) {
                                $evaset='yesset';
                            }
                            // いいえを押下した場合
                            elseif (($_SESSION['id']==$evadataview['user_id'])&&($indexview['content_id']==$evadataview['content_id'])&&($evadataview['eva']==2)) {
                                $evaset='noset';
                            }

                            }
                             ?>

                       <div class="col-md-6">

                       <!-- 既に評価をしたユーザーには押下できるボタンを表示しない -->
                       <?php if ($evaset=='default'): ?>
                       <form method="post">
                       <input type="hidden" name="content_id" value="<?php echo $indexview['content_id'] ?>">
                                                           
                       <button type="submit" name="eva" value="1" class="btn btn-sm btn-default">はい</button><?php echo $yes ?>人
                       <button type="submit" name="eva" value="2" class="btn btn-sm btn-default">いいえ</button><?php echo $no ?>人
                       </form>
                        <?php endif ?>

                        <!-- 既に評価を押下したユーザー向け -->
                        <?php if ($evaset=='yesset'): ?>
                       <form method="post">
                       <input type="hidden" name="content_id" value="<?php echo $indexview['content_id'] ?>">
                                                           
                       <button type="submit" name="evadel" value="delete" class="btn btn-sm btn-primary">はい</button><?php echo $yes ?>人
                       <button type="button" class="btn btn-sm btn-default">いいえ</button><?php echo $no ?>人
                       </form>
                        <?php endif ?>


                       <!-- 既に評価を押下したユーザー向け -->
                        <?php if ($evaset=='noset'): ?>
                       <form method="post">
                       <input type="hidden" name="content_id" value="<?php echo $indexview['content_id'] ?>">
                                                           
                       <button type="button" class="btn btn-sm btn-default">はい</button><?php echo $yes ?>人
                       <button type="submit" name="evadel" value="delete" class="btn btn-sm btn-primary">いいえ</button><?php echo $no ?>人
                       </form>
                        <?php endif ?>

                        <?php endif ?>
                        <!-- ログインしているユーザーに評価を表示END -->
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
                            <h2><a href="show/<?php echo $indexplaceview['content_id'] ?>"><?php echo $indexplaceview['title'] ?></a></h2>
                            <figure>
                                <h5 class="text-right">
                                <!-- おすすめ度 -->
                                <?php for ($i=0; $i < $indexplaceview['rating'] ; $i++) { 
                                    echo "★";
                                } ?><?php for ($i=0 ; $i < 5-$indexplaceview['rating'] ; $i++ ) { 
                                    echo "☆";
                                } ?>
                                </h5>
                            </figure>
                            <h4>
<!--                                 <p><?php echo $indexplaceview['content'] ?></p> -->
                                 <!-- 本文 -->
                                <!-- ログインしているユーザーに表示 -->
                                 <?php if (isset($_SESSION['id'])): ?>                               
                                <p><?php echo $indexplaceview['content'] ?></p>
                                <?php endif ?>

                                <!-- ログインしていないユーザーに表示 -->
                                 <?php if (!isset($_SESSION['id'])): ?>                               
                                <p><?php echo $str = mb_strimwidth($indexplaceview['content'], 0, 10, '…', 'UTF-8'); ?></p>
                                <?php endif ?>

                               <!-- ログインしていないユーザーに表示 -->
                                <?php if (!isset($_SESSION['id'])): ?>
                                <p>続きを読むには
                                <a href="../users/signup">会員登録</a>が必要です。
                                </p>
                                <?php endif ?>

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
                        <img src="../webroot/images/<?php echo $indexview['picture_path1'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture1'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>


                      <div class="col-md-3">
                        <img src="../webroot/images/<?php echo $indexview['picture_path2'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture2'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="../webroot/images/<?php echo $indexview['picture_path3'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture3'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                      <div class="col-md-3">
                        <img src="../webroot/images/<?php echo $indexview['picture_path4'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture4'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a>
                      </div>

                    </div><!--.row-->
                </div><!--.item-->
                 
                <div class="item">
                    <div class="row">
                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path5'] ?>" alt="Image" style="max-width:100%;" data-toggle="<?php echo '#picture5'.$indexplaceview['content_id'] ?>" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>


                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path6'] ?>" alt="Image" style="max-width:100%;" data-toggle="<?php echo '#picture6'.$indexplaceview['content_id'] ?>" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path7'] ?>" alt="Image" style="max-width:100%;" data-toggle="<?php echo '#picture7'.$indexplaceview['content_id'] ?>" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path8'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture8'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>



                    </div><!--.row-->
                </div><!--.item-->
                 

                <div class="item">
                    <div class="row">
                       <div class="col-md-3"><img src="../../webroot/images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture9'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"></a></div>


                      <div class="col-md-3"><img src="../webroot/images/<?php echo $indexview['picture_path9'] ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture10'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture11'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

                      <div class="col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="<?php echo '#picture12'.$indexplaceview['content_id'] ?>" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"></a></div>

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
                     <!-- ログインしているユーザーに表示 -->
                                <?php if (isset($_SESSION['id'])): ?>
                   <div class="row">
                    　
                        <div class="col-md-6">
                       <span class="love-text">この記事は参考になりましたか？</span>
                       </div>



                       <div class="col-md-6">
                       <button type="button" class="btn btn-sm btn-default">はい</button>10人
                       <button type="button" class="btn btn-sm btn-default">いいえ</button>10人
                     </div>
                   </div>
                      <?php endif ?> 
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
