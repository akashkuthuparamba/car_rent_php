<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$error = [];

$starting_date = strtotime($_POST['starting_date']);

if (empty($starting_date)) {
    $error['starting_date'] = "please enter starting date";
}

$ending_date = strtotime($_POST['ending_date']);

if (empty($ending_date)) {
    $error['ending_date'] = "please enter ending date";
}

$days = ($ending_date - $starting_date) / (60 * 60 * 24);

$_SESSION['selected_date'] = $days;

$_SESSION['starting_date'] = $_POST['starting_date'];

$_SESSION['ending_date'] = $_POST['ending_date'];

$car_types = $db->query("SELECT * FROM Car_type")->get();

$car_type = $db->query("SELECT * FROM `Car_type` WHERE Car_type= :car_type", [
    "car_type" => $_POST['car_type']
])->findOrFail();


$cars = $db->query("SELECT * FROM `Rent_car` WHERE Car_type_id= :car_type_id", [
    "car_type_id" => $car_type['id']
])->get();


$booked_cars = $db->query("SELECT * FROM `Car_booking` WHERE status='Verified' ")->get();

$car_list = [];

$errors = [];

$checking_list = [];


foreach ($cars as $car) {
    foreach ($booked_cars as $booked_car) {
        if ($booked_car['Rent_car_id'] == $car['id']) {
            if (((strtotime($booked_car['Booking_start_date']) <= $starting_date) && (strtotime($booked_car['Booking_end_date']) >= $starting_date)) || ((strtotime($booked_car['Booking_start_date']) <= $ending_date) && (strtotime($booked_car['Booking_end_date']) >= $ending_date))) {

                $checking_list[$booked_car['Rent_car_id']] = $car;
            }

        }
    }

}

foreach ($cars as $car) {
    if (!array_key_exists($car['id'], $checking_list)) {
        $car_list[] = $car;
    }
}


if (empty($car_list)) {
    $errors['body'] = "no availabale cars";
}

if ($error) {
    view("user/index.view.php", [
        "car_types" => $car_types,
        "error" => $error
    ]);
    exit();
}

view(
    "user/display.view.php",
    [
        "errors" => $errors,
        "car_list" => $car_list
    ]
);