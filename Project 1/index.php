<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
// sql to create table
$sql = "CREATE TABLE Users (
bannerId INT(9) UNSIGNED PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
rank VARCHAR(50) NOT NULL,
yearsInPosition INT(2) NOT NULL,
date DATE NOT NUll,
periodCovered VARCHAR(50) NOT NULL
)";

$sql = "INSERT INTO Users (000110108, firstName, lastName, rank, yearsInPosition, date, periodCovered)
VALUES ('Hemant', 'Mahato', 'Student', '4', 'Fall 2020 and Spring 2021')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>