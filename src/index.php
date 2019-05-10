<?php

require_once 'Bike.php';
require_once 'UserStats.php';
require_once 'db.php';

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

$response = [
    'messages' => [],
];

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'search-bike':
            $response['messages'] = [
                ["text"=> "COUCOU"],
            ];
            break;
    }
}

if (empty($response['messages'])) {
    $response['messages'] = [
        ["text"=> "Oups ! Une erreur s'est produite !"],
        ["text"=> "Merci de réessayer plus tard ;)"],
    ];
}

echo json_encode($response);