<?php

require_once 'Bike.php';
require_once 'UserStats.php';
require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

$response = [
    'messages' => [],
];

if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'searchBike':
            addStats();
            searchBike();
            break;
    }
}

if (empty($response['messages'])) {
    $response['messages'] = [
        ["text"=> "Oups ! Une erreur c'est produite !"],
        ["text"=> "Merci de réessayer plus tard ;)"],
    ];
}

echo json_encode($response);