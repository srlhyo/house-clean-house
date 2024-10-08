<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'Validation.php';

$config = require ('config.php');
$db = new Database($config, password: 'abc123');

// validation (sanitize the inputs)
$errors = [];

if(! Validation::str($_POST['description'], 1, 10)) {
    $errors['description'] = 'Description has a mix of 1, and a max of 10 characters';
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db->query("insert into tasks (status_id, user_id, description) values(:status_id, :user_id, :description)", [
        "status_id" => 1,
        "user_id" => 3,
        "description" => htmlspecialchars($_POST["description"])    
    ]);
}

$heading = 'Create Task';   

require 'views/task-create.view.php';
