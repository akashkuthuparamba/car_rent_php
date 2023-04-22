<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);
$customers = $db->query("SELECT * FROM Car_booking")->get();

view("admin/views/booking.view.php", [
    'customers' => $customers
]);