<?php

require('model\Shipmanager.php');

function putIndex(){
	require('view\indexView.php');
}

function putInfoShip(){
	$man = new Shipmanager;
	$returninfo = $man->showShipId($_GET['id']);
	require('view\shipInfoView.php');
}

function putSearchShip(){
	require('view\searchView.php');
}

function putInfoSearchShip(){
	$man = new Shipmanager;
	$returninfo = $man->shipExist($_POST['name']);
	require("view\infoSearchView.php");
}

// ======================

function putAddShipForm(){
	require("view\addNewShipFormView.php");
}

function putAddShip(){
	$man = new Shipmanager;
	$affectedLines = $man->recordNewShip($_POST['name'], $_POST['id']);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=shipInfoView&id=' . $_POST['id']);
    }
}