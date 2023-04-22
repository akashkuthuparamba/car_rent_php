<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a password ';
}

if (!empty($errors)) {
    return view('admin/login/create.view.php', [
        'errors' => $errors
    ]);
}

$admin = $db->query('select * from Admin where Email = :email', [
    'email' => $email
])->fetch();

if ($admin) {
    if ($password == $admin['Password']) {
        login([
            "email" => $email
        ]);
        header('location: /cars');
    }
}



view('admin/login/create.view.php', [
    "errors" => [
        "password" => "no matching account found for this email and password"
    ]
]);