<?php
include '../commons/connexion.php';

class Character
{
    public function getAllCharacter()
    {
        $connexion = new Connexion();
        $sql = 'SELECT * from personnage';

        $query = $connexion->getConnexion()->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        $connexion = null;

        return $result;
    }

    public function getCharacterOverview()
    {
        $connexion = new Connexion();
        $sql = 'SELECT id, nom, origine, image from personnage';

        $query = $connexion->getConnexion()->query($sql);
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        $connexion = null;

        return $result;
    }
}