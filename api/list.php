<?php

$lista = array(
    "Fai la spesa",
    "Stira i panni",
    "Compra il tartufo di Roccascalegna",
    "Datti all'ippica"
);

header("Content-Type: application/json");
echo json_encode($lista)
?>