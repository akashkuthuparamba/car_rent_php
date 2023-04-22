<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$car_types = $db->query('select * from Car_type ')->get();

view(
    "admin/views/create.view.php",
    [
        "errors" => [],
        "car_types" => $car_types
    ]
);

?>