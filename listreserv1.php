<?php include("menu.html"); ?>
<?php 
$num_rec_per_page=5;
mysql_connect('localhost','root','');
mysql_select_db('gestion_transport');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * FROM reserv ORDER BY idbook DESC LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysql_query ($sql); //run the query
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
<p align="center"><u><b><font size="6">Resevations crees par nos clients</font></b></u></p> <br/></br>
<form action="searchbooking.php" method="post"> 
Search: <input type="text" name="term" /><br /> 
<input type="submit" value="Submit" /> 
</form>
<p><input type="button" value="Ajouter une Reservation" onclick="window.location= 'addreserv.html';"/>
<input type="button" value="Retour"></p>
 	
	<table id="customers">
 
	<tr bgcolor='#CCCCCC'>
		
		<td bgcolor="#4CAF50">Date</td>
		<td bgcolor="#4CAF50">Ligne</td>
		<td bgcolor="#4CAF50">Nom et Prenom>
	
		<td bgcolor="#4CAF50">Telephone</td>
	
		<td bgcolor="#4CAF50">Controle</td>
	
	</tr>
		<?php 
	while ($row = mysql_fetch_assoc($rs_result)) { 
?> 	
		<tr>
		<td><?php echo $row['date']; ?></td>
        <td><?php echo $row['ligne']; ?></td>
		<td><?php echo $row['nom']; ?></td>
        <td><?php echo $row['tel']; ?>
		<?php echo "<td><a href=\"editreserv.php?idbook=$row[idbook]\"> <img  src='Images/edit.png' width='18' height='18'></a> | <a href=\"deletreserv.php?idbook=$row[idbook]\" onClick=\"return confirm('Tu veux vraiment suprimer ce booking?')\"><img  src='Images/delete.png' width='18' height='18'></a></td>";	?></td>	
	
			
	
	</tr>
<?php
	};
	?>
	
	</table>
	

<?php
$sql = "SELECT * FROM reserv ORDER BY idbook DESC"; 
$rs_result = mysql_query($sql); //run the query
$total_records = mysql_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 
 echo "<a href='listreserv1.php?page=1'>".'Pages :               |premiere page '."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='listreserv1.php?page=".$i."'>".$i."</a> "; 
}; 
echo "<a href='listreserv1.php?page=$total_pages'>".' derniere page|'."</a> "; // Goto last page
?>

</body>
</html>






