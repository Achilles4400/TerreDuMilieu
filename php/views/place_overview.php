<?php
include '../models/places.php';

$place = new Places();
print(json_encode($place->getPlaceOverview()));