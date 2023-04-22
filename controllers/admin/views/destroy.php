<?php
use Core\App;
use Core\Database;


$db = App::resolve(Database::class);



$db->query("DELETE FROM Rent_car where id= :id", [
    "id" => $_POST["id"]
]);
header("location:/cars");