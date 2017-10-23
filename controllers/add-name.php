<?php

$data = $_POST['name'];

$message = $query->insert('todos', [

    'todo'      => $data,
    'due_date'  => "2017-10-03",
    'completed' => 0,

]);

if (!$message) {

    throw new Exception('Could not insert the data');
}

header('Location: /SOAPPHP/phpjeff/');
