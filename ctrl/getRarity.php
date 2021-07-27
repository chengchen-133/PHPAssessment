<?php

require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');
error_reporting(0);

$id = $_GET['id'];

$main = new main();
$main->parseJson();
$rarity = $main->getRarity($id);
$str = json_encode($rarity);
echo $str;