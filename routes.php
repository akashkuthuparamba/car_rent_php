<?php
// ##########################  USER   ####################


$router->get('/', 'controllers/user/index.php');
$router->post('/', 'controllers/user/display.php');


$router->get('/car/details', 'controllers/user/details.php');
$router->get('/car/user_details', 'controllers/user/user_details.php');
$router->post('/booking', 'controllers/user/booking.php');


// ####################   USER END  ###########################


// ####################   ADMIN    #########################

$router->get('/cars', 'controllers/admin/views/index.php')->only('auth');
$router->get('/admin', 'controllers/admin/login/create.php')->only('guest');
$router->post('/login', 'controllers/admin/login/store.php');
$router->delete('/logout', 'controllers/admin/login/destroy.php');
$router->get('/customers', 'controllers/admin/views/booking.php');



$router->get('/cars/create', 'controllers/admin/views/create.php');
$router->get('/car/edit', 'controllers/admin/views/edit.php');
$router->patch('/cars', 'controllers/admin/views/update.php');
$router->delete('/cars', 'controllers/admin/views/destroy.php');
$router->post('/cars/create', 'controllers/admin/views/store.php');
$router->get('/verification', 'controllers/admin/views/verification.php');
$router->patch('/verification', 'controllers/admin/views/verification_update.php');



// ####################   ADMIN END   #########################


$router->get('/demo', 'demo.php');