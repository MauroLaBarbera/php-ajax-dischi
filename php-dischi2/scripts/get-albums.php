<?php
//DATA SOURCE

require_once __DIR__ . '/../database.php';

//var_dump($database);
$filtro = [];
$string = empty($_GET['artist']) ? 'all' : $_GET['artist'];

//var_dump($string);
foreach ($database as $data) {
    if ($data['author'] === $string) {
        $filtro[] = $data;
    }
}
header ('Content-Type: application/json');

    if($string == 'all') {
              echo json_encode($database);
    } else {
        echo json_encode($filtro);
    }

//var_dump($filtro);

