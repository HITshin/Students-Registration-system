<?php
// Create connection
$conn = mysqli_connect("localhost", "root","");
// Create database
$db = "CREATE DATABASE hit;";
if (mysqli_multi_query($conn,$db)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<a href="http://localhost/2nd"><p style="text-align:center"> Go Back</P></a><br>
