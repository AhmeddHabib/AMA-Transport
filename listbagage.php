<?php include("menu.html"); ?><?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM trans_bagages ORDER BY id_bagage DESC");
?>
 
<html>
<head>	
	<title>Liste des Bagages</title>
	<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2}

#customers tr:hover {background-color: #F0E68C;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    background-color: #4CAF50;
    color: white;
}
</style>
<style> 
input[type=button] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
</head>
 
<body>
<a href="index.php"><img height="40" src="hom.ico" width="40" ></a><br><br>
<p align="center"><u><b><font size="6">Listes des Bagages</font></b></u></p> <br/>

 
<input type="button" value="Ajouter un bagage" onclick="window.location= 'addbag.html';"/>
<input type="button" value="Retour">

	<table id="customers">
 
	<tr bgcolor='#4CAF5'>
		
		<td bgcolor="#4CAF50">Destination</td>
		<td bgcolor="#4CAF50">Nom Emetteur</td>
		<td bgcolor="#4CAF50">Nom Recepteur</td>
		<td bgcolor="#4CAF50">Nom Colis</td>
		<td bgcolor="#4CAF50">Date</td>
		<td bgcolor="#4CAF50">Prix</td>
		<td bgcolor="#4CAF50">Num Navette</td>
		<td bgcolor="#4CAF50">Controle</td>
	
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['destination']."</td>";
		echo "<td>".$res['nom_emetteur']."</td>";
        echo "<td>".$res['nom_recepteur']."</td>";
		echo "<td>".$res['nom_colis']."</td>";
		echo "<td>".$res['date']."</td>";
        echo "<td>".$res['prix']."</td>";	
        echo "<td>".$res['num_navette']."</td>";		
		echo "<td><a href=\"editbagage.php?id_bagage=$res[id_bagage]\"><img  src='Images/edit.png' width='18' height='18'></a> | <a href=\"deletebagage.php?id_bagage=$res[id_bagage]\" onClick=\"return confirm('Tu veux vraiment suprimer ce bagage?')\"><img  src='Images/delete.png' width='18' height='18'></a></td>";		
	}
	?>
	</table>
</body>
</html>