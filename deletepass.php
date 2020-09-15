<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id_passager = $_GET['id_passager'];
 
//deleting the row from table
$result = mysql_query("DELETE FROM trans_personnes WHERE id_passager=$id_passager");
 
//redirecting to the display page (listpass.php in our case)
header("Location:listpass.php");
?>