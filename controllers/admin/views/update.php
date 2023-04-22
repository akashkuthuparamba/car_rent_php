<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$image = $_FILES['Image']['tmp_name'];

if ($image) {

    $imageData = file_get_contents($image);

} else {

    $car = $db->query('select * from Rent_car where id= :id', ["id" => $_POST['id']])->fetch();
    $imageData = $car['Image'];

}




$db->query("UPDATE `Rent_car` SET `Car_type_id` = :car_type_id, `Car_makes` = :car_makes, `model` = :model, `Plate_number` = :plate_number, `Year` = :year, `Color` = :color, `Rentel_cost` = :rentel_cost, `About_car` = :about_car, `Image` = :image  WHERE `Rent_car`.`id` = :id", [

    "id" => $_POST['id'],
    "car_type_id" => $_POST['Car_type_id'],
    "car_makes" => $_POST['Car_makes'],
    "model" => $_POST['model'],
    "plate_number" => $_POST['Plate_number'],
    "year" => $_POST['Year'],
    "color" => $_POST['Color'],
    "rentel_cost" => $_POST['Rentel_cost'],
    "about_car" => $_POST['About_car'],
    "image" => $imageData,

]);

header('location: /cars');
die();