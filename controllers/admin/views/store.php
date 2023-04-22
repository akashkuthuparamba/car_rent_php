<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$image = $_FILES['Image']['tmp_name'];

$imageData = file_get_contents($image);

$errors = [];

$car_types = $db->query('select * from Car_type ')->get();

$posts = $_POST;

foreach (array_keys($posts) as $post) {

    if (empty($_POST[$post])) {
        $errors[$post] = "enter" . " " . $post;
    }
}

if (empty($imageData)) {
    $errors['Image'] = "add a image";
}

if (!empty($errors)) {
    return view(
        "admin/views/create.view.php",
        [
            "errors" => $errors,
            "car_types" => $car_types

        ]
    );
}


$db->query("INSERT INTO `Rent_car` (`id`, `Car_type_id`, `Car_makes`, `model`, `Plate_number`, `Year`, `Color`, `Rentel_cost`, `About_car`, `Image`) VALUES (NULL, :Car_type_id, :Car_makes, :model, :Plate_number, :Year, :Color, :Rentel_cost, :About_car, :Image)", [

    "Car_type_id" => $_POST['Car_type_id'],
    "Car_makes" => $_POST['car_makes'],
    "model" => $_POST['model'],
    "Plate_number" => $_POST['plate_number'],
    "Year" => $_POST['Year'],
    "Color" => $_POST['Color'],
    "Rentel_cost" => $_POST['Rentel_cost'],
    "About_car" => $_POST['About_car'],
    "Image" => $imageData,

]);

header('location:/cars');
die();