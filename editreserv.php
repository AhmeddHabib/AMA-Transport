<?php include("menu.html"); ?><?php<?php 
ob_start();
include('config.php');
if(isset($_GET['idbook']))
{
  $idbook=$_GET['idbook'];
  if(isset($_POST['update']))
  {
  $date=$_POST['date'];
	$ligne=$_POST['ligne'];
	$nom=$_POST['nom'];
	$tel=$_POST['tel'];	
  $updated=mysql_query("UPDATE reserv SET 
        date='$date', ligne='$ligne', nom='$nom' , tel='$tel' WHERE idbook='$idbook'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:listreserv.php');
  }
}
}  //update ends here
ob_end_flush();
?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
.form-style-8 label
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
    font-size: 12px;
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
</head>

<body>
<?php 
  if(isset($_GET['idbook']))
  {
  $idbook=$_GET['idbook'];
  $getselect=mysql_query("SELECT * FROM reserv WHERE idbook='$idbook'");
  while($profile=mysql_fetch_array($getselect))
  {
    $date=$profile['date'];
    $ligne=$profile['ligne'];
    $nom=$profile['nom'];
	$tel=$profile['tel'];
?>
<br><br>
	<br>
	<div class="form-style-8">
  <h2>Modifier ce Passager</h2>
<div class="display">

  <form action="" method="post" name="insertform">
  <table border="0" bgcolor="">
    <p>
      <label for="date"  id="preinput"> DATE : <font color="#FF0000">*</font></label>
      <input type="date" name="date" required placeholder="Inserer la date de votre depart" 
      value="<?php echo $date; ?>" id="inputid" />
    </p>
    <p>
      <label  for="ligne"  id="preinput"> LIGNE : <font color="#FF0000">*</font> </label>
      <SELECT type="text" size="1" name="ligne" 
      value="<?php echo $ligne; ?>" id="inputid" 	
	  <option value="Nouakchott a  Atar">Nouakchott a  Atar</option>
	 <option value="Nouakchott_a-Kiffa">Nouakchott_a-Kiffa</option>
	 <option value="Nouakchott-a-Nouadhibou">Nouakchott-a-Nouadhibou</option>
	<option value="Nouakchott a Nema">Nouakchott a Nema</option>
	<option value="Nouakchott a Rosso">Nouakchott a Rosso</option>
	<option value="Nouakchott a Boutilimit">Nouakchott a Boutilimit</option>			
  <option value="Nouakchott a  Aleg">Nouakchott a  Aleg</option>
  <option value="Atar a Nouakchott">Atar a Nouakchott</option>
  <option value="Kiffa a Nouakchott">Kiffa a Nouakchott</option>
  <option value="Nema a Nouakchott">Nema a Nouakchott</option>
  <option value="Rosso a Nouakchott">Rosso a Nouakchott</option>
  <option value="Boutilimit a Nouakchott">Boutilimit a Nouakchott</option>
  <option value="Aleg a Nouakchott">Aleg a Nouakchott</option>
  <option value="Akjoujt a Nouakchott">Akjoujt a Nouakchott</option>
 
</select>
    </p>
    <p>
      <label for="nom" id="preinput"> NOM ET PRENOM : <font color="#FF0000">*</font></label>
      <input type="text" name="nom" required placeholder="Inserer votre nom et prenom" 
      value="<?php echo $nom; ?>" id="inputid" />
    </p>
	<p>
      <label for="tel" id="preinput"> TELEPHONE : <font color="#FF0000">*</font></label>
      <input type="text" name="tel" required placeholder="Inserer votre numero de telephone" 
      value="<?php echo $tel; ?>" id="inputid" />
    </p>
    <p>
      <input type="submit" name="update" value="Modifier" id="inputid1" />
    </p>
  </table></form>
</div></div>
<?php } } ?>
</body>
</html>