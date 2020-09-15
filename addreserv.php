<html>
<head>
	<title>Faire une reservation</title>

</head>
 
<body>

<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {	
	$date = $_POST['date'];
	$ligne = $_POST['ligne'];
	$nom = $_POST['nom'];
	$tel = $_POST['tel'];
	
		
	// checking empty fields
	if(empty($date) || empty($ligne)|| empty($nom) || empty($tel)) {
				
		if(empty($date)) {
			echo "<font color='red'>Faut preciser une date.</font><br/>";
		}
		
		if(empty($ligne)) {
			echo "<font color='red'>Faut choisir une ligne.</font><br/>";
		}
		if(empty($nom)) {
			echo "<font color='red'>Faut remplir votre nom et prenom.</font><br/>";
		}
		
		if(empty($tel)) {
			echo "<font color='red'>Faut ecrire votre numero de telephone.</font><br/>";
		}
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Retour</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysql_query("INSERT INTO reserv(date,ligne,nom,tel) VALUES('$date','$ligne','$nom','$tel')");
		
		//display success message
		echo "<font color='green'>Nous vous remercions pour avoir choisi notre Agence.<br>
		votre reservation est faite avec success!<br><br>
		Le tarif de ton ticket est de <b><u>5400</u></b> Ouguiya<br><br>
		Notre equipe vous contatera le plus tot possible.<br>
		Merci encore!";
		echo "<br/><a href='index.php'>Retour</a>";
	}
}
?>
</body>
</html>