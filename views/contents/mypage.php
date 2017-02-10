
<!-- <?php

// var_dump($viewOptions);

?>
 -->





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


<body>

<nav class="navbar navbar-default">
 <div class="container-fluid">
    <div class="navbar-header" style="padding-left: 10px">
      <!-- <button type="button" class="btn btn-default navbar-btn pull-left">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </button> -->
      <div class="navbar-text navbar-brand-centered">
                  <?php $firt_content=current($viewOptions); ?>
      <h3><a href="../users"><?php echo $firt_content['user_name']; ?>さんの投稿一覧</a></h3>
      </div>      			
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
  			<?php foreach($viewOptions as $content): ?>
	   		<div class="col-sm-3">
					<table border="3" width="280px" class="table">
				 	<tr>
				  	<td colspan="3" height="20px" class="title"><?php echo $content['title']; ?></td>
				 	</tr>
				 	<tr>
				  	<td height="70px" colspan="3">
				  	<a href="../edit/<?php echo $content['content_id']; ?>"><span class="edit">編集</span></a>/<a href="#" data-toggle="modal" data-target="#myModal">
				  	<a href="../delete/<?php echo $content['content_id']; ?>"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a></a>
				  		<?php echo $str = mb_strimwidth($content['content'], 0, 30, '…', 'UTF-8'); ?>
				  	<p class="star"><?php for($i=0; $i<$content['rating']; $i++ ){
				  		echo '★';
				  		} ?><?php for($i=0; $i<5-$content['rating']; $i++){
				  		echo '☆';
				  		}?>
				  	</p></span>
				  		
				  	
				  	<a class="btn btn-default" href="../show/<?php echo $content['content_id']; ?>">More Info</a>
				  	</td>
				 	</tr>
				 	<tr>
				  	<td height="20px" width="25px"><img src="../../webroot/images/<?php echo $content['picture_path1']; ?>" height="75px" width="75px"></td>
				  	<td height="20px" width="25px"><img src="../../webroot/images/<?php echo $content['picture_path2']; ?>" height="75px" width="75px"></td>
				  	<td height="20px" width="25px"><img src="../../webroot/images/<?php echo $content['picture_path3']; ?>" height="75px" width="75px"></td>
				  	</tr>
				 	<tr>
				  	<td colspan="3" height="80px" class="evaluation">この記事が参考になったと答えた人<br>はい●●人　いいえ●●人</td>
				 	</tr>
				 	</table>
			</div>
			
			<?php endforeach ?>
		
			<!-- <div class="col-sm-3">
			 	<div id="map_canvas_01" class="" style="width:280px; height:332px;">
	    			<script type="text/javascript" src="custom/js/tabilog.js">
	    			</script>
	        		<script async defer
	      			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb7OPnnqxQiEZPG4T3ACsxXENeRfq5LMs&callback=initMap">
	        		</script>
	    		</div>
    		</div> -->
			<!-- <div class="col-sm-3">
				<table border="3" width="280px" class="table">
			 	<tr>
			  	<td colspan="3" height="20px" class="title">セブ旅行</td>
			 	</tr>
			 	<tr>
			  	<td height="70px" colspan="3">
			  	<a href="edit.php"><span class="edit">編集</span></a>/<a href="#"><span class="delete"><span value="削除" onClick="disp()">削除</span></span></a>
			  	<span><p class="star">★★★☆☆</p></span>
			  	

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
			  	<span><p class="star">★★★☆☆</p></span>
			  	
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
			  	<span><p class="star">★★★☆☆</p></span>
			  	

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
    		</div> -->
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


    // var latlng = new google.maps.LatLng(34.651312, 135.510388);
    // var myOptions = {
    //     zoom: 15
    //   , center: latlng
    //   , mapTypeId: google.maps.MapTypeId.ROADMAP
    // };
    // var map_02 = new google.maps.Map(
    //     document.getElementById("map_canvas_02")
    //   , myOptions
    // );
    // var marker = new google.maps.Marker({ 
    //     position: latlng, 
    //     map: map_02
    // });


    // var latlng = new google.maps.LatLng(34.809425, 135.532477);
    // var myOptions = {
    //     zoom: 12
    //   , center: latlng
    //   , mapTypeId: google.maps.MapTypeId.ROADMAP
    // };
    // var map_03 = new google.maps.Map(
    //     document.getElementById("map_canvas_03")
    //   , myOptions
    // );
    // var marker = new google.maps.Marker({ 
    //     position: latlng, 
    //     map: map_03
    // });

    // var latlng = new google.maps.LatLng(34.809425, 135.532477);
    // var myOptions = {
    //     zoom: 12
    //   , center: latlng
    //   , mapTypeId: google.maps.MapTypeId.ROADMAP
    // };
    // var map_03 = new google.maps.Map(
    //     document.getElementById("map_canvas_04")
    //   , myOptions
    // );
    // var marker = new google.maps.Marker({ 
    //     position: latlng, 
    //     map: map_03
    // });

  }());
 </script>

	
	

	<!-- jQuery -->

	

