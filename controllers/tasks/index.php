<?php

use Core\Database;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require base_path('config.php');
$db = new Database($config, password: 'abc123');

$tasks = $db->query("select * from tasks where user_id = 3")->get();

view('tasks/index.view.php', [
    'heading' => 'Tasks',
    'tasks' => $tasks
]);
