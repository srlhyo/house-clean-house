<?php

use Core\Database;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require base_path('config.php');

$db = new Database($config, password: 'abc123');

$currentId = 3;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $db->query("select * from tasks where id = :id", ["id" => $_GET["id"]])->findOrFail();

    authorize($task['user_id'] == $currentId);

    $db->query("delete from tasks where id = :id", [
        "id" => $_POST['id'],
    ]);

    header('location: /tasks');
    exit();
} {

    $task = $db->query("select * from tasks where id = :id", ["id" => $_GET["id"]])->findOrFail();
    
    authorize($task['user_id'] == $currentId);
    
    view('tasks/show.view.php', [
        'task' => $task,
        'heading' => 'Task'
    ]);
}

