<?php
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'employee_manager';

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die('Connection failed: '.$conn->connect_error);
}
