<?php
// Minimal DB connection using mysqli. Update credentials if needed.
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = ''; // set your MySQL password if any
$DB_NAME = 'mypharma';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    // In production, do not echo credentials or detailed errors.
    http_response_code(500);
    exit('Database connection failed.');
}
$mysqli->set_charset('utf8mb4');
?>