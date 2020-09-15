<?php
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'gestion_transport';
$table = 'reserv' ;
// Database Connection String
$con = mysql_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db($db_database, $con);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
if (!empty($_REQUEST['term'])) {

$term = mysql_real_escape_string($_REQUEST['term']);     

$sql = "SELECT * FROM reserv WHERE Description LIKE '%".$term."%'"; 
$r_query = mysql_query($sql); 

while ($res = mysql_fetch_array($r_query)){  
 

echo "<td>".$res['date']."</td>";
        echo "<td>".$res['ligne']."</td>";
		echo "<td>".$res['nom']."</td>";
		echo "<td>".$res['tel']."</td>";  
}  

}
?>
    </body>
</html>