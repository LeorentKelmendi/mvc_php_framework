<?php

$router->get('SOAPPHP/phpjeff', 'controllers/index.php');
$router->get('SOAPPHP/phpjeff/index.php/about', 'controllers/about.php');

$router->post('SOAPPHP/phpjeff/index.php/names', 'controllers/add-name.php');
