<?php
//including the database connection file
include("config.php");
 
//getting id of the data from url
$idbook = $_GET['idbook'];
 
//deleting the row from table
$result = mysql_query("DELETE FROM reserv WHERE idbook=$idbook");
 
//redirecting to the display page (listpass.php in our case)
header("Location:listreserv.php");
?>