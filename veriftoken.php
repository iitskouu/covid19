<?php

session_start();
if (isset($_POST['token'])){
if ($_SESSION['token']==$_POST['token']) {
	echo "Vous avez transferé " . $_POST["amount"] . "$ à " . $_POST["receiver"] .  "\n";
} 

}
else {
  echo 'token invalide';
}
?>