<?php

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Bienvevenue ! <?php echo $_SESSION['username']; ?>!</p>
<p>Veuillez choisir l'une des actions suivantes :</p>
<p><a href="don.php">Don</a></p>
<p><a href="sante.php">État de santé</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />

</div>
</body>
</html>
