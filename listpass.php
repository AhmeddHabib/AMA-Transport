<?php include("menu.html"); ?>
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM trans_personnes ORDER BY id_passager DESC");
?>
 
<html>
<head>	
	<title>Listes des passagers</title>
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
<br/><br/>
<br/><br/>

<p align="center"><u><b><font size="6">Listes des passagers</font></b></u></p> <br/><br/>

 

<input type="button" value="Ajouter Passager" onclick="window.location= 'add.html';"/>
<input type="button" value="Retour">
	<table id="customers">
 
	<tr bgcolor='#CCCCCC'>
		<td bgcolor="#4CAF50">Nom et Prenom</td>
		<td bgcolor="#4CAF50">Telephone</td>
		<td bgcolor="#4CAF50">Pont de depart</td>
		<td bgcolor="#4CAF50">Point d'arrivee</td>
		<td bgcolor="#4CAF50">Date</td>
		<td bgcolor="#4CAF50">Prix</td>
		<td bgcolor="#4CAF50">No Navette</td>
	    <td bgcolor="#4CAF50">Controle</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nom_prenom']."</td>";
		echo "<td>".$res['telephone']."</td>";
		echo "<td>".$res['p_depart']."</td>";
        echo "<td>".$res['p_arriver']."</td>";
		echo "<td>".$res['date']."</td>";
		echo "<td>".$res['prix_ticket']."</td>";
        echo "<td>".$res['num_navette']."</td>";	
		echo "<td><a href=\"editpass.php?id_passager=$res[id_passager]\"><img  src='Images/edit.png' width='18' height='18'></a> | <a href=\"deletepass.php?id_passager=$res[id_passager]\" onClick=\"return confirm('Tu veux vraiment suprimer ce passager?')\"><img  src='Images/delete.png' width='18' height='18'></a></td>";		
	}
	?>
	</table>	
	
</body>
</html>