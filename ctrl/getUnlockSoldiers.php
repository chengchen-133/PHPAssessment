<?php
require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');

$rarity = $_GET["rarity"];
$quality = $_GET["quality"];
$cvc = $_GET["cvc"];

$main = new main();
$main->parseJson();
$unlockSoldiers = $main->unlockSoldiers($rarity, $quality, $cvc);

echo $unlockSoldiers;