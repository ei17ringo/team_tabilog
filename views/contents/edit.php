<div class="container">
 <div class="col-md-offset-2 col-md-8">
    <div class="form-area">
      <form  method="post" action="/tabilog/contents/update/<?php echo $return['contents']['content_id']; ?>" class="form-horizontal" role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">投稿編集</h3>
                    <a href="/tabilog/contents/delete/<?php echo $return['contents']['content_id']; ?>"><img src="../webroot//tabilog_moc/images/batsu.jpeg" class="absolute_back"></a>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="title" placeholder="タイトル：" value="<?php echo $return['contents']['title']; ?>"required>
                  
                    </div>

                    <div class="form-group">
                     <div class="row">
                     	<div class="col-md-12">
     　　　　　　　　　　　<div class="form-inline">

                        <!-- セレクトボックス -->
                         <!--  <select name="list" class="form-control">
                           <option value="item1" selected>国名</option>
                           <option value="item2">日本</option>
                           <option value="item3">ベトナム</option>
                           <option value="item4">フィリピン</option>
                          </select> -->

                          <select name="country_name" class="form-control">
                           <option value="item1" selected>国名</option>
                           <?php foreach ($return['countries'] as $countries){?>

                              <?php if($countries['country_name_jp'] == $return['contents']['country_name']){?>
                              <option class="country_<?php echo $countries['country_id'];?>" value="<?php echo $countries['country_name_jp'];?>" selected> <?php echo $countries['country_name_jp']; ?></option>
                              <?php } else{ ?>
                
                             <option class="country_<?php echo $countries['country_id'];?>" value="<?php echo $countries['country_name_jp'];?>">
                              <?php echo $countries['country_name_jp']; ?>
                             </option>
                             <?php } ?>
                          <?php } ?>
                            
                           </select>


                          <!-- セレクトボックス -->
                          <!-- <select name="list" class="form-control">

                           <option value="item1" selected>都市</option>
                           <option value="item2">日本</option>
                           <option value="item3">ベトナム</option>
                           <option value="item4">フィリピン</option>
                          </select> -->

                          <select name="city_name" class="form-control">
                           <option value="item1" selected>都市</option>
                           <?php foreach ($return['cities'] as $cities){?>

                               <?php if($cities['city_name_jp'] == $return['contents']['city_name']){?>
                              <option class="country_<?php echo $cities['country_id'];?>" value="<?php echo $cities['city_name_jp'];?>" selected> <?php echo $cities['city_name_jp']; ?></option>
                              <?php } else{ ?>
                
                             <option class="country_<?php echo $cities['country_id'];?>" value="<?php echo $cities['city_name_jp'];?>">
                              <?php echo $cities['city_name_jp']; ?>
                             </option>
                             <?php } ?>
                            <?php } ?>

                          </select>

                            <input type="text" class="form-control" id="mobile" name="place_name" placeholder="観光地：" value="<?php echo $return['contents']['place_name']; ?>"required>
                            

                            
                            <select name="rating" class="form-control">

                              <?php 

                              switch ($return['contents']['rating']) {
                                      case '1':
                                        $choice1 = 'selected';
                                        break;
                                      case '2':
                                        $choice2 = 'selected';
                                        break;
                                      case '3':
                                        $choice3 = 'selected';
                                        break;
                                      case '4':
                                        $choice4 = 'selected';
                                        break;
                                      case '5':
                                        $choice5 = 'selected';
                                        break;
                                      
                                      default:
                                        $choice0 = 'selected';
                                        break;
                                    }



                              ?>

                         <option value="0" <?php echo $choice0; ?> >オススメ度</option>
                         <option value="1" <?php echo $choice1; ?> >★</option>
                         <option value="2" <?php echo $choice2; ?> >★★</option>
                         <option value="3" <?php echo $choice3; ?> >★★★</option>
                         <option value="4" <?php echo $choice4; ?> >★★★★</option>
                         <option value="5" <?php echo $choice5; ?> >★★★★★</option>
                         <!-- <option value="0" selected>オススメ度</option>
                         <option value="1" >★</option>
                         <option value="2" >★★</option>
                         <option value="3" >★★★</option>
                         <option value="4" >★★★★</option>
                         <option value="5" >★★★★★</option> -->


                         
                       </select>

                       </div>
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

                    <div class="form-group">
                        <!-- <div class="row lead"> -->
                       <!--  <span id="stars" class="starrr">オススメ度：</span>
                       <span id="count">0</span> star(s) -->
                    	<!-- </div> -->
                    </div>

                <div class="form-group">
                 <textarea class="form-control" id="mobile" name="content" rows="15" placeholder="内容：" required><?php echo $return['contents']['content']; ?></textarea>
                </div>
             <!--  </form> -->

               <!-- <div class="form-group">
		         <label for="InputFile">写真</label>
		          <input type="file" id="InputFile">
		          <h6>*最大９枚までアップロードができます</h6>
		          <p class="help-block"></p>
	          </div>
            <br> -->

             <div class="form-group">
        <label for="InputFile">写真</label>
        <!-- <input type="file" id="InputFile"> -->
       <!--  画像１ -->
         <input type="file" name="picture_path1" class="form-control" >
              <?php if(isset($error['picture_path1']) && $error['picture_path1']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像2 -->
              <input type="file" name="picture_path2" class="form-control" >
              <?php if(isset($error['picture_path2']) && $error['picture_path2']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像3 -->
              <input type="file" name="picture_path3" class="form-control" >
              <?php if(isset($error['picture_path3']) && $error['picture_path3']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像4 -->
              <input type="file" name="picture_path4" class="form-control" >
              <?php if(isset($error['picture_path4']) && $error['picture_path4']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像5 -->
              <input type="file" name="picture_path5" class="form-control" >
              <?php if(isset($error['picture_path5']) && $error['picture_path5']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像6 -->
              <input type="file" name="picture_path6" class="form-control" >
              <?php if(isset($error['picture_path6']) && $error['picture_path6']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
<!--  画像7 -->
              <input type="file" name="picture_path7" class="form-control" >
              <?php if(isset($error['picture_path7']) && $error['picture_path7']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
              <!--  画像8 -->
              <input type="file" name="picture_path8" class="form-control" >
              <?php if(isset($error['picture_path8']) && $error['picture_path8']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
              <!--  画像9 -->
              <input type="file" name="picture_path9" class="form-control" >
              <?php if(isset($error['picture_path9']) && $error['picture_path9']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
         <h6>*最大９枚までアップロードができます</h6>
        <p class="help-block"></p>
       </div>


                     <!-- 画像の表示 モーダル -->
<div class="container">
    <div class="row" style="width: 1100px;">
        <div class="col-md-offset-2　col-md-8 col-sm-8">
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


                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path1']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal1" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg"  class="absolute_modal"></a></div>


                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path2']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal2" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path3']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path4']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal3" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path5']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal5" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425">
                      <img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal">
                      </a></div>


                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path6']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal6" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path7']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal7" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path8']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal8" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>



                    </div><!--.row-->
                </div><!--.item-->

                <div class="item">
                    <div class="row">
                       <div class="relative col-md-3"><img src="images/1.jpeg" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal9" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425" width="250" height="250"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>


                      <div class="relative col-md-3"><img src="/tabilog/webroot/images/<?php echo $return['picture_path9']; ?>" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal10" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal11" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

                      <div class="relative col-md-3"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" data-toggle="modal" data-target="#image_Modal12" style="cursor:pointer" class="img-responsive img-thumbnail thumbnail　aligncenter size-full wp-image-425"><img src="../webroot/tabilog_moc/images/batsu.jpeg" class="absolute_modal"></a></div>

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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path1']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path2']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path3']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path4']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path5']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path6']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path7']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path8']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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
                        <img src="/tabilog/webroot/images/<?php echo $return['picture_path9']; ?>" alt="baby-1151351_1920" width="720" height="540" class="aligncenter size-full wp-image-425 center-block" alt="baby-1151351_1920" />
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

</div><!--.container-->
</div>
	 <div class="row"></div>
　　　　<div class="row">
	      	<div class="col-md-offset-5">
	          <input type="submit" class="btn btn-default" value="編集内容を確認する">
          </div>

       </div>　
　　　 </div>
  </div>
</div>
 </form>

 <script type="text/javascript">
  $(function() {
  
  // 国名が変更されたら発動
  $('select[name="country_name"]').change(function() {
    
    // 選択されている国のクラス名を取得
    var countyName = $('select[name="country_name"] option:selected').attr("class");
    console.log(countyName);

    // 都市名の要素数を取得
    var count = $('select[name="city_name"]').children().length;
    
    // 都市名の要素数分、for文で回す
    for (var i=0; i<count; i++) {
      
      var city = $('select[name="city_name"] option:eq(' + i + ')');
      
      if(city.attr("class") === countyName) {
        // 選択した国と同じクラス名だった場合
        
        // 都市の要素を表示
        city.show();
      }else {
        // 選択した国とクラス名が違った場合
        
        // 都市の要素を非表示
        city.hide();
      }
    }
  })
})

 </script>
Contact GitHub API Training Shop Blog About
