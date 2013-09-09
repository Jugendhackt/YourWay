<form method="post">
    <input type="text" name="korrdat"/><input type="submit" />

</form>

<?php
$Host="launchzone.de";
$User="jh";
$Tabelle="jugendhackt_1";
$PW="passwort";


error_reporting(0);
$korrdat = $_POST[korrdat];
error_reporting(E_ALL);
$verbindung = mysql_connect($Host,$User,$PW)or die("keine Verbindung m�glich. Benutzername oder Passwort sind falsch");
mysql_select_db($Tabelle) or die("Die Datenbank existiert nicht.");

$abfrage = "SELECT * FROM hochschulen WHERE bundesland like '".$korrdat."'";
$ergebnis = mysql_query($abfrage);
echo "<table border='0'>";
echo "<tr>";
echo "<th>Uni Name</th>"; 
echo "<th>Teilnehmer</th>";
echo "<th>Bundesland</th>";
echo "</tr>";


while($row = mysql_fetch_object($ergebnis))
   {
	echo "<tr>";
  	echo "<th>" . "$row->name" . "</th>"; 
	echo "<th>" . "$row->teilnehmer" . "</th>";
	echo "<th>" . "$row->bundesland" . "</th>";
	echo "</tr>";
   }
echo "</table>";
?>

