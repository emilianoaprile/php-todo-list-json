<?php
$todos = [
    [
    'text' => 'PHP',
    'done' => false
    ],
    [
    'text' => 'JavaScript',
    'done' => false
    ],
    [
    'text' => 'HTML',
    'done' => true
    ],
    [
    'text' => 'CSS',
    'done' => true
    ]
    ];

// prendo il valore dell'input realtivo al new todo da aggiungere
$new_todo = $_POST['todo'];

// creo una variabile che è un array associativo coerente con la struttura dati $todos dando il valore alla chiave text la variabile che contiene l'input
$todo = [
        'text' => $new_todo,
        'done' => false
    ];

// aggiungo all'array $todos l'arrey $todo
$todos[] = $todo;

// credo una variabile response da mandare come data che avrà il new todo al suo interno
$response = [
        'success' => true,
        'results' => $todos
    ];

// codifico l'array associativo in formato json cosi da permettere a js di leggerlo
header('Content-Type: application/json');

echo json_encode($response);
