<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id_bagage = $_GET['id_bagage'];
 
//deleting the row from table
$result = mysql_query("DELETE FROM trans_bagages WHERE id_bagage=$id_bagage");
 
//redirecting to the display page (listbagage.php in our case)
header("Location:listbagage.php");
?>