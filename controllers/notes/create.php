<?php

use Core\Database;
use Core\Validator;

$heading = "Create Note";
$config = require('config.php');
$db = new Database($config['database']);
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {



    if (!Validator::string($_POST['body'], 1, 500)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }
    if (!Validator::email($_POST['body'])) {
        $errors['body'] = 'Provide a valid email Address';
    }
    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body,:user_id)', [
            'body' => $_POST["body"],
            'user_id' => 1,
        ]);
    }
}

view("notes/create.view.php", [
    'heading' => 'Create Notes'
]);
