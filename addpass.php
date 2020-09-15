<html>
<head>
	<title>Ajouter Passager</title>

</head>
 
<body>

<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {	
	$nom_prenom = $_POST['nom_prenom'];
	$telephone = $_POST['telephone'];
	$p_depart = $_POST['p_depart'];
	$p_arriver = $_POST['p_arriver'];
	$date = $_POST['date'];
	$prix_ticket = $_POST['prix_ticket'];
	$num_navette = $_POST['num_navette'];	
	// checking empty fields
	if(empty($nom_prenom) || empty($telephone) ) {
				
		if(empty($nom_prenom)) {
			echo "<font color='red'>Faut ecrire le nom du passager.</font><br/>";
		}
		
		if(empty($telephone)) {
			echo "<font color='red'>Faut ecrire le numero du telephone du passager.</font><br/>";
		}
		
		
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO trans_personnes(nom_prenom,telephone,p_depart,p_arriver,date, prix_ticket,num_navette) VALUES('$nom_prenom','$telephone','$p_depart','$p_arriver','$date','$prix_ticket','$num_navette')");
		
		//display success message
		echo "<font color='green'>Insertion avec succes dans la table liste des passagers";
		echo "<br/><a href='listpass.php'>Liste des passagers</a>";
	}
}
?>
</body>
</html>