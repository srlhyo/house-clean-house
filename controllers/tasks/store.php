<?php

use Core\App;
use Core\Database;
use Core\Validation;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = App::resolve(Database::class);

$errors = [];

if(! Validation::str($_POST['description'], 1, 20)) {
    $errors['description'] = 'Description is no more than 20 characters';
}

if(! empty($errors)) {
    return view('tasks/create.view.php', [
        'errors' => $errors,
        'heading' => 'Create Task'
    ]);
}
 
$db->query("insert into tasks (status_id, user_id, description) values(:status_id, :user_id, :description)", [
    "status_id" => 1,
    "user_id" => 3,
    "description" => $_POST["description"]    
]);

header('location: /tasks');
die();
