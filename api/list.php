<?php

$lista = file_get_contents("../data.json") ;
$lista = json_decode($lista, true);

$newTask = [
    "task1" => $_POST["task1"],
];

$lista[] = $newTask;

$listajson = json_encode($lista,JSON_PRETTY_PRINT);

file_put_contents("../data.json",$listajson);

header("Content-Type: application/json");
echo json_encode($newTask);
?>