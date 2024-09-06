<?php

// URL API
$url = "https://7103.api.greenapi.com/waInstance7103894341/sendFileByUrl/85ebf3fb88224447a52899dd473b25ebb02726937cce4785af";

// Данные для отправки
$payload = json_encode([
    "chatId" => "87711895310@c.us"
]);

// Опции контекста для запроса
$options = [
    'http' => [
        'header'  => "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => $payload,
        'ignore_errors' => true  // Позволяет получить полный ответ даже при ошибке
    ]
];

// Создание контекста потока
$context = stream_context_create($options);

// Выполнение запроса
$response = file_get_contents($url, false, $context);

echo $response;
