
<html>
<head>
<style>
body {margin:0;}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #1abc9c;
}

.active {
    background-color:#4CAF50 ;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="listpass.php">Passagers</a></li>
  <li><a href="listargent.php">Argent</a></li>
  <li><a href="listbagage.php">Bagages</a></li>
  <li><a href="listreserv.php">Reservation</a></li>
</ul>


</body>
</html>
