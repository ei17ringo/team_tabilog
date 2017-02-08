<?php
	// var_dump($viewOptions);

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
  		<div class="row" width="1500">
	   		<div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.php"><span class="edit">編集</span></a>/<a href="#" data-toggle="modal" data-target="#myModal"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<p class="star">★★★☆☆</p></span><!-- 
			  	家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に... -->

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
			  	<a href="edit.php"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span><!-- 家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に... -->
			  	

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
			  	<a href="edit.php"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span><!-- 家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に... -->
			  	
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
			  	<a href="edit.php"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span><!-- 家族４人でセブに旅行に行きました。海もきれいで最高でした!とくにホテルは想像以上に... -->
			  	

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

