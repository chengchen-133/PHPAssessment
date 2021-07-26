<?php

require ("../service/main.php");

header('Content-Type:text/json;charset=utf-8');

$main = new main();

$main->parseJson();
$jsonByQuality = $main->getJsonByQuality();

echo $jsonByQuality;