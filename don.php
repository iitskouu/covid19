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
<script type="text/javascript">

function m(){
	var mon=document.bank.amount.value;
	var des=document.bank.receiver.value;
	var mes="le montant "+mon+" a été transféré pour "+des;
	alert(mes);
	
}
</script>
</head>
<body>
<div class="form">
<h1>Transfert de don</h1>
<br>
<form name="bank" >
<p><label>Montant à transférer </label>:<input name="amount" type="text"/></p>

<p><label>Destination / Adresse </label>:<input name="receiver" type="text"/></p>

<p><input type="submit" value="Valider" onclick="m()"></p>
</form>
</br>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>