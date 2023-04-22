<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$car = $db->query('select * from Rent_car where id= :id', ["id" => $_GET['id']])->fetch();

$car_types = $db->query('select * from Car_type ')->get();



view(
    "admin/views/edit.view.php",
    [
        "errors" => [],
        'car' => $car,
        "car_types" => $car_types

    ]
);