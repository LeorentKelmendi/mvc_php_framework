<?php

$config = require 'config.php';
App::bind('config', $config);
exit(var_dump(App::get('config')));
$config = App::get('config');

return new QueryBuilder(Connection::make(App::get('config')['database']));
