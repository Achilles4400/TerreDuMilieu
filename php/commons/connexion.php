<?php
include '../config/config.php';

class Connexion
{

    private $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO('mysql:host=' . DBHost . ';dbname=' . DBName . ';charset=utf8', DBUsrname, DBPasswd);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getConnexion()
    {
        return $this->connexion;
    }
}