<?php

require 'functions.php';
// require 'router.php';
require 'Database.php';

$config = require 'config.php';
$db = new Database($config['database'], 'root', 'root');

$id = $_GET['id'];
$query = "SELECT * FROM posts where id = ?";

$posts = $db->query($query, [$id])->fetch();

dd($posts);
