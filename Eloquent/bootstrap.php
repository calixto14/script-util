<?php
require "../vendor/autoload.php";
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection([
   "driver" => "sqlsrv",   
   "host" =>"0.0.0.0",
   "database" => "Pacient_data",
   "username" => "SA",
   "password" => "yaulas.14121995"
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();