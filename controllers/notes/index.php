<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');

$notes = $db->query('select * from notes where user_id = 1')->get();

view("notes/index", [
  'heading' => "My Notes",
  'notes' => $notes
]);
