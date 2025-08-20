<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = new Database($config['database']);

$id = $_GET['id'];

echo $id;

$note = $db->query('select * from notes where id = :id', [":id" => $id])->findOrFail();
$currentUserId = 1;

authorize($note['user_id'] !== $currentUserId);

if (!$note) {
    abort();
}
view("/notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
