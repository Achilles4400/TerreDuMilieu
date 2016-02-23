<?php
include '../models/Character.php';

$character = new Character();
print(json_encode($character->getAllCharacter()));