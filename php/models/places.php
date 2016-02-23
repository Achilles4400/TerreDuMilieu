<?php
include '../commons/connexion.php';

class Places
{
    public function getAllPlace()
    {
        $connexion = new Connexion();
        $sql = 'SELECT * from lieu';

        $query = $connexion->getConnexion()->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        $connexion = null;

        return $result;
    }

    public function getPlaceOverview()
    {
        $connexion = new Connexion();
        $sql = 'SELECT id, lieu, emplacement, image from lieu';

        $query = $connexion->getConnexion()->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        $connexion = null;

        return $result;
    }
}