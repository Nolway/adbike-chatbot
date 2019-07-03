<?php

define('db_driver', 'pgsql');
define('db_host', 'postgresql');
define('db_name', 'adbike');
define('db_user', 'adbike');
define('db_password', 'adbike');

$db = new PDO(db_driver . ":dbname=" . db_name . ";host=" . db_host,
    db_name, db_password);

function getBikesByParams() {
    if (empty($_POST)) {
        return [];
    }

    global $db;

    $sqlWhere = [];
    foreach ($_POST as $key => $value) {
        $sqlWhere[] = $key . '=:' . $key;
        // $whereClauseData[$key] = $value;
    }

    $query = "SELECT * FROM bikes WHERE " . implode(" AND ", $sqlWhere);
    $req = $db->prepare($query);
    $req->execute($_POST);

    $bikes = [];

    foreach($req->fetchAll() as $bike){
        $bikes[] = [
            "title" => $bike['bike_name'],
            "image_url" => $bike['image_link'],
        ];
    }

    if (count($bikes) < 1) {
        return [
            "text" =>"Désolé mais nous n'avons trouvé aucun véhicule correspondant à vos critères ",
            "post" => $_POST
        ];
    }

    return [
        ["text"=> "Voici les véhicules correspondant à vos critères ;) :"],
        $params,
    ];
}