<?php

require('controller\shipController.php');

try{
	if (isset($_GET['action'])&&(!empty($_GET['action']))) {

		if ($_GET['action']=="searchShip"){
			putSearchShip();
		}

		if ($_GET['action']=="showSearchShip"){
			putInfoSearchShip();
		}

		if ($_GET['action']=="viewinfo"){
			if (isset($_GET['id'])&&(!empty($_GET['id']))){

				putInfoShip();
			} else {
				throw new Exception("identifiant unique du vaisseau manquant !");
			}
		}

		if ($_GET['action']=="addShip"){
			if ((!isset($_POST['name']))||(!isset($_POST['id']))){
				putAddShipForm();
			}
		}

	} else {
		putIndex();
	}
} catch(Exception $e){
	$error = $e->getMessage();
	require('view\errorView.php');
}