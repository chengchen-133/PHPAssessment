<?php
require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');

$id = $_GET["id"];

$main = new main();
$main->parseJson();
$combatPoints = $main->getCombatPoints($id);

echo $combatPoints;