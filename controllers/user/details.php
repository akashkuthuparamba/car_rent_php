<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$car = $db->query('select * from Rent_car where id= :id', ["id" => $_GET['id']])->fetch();

view(
    "user/details.view.php",
    [
        'car' => $car,
    ]
);