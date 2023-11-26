<?php 
// recupero file json 
$todos_json = file_get_contents('todos.json');
// var_dump($todos_json);
// decodifico il file json in array associativo
$todos = json_decode($todos_json, true);
// var_dump($todos);

// creo variabile response che ritroverò nella sezione network - response
$response = [
    'success' => true,
    'results' => $todos,
];

// converto l'array associativo response in un'array formato json, al cui interno avrà le chiavi success e results che equivale agli oggetti dell'array todos.json

header('Content-Type: application/json');

echo json_encode($response);