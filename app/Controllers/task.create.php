<?php


$description =Request::get('description');

qureyBulider::insert('tasks', [

    'description' => $description

]);

header ("Location: http://localhost:8080/php-basics");

?>