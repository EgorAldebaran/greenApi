<?php

$data = json_decode(file_get_contents('php://input'), true);
$instanceId = $data["instance"];
$api = $data["token"];

$url = "https://api.green-api.com/waInstance$instanceId/getSettings/$api";

$options = array(
    'http' => array(
        'header' => "Content-Type: application/json\r\n",
        'method' => 'GET'
    )
);

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

echo $response;
