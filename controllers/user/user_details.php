<?php

use Core\App;
use Core\Database;


$db = App::resolve(Database::class);
$car = $db->query('select * from Rent_car where id= :id', ["id" => $_GET['id']])->fetch();

$errors = [];

$day = $_SESSION['selected_date'] + 1;

if ($day) {
    $total_price = $day * $car['Rentel_cost'];
} else {
    $total_price = $car['Rentel_cost'];
}



view("user/user_details.view.php", [
    "errors" => $errors,
    "day" => $day,
    "total_price" => $total_price,
    "car" => $car
]);