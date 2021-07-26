<?php
require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');

$cvc = $_GET["cvc"];

$main = new main();
$main->parseJson();
$legal = $main->getLegal($cvc);
$json_encode = json_encode($legal);
echo $json_encode;