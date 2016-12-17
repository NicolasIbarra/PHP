<?php

// WATCH VIDEO https://www.youtube.com/watch?v=GNOjyR_xF88

error_reporting(E_ALL);
ini_set('display_errors', 1);

function print_pre($object) {
?><pre><?php print_r($object); ?></pre><?php
}

// Credentials
$host = 'localhost';
$database = 'snippets';
$username = 'root';
$password = '';

// Connect
$mysqli = new mysqli($host, $username, $password, $database);

if ( $mysqli->connect_error ) {
	die( 'Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error );
}

// Our data
$query = $mysqli->query( "SELECT * FROM ajaxget" );

while ( $row = $query->fetch_assoc() ) {
	$result[] = $row;
}
print_pre($result);

// // No field
$query = $mysqli->query( "SELECT dog FROM ajaxget" );
$result = $query->fetch_assoc();
print_pre($result);

// // No table
// $query = $mysqli->query( "SELECT * FROM doesntexist" );
// $result = $query->fetch_assoc();
// print_pre($result);

// Empty search
$query = $mysqli->query( "SELECT * FROM ajaxget WHERE name = 'Paul'" );
$result = $query->fetch_assoc();
print_pre($result);

// The fix
$query = $mysqli->query( "SELECT dog FROM ajaxget" );

if ( $query ) {
	$result = $query->fetch_assoc();
	print_pre($result);
}

echo 'Woohoo! No errors!';