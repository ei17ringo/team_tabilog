<!-- 新規投稿のところからボタンのところまで  -->
<!-- <div class="container"> -->
 <div class="col-md-offset-2 col-md-8">
    <div class="form-area">
        <form role="form" method="post" action="">
        <br style="clear:both">
           <h3 style="margin-bottom: 25px; text-align: center;">新規投稿</h3>
           <div class="form-group">
             <input type="text" class="form-control" id="name" name="title" placeholder="タイトル：" required>
           </div>

           <div class="form-group">
             <div class="row">
                <div class="col-md-12">
                 <div class="form-inline">

                        <!-- セレクトボックス -->
                          <select name="country_name" class="form-control">
                           <option value="item1" selected>国名</option>
                           <option value="item2">日本</option>
                           <option value="item3">ベトナム</option>
                           <option value="item3">フィリピン</option>
                          </select>

                          <!-- セレクトボックス -->
                          <select name="city_name" class="form-control">
                           <option value="item1" selected>都市</option>
                           <option value="item2">日本</option>
                           <option value="item3">ベトナム</option>
                           <option value="item3">フィリピン</option>
                          </select>

                            <input type="text" class="form-control" id="mobile" name="place_name" placeholder="観光地：" required>

                   </div>
                </div>
             </div>
           </div>
<!-- </div> -->

                    <div class="form-group">
                        <!-- <div class="row lead"> -->
                        <!-- <span id="stars" class="starrr">オススメ度：</span>
                       <span id="count" >0</span> star(s) -->
                       <span id="stars" class="starrr">オススメ度：</span>

                       <span type="hidden" name="rating" id="count" >0 </span> star(s)
                      
                    	<!-- </div> -->
                    </div>


       <div class="form-group">
         <textarea class="form-control" id="mobile" name="content"  rows="15" placeholder="内容：" required></textarea>
        </div>

       <div class="form-group">
        <label for="InputFile">写真</label>
        <!-- <input type="file" id="InputFile"> -->
         <input type="file" name="picture_path1" class="form-control">
              <?php if(isset($error['picture_path1']) && $error['picture_path1']=='type'){ ?>
              <p class="error">* 写真などは「,gif」「.jpg」「.png」の画像を指定して下さい。</p>
              <?php } ?>
              <?php if (!empty($error)): ?>
               <p class="error">* 恐れ入りますが、画像を改めてして下さい。</p>
              <?php endif; ?>
         <h6>*最大９枚までアップロードができます</h6>
        <p class="help-block"></p>
       </div>
       <br>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
          <input type="submit" class="btn btn-default" value="投稿内容を確認する">
         </div>
        </div>
      </div>
      </form>