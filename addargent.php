
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {	
	
	$tel_emetteur = $_POST['tel_emetteur'];
	$tel_recepteur = $_POST['tel_recepteur'];
	$montant = $_POST['montant'];
	$destination = $_POST['destination'];
	$date = $_POST['date'];
    $num_navette = $_POST['num_navette'];	
	
			
		//insert data to database	
		$result = mysql_query("INSERT INTO trans_argents(tel_emetteur,tel_recepteur,montant,destination, date,num_navette) VALUES('$tel_emetteur','$tel_recepteur','$montant','$destination','$date','$num_navette')");
		
		//display success message
		echo "<font color='green'>Insertion avec snuccer dans la table trans_argents.";
		echo "<br/><a href='listargent.php'>Liste des Argents</a>";
	}

?>