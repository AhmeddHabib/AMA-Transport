<?php include("menu.html"); ?>

<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM reserv ORDER BY idbook DESC");
?>
 
<html>
<head>	
	<title>Les reservartions faites par les clients</title>
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
<p align="center"><u><b><font size="6">Reservations crees par nos clients</font></b></u></p> <br/></br>

<p><input type="button" value="Ajouter une Reservation" onclick="window.location= 'addreserv.html';"/>
<input type="button" value="Retour"></p>
 
	<table id="customers">
 
	<tr bgcolor='#CCCCCC'>
		
		<td bgcolor="#4CAF50">Date</td>
		<td bgcolor="#4CAF50">Ligne</td>
		<td bgcolor="#4CAF50">Nom et Prenom</td>
	
		<td bgcolor="#4CAF50">Telephone</td>
	
		<td bgcolor="#4CAF50">Controle</td>
	
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
	
		echo "<td>".$res['date']."</td>";
        echo "<td>".$res['ligne']."</td>";
		echo "<td>".$res['nom']."</td>";
		echo "<td>".$res['tel']."</td>";
       		
		echo "<td><a href=\"editreserv.php?idbook=$res[idbook]\"> <img  src='Images/edit.png' width='18' height='18'></a> | <a href=\"deletreserv.php?idbook=$res[idbook]\" onClick=\"return confirm('Tu veux vraiment suprimer ce booking?')\"><img  src='Images/delete.png' width='18' height='18'></a></td>";		
	}
	?>
	</table>
</body>
</html>