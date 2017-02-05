
                                         <div class="container">
                                            <div class="col-md-12">
                                                <div class="main-login main-center" style align="center">
                                                    
                                                    <br><br>
                                                    <h1>登録内容の確認</h1>
                                                    <div class="row">
                                                        <div  class="col-md-2">
                                                        </div>
                                                        <div  class="col-md-8" style align="left">
                                                        <form class="" method="post" action="/tabilog/users/create">
                                                            <h2>お名前：<?php echo htmlspecialchars($_SESSION['join']['user_name'],ENT_QUOTES,'UTF-8');?>　様</h2>
                                                            <h2>年齢：<?php echo htmlspecialchars($_SESSION ['join']['age'],ENT_QUOTES,'UTF-8');?>歳</h2>
                                                            <h2>性別：<?php 
                                                            if($_SESSION['join']['sex'] == 1){
                                                            echo "男性";
                                                        }
                                                        else{
                                                            echo "女性";
                                                        }

                                                            ?></h2>
                                                            <h2>メールアドレス：<?php echo htmlspecialchars($_SESSION ['join']['email'],ENT_QUOTES,'UTF-8');?></h2>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div  class="col-md-2">
                                                        </div>
                                                         <div  class="col-md-8" style align="center">
                                                            <h3>登録内容が正しい場合、「登録」をお押し下さい。</h3>
                                                          </div>
                                                    </div>

                                                    <!-- 送信ボタン -->
                                                    <div class="row">
                                                         <div  class="col-md-3">
                                                         </div>
                                                         <div  class="col-md-3">
                                                         
                                                           <a href="/tabilog/users/signup? action = rewrite" target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">変更</a>
                                                            <br><br> <br><br>
                                                        </div>
                                                        <div  class="col-md-3">
                                                            <input type="submit" target="_blank" type="button" id="button" class="btn btn-warning btn-lg btn-block login-button " style="color:#FFFFFF !important;" value="登録">

                                                        </div>
                                                           
                                                        </from>

                                                        
                                                    </div>

                                                </div>
                                            </div>
                                        </div>