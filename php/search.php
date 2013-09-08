<?php 
/************************************************
 * Checken ob "Suche" gedrückt wurde            *
 * Weiterleitung auf die Rewrite-Engine         *
 * php/search.php                               *
 *                                              *
 * "Yourway" Gruppe - JugendHackt 2013            *
 ************************************************/
 
 if(isset($_POST['state'])){
 	header('location: c/'.$_POST['state'].'');
 } 


 ?>