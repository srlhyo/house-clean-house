<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require ('config.php');
$db = new Database($config, password: 'abc123');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $db->query("insert into tasks (status_id, user_id, description) values(:status_id, :user_id, :description)", [
        "status_id" => 1,
        "user_id" => 1,
        "description" => $_POST["description"]
    ]);
}

$heading = 'Create Task';

require 'views/task-create.view.php';
