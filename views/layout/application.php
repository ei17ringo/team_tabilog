<?php 
    $adjust_string = '';

    if (isset($id)&&$id!=0){
      $adjust_string = '../';
    }
?>

<!DOCTYPE html>
<html lang="ja">
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Render &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">




    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/superfish.css">

    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/style.css">
      <!-- Bootstrap Core CSS -->
    <link href="<?php echo $adjust_string; ?>../webroot/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/mypage.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" rel="stylesheet" />

      <!-- Modernizr JS -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- 旅ログ -->
    <link href="<?php echo $adjust_string; ?>../webroot/assets/css/tabilog.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" rel="stylesheet" />


    <title>B-Map</title>

    <!-- Bootstrap -->
    <!-- <link href="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/css/form.css" rel="stylesheet">
    <link href="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/css/timeline.css" rel="stylesheet">
    <link href="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/css/main.css" rel="stylesheet"> -->


    <!-- カルーセル読み込み -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap-modalmanager.js"></script>
    <link rel="stylesheet" href="<?php echo $adjust_string; ?>../webroot/assets/css/bootstrap-lightbox.css">
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap-lightbox.min.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
<body>
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="loginmodal-container">
        <button type="button" class="close" data-dismiss="modal">✕</button>
        <h1>Login to Your Account</h1><br>
        <form>
          <!-- <input type="text" name="user" placeholder="Username"> -->
          <input type="text" name="mail" placeholder="Mail">
          <input type="password" name="pass" placeholder="Password">
          <div class="checkbox">
                <label>
                  <input type="checkbox">Remember me
                </label>
                </div>
          <input type="submit" name="login" class="login loginmodal-submit" value="Login">
        </form>
          
        <div class="login-help">
          <a href="#">Register</a> - <a href="#">Forgot Password</a>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="container" style="margin-top:50px"> -->
      <!-- ここに各アクション名に沿ったphpファイルを出力する -->
<div id="fh5co-wrapper">
  <div id="fh5co-page">
    <div id="fh5co-header">
      <div class="top">
        <div class="container">
            <div class="btn btn-xs btn-group show-on-hover">
              <div class="dropdown-toggle" data-toggle="dropdown">
              <!-- <span> --><a href="#"><!-- <i></i> -->Language</a><!-- </span> --><a href="#" class="caret show-on-hover"></a>
              </div>
              <!-- <ul class="dropdown-menu btn-primary" role="menu"> -->
              <ul class="dropdown-menu" role="menu">
                      <li class="Japanese"><a href="#">Japanese</a></li>
                      <li class="English"><a href="#">English</a></li>
                    </ul>
                  </div>
            <!-- ログインにモーダル実装 -->
            <span> <a href="tel://+12345678910"><!-- <i class="icon-mobile3"></i> --><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></span>
            <a href="#">/Logout</a>
            <!-- </div>
          </div> -->  
            <span> <!-- <a href="tel://+12345678910"><i class="icon-mobile3"></i> --><a href="newmember.html" data-target="#login-modal">新規登録</a></span>

        </div>
      </div>
    </div>


      <!-- end:top -->
<header id="fh5co-header-section">
  <div class="container">
    <div class="nav-header">
      <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
      <h1 id="fh5co-logo"><a href="index.html">旅ログ</a></h1>
      <!-- START #fh5co-menu-wrap -->
      <nav id="fh5co-menu-wrap" role="navigation">
        <ul class="sf-menu" id="fh5co-primary-menu">
          <li class="active">
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="newpage.html">新規作成</a>
          </li>
          <li>
            <a href="mypage.html">投稿一覧</a>
          </li>
        </ul>
      </nav>

    </div>
  </div>
</header>

<div class="fh5co-hero">
  <div class="fh5co-overlay"></div>
    <div class="text-center" style="background-image: url(images/work-1.jpg);">
        <!-- <div class="desc animate-box"> -->
          <!-- <h2>Cluttered-Free Template</h2>
          <span>Lovely Crafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FREEHTML5.co</a></span>
          <span><a class="btn btn-primary" href="#">Hire Us</a></span> -->
    </div>
  </div>
</div>
<div class="container">
  <?php include('views/'.$resource.'/'. $action .'.php');
        ?>
</div>

<footer>
  <div id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>Copyright 2017 <!-- Free Html5 --> <a href="#">旅ログ</a>All Rights Reserved. <br>Made with by <a href="http://freehtml5.co/">Team Young</a> / Demo Images: <a href="https://unsplash.com/">Unsplash</a></p>
        </div>
        <div class="col-md-6">
          <ul class="footer-menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="newpage.html">新規作成</a></li>
            <li><a href="mypage.html">投稿一覧</a></li>
                <!-- <li><a href="#">投稿一覧</a></li> -->
                <!-- <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

  </div>

  <!-- END fh5co-page -->


  
     <!--  <?php
          // include('views/'.$resource.'/'. $action .'.php');
      ?> -->
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?php echo $adjust_string; ?>../<?php echo $adjust_string; ?>webroot/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/jquery.waypoints.min.js"></script>
    <!-- Superfish -->
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/hoverIntent.js"></script>
    <script src="<?php echo $adjust_string; ?>../webroot/assets/js/superfish.js"></script>
</div>
  <!-- END fh5co-wrapper -->

    <!-- Main JS (Do not remove) -->
  <script src="js/main.js"></script>
  </body>
</html>


