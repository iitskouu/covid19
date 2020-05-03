<?php

 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages 

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Page de Don</title>
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="form">
<h1>Transfert de don</h1>
<br>
<form name="bank" action="http://localhost/covid19/veriftoken.php" method="POST">
<p><label>Montant à transférer </label>:<input name="amount" type="text"/></p>

<p><label>Destination / Adresse </label>:<input name="receiver" type="text"/></p>
<input type="hidden" name="token" value="<?=$_SESSION['token']?>"/>

<p><input type="submit" value="Valider" ></p>
</form>
</br>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>