<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        var map;
        function initialize() {
          var mapOptions = {
            zoom: 5,
            center: new google.maps.LatLng(50.779273,6.06331),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          map = new google.maps.Map(document.getElementById('map-canvas'),
              mapOptions);
        //50.779273=6.06331
<?php

error_reporting(0);
$korrdat = $_GET[BN];
error_reporting(I_ALL);
$Host="launchzone.de";
$User="jh";
$Tabelle="jugendhackt_1";
$PW="haschtag";

$verbindung = mysql_connect($Host,$User,$PW)or die ("keine Verbindung möglich.
 Benutzername oder Passwort sind falsch");
mysql_select_db($Tabelle) or die ("Die Datenbank existiert nicht.");
$counter=1;
if($korrdat==""){
$abfrage = "SELECT x,y,name FROM hochschulen";}else{
$abfrage = "SELECT x,y,name FROM hochschulen WHERE bundesland like '" . $korrdat . "'";
}
$ergebnis = mysql_query($abfrage);
echo "var image = 'img/university.png';";
while($row = mysql_fetch_object($ergebnis))
   {
   	echo "var DDD" . $counter . " = new google.maps.LatLng(".$row->x . "," . $row->y . "); \n";          //40
	echo "var marker" . $counter . " = new google.maps.Marker({position: DDD" . $counter . ",icon: image,map: map,title: '" . $row->name . "'}); \n";
	$counter++;
   }

?>
 }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div id="map-canvas"></div>
  </body>
</html>