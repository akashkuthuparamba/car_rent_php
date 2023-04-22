<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$car = $db->query('select * from Rent_car where id= :id', ["id" => $_POST['id']])->fetch();

$starting_date = $_SESSION['starting_date'];

$ending_date = $_SESSION['ending_date'];

$errors = [];

$posts = $_POST;

foreach (array_keys($posts) as $post) {

    if (empty($_POST[$post])) {
        $errors[$post] = "enter your" . " " . $post;
    }
}

if (strlen($_POST['number']) != 10) {
    $errors['number'] = "enter a valid phone number";
}




if (!empty($errors)) {
    view(
        "user/user_details.view.php",
        [
            "errors" => $errors,
            "total_price" => $_POST['total_price'],
            "car" => $car
        ]
    );
} else {

    $db->query("INSERT INTO `Car_booking` (`Rent_car_id`, `Customer_name`, `Email`, `Contact_number`, `Booking_start_date`, `Booking_end_date`, `tottal_cost` , `status`) VALUES (:Rent_car_id, :Customer_name, :Email, :Contact_number, :Booking_start_date, :Booking_ending_date, :Tottal_cost, 'Unverified')", [

        "Rent_car_id" => $_POST['id'],
        "Customer_name" => $_POST['name'],
        "Email" => $_POST['email'],
        "Contact_number" => $_POST['number'],
        "Booking_start_date" => $starting_date,
        "Booking_ending_date" => $ending_date,
        "Tottal_cost" => $_POST['total_price'],

    ]);

    view(
        "user/booking.view.php"
    );
}