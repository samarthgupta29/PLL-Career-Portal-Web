<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "password", "pllcareer");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$firstname = mysqli_real_escape_string($link, $_REQUEST['firstname']);
$middlename = mysqli_real_escape_string($link, $_REQUEST['middlename']);
$lastname = mysqli_real_escape_string($link, $_REQUEST['lastname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$aadhar = mysqli_real_escape_string($link, $_REQUEST['aadhar']);
$pan = mysqli_real_escape_string($link, $_REQUEST['pan']);
$dob = mysqli_real_escape_string($link, $_REQUEST['dob']);

$gender = mysqli_real_escape_string($link, $_REQUEST['gender']);

// attempt insert query execution
$sql = "INSERT INTO personalinformation (firstname, middlename,lastname,email,aadhar,pan,gender) VALUES ('$firstname', '$middlename', '$lastname','$email','$aadhar','$pan','$gender')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$addressline1 = mysqli_real_escape_string($link, $_REQUEST['addressline1']);
$addressline2 = mysqli_real_escape_string($link, $_REQUEST['addressline2']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zipcode = mysqli_real_escape_string($link, $_REQUEST['zipcode']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);

// attempt insert query execution
$sql = "INSERT INTO contactdetails (addressline1, addressline2,city,state,zipcode,telephone,mobile) VALUES ('$addressline1', '$addressline2', '$city','$state','$zipcode','$telephone','$mobile')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$nameoforganization = mysqli_real_escape_string($link, $_REQUEST['nameoforganization']);
$address = mysqli_real_escape_string($link, $_REQUEST['address']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$zipcode = mysqli_real_escape_string($link, $_REQUEST['zipcode']);
$telephone = mysqli_real_escape_string($link, $_REQUEST['telephone']);
$designation = mysqli_real_escape_string($link, $_REQUEST['designation']);
$payrate = mysqli_real_escape_string($link, $_REQUEST['payrate']);


// attempt insert query execution
$sql = "INSERT INTO workexperience (nameoforganization,address,city,state,zipcode,telephone,designation,payrate) VALUES ('$nameoforganization', '$address', '$city','$state','$zipcode','$telephone','$designation','$payrate')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


$ten_name = mysqli_real_escape_string($link, $_REQUEST['ten_name']);
$ten_major = mysqli_real_escape_string($link, $_REQUEST['ten_major']);
$ten_percentage = mysqli_real_escape_string($link, $_REQUEST['ten_percentage']);
$twelve_name = mysqli_real_escape_string($link, $_REQUEST['twelve_name']);
$twelve_major = mysqli_real_escape_string($link, $_REQUEST['twelve_major']);
$twelve_percentage = mysqli_real_escape_string($link, $_REQUEST['twelve_percentage']);
$gradname = mysqli_real_escape_string($link, $_REQUEST['gradname']);
$gradmajor = mysqli_real_escape_string($link, $_REQUEST['gradmajor']);
$gradpercentage = mysqli_real_escape_string($link, $_REQUEST['gradpercentage']);
$postgradname = mysqli_real_escape_string($link, $_REQUEST['postgradname']);
$postgradmajor = mysqli_real_escape_string($link, $_REQUEST['postgradmajor']);
$postgradpercentage = mysqli_real_escape_string($link, $_REQUEST['postgradpercentage']);



// attempt insert query execution
$sql = "INSERT INTO education (ten_name,ten_major,ten_percentage,twelve_name,twelve_major,twelve_percentage,gradname,gradmajor,gradpercentage,postgradname,postgradmajor,postgradpercentage) VALUES ('$ten_name', '$ten_major', '$ten_percentage','$twelve_name','$twelve_major','$twelve_percentage','$gradname','$gradmajor','$gradpercentage','$postgradname','$postgradmajor','$postgradpercentage')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

 
// close connection
mysqli_close($link);
?>