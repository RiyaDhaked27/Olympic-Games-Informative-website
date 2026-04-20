<?php
session_start();
error_reporting(0);
$siteUrl = 'http://'.$_SERVER['HTTP_HOST'].'/flagbit_solution';
$siteTitle = "www.Flagbit_solution.com | Welcome to flagbit solution";


// Database Connection

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'skit_db';

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
	echo "Database connection error!";
}