<?php
$conn = new mysqli('localhost', 'root', '', 'blogdb');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
}
?>