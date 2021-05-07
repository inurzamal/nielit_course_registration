<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    $form_data= "";
    $image_data = "";

    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        // $dob = $_SESSION["dob"];
        $gender = $_SESSION["gender"];
        $ph = $_SESSION["ph"];
        $father_name = $_SESSION["father_name"];
        $mother_name = $_SESSION["mother_name"];
        $address = $_SESSION["address"];
        $district = $_SESSION["district"];
        $state = $_SESSION["state"];
        $pincode = $_SESSION["pincode"];
        $nationality = $_SESSION["nationality"];
        $religion = $_SESSION["religion"];
        $landphone = $_SESSION["landphone"];
        $mobile = $_SESSION["mobile"];
        $occupation = $_SESSION["occupation"];
        $income = $_SESSION["income"];
        $aadhaar = $_SESSION["aadhaar"];
        $source = $_SESSION["source"];

        $qualification = $_SESSION["qualification"];
        $qualstream = $_SESSION["qualstream"];
        $qualmode = $_SESSION["qualmode"];
        $qualresult = $_SESSION["qualresult"];
        $qualpercent = $_SESSION["qualpercent"];
        $qualyear = $_SESSION["qualyear"];

        $counter = 1;
        $target_dir = "uploads/";
        $target_file1 = $target_dir . basename($_FILES["photo"]["name"]);
        $target_file2 = $target_dir . basename($_FILES["sign"]["name"]);
        $target_file3 = $target_dir . basename($_FILES["cc"]["name"]);
  

		if(!empty($name) && !empty($mobile) && !empty($email))
		{
    
            $query = "insert into student(student_name, email, gender,ph,father_name,mother_name, address, district, state, pincode,nationality,religion,landphone,mobile,occupation,income,aadhaar,source, qualification,qualstream,qualmode,qualresult, qualpercent, qualyear, photo, sign, cc) values('$name','$email','$gender','$ph', '$father_name', '$mother_name','$address','$district','$state','$pincode','$nationality','$religion','$landphone','$mobile','$occupation','$income','$aadhaar','$source','$qualification','$qualstream','$qualmode','$qualresult','$qualpercent','$qualyear','$target_file1', '$target_file2', '$target_file3')";
            $result = mysqli_query($con, $query);

            if($result){
                $form_data = true;
            }else{$form_data = false;}


            if (file_exists($target_file1)) {
                $exists = true;
                $increment = $target_dir .$counter.basename($_FILES["photo"]["name"]);
                while($exists){
                   if(file_exists($increment)){
                      $counter++;
                      $increment = $target_dir .$counter.basename($_FILES["photo"]["name"]);
                   }
                   else{
                      $exists = false;
                   }
                 }
                 move_uploaded_file($_FILES["photo"]["tmp_name"], $increment );
                 $image_data = true;
            }
    
             else {
              move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file1);
              $image_data = true;
             }
    
            if (file_exists($target_file2)) {
                $exists = true;
                $increment = $target_dir .$counter.basename($_FILES["sign"]["name"]);
                while($exists){
                   if(file_exists($increment)){
                      $counter++;
                      $increment = $target_dir .$counter.basename($_FILES["sign"]["name"]);
                   }
                   else{
                      $exists = false;
                   }
                 }
                 move_uploaded_file($_FILES["sign"]["tmp_name"], $increment );
                 $image_data = true;
             }
             else {
              move_uploaded_file($_FILES["sign"]["tmp_name"], $target_file2);
              $image_data = true;
             }
    
             if (file_exists($target_file3)) {
                $exists = true;
                $increment = $target_dir .$counter.basename($_FILES["cc"]["name"]);
                while($exists){
                   if(file_exists($increment)){
                      $counter++;
                      $increment = $target_dir .$counter.basename($_FILES["cc"]["name"]);
                   }
                   else{
                      $exists = false;
                   }
                 }
                 move_uploaded_file($_FILES["cc"]["tmp_name"], $increment );
                 $image_data = true;
             }
             else {
              move_uploaded_file($_FILES["cc"]["tmp_name"], $target_file3);
              $image_data = true;
             }
    
		}else
		{
			echo "Please enter some valid information!";
		}

        if($form_data && $image_data){echo '<p class="alert alert-info" role="alert"> Form submited successfully! </p>';}
        else {echo '<p id = "wr"> Something wrong ! </p>';}
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

    <div class="container text-center">
        <div class="row"> 
            <div class="col-8 btn btn-success reg">
                <h4>Welcome <?php echo $user_data['student_name']; ?></h4>
            </div>
            <div class="col-3 btn btn-danger logout-btn">
                <a href="logout.php" class="btn-danger"><h4>Logout</h4></a>
            </div>
        </div>
    </div> <br>

    <div class="container col-lg-9 m-auto">
        <nav class="nav nav-pills nav-fill nav-justified">
            <a class="nav-item nav-link" href="reg1.php">Personal Details</a>
            <a class="nav-item nav-link" href="reg2.php">Qualification</a>
            <a class="nav-item nav-link active" href="reg3.php">Upload</a>
            <a class="nav-item nav-link" href="payment.php">Make Payment</a>
        </nav>
    </div> <br>


    <div class="border-top my-3"></div>

    <div class="col-lg-8 m-auto">

        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group text-left">
                    <label class="col-form-label-lg" for="photo">Upload Photo (in JPEG format) <font color="red">*</font></label>
                    <div class="row">
                        <div class="col-8">
                            <input type="file" class="form-control-file border" required class="form-control form-control-lg" name="photo" id="photo" accept=".jpg" onchange="loadPhoto(event)">
                        </div>

                        <div class="col-2">

                            <script>
                                var uploadphoto = document.getElementById("photo");
                                uploadphoto.onchange = function() {
                                    if (this.files[0].size > 5242880) {
                                        alert("File size should be less than 5MB !");
                                    };
                                };

                                var loadPhoto = function(event) {
                                    var outputimg = document.getElementById('photo');
                                    outputimg.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                    </div>
                </div>
                <br>

                <div class="border-top my-3"></div>
                <div class="form-group text-left">
                    <label class="col-form-label-lg" for="sign">Upload Signature (in JPEG format) <font color="red">*</font></label>
                    <div class="row">
                        <div class="col-8">
                            <input type="file" required class="form-control-file border" name="sign" id="sign" accept=".jpg" onchange="loadSign(event)">
                            <input type="hidden" id="custId" name="custId" value="3487">
                        </div>

                        <div class="col-2">

                            <script>
                                var uploadsign = document.getElementById("sign");
                                uploadsign.onchange = function() {
                                    if (this.files[0].size > 5242880) {
                                        alert("File size should be less than 5MB !");
                                    };
                                };

                                var loadSign = function(event) {
                                    var outputimg = document.getElementById('sign');
                                    outputimg.src = URL.createObjectURL(event.target.files[0]);
                                };
                            </script>
                        </div>
                    </div>
                    <br>

                    <div class="border-top my-3"></div>

                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="cc">Upload Community Certificate (if applicable)<br> (in JPEG format)</label>
                        <div class="row">
                            <div class="col-8">
                                <input type="file" class="form-control-file border" name="cc" id="cc" accept=".jpg" onchange="loadcc(event)" >
                            </div>

                            <div class="col-2">

                                <script>
                                    var uploadcc = document.getElementById("cc");
                                    uploadcc.onchange = function() {
                                        if (this.files[0].size > 5242880) {
                                            alert("File size should be less than 5MB !");
                                        };
                                    };
                                    var loadcc = function(event) {
                                        var outputimg = document.getElementById('cc');
                                        outputimg.src = URL.createObjectURL(event.target.files[0]);
                                    };
                                </script>
                            </div>

                        </div>

                    </div>

                    <div class="form-check ck">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                        <label class="form-check-label text-danger" for="flexCheckDefault">I agree that the details are true</label>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <a href="reg2.php" class="btn btn-block btn-lg btn-secondary btn2">Previous</a>
                        </div>
                        <div class="col">
                            <input type="submit" value="Submit" class="btn btn-block btn-lg btn-success btn2"> 
                        </div>
                        <br>
                    </div>
            </form>
        </div>
        <br>
    </div>

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