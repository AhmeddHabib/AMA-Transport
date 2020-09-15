<html>
<head>
	<title>Ajouter Bagage</title>
</head>
 
<body>

<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {	
	
	$destination = $_POST['destination'];
	$nom_emetteur = $_POST['nom_emetteur'];
	$nom_recepteur = $_POST['nom_recepteur'];
	$nom_colis = $_POST['nom_colis'];
	$date = $_POST['date'];
	$prix = $_POST['prix'];
    $num_navette = $_POST['num_navette'];	
	// checking empty fields
	if(empty($nom_emetteur) || empty($nom_recepteur) ) {
				
		if(empty($nom_emetteur)) {
			echo "<font color='red'>Il faut ecrire le nom de l'emetteur </font><br/>";
		}
		
		if(empty($nom_recepteur)) {
			echo "<font color='red'>Il faut ecrire le nom recepteur</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO trans_bagages(destination,nom_emetteur,nom_recepteur,nom_colis, date,prix,num_navette) VALUES('$destination','$nom_emetteur','$nom_recepteur','$nom_colis','$date','$prix','$num_navette')");
		
		//display success message
		echo "<font color='green'>Insertion avec succes dans la table listes des bagages.";
		echo "<br/><a href='listbagage.php'>Liste des Bagages</a>";
	}
}
?>
</body>
</html>