<?php

class Manager

{

    protected function dbShipConnect()

    {
        $db = new PDO('mysql:host=localhost;dbname=ship;charset=utf8', 'root', '');
        return $db;
    }

}