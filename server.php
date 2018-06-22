<?php
session_start();

$servername="localhost";
$username = "root";
$password = "password";
$errors = array(); 

// Create connection
$db = mysqli_connect($servername, $username, $password,'pllcareer');

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$sql = "INSERT INTO personal (firstname, middlename, lastname) VALUES ('Peter', 'Parker', 'test')";
if(mysqli_query($db, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
 
// Close connection
mysqli_close($db);
?>