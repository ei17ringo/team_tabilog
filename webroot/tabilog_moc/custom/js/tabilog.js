// google map
function initMap() {


  var opts = {
    zoom: 15,
    center: new google.maps.LatLng(-37.81319, 144.96298)
  };
  var map = new google.maps.Map(document.getElementById("map"), opts);



             // 情報ウィンドウ
			// var infowindow1 = new google.maps.InfoWindow({
			// 	position:map.getCenter(), 
   //              map:map,
			//   content: '場所：'+'メルボルン'+"<br />"+'おすすめ度：'+'★★★☆☆',
			// });


			  // マーカー
             var marker = new google.maps.Marker({ 
                position:map.getCenter(), 
                map:map,
            }); 

            　//マーカークリック時に動作する情報ウィンドウ 
            google.maps.event.addListener(marker, "click", function() {
			var infowindow = new google.maps.InfoWindow({
			content: '場所：'+'メルボルン'+"<br />"+'おすすめ度：'+'★★★☆☆'
			});
			infowindow.open(map, marker);
			});

}



// carousel
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

// mypage.html Google MapのJavaScript開始
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
// mypage.html Google MapのJavaScript終了