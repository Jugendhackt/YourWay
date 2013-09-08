<?php 
error_reporting(0);
Include("./php/config.php");
class Relevanz {
    function sucheTop() {
       
                    $ms1 = mysql_query("SELECT * FROM hochschulen LIMIT 3");    

        while($row = mysql_fetch_object($ms1)) {
        


            $jahr = $row->alter;
            $teilnehmer = $row->teilnehmer;
            $wert =  $jahr * $teilnehmer;
            $wert = $wert / 100;
            
            if($wert > 100) {
                $wert = 100;
            }
            
                echo '<div class="third">
				<h2 class="uni">'.$row->name.'</h2>
				<img src="img/unis/universitaet_zu_koeln.jpg" alt="Univerit&auml;t zu K&ouml;ln" width="250px" height="150px"/><br />
				<b>Stadt:</b> '.$row->bundesland.'<br />
				<b>Bewertung:</b> '.$wert.'%<br />
				<b>Fachgebiet:</b> technisch(?)<br /></div>';
        }
    }
}

 ?>
