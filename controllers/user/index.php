<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$error = [];

$car_types = $db->query("SELECT * FROM Car_type")->get();

view("user/index.view.php", [
    "car_types" => $car_types,
    "error" => $error
]);