<?php
require "Database.php";
$config = require "config.php";
$db = new Database($config['database']);

$id = $_GET['id'];

echo $id;

$heading = "Note";

$note = $db->query('select * from notes where id = :id', [":id" => $id])->findOrFail();

$currentUserId = 1;

authorize($note['user_id'] !== $currentUserId);

if (!$note) {
    abort();
}
require "views/note.view.php";
