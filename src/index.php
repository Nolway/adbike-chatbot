<?php

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
            $messages = getBikesByParams();
            $response['messages'] = $messages;
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