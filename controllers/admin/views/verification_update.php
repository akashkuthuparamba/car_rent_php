<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$db->query("UPDATE `Car_booking` SET `status` = :status WHERE `Car_booking`.`id` = :id", [
    "status" => $_POST['verification'],
    "id" => $_POST['id']
]);

header("location: /customers");