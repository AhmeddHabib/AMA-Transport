<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$id_argent = $_GET['id_argent'];
 
//deleting the row from table
$result = mysql_query("DELETE FROM trans_argents WHERE id_argent=$id_argent");
 
//redirecting to the display page (listargent.php in our case)
header("Location:listargent.php");
?>