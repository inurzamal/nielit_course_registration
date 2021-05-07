<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$name = $_POST['name'];
		// $dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$ph = $_POST['ph'];
        $father_name = $_POST['father_name'];
        $mother_name  = $_POST['mother_name'];
        $address  = $_POST['address'];
        $district  = $_POST['district'];
        $state  = $_POST['state'];
        $pincode  = $_POST['pincode'];
        $nationality  = $_POST['nationality'];
        $religion  = $_POST['religion'];
        $landphone  = $_POST['landphone'];
        $mobile  = $_POST['mobile'];
        $occupation  = $_POST['occupation'];
        $income  = $_POST['income'];
        $aadhaar  = $_POST['aadhaar'];
        $source  = $_POST['source'];


        $_SESSION["name"] = $name;
        // $_SESSION["dob"] = $dob;
        $_SESSION["gender"] = $gender;
        $_SESSION["ph"] = $ph;
        $_SESSION["father_name"] = $father_name;
        $_SESSION["mother_name"] = $mother_name;
        $_SESSION["address"] = $address;
        $_SESSION["district"] = $district;
        $_SESSION["state"] = $state;
        $_SESSION["pincode"] = $pincode;
        $_SESSION["nationality"] = $nationality;
        $_SESSION["religion"] = $religion;
        $_SESSION["landphone"] = $landphone;
        $_SESSION["mobile"] = $mobile;
        $_SESSION["occupation"] = $occupation;
        $_SESSION["income"] = $income;
        $_SESSION["aadhaar"] = $aadhaar;
        $_SESSION["source"] = $source;

		if(!empty($name) && !empty($mobile))
		{

            header("Location: reg2.php");
    
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

    <div class="container">
            <nav class="nav nav-pills nav-fill nav-justified">
                <a class="nav-item nav-link active" href="reg1.php">Personal Details</a>
                <a class="nav-item nav-link" href="reg2.php">Qualification</a>
                <a class="nav-item nav-link" href="reg3.php">Upload</a>
                <a class="nav-item nav-link" href="payment.php">Make Payment</a>
            </nav>
    </div><br>

    <div class="container">
            <form action="" method="POST">


                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg " for="studname">Student's Name <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="<?php echo $user_data['student_name']; ?>" name="name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="dob">Date of Birth <font color="red">*</font></label>
                            <input type="date" disabled class="form-control form-control-lg" required value="<?php echo $user_data['dob']; ?>" name="dob">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="gender">Gender <font color="red">*</font></label>
                            <select name="gender" required class="form-control form-control-lg">
                                <option value="MALE" >Male</option>
                                <option value="FEMALE" >Female</option>
                                <option value="OTHERS" >Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="ph">Physically Handicapped <font color="red">*</font></label>
                            <select name="ph" required class="form-control form-control-lg">
                                <option value="NO" >NO</option>
                                <option value="YES" >YES</option>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="fathername">Father's Name <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="" name="father_name">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="mothername">Mother's Name <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="" name="mother_name">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="address">Address for Communication <font color="red">*</font></label>
                            <textarea name="address" class="form-control form-control-lg" id="" cols="30" rows="7" required></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="form-group text-left">
                                    <label class="col-form-label-lg" for="district">District <font color="red">*</font></label>
                                    <input type="text" class="form-control form-control-lg" required value="" name="district">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group text-left">
                                    <label class="col-form-label-lg" for="state">State <font color="red">*</font></label>
                                    <input type="text" class="form-control form-control-lg" required value="" name="state">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group text-left">
                                    <label class="col-form-label-lg" for="pincode">Pincode <font color="red">*</font></label>
                                    <input type="text" class="form-control form-control-lg" required value="" name="pincode">
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="nationality">Nationality <font color="red">*</font></label>
                            <select name="nationality" required class="form-select form-select-lg">
                                <option value="INDIAN" >INDIAN</option>
                                <option value="OTHER" >OTHER COUNTRY</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="religion">Religion <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="" name="religion">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="landphone">Landline Phone <em>(Optional)</em></label>
                            <input type="text" class="form-control form-control-lg" value="" name="landphone">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="mobile">Mobile Number <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="" name="mobile">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="occupation">Occupation of Parent/Guardian <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required value="" name="occupation">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="income">Annual Income of your Family <font color="red">*</font></label>
                            <input type="text" class="form-control form-control-lg" required maxlength="10" value="" name="income">
                        </div>
                    </div>
                </div>

		        <div class="row">
                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="aadhar">Enter your Aadhaar Number </label>
                            <input type="text" maxlength="12" title="Enter your 12 digit Aadhaar Number" class="form-control form-control-lg" name="aadhaar">
		                </div>
		            </div>

                    <div class="col">
                        <div class="form-group text-left">
                            <label class="col-form-label-lg" for="source">From Where You Came to Know About Us <font color="red">*</font></label>
                            <select name="source" required class="form-control form-control-lg">
                                <option value="Not Known">-------Select Any------</option>
                                <option value="Social Media-FaceBook">Social Media-Facebook</option>
                                <option value="Social Media-WhatsApp">Social Media-WhatsApp</option>
                                <option value="Social Media-Twittor">Social Media-Twitter</option>
                                <option value="Social Media-Others">Social Media-Others</OPtion>
				                <option value="From Old Students of NIELIT">From Old Students of NIELIT</Option>
				                <option value="Newspaper">News Paper</option>
                                <option value="Others">Others</OPtion>
                            </select>
                        </div>
		            </div>
                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <button type="submit" hidden class="btn disabled btn-block btn-lg btn-danger " disabled>Back</button>
                    </div>
                    <div class="col">
                        <input type="submit" required value="Save & Next" class="btn btn-block btn-lg btn-success btn2">
                    </div>
                    <br>
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