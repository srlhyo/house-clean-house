<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$config = require ('config.php');
$db = new Database($config, password: 'abc123');

$tasks = $db->query("select * from tasks where user_id = 3")->get();

$heading = 'Tasks';

require 'views/tasks/index.view.php';
