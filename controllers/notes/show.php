<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database'], 'root', 'root');

$currentUserId = 1;

$note = $db->query('select * from notes where id = :id', [
  'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

view("notes/show", [
  'heading' => "Note",
  'note' => $note
]);
