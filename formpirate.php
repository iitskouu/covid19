<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Malek's Blog</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
	<h1>Malek's Blog</h1>
	<h2>Do you like this picture ?</h1> <br>
	<img src="https://images.pexels.com/photos/45201/kitty-cat-kitten-pet-45201.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
	<form action="http://localhost/covid19/don.php">
	<p><label>How many likes ?  </label>:<input name="amount" type="text"/></p>

	<p><label>Enter your name </label>:<input name="receiver" type="text"/></p>
    <input type="submit" value="submit" >
	</form> 


<br /><br /><br /><br />

</div>
</body>
</html>
