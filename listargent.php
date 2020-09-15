<?php include("menu.html"); ?><?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM trans_argents ORDER BY id_argent DESC");
?>
 
<html>
<head>	
	<title>Liste d'argent</title>
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

<br/><br/><br/>


<p align="center"><u><b><font size="6">Listes d'argents</font></b></u></p> 



<input type="button" value="Ajouter Argent" onclick="window.location= 'addarg.html';"/>
<input type="button" value="Retour">
    <table id="customers">
 
	<tr bgcolor='#CCCCCC'>
		<td bgcolor="#4CAF50">Tel Emetteur</td>
		<td bgcolor="#4CAF50">Tel Recepteur</td>
		<td bgcolor="#4CAF50">Montant</td>
		<td bgcolor="#4CAF50">Destination</td>
		<td bgcolor="#4CAF50">Date</td>
		<td bgcolor="#4CAF50">Num Navette</td>
	    <td bgcolor="#4CAF50">Controle</td>
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['tel_emetteur']."</td>";
		echo "<td>".$res['tel_recepteur']."</td>";
        echo "<td>".$res['montant']."</td>";
		echo "<td>".$res['destination']."</td>";
		echo "<td>".$res['date']."</td>";
        echo "<td>".$res['num_navette']."</td>";		
		echo "<td><a href=\"editargent.php?id_argent=$res[id_argent]\"><img  src='Images/edit.png' width='18' height='18'></a> | <a href=\"deleteargent.php?id_argent=$res[id_argent]\" onClick=\"return confirm('Tu veux vraiment suprimer ce argent?')\"><img  src='Images/delete.png' width='18' height='18'></a></td>";		
	}
	?>
	</table>
</body>
</html>