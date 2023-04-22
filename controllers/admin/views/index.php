<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);

$cars = $db->query("SELECT * FROM Rent_car")->get();

$car_type = $db->query("SELECT * FROM Car_type")->get();

$sl_no = 0;

view("admin/views/index.view.php", [
    'heading' => 'Cars',
    'cars' => $cars,

    "sl_no" => $sl_no,
    "car_type" => $car_type
]);