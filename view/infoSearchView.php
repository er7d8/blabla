<?php
$title = "recherche vaisseau";

ob_start();
?>


<h3>Résultats de votre recherche.</h3>

Voici le(s) vaisseau(x) que nous avons trouvées : ayant : <?= $_POST['name'] ?><br/>

<br/>
<?php

	while($ship = $returninfo->fetch()) 
	{
	
		echo "<a href=index.php?action=viewinfo&mane=" . $ship['name'] . "&id=" . $ship['id'] . ">" . $ship['name'] . "</a><br/>";
		
	}
?>
<br/>

<br/>
<a href="index.php?action=searchShip">Faire une nouvelle recherche</a></p>

<?php

$content = ob_get_clean(); 
require('template.php');

?>