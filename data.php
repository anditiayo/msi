<?php

$url = "http://http://localhost/msi/soap.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
var_dump($json_data);
echo $json_data;
?>