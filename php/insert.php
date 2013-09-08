<?php 
Include("../c/php/config.php"); 
error_reporting(0);
if(isset($_POST[submit])) {

   $bdsl = $_POST[bdsl];
   $name = $_POST[nam];
   $tlm = $_POST[tlm];
   $alt = $_POST[alt];
   $x = $_POST[x];
   $y = $_POST[y];
   
   mysql_query("INSERT INTO hochschulen (bundesland, name, teilnehmer, alter, x, y) VALUES ('$bdsl', '$name', '$tlm', '$alt', '$x', '$y')"); 
   echo "Erfolgreich!<br /><hr>";
} ?>


<form method="post">
    Bundesland <input type="text" name="bdsl" /> <br />
    Name <input type="text" name="nam" />              <br />
    Teilnehmer <input type="text" name="tlm" />              <br />
    Alter <input type="text" name="alt" />                         <br />
    X <input type="text" name="x" />                                     <br />
    Y <input type="text" name="y" />                                           <br />
    <input type="submit" name="submit" />

</form>