<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require base_path('config.php');

$db = new Database($config, password: 'abc123');

$task = $db->query("select * from tasks where id = :id", ["id" => $_GET["id"]])->findOrFail();

// $heading = 'Task';

$currentId = 3;

authorize($task['user_id'] == $currentId);

view('tasks/show.view.php', [
    'task' => $task,
    'heading' => 'Task'
]);
