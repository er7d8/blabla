<?php
	$title = "info ".$returninfo['name'];

?>

<?php ob_start(); ?>
	<div class="infoShip">
	
		<h2 style="text-transform: uppercase;"><?= $returninfo['name'];?></h2>

		<h3><?php
			if ($returninfo['type'] == 0){
				echo 'unknow';
			} else if ($returninfo['type'] == 1){
				echo 'hunter';
			} else if ($returninfo['type'] == 2){
				echo 'cargo';
			} else {
				echo 'error';
			}
			?>
		</h3>

		<h4>fuel : <?= $returninfo['fuel'];?>/100</h4>
		<h4>cargo disponnible : <?= $returninfo['cargo'];?></h4>
		
	</div>


<?php 

$content = ob_get_clean();
require('template.php');

?>