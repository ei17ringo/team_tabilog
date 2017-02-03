<div class="container">
            <div class="row">
                                                        <div  class="col-md-2">
                                                        </div>
                                                         <div  class="col-md-8" style align="center">
                                                            <h1>お客様情報の入力</h1>
                                                          </div>
                                                    </div>
            <div row>
                 <div class="col-md-3">
                 </div>

                                    <!-- 入力フォーム -->
                                           <div class="col-md-6"><!--  <div class="row main"> -->
                                                <div class="main-login main-center">
                                                  
                                                        <form class="" method="post" action="">
                                                            
                                                            <div class="form-group">
                                                                <label for="name" class="cols-sm-2 control-label">お名前</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<!--                                                                         <input type="text" class="form-control" name="user_name" id="name"  placeholder="例：山田太郎"/>
-->    
                                                                            <?php if(isset($_POST['nick_name'])){ ?>
                                                                              <input type="text" name="user_name" class="form-control" placeholder="例： Seed kun " value="<?php echo $_POST['user_name']; ?>">
                                                                              <?php }else{?>
                                                                              <input type="text" name="user_name" class="form-control" placeholder="例： Seed kun" >
                                                                              <?php } ?>
                                                                              <?php if(isset($error['user_name']) && $error['user_name'] == 'blank'): ?>
                                                                              <p class="error"> ※ニックネームを入力してください。</p>
                                                                            <?php endif; ?>
                                                                 </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="name" class="cols-sm-2 control-label">年齢</label>
                                                                <div class="cols-sm-5">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-time" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="age" id="name"  placeholder="例：20"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- ラジオボックス -->
                                                             <div class="form-group">
                                                                <label for="name" class="cols-sm-2 control-label">性別</label>
                                                                <div class="cols-sm-5">
                                                                    <div class="input-group" > 
                                                                       <!--  <span class="input-group-addon"><i class="fa fa-transgender" aria-hidden="true"></i></span> -->
                                                                        <div class="form-inline required">
                                                                            <div class="form-group has-feedback">
                                                                                <label class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <input type="radio" name="sex" value="1" />
                                                                                    </span>
                                                                                    <div class="form-control form-control-static">
                                                                                        男性
                                                                                    </div>
                                                                                    <span class="glyphicon form-control-feedback "></span>
                                                                                </label>
                                                                            </div>
                                                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                                                            <div class="form-group has-feedback ">
                                                                                <label class="input-group">
                                                                                    <span class="input-group-addon">
                                                                                        <input type="radio" name="sex" value="2" />
                                                                                    </span>
                                                                                    <div class="form-control form-control-static">
                                                                                        女性
                                                                                    </div>
                                                                                    <span class="glyphicon form-control-feedback "></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email" class="cols-sm-2 control-label">メールアドレス</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="email" id="email"  placeholder="例：◯◯◯◯◯＠△△△△"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="form-group">
                                                                <label for="email" class="cols-sm-2 control-label">メールアドレス（確認用）</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="e_comfirm" id="email"  placeholder="例：◯◯◯◯◯＠△△△△"/>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="password" class="cols-sm-2 control-label">パスワード</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="password" id="password"  placeholder="パスワードは英数字８文字以上"/>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="confirm" class="cols-sm-2 control-label">パスワード (確認用）</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="p_comfirm" id="confirm"  placeholder="パスワードは英数字８文字以上"/>
                                                                    </div>
                                                                </div>
                                                            </div>
                     </div>

                      <br><br>

                      <div row>
                                                         <div  class="col-md-3">
                                                         </div>
                                                         <div  class="col-md-6">

                                                            <div class="form-group ">
                                                                 <input type="submit" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button" value="次へ">
                                                             
                                                            </div>
                                                            
                                                        </form>
                                                    </div>
                    </div>
                                                 </div>
                                            </div>
                                    </div>
           

        <br><br> <br><br>
