<?php
include 'server.php';
if(isset($_POST['save']))
{
// variables for input data

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];
$pan = $_POST['pan'];

// sql query for inserting data into database

mysqli_query($db,"insert into personal(firstname,middlename,lastname) values ('$firstname','$middlename','$lastname')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?>