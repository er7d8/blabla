<?php

$title = "error";
?>

<?php ob_start(); ?>

<h1>une erreur est survenue</h1>

<p><?= $error; ?>

<?php 
$content = ob_get_clean();
require('template.php');
?>