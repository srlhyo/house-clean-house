<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

view('tasks/create.view.php', [
    'errors' => [],
    'heading' => 'Create Task'
]);
