<?php


?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Render &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Google mapを複数読み込むのに必要 -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>


  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="mypage.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" rel="stylesheet" />

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- 旅ログ -->
	<link href="custom/css/tabilog.css" rel="stylesheet">
	<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css" rel="stylesheet" />

<!-- カルーセル読み込み -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-modalmanager.js"></script>
<link rel="stylesheet" href="css/bootstrap-lightbox.css">
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-lightbox.min.js"></script>

<script type="text/javascript">
<!--

function disp(){

	// 「OK」時の処理開始 ＋ 確認ダイアログの表示
	if(window.confirm('本当に削除しますか？ 削除すると内容を戻すことができなくなります。')){

		location.href = "mypage.html"; // mypage.html へジャンプ

	}
	// 「OK」時の処理終了

	// 「キャンセル」時の処理開始
	else{

		window.alert('キャンセルされました'); // 警告ダイアログを表示

	}
	// 「キャンセル」時の処理終了

}

// -->
</script>


</head>

<!-- <div class="center"><button data-toggle="modal" data-target="#squarespaceModal" class="btn btn-primary center-block">Login</button></div> -->


<body>
<!-- <p class="lead">Roll over the button on the left to see a dropdown</p>
        Rollover dropdown:
		
        <div class="btn-group show-on-hover">
          <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span>
          </div>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div> -->

<!-- モーダルボタン後のログイン画面 -->
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




<!-- <div class="container"> ドロップダウン　消さない!
	<div class="row">
        <div class="btn-group show-on-hover">
          Language<span class="caret"></span>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Japanese</a></li>
            <li><a href="#">English</a></li>
          </ul>
        </div>
	</div>
</div> -->
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
						<span> <a href="tel://+12345678910"><i class="icon-mobile3"></i><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></span>
						<a href="#">/Logout</a>
						<!-- </div>
					</div> -->	
						<span> <!-- <a href="tel://+12345678910"><i class="icon-mobile3"></i> --><a href="newmember.html" data-target="#login-modal">新規登録</a></span>

				</div>
			</div>
		</div>


			<!-- end:top -->
<header id="fh5co-header-section">

<!-- <div class="container">
	<div class="row">
        <div class="btn-group show-on-hover">
          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            Action <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
          </ul>
        </div>    
	</div>
</div> -->

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
					<!-- <li>
						<a href="services.html" class="fh5co-sub-ddown">投稿一覧</a>
						<ul class="fh5co-sub-menu">
							<li><a href="left-sidebar.html">Web Development</a></li>
							<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
							<li>
								<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
						<ul class="fh5co-sub-menu">
							<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
							<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
							<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
							<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
							<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
							<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
							</ul>
							</li>
								<li><a href="#">UI Animation</a></li>
								<li><a href="#">Copywriting</a></li>
								<li><a href="#">Photography</a></li> 
							</ul>
							</li> -->
							<!-- <li><a href="about.html">About</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="contact.html">Contact</a></li> -->
				</ul>
			</nav>
		</div>
	</div>
</header>
	
			
		<!-- </div>
 -->


		


<!-- line modal -->




		

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
		<br>
		<br>
		<br>
	
<!-- <div id="fh5co-content-section">
 <div class="container">
  <div class="row">
   <div class="col-md-3 col-md-3 col-md-3 col-md-3">
    <div class="fh5co-testimonial text-center animate-box"> -->
    <!-- <h1>●●さんの投稿内容一覧</h1> -->
 <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header" style="padding-left: 10px">
      <!-- <button type="button" class="btn btn-default navbar-btn pull-left">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </button> -->
      <div class="navbar-text navbar-brand-centered"><h3>●●さんの投稿一覧</h3></div>
      <h4></h4>
    </div>
  </div>
</nav>


    <div class="container pagination">
		<div class="row">
			<ul class="pagination">
			    <li><a href="#">«</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">»</a></li>
			</ul>
		</div>
	</div>
	
<div class="container">
	<div class="row">
		<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click</button>
       <div id="myModal" class="modal fade" role="dialog">
             <div class="modal-dialog">
                        <div class="modal-content">
                                   <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">×</button>
                                         <h4 class="modal-title">Error!!</h4>
                                   </div>
                                   <div class="modal-body">
                                         <p>Sorry your server request has been declined</p>
                                   </div>
                                   <div class="modal-footer">
                                         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                   </div>
                        </div>

            </div>
     	</div> -->


     	<!-- span>
			  	<div id="myModal" class="modal fade" role="dialog">
	             	<div class="modal-dialog">
	                    <div class="modal-content">
	                        <div class="modal-header">
	                            <button type="button" class="close" data-dismiss="modal">×</button>
	                        <h4 class="modal-title">Warning!!</h4>
	                        </div>
		                        <div class="modal-body">
		                        <p>本当に削除しますか?</p>
		                        </div>
	                        <div class="modal-footer">
	                        <button type="button" class="btn btn-default" data-dismiss="modal">はい</button>
	                      	</div>
	                	</div>
					</div>
     			</div>
     			</span> -->


	</div>
</div>
		
	<div class="container">
  		<div class="row" width="1500">
	   		<div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.html"><span class="edit">編集</span></a>/<a href="#" data-toggle="modal" data-target="#myModal"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<p class="star">★★★☆☆</p></span>家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に...
			  	<p class="btn btn-default" href="#">More Info</p></td>
			 	</tr>
			 	<tr>
			  	<td height="60px">写真1</td>
			  	<td height="60px">写真2</td>
			  	<td height="60px">写真3</td>
			  	</tr>
			 	<tr>
			  	<td colspan="3" height="80px" class="evaluation">この記事が参考になったと答えた人<br>はい●●人　いいえ●●人</td>
			 	</tr>
			 	</table>
			</div>
			<div class="col-sm-3">
			 	<div id="map_canvas_01" class="" style="width:280px; height:332px;">
	    			<script type="text/javascript" src="custom/js/tabilog.js">
	    			</script>
	        		<script async defer
	      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
	        		</script>
	    		</div>
    		</div>
			<div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.html"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span>家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に...
			  	<p class="btn btn-default" href="#">More Info</p></td>
			 	</tr>
			 	<tr>
			  	<td height="60px">写真1</td>
			  	<td height="60px">写真2</td>
			  	<td height="60px">写真3</td>
			 	</tr>
			 	<tr>
			  	<td colspan="3" height="80px" class="evaluation">この記事が参考になったと答えた人<br>はい●●人　いいえ●●人</td>
			 	</tr>
			 	</table>
			</div>
			<div class="col-sm-3">
			 	<div id="map_canvas_02" class="" style="width:280px; height:332px;">
	    			<script type="text/javascript" src="custom/js/tabilog.js">
	    			</script>
	        		<script async defer
	      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
	        		</script>
	    		</div>
    		</div>
		</div>
		<br>
		<div class="row" width="1500">
	   		<div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.html"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span>家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に...
			  	<p class="btn btn-default" href="#">More Info</p></td>
			 	</tr>
			 	<tr>
			  	<td height="60px">写真1</td>
			  	<td height="60px">写真2</td>
			  	<td height="60px">写真3</td>
			  	</tr>
			 	<tr>
			  	<td colspan="3" height="80px" class="evaluation">この記事が参考になったと答えた人<br>はい●●人　いいえ●●人</td>
			 	</tr>
			 	</table>
			</div>
			<div class="col-sm-3">
			 	<div id="map_canvas_03" class="" style="width:280px; height:332px;">
	    			<script type="text/javascript" src="custom/js/tabilog.js">
	    			</script>
	        		<script async defer
	      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
	        		</script>
	    		</div>
    		</div>
		<div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.html"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span>家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に...
			  	<p class="btn btn-default" href="#">More Info</p></td>
			 	</tr>
			 	<tr>
			  	<td height="60px">写真1</td>
			  	<td height="60px">写真2</td>
			  	<td height="60px">写真3</td>
			 	</tr>
			 	<tr>
			  	<td colspan="3" height="80px" class="evaluation">この記事が参考になったと答えた人<br>はい●●人　いいえ●●人</td>
			 	</tr>
			 	</table>
			</div>
			<div class="col-sm-3">
			 	<div id="map_canvas_04" class="" style="width:280px; height:332px;">
	    			<script type="text/javascript" src="custom/js/tabilog.js">
	    			</script>
	        		<script async defer
	      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
	        		</script>
	    		</div>
    		</div>
		</div>
	</div>    
    
    
    



 


   <!-- </div>
  </div>
 </div>
</div>
</div> -->
   
    


		 


		 
		<!-- <div class="maintopic">
			<h1>●●さんの投稿一覧</h1>
		</div>
            <div class="col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <div class="title"><h2>初オーストラリア!!</h2></div>
                <p class="star">★★★</p>
                <p class="sentense-box">念願のオーストラリアに来ることができました!!コアラやカンガルーを間近でみることができて...</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <div class="title"><h2>家族旅行　in セブ</h2></div>
                <p class="star">★★★</p>
                <p class="sentense-box">今年の初めに家族4人でセブ島に行きました。海もきれいでホテルも雰囲気が良く...</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div>
            
             <div class="col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <div class="title"><h2>初オーストラリア!!</h2></div>
                <p class="star">★★★</p>
                <p class="sentense-box">念願のオーストラリアに来ることができました!!コアラやカンガルーを間近でみることができて...</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div>
         </div> --> 
		<!-- end:header-top -->
		<!-- <div id="fh5co-work-section">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box">
						<h3 class="heading-section">Selected Work</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
					</div>
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="fh5co-grid animate-box" style="background-image: url(images/work-2.jpg);">
									<a class="image-popup text-center" href="#">
										<div class="prod-title">
											<h3>Don’t Just Stand There</h3>
											<span>Illustration, Print</span>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="fh5co-grid animate-box" style="background-image: url(images/work-3.jpg);">
									<a class="image-popup text-center" href="#">
										<div class="prod-title">
											<h3>Don’t Just Stand There</h3>
											<span>Illustration, Print</span>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="fh5co-grid animate-box" style="background-image: url(images/work-4.jpg);">
									<a class="image-popup text-center" href="#">
										<div class="prod-title">
											<h3>Don’t Just Stand There</h3>
											<span>Illustration, Print</span>
										</div>
									</a>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="fh5co-grid animate-box" style="background-image: url(images/work-5.jpg);">
									<a class="image-popup text-center" href="#">
										<div class="prod-title">
											<h3>Don’t Just Stand There</h3>
											<span>Illustration, Print</span>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- fh5co-work-section -->
		<!-- <div id="fh5co-services-section" class="border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box">
						<h3 class="heading-section">What We Do</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
					</div>
					<div class="col-md-9 col-sm-12">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-browser"></i></span>
									<h3>Web Development</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-mobile"></i></span>
									<h3>Mobile Apps</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-tools"></i></span>
									<h3>UX Design</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-video"></i></span>
									<h3>Video Editing</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-search"></i></span>
									<h3>SEO Ranking</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-cloud"></i></span>
									<h3>Cloud Based Apps</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- fh5co-services-section -->




		<!-- <div id="fh5co-content-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="fh5co-testimonial text-center animate-box">
							<h2>What Others Think</h2>
							<figure>
								<img src="images/user-1.jpg" alt="user">
							</figure>
							<blockquote>
								<p>“Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn’t really do it, they just saw something. It seemed obvious to them after a while.”</p>
							</blockquote>
							<span>Steve Jobs, Apple Inc.</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="fh5co-about-us animate-box">
							<h2 class="text-center">About Us</h2>
							<img src="images/about-image.jpg" alt="About Us">
							<p>Far far away, behind the word mountains, far f`rom the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. <br><a href="#">Know More About Us</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

 -->
		<!-- <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
           </div>
            <! /.col-md-4 -->
            <!-- <div class="col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div> -->
 

            <!-- /.col-md-4 -->
            <!-- <div class="col-md-4">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div> -->
            <!-- /.col-md-4 -->
       



       <!-- <! <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
           </div>
            <! /.col-md-4 -->
            <!-- <div class="col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div> -->


            <!-- /.col-md-4 -->
            <!-- <div class="col-md-4">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div> -->
            <!-- /.col-md-4 -->
       <!--  </div> -->





        <!-- <div class="row">
            <div class="col-md-offset-1 col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div>
           </div>
            <! /.col-md-4 -->
            <!-- <div class="col-md-5 col-sm-6">
             <div class="fh5co-testimonial text-center animate-box">
                <h2>Heading 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
             </div>
            </div>
 --> 

            <!-- /.col-md-4 -->
            <!-- <div class="col-md-4">
                <h2>Heading 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe rem nisi accusamus error velit animi non ipsa placeat. Recusandae, suscipit, soluta quibusdam accusamus a veniam quaerat eveniet eligendi dolor consectetur.</p>
                <a class="btn btn-default" href="#">More Info</a>
            </div> -->
            <!-- /.col-md-4 -->
        <!-- </div> -->
 






		<!-- fh5co-content-section -->
		<!-- <div id="fh5co-blog-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-sm-12 animate-box">
						<h3 class="heading-section">Latest from Blog</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
					</div>
					<div class="col-lg-9 col-sm-12">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box" style="background-image: url(images/blog-1.jpg);">
									<a class="image-popup" href="#">
										<div class="prod-title">
											<span>Illustration</span>
											<h3>45 Minimal Worksspace Rooms for Web Savvys</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</a> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box" style="background-image: url(images/blog-2.jpg);">
									<a class="image-popup" href="#">
										<div class="prod-title">
											<span>Illustration</span>
											<h3>Don’t Just Stand There</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</a> 
								</div>
							</div>
							<div class="col-lg-4 col-md-4">
								<div class="fh5co-blog animate-box" style="background-image: url(images/blog-3.jpg);">
									<a class="image-popup" href="#">
										<div class="prod-title">
											<span>Illustration</span>
											<h3>Don’t Just Stand There</h3>
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- fh5co-blog-section -->
<br>
<br>
<div class="container pagination">
	<div class="row">
		<ul class="pagination">
		    <li><a href="#">«</a></li>
			<li><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
			<li><a href="#">»</a></li>
		</ul>
	</div>
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
				<!-- <h1 id="footer-logo">旅ログ</h1> -->
			</div>
		</footer>

	</div>

	<!-- END fh5co-page -->

<!-- </div> -->
	<!-- END fh5co-wrapper -->


	<!-- Google mapを複数読み込むのに必要 -->
<script type="text/javascript">
  (function(){
    var latlng = new google.maps.LatLng(34.687298, 135.526226);
    var myOptions = {
        zoom: 15
      , center: latlng
      , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map_01 = new google.maps.Map(
        document.getElementById("map_canvas_01")
      , myOptions
    );
    var marker = new google.maps.Marker({ 
        position: latlng, 
        map: map_01
    });


    var latlng = new google.maps.LatLng(34.651312, 135.510388);
    var myOptions = {
        zoom: 15
      , center: latlng
      , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map_02 = new google.maps.Map(
        document.getElementById("map_canvas_02")
      , myOptions
    );
    var marker = new google.maps.Marker({ 
        position: latlng, 
        map: map_02
    });


    var latlng = new google.maps.LatLng(34.809425, 135.532477);
    var myOptions = {
        zoom: 12
      , center: latlng
      , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map_03 = new google.maps.Map(
        document.getElementById("map_canvas_03")
      , myOptions
    );
    var marker = new google.maps.Marker({ 
        position: latlng, 
        map: map_03
    });

    var latlng = new google.maps.LatLng(34.809425, 135.532477);
    var myOptions = {
        zoom: 12
      , center: latlng
      , mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map_03 = new google.maps.Map(
        document.getElementById("map_canvas_04")
      , myOptions
    );
    var marker = new google.maps.Marker({ 
        position: latlng, 
        map: map_03
    });

  }());
 </script>

	
	

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
</div>
  <!-- END fh5co-wrapper -->

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

