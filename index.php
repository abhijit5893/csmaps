<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Info windows</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
		function initMap() {
		  var denver = {lat: 39.7392358, lng: -104.990251};
		  var map = new google.maps.Map(document.getElementById('map'), {
		    zoom: 10,
		    center: denver
		  });

		var school1 = {lat: 39.6175187, lng: -105.0643964};
		var contentString1 = '<div id="school1" name="Grant Ranch Middle School">Class: 1<br/>Minority: 63%<br/>Free/DiscountedLunch: 52</div>';
		var infowindow1 = new google.maps.InfoWindow({
		    content: contentString1
		  });
		var marker1 = new google.maps.Marker({
		    position: school1,
		    map: map,
		    title: 'Grant Ranch Middle School'
		  });
		marker1.addListener('click', function() {
		    infowindow1.open(map, marker1);
		  });
		}

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCOqhSR1WZP7rppMbHu7Fj-b4JA6Trvy8&signed_in=true&callback=initMap"></script>
  </body>
</html>
Except