<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
                        $_SESSION['email'] = $user_data['email'];

						header("Location: reg1.php");
						die;
					}
				}
			}
			
			echo '<p id = "wr"> Incorrect username or password! </p>';
		}else
		{
			echo "Invalid username or password!";
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

    <div class="container">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link" href="signup.php">New Student</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Login Here</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Forgot Password</a>
            </li>
        </ul>
    </div>
    <br><br><br>

    <div class="container border col-md-6 m-auto p-5">
        <form method="POST">

            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Email ID" required>
            <br>

            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
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