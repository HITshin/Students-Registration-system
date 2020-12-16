<?php

	$db = mysqli_connect("localhost","root","","hit");
	
	$sql = "CREATE TABLE StudentInfo(
    student_name TEXT(30) NOT NULL,
    registration_no INT(15) NOT NULL,
    phone INT(15),
    gender TEXT(10),
    department TEXT (20),
    merit INT(15)
	); ";
	
	if (mysqli_query($db,$sql)) {
    	echo "Tables creation successful";} 
    else {
    	echo "Error creating table: " . mysqli_error($conn);
	}
?>
<a href="http://localhost/2nd"><p style="text-align:center"> Go Back</P></a><br> 
