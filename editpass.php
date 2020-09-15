<?php include("menu.html"); ?>
<?php
// including the database connection file
include_once("config.php");
 if(isset($_POST['update']))
{	
	$id_passager = $_POST['id_passager'];
	$nom_prenom=$_POST['nom_prenom'];
	$telephone=$_POST['telephone'];
	$p_depart=$_POST['p_depart'];
	$p_arriver=$_POST['p_arriver'];	
	$date=$_POST['date'];
	$prix_ticket=$_POST['prix_ticket'];
	$num_navette=$_POST['num_navette'];
	
	// checking empty fields
	if(empty($nom_prenom) || empty($telephone) ) {	
			
		if(empty($nom_prenom)) {
			echo "<font color='red'>Howa esmou.</font><br/>";
		}
		
		if(empty($telephone)) {
			echo "<font color='red'>Numero de telephone empty .</font><br/>";
		}
		
				
	} else {	
		//updating the table
		$result = mysql_query("UPDATE trans_personnes SET nom_prenom='$nom_prenom',telephone='$telephone',p_depart='$p_depart',p_arriver='$p_arriver',date='$date' ,prix_ticket='$prix_ticket',num_navette='$num_navette'WHERE id_passager=$id_passager");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: listpass.php");
	}
}
?>
<?php
//getting id from url
$id_passager = $_GET['id_passager'];
 
//selecting data associated with this particular id
$result = mysql_query("SELECT * FROM trans_personnes WHERE id_passager=$id_passager");
 
while($res = mysql_fetch_array($result))
{
	$nom_prenom = $res['nom_prenom'];
	
	$telephone = $res['telephone'];
	$p_depart = $res['p_depart'];
	$p_arriver = $res['p_arriver'];
	$date = $res['date'];
	$prix_ticket = $res['prix_ticket'];
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
	<br><br>
	<br>
	<div class="form-style-8">
  <h2>Modifier ce Passager</h2>
	<form name="form1" method="post" action="editpass.php">
		<table border="0" bgcolor="">
			<tr> 
				<td>Nom</td>
				<td><input type="text" name="nom_prenom" value=<?php echo $nom_prenom;?>></td>
			</tr>
			<tr> 
				<td>Telephone</td>
				<td><input type="text" name="telephone" value=<?php echo $telephone;?>></td>
			</tr>
			<tr> 
				<td>Depart</td>
				<td><select  size="1" name="p_depart">
				
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
				<td>Arrivee</td>
				<td><select  size="1" name="p_arriver">
				
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
</select></td></td>
			</tr>
			<tr> 
				<td>Date</td>
				<td><p id="date"></p><input type='text' class='datepicker-here'  data-position='right top' data-language='en'


 name="date" value=<?php echo $date;?>></td>
			</tr>
			<tr> 
				<td>Prix</td>
				<td><input type="text" name="prix_ticket" value=<?php echo $prix_ticket;?>></td>
			</tr>
			<tr> 
				<td>Navette</td>
				<td><input type="text" name="num_navette" value=<?php echo $num_navette;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_passager" value=<?php echo $_GET['id_passager'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>