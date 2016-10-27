<?php

require 'vendor/autoload.php';
$collection = (new MongoDB\Client("mongodb://192.168.0.78:27017"))->listDatabases();
echo "<pre>";
print_r($collection);
exit;
?>