<?php
$mysqli = new mysqli('localhost', 'lea2', '', 'corememories');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>
