<?php

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');

$heading = "My Notes";

$notes = $db->query('select * from notes where user_id = 1')->get();

require "views/notes.php";
