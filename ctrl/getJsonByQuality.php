<?php

require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');
error_reporting(0);
$main = new main();

$main->parseJson();
$jsonByQuality = $main->getJsonByQuality();
$encode = json_encode($jsonByQuality);
echo $encode;