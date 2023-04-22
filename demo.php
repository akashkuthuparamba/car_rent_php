<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    use Core\App;
    use Core\Database;
    $db=App::resolve(Database::class);
    dd($db->query("select Car_type.id,Rent_car.Car_type_id")->get());
    ?>
    <?php $x=[1,2,3,4,5,6]?>
    <?php foreach ($y as $x): ?>
        <h1><?=$x?></h1>

    <?php endforeach ?>
</body>

</html>