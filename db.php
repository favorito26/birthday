<?php
$host = "localhost";   // your database host
$user = "root";        // database username
$pass = "m260103c";            // database password
$dbname = "invitations";   // database name

// Create connection
$db = new mysqli($host, $user, $pass, $dbname);

// Check connection
if($db->connect_error){
    die("Database connection failed: " . $db->connect_error);
}
?>
