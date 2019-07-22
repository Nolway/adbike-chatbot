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
    if ($jsonQueryBody['bike_type']) {
        $jsonQueryBody['bike_type'] = strtolower($jsonQueryBody['bike_type']);
    }

    if ($jsonQueryBody['two_wheels_type'] == 'scooter' || $jsonQueryBody['two_wheels_type'] == 'Scooter') {
        unset($jsonQueryBody['bike_type']);
    }

    global $db;

    $sqlWhere = [];
    foreach ($jsonQueryBody as $key => $value) {
        if ($key == 'cylinder') {
            $sqlWhere[] = "$key BETWEEN :$key -100  AND :$key +100";
        } else if ($key == 'budget') {
            $sqlWhere[] = "$key <= :$key + 500";
        } else if ($key == 'two_wheels_type') {
            if (preg_match('~\b(moto|Moto|bike|Bike)\b~i',$value)) {
	        $jsonQueryBody['two_wheels_type'] =  'bike';
	    } else if (preg_match('~\b(scooter|Scooter)\b~i',$value)) {
	        $jsonQueryBody['two_wheels_type'] = 'scooter';
	    } else {
	        $jsonQueryBody['two_wheels_type'] =  'bike';
	    }
	    $sqlWhere[] = $key . '=:' . $key;
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

    $messages = [];
    foreach($bikes as $bike) {
        $messages[] = [
            "text" => $bike["name"] . ' : ' . $bike["budget"] . '€'
        ];
    }

    if (count($bikes) < 1) {
        $messages[] = [
            "text" => "Désolé mais nous n'avons trouvé aucun véhicule correspondant à vos critères ",
	    "criteria" => $jsonQueryBody
        ];
    }

    return $messages;
}
