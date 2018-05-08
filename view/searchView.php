<?php
$title = "recherche vaisseau";

ob_start();
?>
<p>Vous allez faire une recherche avec un nom de vaisseau. Tapez une requête pour réaliser une recherche.</p>
<form action="index.php?action=showSearchShip" method="Post">
	<input type="text" name="name" size="10">
	<input type="submit" value="Ok">
</form>
<?php

$content = ob_get_clean(); 
require('template.php');

?>