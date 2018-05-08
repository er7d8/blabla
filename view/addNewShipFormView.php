<?php 
	$title = "Création du vaisseau";
	ob_start();
?>
<form action="index.php?action=addShip" method="post">
	
	<fieldset>
		<legend>Création du vaisseau :</legend>	
		<label for="name">Nom du vaisseau</label><br />
		<input type="text" name="name" id="name" autofocus required/>

		<p>type de vaisseau</p>
		<input type="radio" name="type" value="1" id="1" required /><label for="1">Chasseur</label><br />

		<input type="radio" name="type" value="2" id="2" required /><label for="2">Cargo</label><br />

		<input type="submit" value="Creer" />

	</fieldset>

</form>
<?php 
$content = ob_get_clean(); 
require('template.php');
?>