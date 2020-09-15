<?php include("menu.html"); ?><?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	
	$id_bagage = $_POST['id_bagage'];
	$destination=$_POST['destination'];
	$nom_emetteur=$_POST['nom_emetteur'];
	$nom_recepteur=$_POST['nom_recepteur'];
	$nom_colis=$_POST['nom_colis'];	
	$date=$_POST['date'];
	$prix=$_POST['prix'];
	$num_navette=$_POST['num_navette'];
	
	// checking empty fields
	if(empty($nom_emetteur) || empty($nom_recepteur) ) {	
			
		if(empty($nom_emetteur)) {
			echo "<font color='red'>Attention il faut entrer le nom de l'emetteur .</font><br/>";
		}
		
		if(empty($nom_recepteur)) {
			echo "<font color='red'>Attention il faut entrer le nom du recepteur .</font><br/>";
		}
		
				
	} else {	
		//updating the table
		$result = mysql_query("UPDATE trans_bagages SET id_bagage='$id_bagage', destination='$destination',nom_emetteur='$nom_emetteur',nom_recepteur='$nom_recepteur',nom_colis='$nom_colis' ,date='$date',prix='$prix',num_navette='$num_navette' WHERE id_bagage=$id_bagage");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: listbagage.php");
	}
}
?>

<?php
//getting id from url
$id_bagage = $_GET['id_bagage'];
 
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM trans_bagages WHERE id_bagage=$id_bagage");
 
while($res = mysql_fetch_array($result))
{
	
	
	$destination = $res['destination'];
	$nom_emetteur = $res['nom_emetteur'];
	$nom_recepteur = $res['nom_recepteur'];
	$nom_colis = $res['nom_colis'];
	$date = $res['date'];
	$prix = $res['prix'];
	$num_navette = $res['num_navette'];
}
?>
<html>
<head>	
	<title>Modifier</title>
	<link href="air/dist/css/datepicker.css" rel="stylesheet">

<script src="air/jquery-2.1.4.min.js"></script>

<script src="air/dist/js/datepicker.js"></script>

  <script>
  $(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    $( "#datepicker" ).datepicker({
      changeMonth: true,//this option for allowing user to select month
      changeYear: true //this option for allowing user to select from year range
    });
  }

);
  </script>
<script type="text/javascript">
//auto expand textarea
function adjust_textarea(h) {
    h.style.height = "20px";
    h.style.height = (h.scrollHeight)+"px";
}
</script>
	
<style type="text/css">
.form-style-8{
    font-family: 'Open Sans Condensed', arial, sans;
    width: 500px;
    padding: 30px;
    background: #FFFFFF;
    margin: 50px auto;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.22);
    -webkit-box-shadow:  0px 0px 15px rgba(0, 0, 0, 0.22);

}
.form-style-8 h2{
    background: #4D4D4D;
    text-transform: uppercase;
    font-family: 'Open Sans Condensed', sans-serif;
    color: #797979;
    font-size: 18px;
    font-weight: 100;
    padding: 20px;
    margin: -30px -30px 30px -30px;
}
.form-style-8 input[type="text"],
.form-style-8 input[type="date"],
.form-style-8 input[type="datetime"],
.form-style-8 input[type="email"],
.form-style-8 input[type="number"],
.form-style-8 input[type="search"],
.form-style-8 input[type="time"],
.form-style-8 input[type="url"],
.form-style-8 input[type="password"],
.form-style-8 textarea,
.form-style-8 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    outline: none;
    display: block;
    width: 100%;
    padding: 7px;
    border: none;
    border-bottom: 1px solid #ddd;
    background: transparent;
    margin-bottom: 10px;
    font: 16px Arial, Helvetica, sans-serif;
    height: 45px;
}
.form-style-8 textarea{
    resize:none;
    overflow: hidden;
}
.form-style-8 input[type="button"], 
.form-style-8 input[type="submit"]{
    -moz-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    -webkit-box-shadow: inset 0px 1px 0px 0px #45D6D6;
    box-shadow: inset 0px 1px 0px 0px #45D6D6;
    background-color: #2CBBBB;
    border: 1px solid #27A0A0;
    display: inline-block;
    cursor: pointer;
    color: #FFFFFF;
    font-family: 'Open Sans Condensed', sans-serif;
    font-size: 14px;
    padding: 8px 18px;
    text-decoration: none;
    text-transform: uppercase;
}
.form-style-8 input[type="button"]:hover, 
.form-style-8 input[type="submit"]:hover {
    background:linear-gradient(to bottom, #34CACA 5%, #30C9C9 100%);
    background-color:#34CACA;
}
</style>

	<style type="text/css">
  
  
  a:link, a:visited {
    background-color: #1BC573;
    color: white;
    padding: 3px 5px;
    text-align: center;	
    text-decoration: none;
    display: inline-block;

}


a:hover, a:active {
    background-color: #1C608A;
}
  
</style>
</head>
 
<body>

	<div class="form-style-8">
  <h2>Modifier le bagage</h2>
	<form name="form1" method="post" action="editbagage.php">
		<table border="0" bgcolor="">
			
			<tr> 
				<td>destination</td>
				<td><select  size="1" name="destination">
				
  <option value="Nouakchott">Nouakchott</option>
  <option value="Nouadhibou">Nouadhibou</option>
  <option value="Adrar">Adrar</option>
  <option value="Nema">Nema</option>
  <option value="Hodh_Chargui">Hodh Chargui</option>
  <option value="Hodh_Gharbi">Hodh Gharbi</option>
  <option value="Inchiri">Inchiri</option>
  <option value="Gorgol">Gorgol</option>
  <option value="Brakna">Brakna</option>
  <option value="Assaba">Assaba</option>
  <option value="Kiffa">Kiffa</option>
  <option value="Trarza">Trarza</option>
</select></td>
			</tr>
			<tr> 
				<td>Nom de l'emetteur</td>
				<td><input type="text" name="nom_emetteur" value=<?php echo $nom_emetteur;?>></td>
			</tr>
			<tr> 
				<td>Nom  du recepteur</td>
				<td><input type="text" name="nom_recepteur" value=<?php echo $nom_recepteur;?>></td>
			</tr>
			<tr> 
				<td>Numero du colis</td>
				<td><input type="text" name="nom_colis" value=<?php echo $nom_colis;?>></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><p id="date"></p><input type='text' class='datepicker-here'  data-position='right top' data-language='en'


 name="date" value=<?php echo $date;?>></td>
			</tr>
			<tr> 
				<td>prix</td>
				<td><input type="text" name="prix" value=<?php echo $prix;?>></td>
			</tr>
			<tr> 
				<td>No Navette</td>
				<td><input type="text" name="num_navette" value=<?php echo $num_navette;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_bagage" value=<?php echo $_GET['id_bagage'];?>></td>
				<td><input type="submit" name="update" value="Modifier"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>