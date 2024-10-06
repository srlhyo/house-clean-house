<?php

require 'functions.php';
require 'Database.php';
// require 'route.php';


$db = new Database();

$tasks = $db->query('select * from tasks')->fetchAll();


// dd($tasks); 
foreach($tasks as $task) {
    echo "<li>{$task['description']}</li>";
}