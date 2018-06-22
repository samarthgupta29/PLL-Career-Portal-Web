<?php

$link=mysqli_connect("localhost","root","password","dbtuts") or die('cannot connect to the server'); 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
    }
mysqli_close($link);

?>