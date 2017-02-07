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
                                                                            <?php if(isset($_SESSION['join']['user_name'])){ ?>
<!--                                                                               
 -->                                                                     <input type="text" name="user_name" class="form-control" placeholder="例： 山田太郎 " value="<?php echo $_SESSION['join']['user_name']; ?>">

                                                                               <?php }else{?>
                                                                              <input type="text" name="user_name" class="form-control" placeholder="例： 山田太郎" >
                                                                              <?php } ?>
                                                                              
                                                                    </div>
                                                                    <?php if(isset($error['user_name']) && $error['user_name'] == 'blank'): ?>
                                                                              <p class="error"> ※ニックネームを入力してください。</p>
                                                                            <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="name" class="cols-sm-2 control-label">年齢</label>
                                                                <div class="cols-sm-5">
                                                                    <div class="input-group">
                                                                        <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-time" aria-hidden="true"></i></span> -->
                                                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

                                                                        <?php if(isset($_SESSION ['join']['age'])){ ?>
                                                                              <input type="text" name="age" class="form-control" style="ime-mode: disabled" placeholder="例： 20 " value="<?php echo $_SESSION ['join']['age']; ?>">
                                                                              <?php }else{?>
                                                                              <input type="text" name="age" class="form-control" style="ime-mode: disabled" placeholder="例： 20" >
                                                                              <?php } ?>
                                            
                                                                    </div>
                                                                    <?php if(isset($error['age']) && $error['age'] == 'blank'): ?>
                                                                              <p class="error"> ※年齢を入力してください。</p>
                                                                            <?php endif; ?>
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

                                                                                       <?php if(isset($_SESSION['join']['sex']) && $_SESSION['join']['sex'] == 1 ){?> 
                                                                                        <input type="radio" name="sex" value="1" checked="selected" />
                                                                                        <?php } else{ ?>
                                                                                        <input type="radio" name="sex" value="1" />
                                                                                         <?php }?>
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

                                                                                  <?php if(isset($_SESSION['join']['sex']) && $_SESSION['join']['sex'] == 2){?>
                                                                                        <input type="radio" name="sex" value="2" checked="selected"/>
                                                                                        <?php } else{ ?>
                                                                                         <input type="radio" name="sex" value="2" />
                                                                                         <?php }?>
                                                                                    </span>
                                                                                    <div class="form-control form-control-static">
                                                                                        女性
                                                                                    </div>
                                                                                    <span class="glyphicon form-control-feedback "></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php if(isset($error['sex']) && $error['sex'] == 'blank'): ?>
                                                                              <p class="error"> ※性別を入力してください。</p>
                                                                            <?php endif; ?>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email" class="cols-sm-2 control-label">メールアドレス</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                       
                                                                        <?php if(isset($_SESSION ['join']['email'])){ ?>
                                                                          <input type="email" name="email" class="form-control" placeholder="例： tabi@log.com" value="<?php echo $_SESSION ['join']['email']; ?>">
                                                                          <?php }else{?>
                                                                          <input type="email" name="email" class="form-control" placeholder="例： tabi@log.com">
                                                                          <?php } ?>
                                                                         
                                                                    </div>
                                                                     <?php if(isset($error['email']) && $error['email'] == 'blank'): ?>
                                                                          <p class="error"> ※メールアドレスを入力してください。</p>
                                                                        <?php endif; ?>

                                                                        <!-- 重複登録時のエラー時 -->
                                                                        <?php if($error['email'] == 'duplicate'): ?>
                                                                        <p class="error">※　指定されたメールアドレスはすでに登録されています。</p>

                                                                        <?php endif; ?>
                                                                </div>
                                                            </div>

                                                           
                                                            <div class="form-group">
                                                                <label for="email" class="cols-sm-2 control-label">メールアドレス（確認用）</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                     
                                                                    <?php if(isset($_SESSION ['join']['e_comfirm'])){ ?>
                                                                          <input type="email" name="e_comfirm" class="form-control" placeholder="例： tabi@log.com" value="<?php echo $_SESSION ['join']['e_comfirm']; ?>">
                                                                          <?php }else{?>
                                                                          <input type="email" name="e_comfirm" class="form-control" placeholder="例： tabi@log.com">
                                                                          <?php } ?>
                                                                         
                                                                    </div>
                                                                     <?php if(isset($error['e_comfirm']) && $error['e_comfirm'] == 'blank'): ?>
                                                                          <p class="error"> ※メールアドレスを入力してください。</p>
                                                                        <?php endif; ?>



                                                                             <!-- 上記と違うメール時のエラー時 -->
                                                                    <?php if(isset($error['e_comfirm']) && $error['e_comfirm'] == 'notsame'): ?>
                                                                          <p class="error"> ※上記と同じメールアドレスを入力してください。</p>
                                                                        <?php endif; ?>

                                                                        <!-- 重複登録時のエラー時 -->
                                                                        <?php if($error['email'] == 'duplicate'): ?>
                                                                        <p class="error">※　指定されたメールアドレスはすでに登録されています。</p>

                                                                        <?php endif; ?>
                                                                </div>
                                                            </div>


                                                            <div class="form-group">
                                                                <label for="password" class="cols-sm-2 control-label">パスワード</label>
                                                                <div class="cols-sm-10">
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <!-- <input type="password" class="form-control" name="password" id="password"  placeholder="パスワードは英数字８文字以上"/> -->
                                                                                 <?php if(isset($_POST['password'])){ ?>
                                                                                  <input type="password" name="password" class="form-control" style="ime-mode: disabled" placeholder="パスワードは英数字８文字以上" value="<?php echo $_POST['password']; ?>">
                                                                                  <?php }else{?>
                                                                                  <input type="password" name="password" class="form-control" style="ime-mode: disabled" placeholder="パスワードは英数字８文字以上" >
                                                                                   <?php } ?>
                                                                     </div>
                                                                                  <?php if(isset($error['password']) && $error['password'] == 'blank'): ?>
                                                                                  <p class="error"> ※パスワードを入力してください。</p>
                                                                                <?php endif; ?>
                                                                                <?php if(isset($error['password']) && $error['password'] == 'length'): ?>
                                                                                  <p class="error"> ※パスワードは英数８文字以上で入力してください。</p>
                                                                                <?php endif; ?>
                                                                   
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="confirm" class="cols-sm-2 control-label">パスワード (確認用）</label>
                                                                <div class="cols-sm-10">
                                                                   <!--  <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="p_comfirm" id="confirm"  placeholder="パスワードは英数字８文字以上"/>
                                                                    </div>
                                                                </div>
                                                            </div> -->

                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                        <!-- <input type="password" class="form-control" name="password" id="password"  placeholder="パスワードは英数字８文字以上"/> -->
                                                                                 <?php if(isset($_POST['p_comfirm'])){ ?>
                                                                                  <input type="password" name="p_comfirm" class="form-control" style="ime-mode: disabled" placeholder="パスワードは英数字８文字以上" value="<?php echo $_POST['p_comfirm']; ?>">
                                                                                  <?php }else{?>
                                                                                  <input type="password" name="p_comfirm" class="form-control" style="ime-mode: disabled" placeholder="パスワードは英数字８文字以上" >
                                                                                   <?php } ?>
                                                                     </div>
                                                                                   <?php if(isset($error['p_comfirm']) && $error['p_comfirm'] == 'blank'): ?>
                                                                                  <p class="error"> ※パスワードを入力してください。</p>
                                                                                <?php endif; ?>
                                                                                <?php if(isset($error['p_comfirm']) && $error['p_comfirm'] == 'length'): ?>
                                                                                  <p class="error"> ※パスワードは英数８文字以上で入力してください。</p>
                                                                                <?php endif; ?>


                                                                             <!-- 上記と違うメール時のエラー時 -->
                                                                                <?php if(isset($error['p_comfirm']) && $error['p_comfirm'] == 'notsame'): ?>
                                                                                      <p class="error"> ※上記と同じメールアドレスを入力してください。</p>
                                                                                    <?php endif; ?>

                                                                   
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
