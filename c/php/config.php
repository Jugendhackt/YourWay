<?php
/************************************************
 * Datenbank-Verbindung                         *
 * config.php                                   *
 *                                              *
 * "Yourway" Gruppe - JugendHackt 2013          *
 ************************************************/

#Configurationen
#Datenbank:
$benutzername="";
$passwort="";
$host="";
$datenbank="";

#Verbindung zur DB aufbauen
$verbindung = mysql_connect($host, $benutzername , $passwort)
or die("Verbindung zur Datenbank konnte nicht hergestellt werden");

mysql_select_db($datenbank) or die ("Datenbank konnte nicht ausgew�hlt werden"); 
?>
