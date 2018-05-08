<?php $title = "bonjour"; ?>

<?php ob_start(); ?>

<h1>Bienvenue dans ce site <strong>test</strong></h1>



<?php $content = ob_get_clean(); 

require('template.php');
?>
