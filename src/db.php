<?php

define('db_driver', 'pgsql');
define('db_host', 'postgresql');
define('db_name', 'adbike');
define('db_user', 'adbike');
define('db_password', 'adbike');

$db = new PDO(db_driver . ":dbname=" . db_name . ";host=" . db_host,
    db_name, db_password);

function getBikesByParams() {
    if (empty(json_decode(file_get_contents('php://input'))) || count(get_object_vars(json_decode(file_get_contents('php://input')))) == 0) {
        return [
            "message" => "Veuillez renseigner des critères de selection"
        ];
    }

    $jsonQueryBody = get_object_vars(json_decode(file_get_contents('php://input')));
    global $db;

    $sqlWhere = [];
    foreach ($jsonQueryBody as $key => $value) {
        if ($key == 'cylinder') {
            $sqlWhere[] = "$key BETWEEN :$key -100  AND :$key +100";
        } else if ($key == 'budget') {
            $sqlWhere[] = "$key BETWEEN :$key -500  AND :$key +500";
        } else {
            $sqlWhere[] = $key . '=:' . $key;
        }
    }

    $query = "SELECT * FROM bikes WHERE " . implode(" AND ", $sqlWhere);
    $req = $db->prepare($query);
    $req->execute($jsonQueryBody);

    $bikes = [];
    foreach($req->fetchAll() as $bike){
        $bikes[] = [
            "name" => $bike['bike_name'],
            "budget" => $bike['budget'],
            "brand" => $bike['brand'],
            "two_wheels_type" => $bike['two_wheels_type'],
            "cylinder" => $bike['cylinder'],
            "image_url" => $bike['image_link'],
        ];
    }

    if (count($bikes) < 1) {
        return [
            "text" => "Désolé mais nous n'avons trouvé aucun véhicule correspondant à vos critères ",
            "criteria" => $jsonQueryBody
        ];
    }

    return [
        "message" => "Voici les véhicules correspondant à vos critères:",
        "bikesNumber" => count($bikes),
        "bikes" => $bikes
    ];
}