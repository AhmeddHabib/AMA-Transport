<?php


// mysql_connect("database-host", "username")
$conn = mysql_connect("localhost","root") 
			or die("cannot connected");
 
// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("gestion_transport",$conn);

?>