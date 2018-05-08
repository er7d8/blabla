<?php

require("Manager.php");

class Shipmanager extends Manager

{

    public function recordNewShip($name, $type){
    	$db = $this->dbShipConnect();
    	$info = $db->prepare('INSERT INTO ship(name, type, fuel, cargo, creation_date) VALUES(?,?,100,10,NOW())');
    	$affectedLines = $info->execute(array($name, $type));

    	return $affectedLines;

    }

    public function showShipId($id){
        $db = $this->dbShipConnect();
        $info = $db->prepare('SELECT id, name, type, fuel, cargo, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM ship WHERE id = ?');
        $info->execute(array($id));
        $ship = $info->fetch();

        return $ship;
    }

    public function showShipName($name){
        $db = $this->dbShipConnect();
        $info = $db->prepare('SELECT id, name, type, fuel, cargo, DATE_FORMAT(creation_date, \'%d/%m/%Y\') AS creation_date_fr FROM ship WHERE name = ?');
        $info->execute(array($name));
        $ship = $info->fetch();

        return $ship;
    }

    public function shipExist($name){
    	$db = $this->dbShipConnect();
    	$info = $db->query("SELECT id, name FROM ship WHERE name LIKE '%$name%' ORDER BY name DESC");

        return $info;

    }


}
