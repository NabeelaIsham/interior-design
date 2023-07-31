<?php
 require 'constants.php';

 //conect to the database


 $servername = "localhost";
 $username = "dilan";
 $password = "dilan123";
 $database = "interior"; 
 
 // Create a connection
 $conn = new mysqli($servername, $username, $password, $database);
 
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 
 echo "Connected successfully";