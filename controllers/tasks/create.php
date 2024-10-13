<?php

use Core\Database;
use Core\Validation;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require base_path('config.php');
$db = new Database($config, password: 'abc123');

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // validation

    if(! Validation::str($_POST['description'], 1, 20)) {
        $errors['description'] = 'Description is no more than 20 characters';
    }

    if(empty($errors)) {    
        $db->query("insert into tasks (status_id, user_id, description) values(:status_id, :user_id, :description)", [
            "status_id" => 1,
            "user_id" => 3,
            "description" => $_POST["description"]    
        ]);
    }
}

$heading = 'Create Task';   

view('tasks/create.view.php', [
    'errors' => $errors,
    'heading' => 'Create Task'
]);
