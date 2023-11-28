<?php
require_once __DIR__ . '/../configuration.php';
require_once __DIR__ . '/classes.php';

// MySQL
$database = new \mysqli(
    DATABASE_SERVER,
    DATABASE_USERNAME,
    DATABASE_PASSWORD,
    DATABASE_NAME
);

if ($database->connect_error) {
    die("Oops, something went wrong. Please, try again.");
}

// Classes
$user = new User($database);
$order = new Order($database);
?>