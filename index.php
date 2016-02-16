<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>CS Maps</title>
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

  var school1 = {lat: 39.616604, lng: -105.067432};
    var contentString1 = '<div id="school1" name="Grant Ranch Middle Ranch">Name: Grant Ranch Middle Ranch<br/>Class: 1<br/>Minority: 63<br/>Free/DiscountedLunch: 52</div>';
    var infowindow1 = new google.maps.InfoWindow({
        content: contentString1
      });
    var image1 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker1 = new google.maps.Marker({
        position: school1,
        map: map,
        title: 'Grant Ranch Middle Ranch',
        icon: image1
      });   marker1.addListener('click', function() {
        infowindow1.open(map, marker1);
      });


var school2 = {lat: 39.878664, lng: -104.682105};
    var contentString2 = '<div id="school2" name="Martin Luther King Jr Early College">Name: Martin Luther King Jr Early College<br/>Class: 0<br/>Minority: 95.7<br/>Free/DiscountedLunch: 85.9</div>';
    var infowindow2 = new google.maps.InfoWindow({
        content: contentString2
      });
    var image2 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker2 = new google.maps.Marker({
        position: school2,
        map: map,
        title: 'Martin Luther King Jr Early College',
        icon: image2
      });   marker2.addListener('click', function() {
        infowindow2.open(map, marker2);
      });


var school3 = {lat: 39.755812, lng: -104.968091};
    var contentString3 = '<div id="school3" name="Whittier K-8">Name: Whittier K-8<br/>Class: 0<br/>Minority: 94.7<br/>Free/DiscountedLunch: 90.2</div>';
    var infowindow3 = new google.maps.InfoWindow({
        content: contentString3
      });
    var image3 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker3 = new google.maps.Marker({
        position: school3,
        map: map,
        title: 'Whittier K-8',
        icon: image3
      });   marker3.addListener('click', function() {
        infowindow3.open(map, marker3);
      });


var school4 = {lat: 39.804295, lng: -105.020676};
    var contentString4 = '<div id="school4" name="Valley View K-8">Name: Valley View K-8<br/>Class: 0<br/>Minority: 77<br/>Free/DiscountedLunch: 70</div>';
    var infowindow4 = new google.maps.InfoWindow({
        content: contentString4
      });
    var image4 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker4 = new google.maps.Marker({
        position: school4,
        map: map,
        title: 'Valley View K-8',
        icon: image4
      });   marker4.addListener('click', function() {
        infowindow4.open(map, marker4);
      });


var school5 = {lat: 39.668252, lng: -105.096661};
    var contentString5 = '<div id="school5" name="Henry World Middle School">Name: Henry World Middle School<br/>Class: 0<br/>Minority: 89.7<br/>Free/DiscountedLunch: 86.9</div>';
    var infowindow5 = new google.maps.InfoWindow({
        content: contentString5
      });
    var image5 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker5 = new google.maps.Marker({
        position: school5,
        map: map,
        title: 'Henry World Middle School',
        icon: image5
      });   marker5.addListener('click', function() {
        infowindow5.open(map, marker5);
      });


var school6 = {lat: 39.692876, lng: -104.909685};
    var contentString6 = '<div id="school6" name="Denver Green School">Name: Denver Green School<br/>Class: 0<br/>Minority: 61.2<br/>Free/DiscountedLunch: 59.9</div>';
    var infowindow6 = new google.maps.InfoWindow({
        content: contentString6
      });
    var image6 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker6 = new google.maps.Marker({
        position: school6,
        map: map,
        title: 'Denver Green School',
        icon: image6
      });   marker6.addListener('click', function() {
        infowindow6.open(map, marker6);
      });


var school7 = {lat: 39.878662, lng: -104.682107};
    var contentString7 = '<div id="school7" name="Pitt Waller K-8">Name: Pitt Waller K-8<br/>Class: 0<br/>Minority: 92.6<br/>Free/DiscountedLunch: 78.3</div>';
    var infowindow7 = new google.maps.InfoWindow({
        content: contentString7
      });
    var image7 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker7 = new google.maps.Marker({
        position: school7,
        map: map,
        title: 'Pitt Waller K-8',
        icon: image7
      });   marker7.addListener('click', function() {
        infowindow7.open(map, marker7);
      });


var school8 = {lat: 39.769812, lng: -105.014832};
    var contentString8 = '<div id="school8" name="Bryant Webster K-8">Name: Bryant Webster K-8<br/>Class: 0<br/>Minority: 96<br/>Free/DiscountedLunch: 86</div>';
    var infowindow8 = new google.maps.InfoWindow({
        content: contentString8
      });
    var image8 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker8 = new google.maps.Marker({
        position: school8,
        map: map,
        title: 'Bryant Webster K-8',
        icon: image8
      });   marker8.addListener('click', function() {
        infowindow8.open(map, marker8);
      });


var school9 = {lat: 39.732746, lng: -104.971012};
    var contentString9 = '<div id="school9" name="Morey Middle School">Name: Morey Middle School<br/>Class: 1<br/>Minority: 59<br/>Free/DiscountedLunch: 47.4</div>';
    var infowindow9 = new google.maps.InfoWindow({
        content: contentString9
      });
    var image9 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker9 = new google.maps.Marker({
        position: school9,
        map: map,
        title: 'Morey Middle School',
        icon: image9
      });   marker9.addListener('click', function() {
        infowindow9.open(map, marker9);
      });


var school10 = {lat: 39.675127, lng: -104.968091};
    var contentString10 = '<div id="school10" name="Grant Beacon Middle Scool">Name: Grant Beacon Middle Scool<br/>Class: 1<br/>Minority: 87.4<br/>Free/DiscountedLunch: 83.5</div>';
    var infowindow10 = new google.maps.InfoWindow({
        content: contentString10
      });
    var image10 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker10 = new google.maps.Marker({
        position: school10,
        map: map,
        title: 'Grant Beacon Middle Scool',
        icon: image10
      });   marker10.addListener('click', function() {
        infowindow10.open(map, marker10);
      });


var school11 = {lat: 39.692874, lng: -104.909687};
    var contentString11 = '<div id="school11" name="George Washington">Name: George Washington<br/>Class: 2<br/>Minority: 70<br/>Free/DiscountedLunch: 50.97</div>';
    var infowindow11 = new google.maps.InfoWindow({
        content: contentString11
      });
    var image11 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker11 = new google.maps.Marker({
        position: school11,
        map: map,
        title: 'George Washington',
        icon: image11
      });   marker11.addListener('click', function() {
        infowindow11.open(map, marker11);
      });


var school12 = {lat: 39.611793, lng: -104.950567};
    var contentString12 = '<div id="school12" name="West Middle School">Name: West Middle School<br/>Class: ?<br/>Minority: 30<br/>Free/DiscountedLunch: ?</div>';
    var infowindow12 = new google.maps.InfoWindow({
        content: contentString12
      });
    var image12 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker12 = new google.maps.Marker({
        position: school12,
        map: map,
        title: 'West Middle School',
        icon: image12
      });   marker12.addListener('click', function() {
        infowindow12.open(map, marker12);
      });


var school13 = {lat: 39.665649, lng: -104.886328};
    var contentString13 = '<div id="school13" name="Hamilton Middle School">Name: Hamilton Middle School<br/>Class: 1<br/>Minority: 63<br/>Free/DiscountedLunch: 57.9</div>';
    var infowindow13 = new google.maps.InfoWindow({
        content: contentString13
      });
    var image13 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker13 = new google.maps.Marker({
        position: school13,
        map: map,
        title: 'Hamilton Middle School',
        icon: image13
      });   marker13.addListener('click', function() {
        infowindow13.open(map, marker13);
      });


var school14 = {lat: 39.912247, lng: -105.003146};
    var contentString14 = '<div id="school14" name="Silver Hills Middle">Name: Silver Hills Middle<br/>Class: 1<br/>Minority: 36<br/>Free/DiscountedLunch: ?</div>';
    var infowindow14 = new google.maps.InfoWindow({
        content: contentString14
      });
    var image14 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker14 = new google.maps.Marker({
        position: school14,
        map: map,
        title: 'Silver Hills Middle',
        icon: image14
      });   marker14.addListener('click', function() {
        infowindow14.open(map, marker14);
      });


var school15 = {lat: 39.731698, lng: -104.921364};
    var contentString15 = '<div id="school15" name="Hill campus of arts & sciences">Name: Hill campus of arts & sciences<br/>Class: 2<br/>Minority: 65<br/>Free/DiscountedLunch: 59.2</div>';
    var infowindow15 = new google.maps.InfoWindow({
        content: contentString15
      });
    var image15 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker15 = new google.maps.Marker({
        position: school15,
        map: map,
        title: 'Hill campus of arts & sciences',
        icon: image15
      });   marker15.addListener('click', function() {
        infowindow15.open(map, marker15);
      });


var school16 = {lat: 39.76981, lng: -105.014834};
    var contentString16 = '<div id="school16" name="Skinner Middle">Name: Skinner Middle<br/>Class: 0<br/>Minority: 73.1<br/>Free/DiscountedLunch: 66.4</div>';
    var infowindow16 = new google.maps.InfoWindow({
        content: contentString16
      });
    var image16 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker16 = new google.maps.Marker({
        position: school16,
        map: map,
        title: 'Skinner Middle',
        icon: image16
      });   marker16.addListener('click', function() {
        infowindow16.open(map, marker16);
      });


var school17 = {lat: 39.696161, lng: -105.038208};
    var contentString17 = '<div id="school17" name="Kepner Middle">Name: Kepner Middle<br/>Class: ?<br/>Minority: 96.4<br/>Free/DiscountedLunch: 96</div>';
    var infowindow17 = new google.maps.InfoWindow({
        content: contentString17
      });
    var image17 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker17 = new google.maps.Marker({
        position: school17,
        map: map,
        title: 'Kepner Middle',
        icon: image17
      });   marker17.addListener('click', function() {
        infowindow17.open(map, marker17);
      });


var school18 = {lat: 39.804293, lng: -105.020678};
    var contentString18 = '<div id="school18" name="Scott Carpenter">Name: Scott Carpenter<br/>Class: 1<br/>Minority: 91<br/>Free/DiscountedLunch: 8</div>';
    var infowindow18 = new google.maps.InfoWindow({
        content: contentString18
      });
    var image18 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker18 = new google.maps.Marker({
        position: school18,
        map: map,
        title: 'Scott Carpenter',
        icon: image18
      });   marker18.addListener('click', function() {
        infowindow18.open(map, marker18);
      });


var school19 = {lat: 39.804293, lng: -105.020678};
    var contentString19 = '<div id="school19" name="Ranum Middle">Name: Ranum Middle<br/>Class: 0<br/>Minority: 88<br/>Free/DiscountedLunch: 12.5</div>';
    var infowindow19 = new google.maps.InfoWindow({
        content: contentString19
      });
    var image19 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker19 = new google.maps.Marker({
        position: school19,
        map: map,
        title: 'Ranum Middle',
        icon: image19
      });   marker19.addListener('click', function() {
        infowindow19.open(map, marker19);
      });


var school20 = {lat: 39.647845, lng: -105.04113};
    var contentString20 = '<div id="school20" name="College View Middle">Name: College View Middle<br/>Class: ?<br/>Minority: 94.9<br/>Free/DiscountedLunch: 93.7</div>';
    var infowindow20 = new google.maps.InfoWindow({
        content: contentString20
      });
    var image20 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker20 = new google.maps.Marker({
        position: school20,
        map: map,
        title: 'College View Middle',
        icon: image20
      });   marker20.addListener('click', function() {
        infowindow20.open(map, marker20);
      });


var school21 = {lat: 39.778133, lng: -104.874651};
    var contentString21 = '<div id="school21" name="DSST Stapleton">Name: DSST Stapleton<br/>Class: ?<br/>Minority: 75.1<br/>Free/DiscountedLunch: 60.5</div>';
    var infowindow21 = new google.maps.InfoWindow({
        content: contentString21
      });
    var image21 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker21 = new google.maps.Marker({
        position: school21,
        map: map,
        title: 'DSST Stapleton',
        icon: image21
      });   marker21.addListener('click', function() {
        infowindow21.open(map, marker21);
      });


var school22 = {lat: 39.700784, lng: -105.003146};
    var contentString22 = '<div id="school22" name="Kipp Sunshine Peak Academy">Name: Kipp Sunshine Peak Academy<br/>Class: ?<br/>Minority: 98.5<br/>Free/DiscountedLunch: 97.5</div>';
    var infowindow22 = new google.maps.InfoWindow({
        content: contentString22
      });
    var image22 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker22 = new google.maps.Marker({
        position: school22,
        map: map,
        title: 'Kipp Sunshine Peak Academy',
        icon: image22
      });   marker22.addListener('click', function() {
        infowindow22.open(map, marker22);
      });


var school23 = {lat: 39.738037, lng: -105.026519};
    var contentString23 = '<div id="school23" name="Manny Martinez Middle School">Name: Manny Martinez Middle School<br/>Class: ?<br/>Minority: 93.4<br/>Free/DiscountedLunch: 86.6</div>';
    var infowindow23 = new google.maps.InfoWindow({
        content: contentString23
      });
    var image23 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker23 = new google.maps.Marker({
        position: school23,
        map: map,
        title: 'Manny Martinez Middle School',
        icon: image23
      });   marker23.addListener('click', function() {
        infowindow23.open(map, marker23);
      });


var school24 = {lat: 39.75581, lng: -104.968093};
    var contentString24 = '<div id="school24" name="Cole Middle">Name: Cole Middle<br/>Class: ?<br/>Minority: 94<br/>Free/DiscountedLunch: 82</div>';
    var infowindow24 = new google.maps.InfoWindow({
        content: contentString24
      });
    var image24 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker24 = new google.maps.Marker({
        position: school24,
        map: map,
        title: 'Cole Middle',
        icon: image24
      });   marker24.addListener('click', function() {
        infowindow24.open(map, marker24);
      });


var school25 = {lat: 39.696159, lng: -105.03821};
    var contentString25 = '<div id="school25" name="Abraham Lincoln High School">Name: Abraham Lincoln High School<br/>Class: ?<br/>Minority: 97.7<br/>Free/DiscountedLunch: 93.2</div>';
    var infowindow25 = new google.maps.InfoWindow({
        content: contentString25
      });
    var image25 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker25 = new google.maps.Marker({
        position: school25,
        map: map,
        title: 'Abraham Lincoln High School',
        icon: image25
      });   marker25.addListener('click', function() {
        infowindow25.open(map, marker25);
      });


var school26 = {lat: 39.646708, lng: -105.087892};
    var contentString26 = '<div id="school26" name="D Evelyn Junior School">Name: D Evelyn Junior School<br/>Class: 0<br/>Minority: 31.2<br/>Free/DiscountedLunch: 24.8</div>';
    var infowindow26 = new google.maps.InfoWindow({
        content: contentString26
      });
    var image26 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker26 = new google.maps.Marker({
        position: school26,
        map: map,
        title: 'D Evelyn Junior School',
        icon: image26
      });   marker26.addListener('click', function() {
        infowindow26.open(map, marker26);
      });


var school27 = {lat: 39.808654, lng: -104.833788};
    var contentString27 = '<div id="school27" name="Howell K-8">Name: Howell K-8<br/>Class: 0<br/>Minority: 98.3<br/>Free/DiscountedLunch: 92.6</div>';
    var infowindow27 = new google.maps.InfoWindow({
        content: contentString27
      });
    var image27 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker27 = new google.maps.Marker({
        position: school27,
        map: map,
        title: 'Howell K-8',
        icon: image27
      });   marker27.addListener('click', function() {
        infowindow27.open(map, marker27);
      });


var school28 = {lat: 39.76981, lng: -105.014834};
    var contentString28 = '<div id="school28" name="Academy of Urban Learning">Name: Academy of Urban Learning<br/>Class: 0<br/>Minority: 97.6<br/>Free/DiscountedLunch: 88.1</div>';
    var infowindow28 = new google.maps.InfoWindow({
        content: contentString28
      });
    var image28 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker28 = new google.maps.Marker({
        position: school28,
        map: map,
        title: 'Academy of Urban Learning',
        icon: image28
      });   marker28.addListener('click', function() {
        infowindow28.open(map, marker28);
      });


var school29 = {lat: 39.738035, lng: -105.026521};
    var contentString29 = '<div id="school29" name="ACE Community Challenge Charter School (ACE/CCS)">Name: ACE Community Challenge Charter School (ACE/CCS)<br/>Class: ?<br/>Minority: 96.2<br/>Free/DiscountedLunch: 93.2</div>';
    var infowindow29 = new google.maps.InfoWindow({
        content: contentString29
      });
    var image29 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker29 = new google.maps.Marker({
        position: school29,
        map: map,
        title: 'ACE Community Challenge Charter School (ACE/CCS)',
        icon: image29
      });   marker29.addListener('click', function() {
        infowindow29.open(map, marker29);
      });


var school30 = {lat: 39.761944, lng: -104.921364};
    var contentString30 = '<div id="school30" name="Venture Prep High School">Name: Venture Prep High School<br/>Class: 0<br/>Minority: 93.1<br/>Free/DiscountedLunch: 85.4</div>';
    var infowindow30 = new google.maps.InfoWindow({
        content: contentString30
      });
    var image30 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker30 = new google.maps.Marker({
        position: school30,
        map: map,
        title: 'Venture Prep High School',
        icon: image30
      });   marker30.addListener('click', function() {
        infowindow30.open(map, marker30);
      });


var school31 = {lat: 39.854992, lng: -105.131743};
    var contentString31 = '<div id="school31" name="Moore Middle School">Name: Moore Middle School<br/>Class: 0<br/>Minority: 72.8<br/>Free/DiscountedLunch: 75.2</div>';
    var infowindow31 = new google.maps.InfoWindow({
        content: contentString31
      });
    var image31 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker31 = new google.maps.Marker({
        position: school31,
        map: map,
        title: 'Moore Middle School',
        icon: image31
      });   marker31.addListener('click', function() {
        infowindow31.open(map, marker31);
      });


var school32 = {lat: 39.76981, lng: -105.014834};
    var contentString32 = '<div id="school32" name="Escuela Tlatelolco Centro">Name: Escuela Tlatelolco Centro<br/>Class: 0<br/>Minority: 98.3<br/>Free/DiscountedLunch: 84.6</div>';
    var infowindow32 = new google.maps.InfoWindow({
        content: contentString32
      });
    var image32 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker32 = new google.maps.Marker({
        position: school32,
        map: map,
        title: 'Escuela Tlatelolco Centro',
        icon: image32
      });   marker32.addListener('click', function() {
        infowindow32.open(map, marker32);
      });


var school33 = {lat: 39.697455, lng: -104.874651};
    var contentString33 = '<div id="school33" name="Challenge School">Name: Challenge School<br/>Class: 1<br/>Minority: 51.6<br/>Free/DiscountedLunch: 4.9</div>';
    var infowindow33 = new google.maps.InfoWindow({
        content: contentString33
      });
    var image33 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker33 = new google.maps.Marker({
        position: school33,
        map: map,
        title: 'Challenge School',
        icon: image33
      });   marker33.addListener('click', function() {
        infowindow33.open(map, marker33);
      });


var school34 = {lat: 39.669632, lng: -104.933045};
    var contentString34 = '<div id="school34" name="Denver Academy">Name: Denver Academy<br/>Class: 2<br/>Minority: 13<br/>Free/DiscountedLunch: ?</div>';
    var infowindow34 = new google.maps.InfoWindow({
        content: contentString34
      });
    var image34 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker34 = new google.maps.Marker({
        position: school34,
        map: map,
        title: 'Denver Academy',
        icon: image34
      });   marker34.addListener('click', function() {
        infowindow34.open(map, marker34);
      });


var school35 = {lat: 39.75581, lng: -104.968093};
    var contentString35 = '<div id="school35" name="Maunal High School">Name: Maunal High School<br/>Class: 1<br/>Minority: 94.4<br/>Free/DiscountedLunch: 80</div>';
    var infowindow35 = new google.maps.InfoWindow({
        content: contentString35
      });
    var image35 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker35 = new google.maps.Marker({
        position: school35,
        map: map,
        title: 'Maunal High School',
        icon: image35
      });   marker35.addListener('click', function() {
        infowindow35.open(map, marker35);
      });


var school36 = {lat: 39.616672, lng: -104.874651};
    var contentString36 = '<div id="school36" name="Cherry Creek Charter Academy">Name: Cherry Creek Charter Academy<br/>Class: 1<br/>Minority: 35<br/>Free/DiscountedLunch: 0</div>';
    var infowindow36 = new google.maps.InfoWindow({
        content: contentString36
      });
    var image36 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker36 = new google.maps.Marker({
        position: school36,
        map: map,
        title: 'Cherry Creek Charter Academy',
        icon: image36
      });   marker36.addListener('click', function() {
        infowindow36.open(map, marker36);
      });


var school37 = {lat: 39.675125, lng: -104.968093};
    var contentString37 = '<div id="school37" name="Slavens K-8">Name: Slavens K-8<br/>Class: 1<br/>Minority: 17.8<br/>Free/DiscountedLunch: 9.1</div>';
    var infowindow37 = new google.maps.InfoWindow({
        content: contentString37
      });
    var image37 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker37 = new google.maps.Marker({
        position: school37,
        map: map,
        title: 'Slavens K-8',
        icon: image37
      });   marker37.addListener('click', function() {
        infowindow37.open(map, marker37);
      });


var school38 = {lat: 39.731696, lng: -104.921366};
    var contentString38 = '<div id="school38" name="Denver School of the Arts">Name: Denver School of the Arts<br/>Class: 0<br/>Minority: 30.4<br/>Free/DiscountedLunch: 10.9</div>';
    var infowindow38 = new google.maps.InfoWindow({
        content: contentString38
      });
    var image38 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker38 = new google.maps.Marker({
        position: school38,
        map: map,
        title: 'Denver School of the Arts',
        icon: image38
      });   marker38.addListener('click', function() {
        infowindow38.open(map, marker38);
      });


var school39 = {lat: 39.526793, lng: -104.670443};
    var contentString39 = '<div id="school39" name="Core Knowledge Charter School">Name: Core Knowledge Charter School<br/>Class: 1<br/>Minority: 13<br/>Free/DiscountedLunch: 4</div>';
    var infowindow39 = new google.maps.InfoWindow({
        content: contentString39
      });
    var image39 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker39 = new google.maps.Marker({
        position: school39,
        map: map,
        title: 'Core Knowledge Charter School',
        icon: image39
      });   marker39.addListener('click', function() {
        infowindow39.open(map, marker39);
      });


var school40 = {lat: 39.178866, lng: -104.612147};
    var contentString40 = '<div id="school40" name="Elbert Junior-Senior High School">Name: Elbert Junior-Senior High School<br/>Class: 0<br/>Minority: 10<br/>Free/DiscountedLunch: 32</div>';
    var infowindow40 = new google.maps.InfoWindow({
        content: contentString40
      });
    var image40 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker40 = new google.maps.Marker({
        position: school40,
        map: map,
        title: 'Elbert Junior-Senior High School',
        icon: image40
      });   marker40.addListener('click', function() {
        infowindow40.open(map, marker40);
      });


var school41 = {lat: 39.616602, lng: -105.067434};
    var contentString41 = '<div id="school41" name="Montessori Peaks Charter Academy">Name: Montessori Peaks Charter Academy<br/>Class: 1<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow41 = new google.maps.InfoWindow({
        content: contentString41
      });
    var image41 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker41 = new google.maps.Marker({
        position: school41,
        map: map,
        title: 'Montessori Peaks Charter Academy',
        icon: image41
      });   marker41.addListener('click', function() {
        infowindow41.open(map, marker41);
      });


var school42 = {lat: 40.228841, lng: -104.997303};
    var contentString42 = '<div id="school42" name="Mead Middle school">Name: Mead Middle school<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow42 = new google.maps.InfoWindow({
        content: contentString42
      });
    var image42 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker42 = new google.maps.Marker({
        position: school42,
        map: map,
        title: 'Mead Middle school',
        icon: image42
      });   marker42.addListener('click', function() {
        infowindow42.open(map, marker42);
      });


var school43 = {lat: 39.931173, lng: -104.973933};
    var contentString43 = '<div id="school43" name="Stargate Charter School">Name: Stargate Charter School<br/>Class: 1<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow43 = new google.maps.InfoWindow({
        content: contentString43
      });
    var image43 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker43 = new google.maps.Marker({
        position: school43,
        map: map,
        title: 'Stargate Charter School',
        icon: image43
      });   marker43.addListener('click', function() {
        infowindow43.open(map, marker43);
      });


var school44 = {lat: 40.489103, lng: -104.915524};
    var contentString44 = '<div id="school44" name="Windsor Charter Academy">Name: Windsor Charter Academy<br/>Class: 1<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow44 = new google.maps.InfoWindow({
        content: contentString44
      });
    var image44 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker44 = new google.maps.Marker({
        position: school44,
        map: map,
        title: 'Windsor Charter Academy',
        icon: image44
      });   marker44.addListener('click', function() {
        infowindow44.open(map, marker44);
      });


var school45 = {lat: 39.706931, lng: -104.956408};
    var contentString45 = '<div id="school45" name="DSST: Byers Middle School">Name: DSST: Byers Middle School<br/>Class: 0<br/>Minority: 45.3<br/>Free/DiscountedLunch: 36.8</div>';
    var infowindow45 = new google.maps.InfoWindow({
        content: contentString45
      });
    var image45 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker45 = new google.maps.Marker({
        position: school45,
        map: map,
        title: 'DSST: Byers Middle School',
        icon: image45
      });   marker45.addListener('click', function() {
        infowindow45.open(map, marker45);
      });


var school46 = {lat: 39.818249, lng: -105.067432};
    var contentString46 = '<div id="school46" name="North Arvada">Name: North Arvada<br/>Class: 1<br/>Minority: 45.4<br/>Free/DiscountedLunch: 58</div>';
    var infowindow46 = new google.maps.InfoWindow({
        content: contentString46
      });
    var image46 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker46 = new google.maps.Marker({
        position: school46,
        map: map,
        title: 'North Arvada',
        icon: image46
      });   marker46.addListener('click', function() {
        infowindow46.open(map, marker46);
      });


var school47 = {lat: 39.66825, lng: -105.096663};
    var contentString47 = '<div id="school47" name="Carmody">Name: Carmody<br/>Class: 1<br/>Minority: 39.6<br/>Free/DiscountedLunch: 48.6</div>';
    var infowindow47 = new google.maps.InfoWindow({
        content: contentString47
      });
    var image47 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker47 = new google.maps.Marker({
        position: school47,
        map: map,
        title: 'Carmody',
        icon: image47
      });   marker47.addListener('click', function() {
        infowindow47.open(map, marker47);
      });


var school48 = {lat: 39.576196, lng: -105.067432};
    var contentString48 = '<div id="school48" name="Ken Caryl">Name: Ken Caryl<br/>Class: 1<br/>Minority: 25.1<br/>Free/DiscountedLunch: 22.2</div>';
    var infowindow48 = new google.maps.InfoWindow({
        content: contentString48
      });
    var image48 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker48 = new google.maps.Marker({
        position: school48,
        map: map,
        title: 'Ken Caryl',
        icon: image48
      });   marker48.addListener('click', function() {
        infowindow48.open(map, marker48);
      });


var school49 = {lat: 39.715877, lng: -105.231183};
    var contentString49 = '<div id="school49" name="Bell">Name: Bell<br/>Class: 1<br/>Minority: 28.2<br/>Free/DiscountedLunch: 32.9</div>';
    var infowindow49 = new google.maps.InfoWindow({
        content: contentString49
      });
    var image49 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker49 = new google.maps.Marker({
        position: school49,
        map: map,
        title: 'Bell',
        icon: image49
      });   marker49.addListener('click', function() {
        infowindow49.open(map, marker49);
      });


var school50 = {lat: 39.696159, lng: -105.03821};
    var contentString50 = '<div id="school50" name="Abraham Lincoln High School">Name: Abraham Lincoln High School<br/>Class: 2<br/>Minority: 97.7<br/>Free/DiscountedLunch: 93.2</div>';
    var infowindow50 = new google.maps.InfoWindow({
        content: contentString50
      });
    var image50 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker50 = new google.maps.Marker({
        position: school50,
        map: map,
        title: 'Abraham Lincoln High School',
        icon: image50
      });   marker50.addListener('click', function() {
        infowindow50.open(map, marker50);
      });


var school51 = {lat: 39.76981, lng: -105.014834};
    var contentString51 = '<div id="school51" name="Academy of Urban Learning">Name: Academy of Urban Learning<br/>Class: 0<br/>Minority: 97.6<br/>Free/DiscountedLunch: 88.1</div>';
    var infowindow51 = new google.maps.InfoWindow({
        content: contentString51
      });
    var image51 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker51 = new google.maps.Marker({
        position: school51,
        map: map,
        title: 'Academy of Urban Learning',
        icon: image51
      });   marker51.addListener('click', function() {
        infowindow51.open(map, marker51);
      });


var school52 = {lat: 39.761942, lng: -104.921366};
    var contentString52 = '<div id="school52" name="Venture Prep High School">Name: Venture Prep High School<br/>Class: 0<br/>Minority: 93.1<br/>Free/DiscountedLunch: 85.4</div>';
    var infowindow52 = new google.maps.InfoWindow({
        content: contentString52
      });
    var image52 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker52 = new google.maps.Marker({
        position: school52,
        map: map,
        title: 'Venture Prep High School',
        icon: image52
      });   marker52.addListener('click', function() {
        infowindow52.open(map, marker52);
      });


var school53 = {lat: 39.692874, lng: -104.909687};
    var contentString53 = '<div id="school53" name="George Washington">Name: George Washington<br/>Class: 2<br/>Minority: 71.7<br/>Free/DiscountedLunch: 56.6</div>';
    var infowindow53 = new google.maps.InfoWindow({
        content: contentString53
      });
    var image53 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker53 = new google.maps.Marker({
        position: school53,
        map: map,
        title: 'George Washington',
        icon: image53
      });   marker53.addListener('click', function() {
        infowindow53.open(map, marker53);
      });


var school54 = {lat: 39.66963, lng: -104.933047};
    var contentString54 = '<div id="school54" name="Denver Academy">Name: Denver Academy<br/>Class: 2<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow54 = new google.maps.InfoWindow({
        content: contentString54
      });
    var image54 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker54 = new google.maps.Marker({
        position: school54,
        map: map,
        title: 'Denver Academy',
        icon: image54
      });   marker54.addListener('click', function() {
        infowindow54.open(map, marker54);
      });


var school55 = {lat: 39.75581, lng: -104.968093};
    var contentString55 = '<div id="school55" name="Manual High School">Name: Manual High School<br/>Class: 1<br/>Minority: 94.4<br/>Free/DiscountedLunch: 88.9</div>';
    var infowindow55 = new google.maps.InfoWindow({
        content: contentString55
      });
    var image55 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker55 = new google.maps.Marker({
        position: school55,
        map: map,
        title: 'Manual High School',
        icon: image55
      });   marker55.addListener('click', function() {
        infowindow55.open(map, marker55);
      });


var school56 = {lat: 39.643928, lng: -104.898006};
    var contentString56 = '<div id="school56" name="Thomas Jefferson High School">Name: Thomas Jefferson High School<br/>Class: 4<br/>Minority: 61.3<br/>Free/DiscountedLunch: 51.8</div>';
    var infowindow56 = new google.maps.InfoWindow({
        content: contentString56
      });
    var image56 = {
      url: 'img/4.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker56 = new google.maps.Marker({
        position: school56,
        map: map,
        title: 'Thomas Jefferson High School',
        icon: image56
      });   marker56.addListener('click', function() {
        infowindow56.open(map, marker56);
      });


var school57 = {lat: 39.738035, lng: -105.026521};
    var contentString57 = '<div id="school57" name="West High School">Name: West High School<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: 85.18</div>';
    var infowindow57 = new google.maps.InfoWindow({
        content: contentString57
      });
    var image57 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker57 = new google.maps.Marker({
        position: school57,
        map: map,
        title: 'West High School',
        icon: image57
      });   marker57.addListener('click', function() {
        infowindow57.open(map, marker57);
      });


var school58 = {lat: 39.675125, lng: -104.968093};
    var contentString58 = '<div id="school58" name="South High School">Name: South High School<br/>Class: 1<br/>Minority: 73.3<br/>Free/DiscountedLunch: 67.4</div>';
    var infowindow58 = new google.maps.InfoWindow({
        content: contentString58
      });
    var image58 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker58 = new google.maps.Marker({
        position: school58,
        map: map,
        title: 'South High School',
        icon: image58
      });   marker58.addListener('click', function() {
        infowindow58.open(map, marker58);
      });


var school59 = {lat: 39.778131, lng: -104.874653};
    var contentString59 = '<div id="school59" name="Stapleton High School">Name: Stapleton High School<br/>Class: 0<br/>Minority: 70.7<br/>Free/DiscountedLunch: 53.3</div>';
    var infowindow59 = new google.maps.InfoWindow({
        content: contentString59
      });
    var image59 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker59 = new google.maps.Marker({
        position: school59,
        map: map,
        title: 'Stapleton High School',
        icon: image59
      });   marker59.addListener('click', function() {
        infowindow59.open(map, marker59);
      });


var school60 = {lat: 39.878662, lng: -104.682107};
    var contentString60 = '<div id="school60" name="Green Valley Ranch High School">Name: Green Valley Ranch High School<br/>Class: 0<br/>Minority: 90.2<br/>Free/DiscountedLunch: 67.6</div>';
    var infowindow60 = new google.maps.InfoWindow({
        content: contentString60
      });
    var image60 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker60 = new google.maps.Marker({
        position: school60,
        map: map,
        title: 'Green Valley Ranch High School',
        icon: image60
      });   marker60.addListener('click', function() {
        infowindow60.open(map, marker60);
      });


var school61 = {lat: 39.75581, lng: -104.968093};
    var contentString61 = '<div id="school61" name="Cole High School">Name: Cole High School<br/>Class: 0<br/>Minority: 86.8<br/>Free/DiscountedLunch: 76.4</div>';
    var infowindow61 = new google.maps.InfoWindow({
        content: contentString61
      });
    var image61 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker61 = new google.maps.Marker({
        position: school61,
        map: map,
        title: 'Cole High School',
        icon: image61
      });   marker61.addListener('click', function() {
        infowindow61.open(map, marker61);
      });


var school62 = {lat: 39.732744, lng: -104.971014};
    var contentString62 = '<div id="school62" name="Denver Center for 21st Learning At Wyman">Name: Denver Center for 21st Learning At Wyman<br/>Class: ?<br/>Minority: 92.3<br/>Free/DiscountedLunch: 88.1</div>';
    var infowindow62 = new google.maps.InfoWindow({
        content: contentString62
      });
    var image62 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker62 = new google.maps.Marker({
        position: school62,
        map: map,
        title: 'Denver Center for 21st Learning At Wyman',
        icon: image62
      });   marker62.addListener('click', function() {
        infowindow62.open(map, marker62);
      });


var school63 = {lat: 39.731696, lng: -104.921366};
    var contentString63 = '<div id="school63" name="Denver School of the Arts">Name: Denver School of the Arts<br/>Class: ?<br/>Minority: 29.3<br/>Free/DiscountedLunch: 11.8</div>';
    var infowindow63 = new google.maps.InfoWindow({
        content: contentString63
      });
    var image63 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker63 = new google.maps.Marker({
        position: school63,
        map: map,
        title: 'Denver School of the Arts',
        icon: image63
      });   marker63.addListener('click', function() {
        infowindow63.open(map, marker63);
      });


var school64 = {lat: 39.738035, lng: -105.026521};
    var contentString64 = '<div id="school64" name="Denver Center for International Studies">Name: Denver Center for International Studies<br/>Class: 0<br/>Minority: 77.7<br/>Free/DiscountedLunch: 54.9</div>';
    var infowindow64 = new google.maps.InfoWindow({
        content: contentString64
      });
    var image64 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker64 = new google.maps.Marker({
        position: school64,
        map: map,
        title: 'Denver Center for International Studies',
        icon: image64
      });   marker64.addListener('click', function() {
        infowindow64.open(map, marker64);
      });


var school65 = {lat: 39.747363, lng: -105.108354};
    var contentString65 = '<div id="school65" name="Lakewood High school">Name: Lakewood High school<br/>Class: 5<br/>Minority: 38<br/>Free/DiscountedLunch: 31</div>';
    var infowindow65 = new google.maps.InfoWindow({
        content: contentString65
      });
    var image65 = {
      url: 'img/5.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker65 = new google.maps.Marker({
        position: school65,
        map: map,
        title: 'Lakewood High school',
        icon: image65
      });   marker65.addListener('click', function() {
        infowindow65.open(map, marker65);
      });


var school66 = {lat: 39.85499, lng: -105.131745};
    var contentString66 = '<div id="school66" name="Ralston Valley">Name: Ralston Valley<br/>Class: 3<br/>Minority: 18<br/>Free/DiscountedLunch: 10</div>';
    var infowindow66 = new google.maps.InfoWindow({
        content: contentString66
      });
    var image66 = {
      url: 'img/3.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker66 = new google.maps.Marker({
        position: school66,
        map: map,
        title: 'Ralston Valley',
        icon: image66
      });   marker66.addListener('click', function() {
        infowindow66.open(map, marker66);
      });


var school67 = {lat: 39.816302, lng: -105.120048};
    var contentString67 = '<div id="school67" name="Arvada">Name: Arvada<br/>Class: 3<br/>Minority: 49<br/>Free/DiscountedLunch: 63</div>';
    var infowindow67 = new google.maps.InfoWindow({
        content: contentString67
      });
    var image67 = {
      url: 'img/3.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker67 = new google.maps.Marker({
        position: school67,
        map: map,
        title: 'Arvada',
        icon: image67
      });   marker67.addListener('click', function() {
        infowindow67.open(map, marker67);
      });


var school68 = {lat: 39.8163, lng: -105.12005};
    var contentString68 = '<div id="school68" name="Arvada West">Name: Arvada West<br/>Class: 1<br/>Minority: 26<br/>Free/DiscountedLunch: 29</div>';
    var infowindow68 = new google.maps.InfoWindow({
        content: contentString68
      });
    var image68 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker68 = new google.maps.Marker({
        position: school68,
        map: map,
        title: 'Arvada West',
        icon: image68
      });   marker68.addListener('click', function() {
        infowindow68.open(map, marker68);
      });


var school69 = {lat: 39.66963, lng: -104.933047};
    var contentString69 = '<div id="school69" name="Rocky Mountain School of Expeditionary learning">Name: Rocky Mountain School of Expeditionary learning<br/>Class: 1<br/>Minority: 25<br/>Free/DiscountedLunch: 0</div>';
    var infowindow69 = new google.maps.InfoWindow({
        content: contentString69
      });
    var image69 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker69 = new google.maps.Marker({
        position: school69,
        map: map,
        title: 'Rocky Mountain School of Expeditionary learning',
        icon: image69
      });   marker69.addListener('click', function() {
        infowindow69.open(map, marker69);
      });


var school70 = {lat: 39.647843, lng: -105.041132};
    var contentString70 = '<div id="school70" name="SOAR Academy">Name: SOAR Academy<br/>Class: ?<br/>Minority: 81<br/>Free/DiscountedLunch: 50</div>';
    var infowindow70 = new google.maps.InfoWindow({
        content: contentString70
      });
    var image70 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker70 = new google.maps.Marker({
        position: school70,
        map: map,
        title: 'SOAR Academy',
        icon: image70
      });   marker70.addListener('click', function() {
        infowindow70.open(map, marker70);
      });


var school71 = {lat: 39.675125, lng: -104.968093};
    var contentString71 = '<div id="school71" name=""Accelerated Schools, Denver"">Name: "Accelerated Schools, Denver"<br/>Class: 3<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow71 = new google.maps.InfoWindow({
        content: contentString71
      });
    var image71 = {
      url: 'img/3.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker71 = new google.maps.Marker({
        position: school71,
        map: map,
        title: '"Accelerated Schools, Denver"',
        icon: image71
      });   marker71.addListener('click', function() {
        infowindow71.open(map, marker71);
      });


var school72 = {lat: 39.775256, lng: -105.049897};
    var contentString72 = '<div id="school72" name="Arrupe Jesuit High School">Name: Arrupe Jesuit High School<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow72 = new google.maps.InfoWindow({
        content: contentString72
      });
    var image72 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker72 = new google.maps.Marker({
        position: school72,
        map: map,
        title: 'Arrupe Jesuit High School',
        icon: image72
      });   marker72.addListener('click', function() {
        infowindow72.open(map, marker72);
      });


var school73 = {lat: 39.738035, lng: -105.026521};
    var contentString73 = '<div id="school73" name="Beth Jacobs">Name: Beth Jacobs<br/>Class: 1<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow73 = new google.maps.InfoWindow({
        content: contentString73
      });
    var image73 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker73 = new google.maps.Marker({
        position: school73,
        map: map,
        title: 'Beth Jacobs',
        icon: image73
      });   marker73.addListener('click', function() {
        infowindow73.open(map, marker73);
      });


var school74 = {lat: 39.71825, lng: -104.889247};
    var contentString74 = '<div id="school74" name="Bishop Machebeuf Catholic High School">Name: Bishop Machebeuf Catholic High School<br/>Class: 1<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow74 = new google.maps.InfoWindow({
        content: contentString74
      });
    var image74 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker74 = new google.maps.Marker({
        position: school74,
        map: map,
        title: 'Bishop Machebeuf Catholic High School',
        icon: image74
      });   marker74.addListener('click', function() {
        infowindow74.open(map, marker74);
      });


var school75 = {lat: 39.535023, lng: -105.149287};
    var contentString75 = '<div id="school75" name="Chatfield High School">Name: Chatfield High School<br/>Class: 1<br/>Minority: 19<br/>Free/DiscountedLunch: 14</div>';
    var infowindow75 = new google.maps.InfoWindow({
        content: contentString75
      });
    var image75 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker75 = new google.maps.Marker({
        position: school75,
        map: map,
        title: 'Chatfield High School',
        icon: image75
      });   marker75.addListener('click', function() {
        infowindow75.open(map, marker75);
      });


var school76 = {lat: 39.75581, lng: -104.968093};
    var contentString76 = '<div id="school76" name="Bruce Randolph School">Name: Bruce Randolph School<br/>Class: 0<br/>Minority: 99<br/>Free/DiscountedLunch: 96</div>';
    var infowindow76 = new google.maps.InfoWindow({
        content: contentString76
      });
    var image76 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker76 = new google.maps.Marker({
        position: school76,
        map: map,
        title: 'Bruce Randolph School',
        icon: image76
      });   marker76.addListener('click', function() {
        infowindow76.open(map, marker76);
      });


var school77 = {lat: 39.76981, lng: -105.014834};
    var contentString77 = '<div id="school77" name="Fred N Thomas Career Education Center">Name: Fred N Thomas Career Education Center<br/>Class: ?<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow77 = new google.maps.InfoWindow({
        content: contentString77
      });
    var image77 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker77 = new google.maps.Marker({
        position: school77,
        map: map,
        title: 'Fred N Thomas Career Education Center',
        icon: image77
      });   marker77.addListener('click', function() {
        infowindow77.open(map, marker77);
      });


var school78 = {lat: 39.808652, lng: -104.83379};
    var contentString78 = '<div id="school78" name="Change Christian Academy">Name: Change Christian Academy<br/>Class: ?<br/>Minority: ?<br/>Free/DiscountedLunch: 0</div>';
    var infowindow78 = new google.maps.InfoWindow({
        content: contentString78
      });
    var image78 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker78 = new google.maps.Marker({
        position: school78,
        map: map,
        title: 'Change Christian Academy',
        icon: image78
      });   marker78.addListener('click', function() {
        infowindow78.open(map, marker78);
      });


var school79 = {lat: 39.808652, lng: -104.83379};
    var contentString79 = '<div id="school79" name="Collegiate Prep Academy">Name: Collegiate Prep Academy<br/>Class: ?<br/>Minority: 96.9<br/>Free/DiscountedLunch: 73.8</div>';
    var infowindow79 = new google.maps.InfoWindow({
        content: contentString79
      });
    var image79 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker79 = new google.maps.Marker({
        position: school79,
        map: map,
        title: 'Collegiate Prep Academy',
        icon: image79
      });   marker79.addListener('click', function() {
        infowindow79.open(map, marker79);
      });


var school80 = {lat: 39.684924, lng: -105.160984};
    var contentString80 = '<div id="school80" name="Green Mountain">Name: Green Mountain<br/>Class: 2<br/>Minority: 25<br/>Free/DiscountedLunch: 24</div>';
    var infowindow80 = new google.maps.InfoWindow({
        content: contentString80
      });
    var image80 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker80 = new google.maps.Marker({
        position: school80,
        map: map,
        title: 'Green Mountain',
        icon: image80
      });   marker80.addListener('click', function() {
        infowindow80.open(map, marker80);
      });


var school81 = {lat: 39.85499, lng: -105.131745};
    var contentString81 = '<div id="school81" name="Pomona">Name: Pomona<br/>Class: 1<br/>Minority: 34<br/>Free/DiscountedLunch: 36</div>';
    var infowindow81 = new google.maps.InfoWindow({
        content: contentString81
      });
    var image81 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker81 = new google.maps.Marker({
        position: school81,
        map: map,
        title: 'Pomona',
        icon: image81
      });   marker81.addListener('click', function() {
        infowindow81.open(map, marker81);
      });


var school82 = {lat: 39.738035, lng: -105.026521};
    var contentString82 = '<div id="school82" name="Colorado High School">Name: Colorado High School<br/>Class: 0<br/>Minority: 91.3<br/>Free/DiscountedLunch: 89</div>';
    var infowindow82 = new google.maps.InfoWindow({
        content: contentString82
      });
    var image82 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker82 = new google.maps.Marker({
        position: school82,
        map: map,
        title: 'Colorado High School',
        icon: image82
      });   marker82.addListener('click', function() {
        infowindow82.open(map, marker82);
      });


var school83 = {lat: 39.777584, lng: -105.108354};
    var contentString83 = '<div id="school83" name="Wheat Ridge">Name: Wheat Ridge<br/>Class: 4<br/>Minority: 39<br/>Free/DiscountedLunch: 45</div>';
    var infowindow83 = new google.maps.InfoWindow({
        content: contentString83
      });
    var image83 = {
      url: 'img/4.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker83 = new google.maps.Marker({
        position: school83,
        map: map,
        title: 'Wheat Ridge',
        icon: image83
      });   marker83.addListener('click', function() {
        infowindow83.open(map, marker83);
      });


var school84 = {lat: 39.647843, lng: -105.041132};
    var contentString84 = '<div id="school84" name="Southwest Early College">Name: Southwest Early College<br/>Class: 0<br/>Minority: 94.7<br/>Free/DiscountedLunch: 75.6</div>';
    var infowindow84 = new google.maps.InfoWindow({
        content: contentString84
      });
    var image84 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker84 = new google.maps.Marker({
        position: school84,
        map: map,
        title: 'Southwest Early College',
        icon: image84
      });   marker84.addListener('click', function() {
        infowindow84.open(map, marker84);
      });


var school85 = {lat: 39.727102, lng: -104.956408};
    var contentString85 = '<div id="school85" name="Contemporary Learning Academy High School">Name: Contemporary Learning Academy High School<br/>Class: 1<br/>Minority: 85.9<br/>Free/DiscountedLunch: 77.5</div>';
    var infowindow85 = new google.maps.InfoWindow({
        content: contentString85
      });
    var image85 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker85 = new google.maps.Marker({
        position: school85,
        map: map,
        title: 'Contemporary Learning Academy High School',
        icon: image85
      });   marker85.addListener('click', function() {
        infowindow85.open(map, marker85);
      });


var school86 = {lat: 39.808652, lng: -104.83379};
    var contentString86 = '<div id="school86" name="Denver Center for International Studies at Montbello">Name: Denver Center for International Studies at Montbello<br/>Class: 0<br/>Minority: 97.3<br/>Free/DiscountedLunch: 85.4</div>';
    var infowindow86 = new google.maps.InfoWindow({
        content: contentString86
      });
    var image86 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker86 = new google.maps.Marker({
        position: school86,
        map: map,
        title: 'Denver Center for International Studies at Montbello',
        icon: image86
      });   marker86.addListener('click', function() {
        infowindow86.open(map, marker86);
      });


var school87 = {lat: 39.509975, lng: -105.336536};
    var contentString87 = '<div id="school87" name="Conifer High">Name: Conifer High<br/>Class: 1<br/>Minority: 10<br/>Free/DiscountedLunch: 15</div>';
    var infowindow87 = new google.maps.InfoWindow({
        content: contentString87
      });
    var image87 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker87 = new google.maps.Marker({
        position: school87,
        map: map,
        title: 'Conifer High',
        icon: image87
      });   marker87.addListener('click', function() {
        infowindow87.open(map, marker87);
      });


var school88 = {lat: 39.535021, lng: -105.149289};
    var contentString88 = '<div id="school88" name="Dakota Ridge">Name: Dakota Ridge<br/>Class: 3<br/>Minority: 21<br/>Free/DiscountedLunch: 17</div>';
    var infowindow88 = new google.maps.InfoWindow({
        content: contentString88
      });
    var image88 = {
      url: 'img/3.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker88 = new google.maps.Marker({
        position: school88,
        map: map,
        title: 'Dakota Ridge',
        icon: image88
      });   marker88.addListener('click', function() {
        infowindow88.open(map, marker88);
      });


var school89 = {lat: 39.702022, lng: -104.839625};
    var contentString89 = '<div id="school89" name="Lotus School for Excellence High School">Name: Lotus School for Excellence High School<br/>Class: ?<br/>Minority: 80.9<br/>Free/DiscountedLunch: 67</div>';
    var infowindow89 = new google.maps.InfoWindow({
        content: contentString89
      });
    var image89 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker89 = new google.maps.Marker({
        position: school89,
        map: map,
        title: 'Lotus School for Excellence High School',
        icon: image89
      });   marker89.addListener('click', function() {
        infowindow89.open(map, marker89);
      });


var school90 = {lat: 39.693709, lng: -104.7871};
    var contentString90 = '<div id="school90" name="Vanguard Classical School - East Campus High School">Name: Vanguard Classical School - East Campus High School<br/>Class: 1<br/>Minority: 72.7<br/>Free/DiscountedLunch: 56.3</div>';
    var infowindow90 = new google.maps.InfoWindow({
        content: contentString90
      });
    var image90 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker90 = new google.maps.Marker({
        position: school90,
        map: map,
        title: 'Vanguard Classical School - East Campus High School',
        icon: image90
      });   marker90.addListener('click', function() {
        infowindow90.open(map, marker90);
      });


var school91 = {lat: 39.739331, lng: -104.862975};
    var contentString91 = '<div id="school91" name="APS Online High School">Name: APS Online High School<br/>Class: ?<br/>Minority: 81.1<br/>Free/DiscountedLunch: 46.2</div>';
    var infowindow91 = new google.maps.InfoWindow({
        content: contentString91
      });
    var image91 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker91 = new google.maps.Marker({
        position: school91,
        map: map,
        title: 'APS Online High School',
        icon: image91
      });   marker91.addListener('click', function() {
        infowindow91.open(map, marker91);
      });


var school92 = {lat: 39.754247, lng: -104.7871};
    var contentString92 = '<div id="school92" name="Aurora Quest Middle School">Name: Aurora Quest Middle School<br/>Class: 1<br/>Minority: 47.4<br/>Free/DiscountedLunch: 20.3</div>';
    var infowindow92 = new google.maps.InfoWindow({
        content: contentString92
      });
    var image92 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker92 = new google.maps.Marker({
        position: school92,
        map: map,
        title: 'Aurora Quest Middle School',
        icon: image92
      });   marker92.addListener('click', function() {
        infowindow92.open(map, marker92);
      });


var school93 = {lat: 39.754245, lng: -104.787102};
    var contentString93 = '<div id="school93" name="Crossroads Center High School">Name: Crossroads Center High School<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow93 = new google.maps.InfoWindow({
        content: contentString93
      });
    var image93 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker93 = new google.maps.Marker({
        position: school93,
        map: map,
        title: 'Crossroads Center High School',
        icon: image93
      });   marker93.addListener('click', function() {
        infowindow93.open(map, marker93);
      });


var school94 = {lat: 39.754245, lng: -104.787102};
    var contentString94 = '<div id="school94" name="Futures Academy High School">Name: Futures Academy High School<br/>Class: 0<br/>Minority: 90<br/>Free/DiscountedLunch: ?</div>';
    var infowindow94 = new google.maps.InfoWindow({
        content: contentString94
      });
    var image94 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker94 = new google.maps.Marker({
        position: school94,
        map: map,
        title: 'Futures Academy High School',
        icon: image94
      });   marker94.addListener('click', function() {
        infowindow94.open(map, marker94);
      });


var school95 = {lat: 39.754245, lng: -104.787102};
    var contentString95 = '<div id="school95" name="William Smith High School">Name: William Smith High School<br/>Class: 0<br/>Minority: 76.3<br/>Free/DiscountedLunch: 54.6</div>';
    var infowindow95 = new google.maps.InfoWindow({
        content: contentString95
      });
    var image95 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker95 = new google.maps.Marker({
        position: school95,
        map: map,
        title: 'William Smith High School',
        icon: image95
      });   marker95.addListener('click', function() {
        infowindow95.open(map, marker95);
      });


var school96 = {lat: 39.63, lng: -104.8};
    var contentString96 = '<div id="school96" name="AXL Academy (Expeditionary Learning) Middle School">Name: AXL Academy (Expeditionary Learning) Middle School<br/>Class: 0<br/>Minority: 73<br/>Free/DiscountedLunch: ?</div>';
    var infowindow96 = new google.maps.InfoWindow({
        content: contentString96
      });
    var image96 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker96 = new google.maps.Marker({
        position: school96,
        map: map,
        title: 'AXL Academy (Expeditionary Learning) Middle School',
        icon: image96
      });   marker96.addListener('click', function() {
        infowindow96.open(map, marker96);
      });


var school97 = {lat: 39.693707, lng: -104.787102};
    var contentString97 = '<div id="school97" name="Global Villiage Middle School">Name: Global Villiage Middle School<br/>Class: 0<br/>Minority: 84.7<br/>Free/DiscountedLunch: 59.1</div>';
    var infowindow97 = new google.maps.InfoWindow({
        content: contentString97
      });
    var image97 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker97 = new google.maps.Marker({
        position: school97,
        map: map,
        title: 'Global Villiage Middle School',
        icon: image97
      });   marker97.addListener('click', function() {
        infowindow97.open(map, marker97);
      });


var school98 = {lat: 39.739329, lng: -104.862977};
    var contentString98 = '<div id="school98" name="Aurora Central">Name: Aurora Central<br/>Class: 1<br/>Minority: 95.5<br/>Free/DiscountedLunch: 69.8</div>';
    var infowindow98 = new google.maps.InfoWindow({
        content: contentString98
      });
    var image98 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker98 = new google.maps.Marker({
        position: school98,
        map: map,
        title: 'Aurora Central',
        icon: image98
      });   marker98.addListener('click', function() {
        infowindow98.open(map, marker98);
      });


var school99 = {lat: 39.739329, lng: -104.862977};
    var contentString99 = '<div id="school99" name="Aurora West College Preparatory Academy">Name: Aurora West College Preparatory Academy<br/>Class: 0<br/>Minority: 94.9<br/>Free/DiscountedLunch: 77.7</div>';
    var infowindow99 = new google.maps.InfoWindow({
        content: contentString99
      });
    var image99 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker99 = new google.maps.Marker({
        position: school99,
        map: map,
        title: 'Aurora West College Preparatory Academy',
        icon: image99
      });   marker99.addListener('click', function() {
        infowindow99.open(map, marker99);
      });


var school100 = {lat: 39.70202, lng: -104.839627};
    var contentString100 = '<div id="school100" name="Gateway">Name: Gateway<br/>Class: 1<br/>Minority: 85.1<br/>Free/DiscountedLunch: 60</div>';
    var infowindow100 = new google.maps.InfoWindow({
        content: contentString100
      });
    var image100 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker100 = new google.maps.Marker({
        position: school100,
        map: map,
        title: 'Gateway',
        icon: image100
      });   marker100.addListener('click', function() {
        infowindow100.open(map, marker100);
      });


var school101 = {lat: 39.739329, lng: -104.862977};
    var contentString101 = '<div id="school101" name="Aurora Academy">Name: Aurora Academy<br/>Class: ?<br/>Minority: 73.3<br/>Free/DiscountedLunch: 52.9</div>';
    var infowindow101 = new google.maps.InfoWindow({
        content: contentString101
      });
    var image101 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker101 = new google.maps.Marker({
        position: school101,
        map: map,
        title: 'Aurora Academy',
        icon: image101
      });   marker101.addListener('click', function() {
        infowindow101.open(map, marker101);
      });


var school102 = {lat: 39.754245, lng: -104.787102};
    var contentString102 = '<div id="school102" name="William Smith">Name: William Smith<br/>Class: 0<br/>Minority: 76.3<br/>Free/DiscountedLunch: 54.6</div>';
    var infowindow102 = new google.maps.InfoWindow({
        content: contentString102
      });
    var image102 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker102 = new google.maps.Marker({
        position: school102,
        map: map,
        title: 'William Smith',
        icon: image102
      });   marker102.addListener('click', function() {
        infowindow102.open(map, marker102);
      });


var school103 = {lat: 39.705777, lng: -104.693767};
    var contentString103 = '<div id="school103" name="Vista PEAK Preparatory">Name: Vista PEAK Preparatory<br/>Class: 0<br/>Minority: 73.2<br/>Free/DiscountedLunch: 45.6</div>';
    var infowindow103 = new google.maps.InfoWindow({
        content: contentString103
      });
    var image103 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker103 = new google.maps.Marker({
        position: school103,
        map: map,
        title: 'Vista PEAK Preparatory',
        icon: image103
      });   marker103.addListener('click', function() {
        infowindow103.open(map, marker103);
      });


var school104 = {lat: 39.656342, lng: -104.763762};
    var contentString104 = '<div id="school104" name="Rangeview">Name: Rangeview<br/>Class: ?<br/>Minority: 73<br/>Free/DiscountedLunch: 45.6</div>';
    var infowindow104 = new google.maps.InfoWindow({
        content: contentString104
      });
    var image104 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker104 = new google.maps.Marker({
        position: school104,
        map: map,
        title: 'Rangeview',
        icon: image104
      });   marker104.addListener('click', function() {
        infowindow104.open(map, marker104);
      });


var school105 = {lat: 39.754245, lng: -104.787102};
    var contentString105 = '<div id="school105" name="Hinkley">Name: Hinkley<br/>Class: ?<br/>Minority: 91.4<br/>Free/DiscountedLunch: 71.4</div>';
    var infowindow105 = new google.maps.InfoWindow({
        content: contentString105
      });
    var image105 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker105 = new google.maps.Marker({
        position: school105,
        map: map,
        title: 'Hinkley',
        icon: image105
      });   marker105.addListener('click', function() {
        infowindow105.open(map, marker105);
      });


var school106 = {lat: 39.754245, lng: -104.787102};
    var contentString106 = '<div id="school106" name="South Middle School">Name: South Middle School<br/>Class: ?<br/>Minority: 91.6<br/>Free/DiscountedLunch: 98.3</div>';
    var infowindow106 = new google.maps.InfoWindow({
        content: contentString106
      });
    var image106 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker106 = new google.maps.Marker({
        position: school106,
        map: map,
        title: 'South Middle School',
        icon: image106
      });   marker106.addListener('click', function() {
        infowindow106.open(map, marker106);
      });


var school107 = {lat: 39.739329, lng: -104.862977};
    var contentString107 = '<div id="school107" name="North Middle School Health Sciences & Technology Campus">Name: North Middle School Health Sciences & Technology Campus<br/>Class: ?<br/>Minority: 99.5<br/>Free/DiscountedLunch: 85.6</div>';
    var infowindow107 = new google.maps.InfoWindow({
        content: contentString107
      });
    var image107 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker107 = new google.maps.Marker({
        position: school107,
        map: map,
        title: 'North Middle School Health Sciences & Technology Campus',
        icon: image107
      });   marker107.addListener('click', function() {
        infowindow107.open(map, marker107);
      });


var school108 = {lat: 39.65634, lng: -104.763764};
    var contentString108 = '<div id="school108" name="Mrachek Middle School">Name: Mrachek Middle School<br/>Class: ?<br/>Minority: 98.9<br/>Free/DiscountedLunch: 65.6</div>';
    var infowindow108 = new google.maps.InfoWindow({
        content: contentString108
      });
    var image108 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker108 = new google.maps.Marker({
        position: school108,
        map: map,
        title: 'Mrachek Middle School',
        icon: image108
      });   marker108.addListener('click', function() {
        infowindow108.open(map, marker108);
      });


var school109 = {lat: 39.65634, lng: -104.763764};
    var contentString109 = '<div id="school109" name="Columbia Middle School">Name: Columbia Middle School<br/>Class: 0<br/>Minority: 82.4<br/>Free/DiscountedLunch: 58.8</div>';
    var infowindow109 = new google.maps.InfoWindow({
        content: contentString109
      });
    var image109 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker109 = new google.maps.Marker({
        position: school109,
        map: map,
        title: 'Columbia Middle School',
        icon: image109
      });   marker109.addListener('click', function() {
        infowindow109.open(map, marker109);
      });


var school110 = {lat: 39.754245, lng: -104.787102};
    var contentString110 = '<div id="school110" name="East Middle School">Name: East Middle School<br/>Class: 0<br/>Minority: 99.1<br/>Free/DiscountedLunch: 83.9</div>';
    var infowindow110 = new google.maps.InfoWindow({
        content: contentString110
      });
    var image110 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker110 = new google.maps.Marker({
        position: school110,
        map: map,
        title: 'East Middle School',
        icon: image110
      });   marker110.addListener('click', function() {
        infowindow110.open(map, marker110);
      });


var school111 = {lat: 39.70202, lng: -104.839627};
    var contentString111 = '<div id="school111" name="Aurora Hills Middle School">Name: Aurora Hills Middle School<br/>Class: ?<br/>Minority: 89.3<br/>Free/DiscountedLunch: 75.6</div>';
    var infowindow111 = new google.maps.InfoWindow({
        content: contentString111
      });
    var image111 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker111 = new google.maps.Marker({
        position: school111,
        map: map,
        title: 'Aurora Hills Middle School',
        icon: image111
      });   marker111.addListener('click', function() {
        infowindow111.open(map, marker111);
      });


var school112 = {lat: 39.70202, lng: -104.839627};
    var contentString112 = '<div id="school112" name="Aurora West College Prep Academy Middle School">Name: Aurora West College Prep Academy Middle School<br/>Class: ?<br/>Minority: 100<br/>Free/DiscountedLunch: 77.7</div>';
    var infowindow112 = new google.maps.InfoWindow({
        content: contentString112
      });
    var image112 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker112 = new google.maps.Marker({
        position: school112,
        map: map,
        title: 'Aurora West College Prep Academy Middle School',
        icon: image112
      });   marker112.addListener('click', function() {
        infowindow112.open(map, marker112);
      });


var school113 = {lat: 39.996064, lng: -105.090815};
    var contentString113 = '<div id="school113" name="Angevine Middle School">Name: Angevine Middle School<br/>Class: 2<br/>Minority: 47.1<br/>Free/DiscountedLunch: 44</div>';
    var infowindow113 = new google.maps.InfoWindow({
        content: contentString113
      });
    var image113 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker113 = new google.maps.Marker({
        position: school113,
        map: map,
        title: 'Angevine Middle School',
        icon: image113
      });   marker113.addListener('click', function() {
        infowindow113.open(map, marker113);
      });


var school114 = {lat: 40.000538, lng: -105.20778};
    var contentString114 = '<div id="school114" name="Aspen Creek K-8 School">Name: Aspen Creek K-8 School<br/>Class: 0<br/>Minority: 21.3<br/>Free/DiscountedLunch: 13.2</div>';
    var infowindow114 = new google.maps.InfoWindow({
        content: contentString114
      });
    var image114 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker114 = new google.maps.Marker({
        position: school114,
        map: map,
        title: 'Aspen Creek K-8 School',
        icon: image114
      });   marker114.addListener('click', function() {
        infowindow114.open(map, marker114);
      });


var school115 = {lat: 40.000536, lng: -105.207782};
    var contentString115 = '<div id="school115" name="Boulder Explore">Name: Boulder Explore<br/>Class: 0<br/>Minority: 100<br/>Free/DiscountedLunch: ?</div>';
    var infowindow115 = new google.maps.InfoWindow({
        content: contentString115
      });
    var image115 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker115 = new google.maps.Marker({
        position: school115,
        map: map,
        title: 'Boulder Explore',
        icon: image115
      });   marker115.addListener('click', function() {
        infowindow115.open(map, marker115);
      });


var school116 = {lat: 39.93892, lng: -105.067432};
    var contentString116 = '<div id="school116" name="Boulder Universal">Name: Boulder Universal<br/>Class: 1<br/>Minority: 20<br/>Free/DiscountedLunch: ?</div>';
    var infowindow116 = new google.maps.InfoWindow({
        content: contentString116
      });
    var image116 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker116 = new google.maps.Marker({
        position: school116,
        map: map,
        title: 'Boulder Universal',
        icon: image116
      });   marker116.addListener('click', function() {
        infowindow116.open(map, marker116);
      });


var school117 = {lat: 40.045474, lng: -105.283851};
    var contentString117 = '<div id="school117" name="Broomfield Heights Middle School">Name: Broomfield Heights Middle School<br/>Class: ?<br/>Minority: 32.7<br/>Free/DiscountedLunch: 24.9</div>';
    var infowindow117 = new google.maps.InfoWindow({
        content: contentString117
      });
    var image117 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker117 = new google.maps.Marker({
        position: school117,
        map: map,
        title: 'Broomfield Heights Middle School',
        icon: image117
      });   marker117.addListener('click', function() {
        infowindow117.open(map, marker117);
      });


var school118 = {lat: 40.045472, lng: -105.283853};
    var contentString118 = '<div id="school118" name="Casey Middle School">Name: Casey Middle School<br/>Class: ?<br/>Minority: 47.6<br/>Free/DiscountedLunch: 40.7</div>';
    var infowindow118 = new google.maps.InfoWindow({
        content: contentString118
      });
    var image118 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker118 = new google.maps.Marker({
        position: school118,
        map: map,
        title: 'Casey Middle School',
        icon: image118
      });   marker118.addListener('click', function() {
        infowindow118.open(map, marker118);
      });


var school119 = {lat: 39.943447, lng: -105.18438};
    var contentString119 = '<div id="school119" name="Centennial Middle School">Name: Centennial Middle School<br/>Class: 1<br/>Minority: 36.5<br/>Free/DiscountedLunch: 24.9</div>';
    var infowindow119 = new google.maps.InfoWindow({
        content: contentString119
      });
    var image119 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker119 = new google.maps.Marker({
        position: school119,
        map: map,
        title: 'Centennial Middle School',
        icon: image119
      });   marker119.addListener('click', function() {
        infowindow119.open(map, marker119);
      });


var school120 = {lat: 39.943445, lng: -105.184382};
    var contentString120 = '<div id="school120" name="Eldorado K-8 School">Name: Eldorado K-8 School<br/>Class: ?<br/>Minority: 27.8<br/>Free/DiscountedLunch: 5.6</div>';
    var infowindow120 = new google.maps.InfoWindow({
        content: contentString120
      });
    var image120 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker120 = new google.maps.Marker({
        position: school120,
        map: map,
        title: 'Eldorado K-8 School',
        icon: image120
      });   marker120.addListener('click', function() {
        infowindow120.open(map, marker120);
      });


var school121 = {lat: 39.979999, lng: -105.248737};
    var contentString121 = '<div id="school121" name="Halcyon Middle-Senior">Name: Halcyon Middle-Senior<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow121 = new google.maps.InfoWindow({
        content: contentString121
      });
    var image121 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker121 = new google.maps.Marker({
        position: school121,
        map: map,
        title: 'Halcyon Middle-Senior',
        icon: image121
      });   marker121.addListener('click', function() {
        infowindow121.open(map, marker121);
      });


var school122 = {lat: 40.000536, lng: -105.207782};
    var contentString122 = '<div id="school122" name="Horizons K-8 School">Name: Horizons K-8 School<br/>Class: 0<br/>Minority: 15<br/>Free/DiscountedLunch: 7.2</div>';
    var infowindow122 = new google.maps.InfoWindow({
        content: contentString122
      });
    var image122 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker122 = new google.maps.Marker({
        position: school122,
        map: map,
        title: 'Horizons K-8 School',
        icon: image122
      });   marker122.addListener('click', function() {
        infowindow122.open(map, marker122);
      });


var school123 = {lat: 39.943445, lng: -105.184382};
    var contentString123 = '<div id="school123" name="Louisville Middle School">Name: Louisville Middle School<br/>Class: 0<br/>Minority: 22.7<br/>Free/DiscountedLunch: 12.1</div>';
    var infowindow123 = new google.maps.InfoWindow({
        content: contentString123
      });
    var image123 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker123 = new google.maps.Marker({
        position: school123,
        map: map,
        title: 'Louisville Middle School',
        icon: image123
      });   marker123.addListener('click', function() {
        infowindow123.open(map, marker123);
      });


var school124 = {lat: 40.000536, lng: -105.207782};
    var contentString124 = '<div id="school124" name="Manhattan School of Arts and Academics">Name: Manhattan School of Arts and Academics<br/>Class: 0<br/>Minority: 36.3<br/>Free/DiscountedLunch: 29.1</div>';
    var infowindow124 = new google.maps.InfoWindow({
        content: contentString124
      });
    var image124 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker124 = new google.maps.Marker({
        position: school124,
        map: map,
        title: 'Manhattan School of Arts and Academics',
        icon: image124
      });   marker124.addListener('click', function() {
        infowindow124.open(map, marker124);
      });


var school125 = {lat: 39.943445, lng: -105.184382};
    var contentString125 = '<div id="school125" name="Monarch K-8 School">Name: Monarch K-8 School<br/>Class: 1<br/>Minority: 25.9<br/>Free/DiscountedLunch: 11</div>';
    var infowindow125 = new google.maps.InfoWindow({
        content: contentString125
      });
    var image125 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker125 = new google.maps.Marker({
        position: school125,
        map: map,
        title: 'Monarch K-8 School',
        icon: image125
      });   marker125.addListener('click', function() {
        infowindow125.open(map, marker125);
      });


var school126 = {lat: 40.011812, lng: -105.641253};
    var contentString126 = '<div id="school126" name="Nederland Middle-Senior High School">Name: Nederland Middle-Senior High School<br/>Class: 2<br/>Minority: 16.9<br/>Free/DiscountedLunch: 26.2</div>';
    var infowindow126 = new google.maps.InfoWindow({
        content: contentString126
      });
    var image126 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker126 = new google.maps.Marker({
        position: school126,
        map: map,
        title: 'Nederland Middle-Senior High School',
        icon: image126
      });   marker126.addListener('click', function() {
        infowindow126.open(map, marker126);
      });


var school127 = {lat: 39.996062, lng: -105.090817};
    var contentString127 = '<div id="school127" name="Peak to Peak Charter - Middle School">Name: Peak to Peak Charter - Middle School<br/>Class: ?<br/>Minority: 27.1<br/>Free/DiscountedLunch: 7.2</div>';
    var infowindow127 = new google.maps.InfoWindow({
        content: contentString127
      });
    var image127 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker127 = new google.maps.Marker({
        position: school127,
        map: map,
        title: 'Peak to Peak Charter - Middle School',
        icon: image127
      });   marker127.addListener('click', function() {
        infowindow127.open(map, marker127);
      });


var school128 = {lat: 40.000536, lng: -105.207782};
    var contentString128 = '<div id="school128" name="Platt CHOICE Program">Name: Platt CHOICE Program<br/>Class: ?<br/>Minority: 20.1<br/>Free/DiscountedLunch: 10.7</div>';
    var infowindow128 = new google.maps.InfoWindow({
        content: contentString128
      });
    var image128 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker128 = new google.maps.Marker({
        position: school128,
        map: map,
        title: 'Platt CHOICE Program',
        icon: image128
      });   marker128.addListener('click', function() {
        infowindow128.open(map, marker128);
      });


var school129 = {lat: 39.979997, lng: -105.248739};
    var contentString129 = '<div id="school129" name="Platt Middle School">Name: Platt Middle School<br/>Class: 1<br/>Minority: 20.1<br/>Free/DiscountedLunch: 10.7</div>';
    var infowindow129 = new google.maps.InfoWindow({
        content: contentString129
      });
    var image129 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker129 = new google.maps.Marker({
        position: school129,
        map: map,
        title: 'Platt Middle School',
        icon: image129
      });   marker129.addListener('click', function() {
        infowindow129.open(map, marker129);
      });


var school130 = {lat: 39.979997, lng: -105.248739};
    var contentString130 = '<div id="school130" name="Southern Hills Middle School">Name: Southern Hills Middle School<br/>Class: 0<br/>Minority: 17<br/>Free/DiscountedLunch: 7</div>';
    var infowindow130 = new google.maps.InfoWindow({
        content: contentString130
      });
    var image130 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker130 = new google.maps.Marker({
        position: school130,
        map: map,
        title: 'Southern Hills Middle School',
        icon: image130
      });   marker130.addListener('click', function() {
        infowindow130.open(map, marker130);
      });


var school131 = {lat: 39.979997, lng: -105.248739};
    var contentString131 = '<div id="school131" name="Summit Charter Middle School">Name: Summit Charter Middle School<br/>Class: 5<br/>Minority: 39<br/>Free/DiscountedLunch: 5.7</div>';
    var infowindow131 = new google.maps.InfoWindow({
        content: contentString131
      });
    var image131 = {
      url: 'img/5.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker131 = new google.maps.Marker({
        position: school131,
        map: map,
        title: 'Summit Charter Middle School',
        icon: image131
      });   marker131.addListener('click', function() {
        infowindow131.open(map, marker131);
      });


var school132 = {lat: 40.038629, lng: -105.371668};
    var contentString132 = '<div id="school132" name="Araphoe Campus">Name: Araphoe Campus<br/>Class: ?<br/>Minority: 68.5<br/>Free/DiscountedLunch: 62</div>';
    var infowindow132 = new google.maps.InfoWindow({
        content: contentString132
      });
    var image132 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker132 = new google.maps.Marker({
        position: school132,
        map: map,
        title: 'Araphoe Campus',
        icon: image132
      });   marker132.addListener('click', function() {
        infowindow132.open(map, marker132);
      });


var school133 = {lat: 40.038627, lng: -105.37167};
    var contentString133 = '<div id="school133" name="Boulder High School">Name: Boulder High School<br/>Class: 7<br/>Minority: 30.5<br/>Free/DiscountedLunch: 21.6</div>';
    var infowindow133 = new google.maps.InfoWindow({
        content: contentString133
      });
    var image133 = {
      url: 'img/7.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker133 = new google.maps.Marker({
        position: school133,
        map: map,
        title: 'Boulder High School',
        icon: image133
      });   marker133.addListener('click', function() {
        infowindow133.open(map, marker133);
      });


var school134 = {lat: 39.739236, lng: -104.990251};
    var contentString134 = '<div id="school134" name="Boulder Preparatory High School">Name: Boulder Preparatory High School<br/>Class: 2<br/>Minority: 40.4<br/>Free/DiscountedLunch: 26.6</div>';
    var infowindow134 = new google.maps.InfoWindow({
        content: contentString134
      });
    var image134 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker134 = new google.maps.Marker({
        position: school134,
        map: map,
        title: 'Boulder Preparatory High School',
        icon: image134
      });   marker134.addListener('click', function() {
        infowindow134.open(map, marker134);
      });


var school135 = {lat: 40.000536, lng: -105.207782};
    var contentString135 = '<div id="school135" name="Broomfield High School">Name: Broomfield High School<br/>Class: 1<br/>Minority: 25.3<br/>Free/DiscountedLunch: 13.9</div>';
    var infowindow135 = new google.maps.InfoWindow({
        content: contentString135
      });
    var image135 = {
      url: 'img/1.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker135 = new google.maps.Marker({
        position: school135,
        map: map,
        title: 'Broomfield High School',
        icon: image135
      });   marker135.addListener('click', function() {
        infowindow135.open(map, marker135);
      });


var school136 = {lat: 39.996062, lng: -105.090817};
    var contentString136 = '<div id="school136" name="Career and Technical Education Center">Name: Career and Technical Education Center<br/>Class: 2<br/>Minority: 68.5<br/>Free/DiscountedLunch: 62</div>';
    var infowindow136 = new google.maps.InfoWindow({
        content: contentString136
      });
    var image136 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker136 = new google.maps.Marker({
        position: school136,
        map: map,
        title: 'Career and Technical Education Center',
        icon: image136
      });   marker136.addListener('click', function() {
        infowindow136.open(map, marker136);
      });


var school137 = {lat: 39.996062, lng: -105.090817};
    var contentString137 = '<div id="school137" name="Centarus High School">Name: Centarus High School<br/>Class: 8<br/>Minority: 37.4<br/>Free/DiscountedLunch: 29.8</div>';
    var infowindow137 = new google.maps.InfoWindow({
        content: contentString137
      });
    var image137 = {
      url: 'img/8.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker137 = new google.maps.Marker({
        position: school137,
        map: map,
        title: 'Centarus High School',
        icon: image137
      });   marker137.addListener('click', function() {
        infowindow137.open(map, marker137);
      });


var school138 = {lat: 39.979997, lng: -105.248739};
    var contentString138 = '<div id="school138" name="Fairview High School">Name: Fairview High School<br/>Class: ?<br/>Minority: 25.6<br/>Free/DiscountedLunch: 9.3</div>';
    var infowindow138 = new google.maps.InfoWindow({
        content: contentString138
      });
    var image138 = {
      url: 'img/1001.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker138 = new google.maps.Marker({
        position: school138,
        map: map,
        title: 'Fairview High School',
        icon: image138
      });   marker138.addListener('click', function() {
        infowindow138.open(map, marker138);
      });


var school139 = {lat: 39.943445, lng: -105.184382};
    var contentString139 = '<div id="school139" name="Justice High School">Name: Justice High School<br/>Class: 0<br/>Minority: ?<br/>Free/DiscountedLunch: ?</div>';
    var infowindow139 = new google.maps.InfoWindow({
        content: contentString139
      });
    var image139 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker139 = new google.maps.Marker({
        position: school139,
        map: map,
        title: 'Justice High School',
        icon: image139
      });   marker139.addListener('click', function() {
        infowindow139.open(map, marker139);
      });


var school140 = {lat: 39.943445, lng: -105.184382};
    var contentString140 = '<div id="school140" name="Monarch High School">Name: Monarch High School<br/>Class: 0<br/>Minority: 19.5<br/>Free/DiscountedLunch: 8.3</div>';
    var infowindow140 = new google.maps.InfoWindow({
        content: contentString140
      });
    var image140 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker140 = new google.maps.Marker({
        position: school140,
        map: map,
        title: 'Monarch High School',
        icon: image140
      });   marker140.addListener('click', function() {
        infowindow140.open(map, marker140);
      });


var school141 = {lat: 40.01181, lng: -105.641255};
    var contentString141 = '<div id="school141" name="Nederland Middle-Senior High School">Name: Nederland Middle-Senior High School<br/>Class: 5<br/>Minority: 16.9<br/>Free/DiscountedLunch: 26.2</div>';
    var infowindow141 = new google.maps.InfoWindow({
        content: contentString141
      });
    var image141 = {
      url: 'img/5.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker141 = new google.maps.Marker({
        position: school141,
        map: map,
        title: 'Nederland Middle-Senior High School',
        icon: image141
      });   marker141.addListener('click', function() {
        infowindow141.open(map, marker141);
      });


var school142 = {lat: 40.038627, lng: -105.37167};
    var contentString142 = '<div id="school142" name="New Vista High School">Name: New Vista High School<br/>Class: 0<br/>Minority: 29.9<br/>Free/DiscountedLunch: 26.8</div>';
    var infowindow142 = new google.maps.InfoWindow({
        content: contentString142
      });
    var image142 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker142 = new google.maps.Marker({
        position: school142,
        map: map,
        title: 'New Vista High School',
        icon: image142
      });   marker142.addListener('click', function() {
        infowindow142.open(map, marker142);
      });


var school143 = {lat: 39.996062, lng: -105.090817};
    var contentString143 = '<div id="school143" name="Peak to Peak">Name: Peak to Peak<br/>Class: 5<br/>Minority: 27.1<br/>Free/DiscountedLunch: 7.2</div>';
    var infowindow143 = new google.maps.InfoWindow({
        content: contentString143
      });
    var image143 = {
      url: 'img/5.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker143 = new google.maps.Marker({
        position: school143,
        map: map,
        title: 'Peak to Peak',
        icon: image143
      });   marker143.addListener('click', function() {
        infowindow143.open(map, marker143);
      });


var school144 = {lat: 39.581507, lng: -104.717095};
    var contentString144 = '<div id="school144" name="Cherokee Trail High School">Name: Cherokee Trail High School<br/>Class: 8<br/>Minority: 41.4<br/>Free/DiscountedLunch: 14</div>';
    var infowindow144 = new google.maps.InfoWindow({
        content: contentString144
      });
    var image144 = {
      url: 'img/8.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker144 = new google.maps.Marker({
        position: school144,
        map: map,
        title: 'Cherokee Trail High School',
        icon: image144
      });   marker144.addListener('click', function() {
        infowindow144.open(map, marker144);
      });


var school145 = {lat: 39.61667, lng: -104.874653};
    var contentString145 = '<div id="school145" name="Cherry Creek High School">Name: Cherry Creek High School<br/>Class: 4<br/>Minority: 28.6<br/>Free/DiscountedLunch: 10.6</div>';
    var infowindow145 = new google.maps.InfoWindow({
        content: contentString145
      });
    var image145 = {
      url: 'img/4.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker145 = new google.maps.Marker({
        position: school145,
        map: map,
        title: 'Cherry Creek High School',
        icon: image145
      });   marker145.addListener('click', function() {
        infowindow145.open(map, marker145);
      });


var school146 = {lat: 39.628816, lng: -104.781265};
    var contentString146 = '<div id="school146" name="Eaglecrest High School">Name: Eaglecrest High School<br/>Class: 2<br/>Minority: 45.8<br/>Free/DiscountedLunch: 26.3</div>';
    var infowindow146 = new google.maps.InfoWindow({
        content: contentString146
      });
    var image146 = {
      url: 'img/2.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker146 = new google.maps.Marker({
        position: school146,
        map: map,
        title: 'Eaglecrest High School',
        icon: image146
      });   marker146.addListener('click', function() {
        infowindow146.open(map, marker146);
      });


var school147 = {lat: 39.581505, lng: -104.717097};
    var contentString147 = '<div id="school147" name="Grandview High School">Name: Grandview High School<br/>Class: 6<br/>Minority: 39.5<br/>Free/DiscountedLunch: 17.6</div>';
    var infowindow147 = new google.maps.InfoWindow({
        content: contentString147
      });
    var image147 = {
      url: 'img/6.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker147 = new google.maps.Marker({
        position: school147,
        map: map,
        title: 'Grandview High School',
        icon: image147
      });   marker147.addListener('click', function() {
        infowindow147.open(map, marker147);
      });


var school148 = {lat: 39.70202, lng: -104.839627};
    var contentString148 = '<div id="school148" name="Overland High School / Institute of Science & Technology">Name: Overland High School / Institute of Science & Technology<br/>Class: 11<br/>Minority: 75.7<br/>Free/DiscountedLunch: 51.9</div>';
    var infowindow148 = new google.maps.InfoWindow({
        content: contentString148
      });
    var image148 = {
      url: 'img/11.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker148 = new google.maps.Marker({
        position: school148,
        map: map,
        title: 'Overland High School / Institute of Science & Technology',
        icon: image148
      });   marker148.addListener('click', function() {
        infowindow148.open(map, marker148);
      });


var school149 = {lat: 39.628814, lng: -104.781267};
    var contentString149 = '<div id="school149" name="Smoky Hill High School">Name: Smoky Hill High School<br/>Class: 0<br/>Minority: 50<br/>Free/DiscountedLunch: 27.4</div>';
    var infowindow149 = new google.maps.InfoWindow({
        content: contentString149
      });
    var image149 = {
      url: 'img/0.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker149 = new google.maps.Marker({
        position: school149,
        map: map,
        title: 'Smoky Hill High School',
        icon: image149
      });   marker149.addListener('click', function() {
        infowindow149.open(map, marker149);
      });


var school150 = {lat: 40.007740, lng: -105.255533};
    var contentString150 = '<div id="credits">CS Learning and Kids<br/>Credits: Ben Shapiro<br/>Abhijit Suresh<br/>Layne Hubbard<br/>Alex Gendreau<br/>Matt Bubernak<br/>';
    var infowindow150 = new google.maps.InfoWindow({
        content: contentString150
      });
    var image150 = {
      url: 'img/1000.jpeg',
      scaledSize: new google.maps.Size(20, 20)
    };    var marker150 = new google.maps.Marker({
        position: school150,
        map: map,
        title: 'University of Colorado, Boulder',
        icon: image150
      });   marker150.addListener('click', function() {
        infowindow150.open(map, marker150);
      });




}


    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCOqhSR1WZP7rppMbHu7Fj-b4JA6Trvy8&signed_in=true&callback=initMap"></script>
  </body>
</html>
Except