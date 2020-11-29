<?php
$database = "dbclinicautp";
$servername = "mysql.clinicautp.ds507.online";
$username = "clinicautpdb";
$password = "Clinica20ds9db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    //echo "Connected successfully";
}

