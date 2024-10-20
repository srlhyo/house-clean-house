<?php

use Core\App;
use Core\Database;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$db = App::resolve(Database::class);

$tasks = $db->query("select * from tasks where user_id = 3")->get();

view('tasks/index.view.php', [
    'heading' => 'Tasks',
    'tasks' => $tasks
]);
