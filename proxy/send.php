<?php

$data = json_decode(file_get_contents('php://input'), true);

//The idInstance and apiTokenInstance values are available in your account, double brackets must be removed

$url = 'https://7103.api.greenapi.com/waInstance7103894341/sendMessage/85ebf3fb88224447a52899dd473b25ebb02726937cce4785af';

//chatId is the number to send the message to (@c.us for private chats, @g.us for group chats)
$data = array(
'chatId' => '87711895310@c.us', 
'message' => $data['message']
);

$options = array(
    'http' => array(
        'header' => "Content-Type: application/json\r\n",
        'method' => 'POST',
        'content' => json_encode($data)
    )
);

$context = stream_context_create($options);

$response = file_get_contents($url, false, $context);

echo $response;
