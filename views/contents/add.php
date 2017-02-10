<!-- 新規投稿のところからボタンのところまで  -->
<!-- <div class="container"> -->
 <div class="col-md-offset-2 col-md-8">
    <div class="form-area">
        <form role="form" method="post" action="" enctype="multipart/form-data">
        <br style="clear:both">
           <h3 style="margin-bottom: 25px; text-align: center;">新規投稿</h3>
           <div class="form-group">

           <?php if (isset($_SESSION['join']['title'])) { ?>
            <input type="text" class="form-control" id="name" name="title" placeholder="タイトル：" value="<?php echo $_SESSION['join']['title']; ?>" required>
            <?php }else{?>
             <input type="text" class="form-control" id="name" name="title" placeholder="タイトル：" required>
             <?php }?>
           </div>

           <div class="form-group">
             <div class="row">
                <div class="col-md-12">
                 <div class="form-inline">

                        <!-- セレクトボックス 国名 -->
                          <select name="country_name" class="form-control">
                           <option value="item1" selected>国名</option>
                            <?php foreach ($return['countries'] as $countries){?>
                             <option class="country_<?php echo $countries['country_id'];?>" value="<?php echo $countries['country_name_jp'];?>">
                              <?php echo $countries['country_name_jp']; ?>
                             </option>
                            <?php } ?>
                           </select>

                          <!-- セレクトボックス 都市名-->
                          <select name="city_name" class="form-control">
                           <option value="item1" selected>都市</option>
                           <?php foreach ($return['cities'] as $cities){?>
                             <option class="country_<?php echo $cities['country_id'];?>" value="<?php echo $cities['city_name_jp'];?>">
                              <?php echo $cities['city_name_jp']; ?>
                             </option>
                            <?php } ?>
                          </select>

                          <!-- 観光地名 -->
                            <?php if (isset($_SESSION['join']['place_name'])) { ?>
                              <input type="text" class="form-control" id="name" name="place_name" placeholder="タイトル：" value="<?php echo $_SESSION['join']['place_name']; ?>" required>
                            <?php }else{?>
                              <input type="text" class="form-control" id="mobile" name="place_name" placeholder="観光地：" required>
                            <?php }?>

                        <!-- セレクトボックス　オススメ度 -->
                        <select name="rating" class="form-control">
                         <option value="0" selected>オススメ度</option>
                         <option value="1" >★</option>
                         <option value="2" >★★</option>
                         <option value="3" >★★★</option>
                         <option value="4" >★★★★</option>
                         <option value="5" >★★★★★</option>
                       </select>

                   </div>
                </div>
             </div>
           </div>
<!-- </div> -->

                    <div class="form-group">
                        <!-- <div class="row lead"> -->
                        <!-- <span id="stars" class="starrr">オススメ度：</span>
                       <span id="count" >0</span> star(s) -->
                       <!-- <span id="stars" class="starrr">オススメ度：</span>
                       <span type="hidden" name="rating" id="count" >0 </span> star(s) -->
                      <!-- <div class="col-md-4 col-md-offset-4">
                       <select name="city_name" class="form-control">
                        <option value="0" selected>評価</option>
                        <option value="1" >★☆☆☆☆</option>
                        <option value="2" >★★☆☆☆</option>
                        <option value="3" >★★★☆☆</option>
                        <option value="4" >★★★★☆</option>
                        <option value="5" >★★★★★</option>
                       </select>
                      </div> -->
                    	<!-- </div> -->
                    </div>
    <!-- </form> -->

    <!-- <form method="post" action="" enctype="multipart/form-data"> -->
      <div class="form-group">
      <?php if (isset($_SESSION['join']['place_name'])) { ?>
         <textarea class="form-control" id="mobile" name="content"  rows="15" placeholder="内容：" value="<?php echo $_SESSION['join']['content']; ?>" required><?php echo $_SESSION['join']['content']; ?></textarea>
      <?php }else{?>
        <textarea class="form-control" id="mobile" name="content"  rows="15" placeholder="内容：" required></textarea>
      <?php }?>
      </div>

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
         <?php if (!isset($_SESSION['join']['picture_path1'])) { ?>
           <h1>*写真を1枚以上アップロードして下さい</h1>
         <?php }?>
        <p class="help-block"></p>
       </div>
       <br>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <input type="submit" class="btn btn-default" value="投稿内容を確認する">
          <br>
          <br>
          <br>
          <br>
         </div>
        </div>
      </div>
     </div>
    </form>
  </div>
  <script type="text/javascript">
$(function() {
  // 国名が変更されたら発動
  $('select[name="country_name"]').change(function() {
    // 選択されている国のクラス名を取得
    var county_name = $('select[name="country_name"] option:selected').attr("class");
    console.log(county_name); //consoleで確認できる
  })
})

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