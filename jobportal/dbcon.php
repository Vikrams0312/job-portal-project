<?php
session_start();
$hostname='localhost';
$username='root';
$password='';
$database='test';
$dbcon=mysqli_connect($hostname, $username, $password, $database);

if(!$dbcon){
    echo 'mysql connection error ';
    exit;
}