<?php
	session_start();
	$db = mysqli_connect("localhost","root","","hit");

	if(isset($_POST['register'])){

		$student_name = mysqli_real_escape_string($db,$_POST['student_name']);
		$registration_no = mysqli_real_escape_string($db,$_POST['registration_no']);
    	$phone= mysqli_real_escape_string($db,$_POST['phone']);
		$gender= mysqli_real_escape_string($db,$_POST['gender']);
		$department= mysqli_real_escape_string($db,$_POST['department']);
		$merit= mysqli_real_escape_string($db,$_POST['merit']);

		$sql = 
		"INSERT INTO StudentInfo (student_name,registration_no,phone,gender,department,merit) VALUES ('$student_name','$registration_no','$phone','$gender','$department','$merit')";

		$_SESSION['message']='Registration Succesfully';
		mysqli_query($db, $sql);
    mysqli_close($db);
    header('Location: student_list.php');
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Student Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style.css"/>
    </head>
    <body> 
    <body>

    <div class="container"><!--container start-->
    <!--header start-->
    <div class="header">
    <img src="logo.png" width="500" height="100">
    <div class="userarea"><!--userarea start-->
      <form>
            <input type="text" name="text" class="search" placeholder="search Here">
            <input type="submit" name="submit" class="submit" value="Search">
       </form>
    </div><!--userarea end-->
    </div>
    <!--header end-->

  <div class="menucontainer">
  <!--menucontainer start--> 
    <nav class="menu">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="registration_form.php">Registration</a></li>
      <li><a href="student_list.php">Students</a></li>
   
      <!--sub link-->
  </ul>
  </nav>
  </div>
  <!--menucontainer end-->
  <div class="headline">  <h2>Registration Form</h2> </div>
  <div class="form">
        <form action="registration_form.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="student_name">Student Name *</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>
        <div class="form-group">
            <label for="registration_no">Registration No *</label>
            <input type="text" class="form-control" id="registration_no" name="registration_no" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
                    <label>Gender </label>
                    <select name="gender" class="select"> 
                        <option value="Male">Male
                        </option>
                        <option value="Female">Female
                        </option>
                    </select>
        </div>
        <div class="form-group">
                    <label>Department 
                    </label>
                    <select name="department" class="select">
                       <option value="Computer Science and Engineering">Computer Science and Engineering
                        </option>
                        <option value="Electrical Engineering">Electrical Engineering
                        </option>
                        <option value="Electronics & Telecommunication Engineering ">Electronics & Telecommunication Engineering 
                        </option>
                        <option value="Mechanical Engineering">Mechanical Engineering
                    </select>  
        </div>
        <div class="form-group">
            <label for="Merit">Merit Position</label>
            <input type="text" class="form-control" id="merit" name="merit">
        </div>
        <button type="submit" class="register-button" value="Register" name="register">Submit</button>
        </form>
  </div>


  <!--map and address-->
  <div class="footer">
    <!--map-->
  <div class="row">
  <div class="col-4">
      <h3 class="head">COLLEGE ADDRESS</h3>
      <div class="map">
        <img src="map.png" width="170" height="170">
      </div>
  </div><!--col-4-->

  <div class="col-4">
       <h3 class="head">COLLEGE ADDRESS</h3>
       <div class="para">
       <p>Postal Code: 400709</p>
        <p>022 2754 1005</p>
        <p>principal.ltce@ltjss.net</p>
        <p>Monday - Friday:</p>
        <p> 9:00 AM - 5:00 PM</p>
    </div>
  </div><!--col-4-->

  </div><!--row-->


  <div class="clearfix">  
  </div>
  </div>
<!--map and address end-->


  <footer class="copyright text-center">
  &copy;2020 |<a href="https://ltce.in/"> Lokmanya Tilak College of Engineering </a>| All Rights Reserved
  </footer>

  </div>
  <!--container end-->   
  </body>
</html>
