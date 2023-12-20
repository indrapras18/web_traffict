<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory)
->withServiceAccount('esp-firebase-demo-20e4d-firebase-adminsdk-1jvtx-8e82f29b4a.json')
->withDatabaseUri('https://esp-firebase-demo-20e4d-default-rtdb.asia-southeast1.firebasedatabase.app/');

$database = $factory->createDatabase();
?>