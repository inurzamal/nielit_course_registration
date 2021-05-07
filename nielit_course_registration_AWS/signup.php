<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$course_name = $_POST['course_name'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$dob = $_POST['dob'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

            //read from database
			$query = mysqli_query($con, "select * from users where email = '$email' limit 1");

			if(mysqli_num_rows($query) > 0)
			{
                echo '<script>alert("Email Already Exist!")</script>';

			}
            else{

                //save to database
                $user_id = random_num(20);
                $query = "insert into users (user_id,course_name,student_name,category,dob,email,password) values ('$user_id','$course_name','$name','$category', '$dob', '$email','$password')";

                mysqli_query($con, $query);

                header("Location: login.php");
                die;

            }
    
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Nielit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="banner container">
        <img src="banner.jpg" class="img-fluid" alt="NIELIT Guwahati" />
    </div>
    <br>


    <div class="container headline text-center alert-success">
        <h3><strong>Common Application Form for Industry Oriented Courses – 2021</strong></h3>
    </div>
    <br>

    <div class="container text-center  alert-info">
        <h4><em>To see the list of Courses<a
                    href=https://www.nielit.gov.in/guwahati/content/long-term-courses-3>&nbsp;&nbsp;Click here</a></em>
        </h4>
    </div>
    <br><br>

    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Change Course Type</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  active" href="#">New Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login Here</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forgot Password</a>
            </li>
        </ul>
    </div>
    <br><br>

    <div class="container">
        <form method="POST">
            <div class="row form-row">
                <div class="form-group">
                    <label for="course">Select a Course<font color="red">*</font></label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="course_name" required>
                        <option value="">Select a course</option>
                        <option value="Linux">Linux Fundamentals</option>
                        <option value="Robotics for Kids">Robotics for Kids</option>
                        <option value="Python">Python Programming</option>
                        <option value="Python, C++, Java (CBSE)">Python, C++, Java (CBSE)</option>
                        <option value="Data Science using Python">Data Science using Python</option>
                        <option value="Cloud Computing">Cloud Computing (Public & Private Cloud)</option>
                        <option value="Android Application Development">Android Application Development</option>
                        <option value="Full Stack Web Development">Full Stack Web Development</option>
                        <option value="Circuit Design">Circuit Design & Working with Arduino</option>
                        <option value="IoT">Internet of Things (IoT)</option>    
                    </select>
                </div>
            </div>
            <div class="row form-row">
                <div class="form-group col-md-6 col">
                    <label for="name">Student's Name (As in 10th Certificate)<font color="red">*</font></label>
                    <input type="text" class="form-control form-control-lg" id="inputEmail4" placeholder="Your Name" name="name" required>
                </div>
                <div class="form-group col-md-6 col">
                    <label for="category">Category<font color="red">*</font></label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category">
                        <option value="General">General</option>
                        <option value="SC">SC</option>
                        <option value="ST">ST</option>
                        <option value="OBC">OBC</option>
                    </select>
                </div>
            </div>

            <div class="form-row row">
                <div class="form-group col-md-6 col">
                    <label for="date">Date of Birth<font color="red">*</font></label>
                    <input type="date" name="dob" id="date" class="form-control form-control-lg" placeholder="DOB" required>
                </div>
                <div class="form-group col-md-4 col">
                    <label for="email">Email<font color="red">*</font></label>
                    <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Your Email" required>
                </div>
                <div class="form-group col-md-2 col">
                    <label for="password">Create Password<font color="red">*</font></label>
                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password" required>
                </div>
            </div>
            <br>

            <div class="form-group">
                <input type="submit" class="btn btn-block btn-lg btn-success btn2" value="Submit">
            </div>

        </form>
    </div>
    <br><br>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</body>

</html>