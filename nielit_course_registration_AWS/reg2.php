<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);


    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted

		$qualification = $_POST['qualification'];
		$qualstream = $_POST['qualstream'];
		$qualmode = $_POST['qualmode'];
		$qualresult = $_POST['qualresult'];
        $qualpercent = $_POST['qualpercent'];
        $qualyear  = $_POST['qualyear'];

        $_SESSION["qualification"] = $qualification;
        $_SESSION["qualstream"] = $qualstream;
        $_SESSION["qualmode"] = $qualmode;
        $_SESSION["qualresult"] = $qualresult;
        $_SESSION["qualpercent"] = $qualpercent;
        $_SESSION["qualyear"] = $qualyear;
 
        header("Location: reg3.php");
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
            <a class="nav-item nav-link" href="reg1.php">Personal Details</a>
            <a class="nav-item nav-link active" href="reg2.php">Qualification</a>
            <a class="nav-item nav-link" href="reg3.php">Upload</a>
            <a class="nav-item nav-link" href="payment.php">Make Payment</a>
        </nav>
    </div>


    <div class="container">
        <form action="" method="POST">

            <div class="row">
                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qual">Qualification <font color="red">*</font></label>
                        <select name="qualification" class="form-select form-select-lg" required>
                            <option value="">Select Qualification</option>
                            <option  value="B.E."> B.E.</option> 
                            <option  value="B.SC."> B.SC.</option> 
                            <option  value="B.TECH"> B.TECH</option>
                            <option  value="M.Sc"> M.Sc</option>
                            <option  value="BCA"> BCA</option>
                            <option  value="MCA"> MCA</option>  
                            <option  value="M.Tech"> M.Tech</option>                          
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qualstream">Stream of the Qualification <font color="red">*</font></label>
                        <input type="text" class="form-control form-control-lg" name="qualstream" required>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qualmode">Mode of the Qualification<font color="red">*</font> </label>
                        <select name="qualmode" required class="form-select form-select-lg">
                            <option value="FULL"  >Full - Time</option>
                            <option value="PART" >Part - Time</option>
                         </select>
                    </div>
                 </div>
                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qualres">Completed the qualification<font color="red">*</font></label>
                        <select name="qualresult" required class="form-select form-select-lg">
                            <option value="YES" >Yes</option>
                            <option value="NO" >No</option>
                            <option value="Pursuing" >Pursuing</option>
                        </select>
                     </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qualper">Percentage of Marks (Eg 83.12)<font color="red">*</font> </label>
                        <input type = "number" step="0.1" name="qualpercent" class="form-control form-control-lg" required placeholder="Enter Cummulative Percentage till last semester">
                    </div>
                </div>

                <div class="col">
                    <div class="form-group text-left">
                        <label class="col-form-label-lg" for="qualyear">Year of Passing <font color="red">*</font></label>
                        <input type="date" class="form-control form-control-lg" required name="qualyear">
                    </div>
                </div>
            </div><br>

            <div class="row">
                <div class="col">
                    <a href="reg1.php" class="btn btn-block btn-lg btn-secondary btn2">Previous</a>
                </div>
                <div class="col">
                    <input type="submit" required value="Save & Next" class="btn btn-block btn-lg btn-success btn2">
                </div><br>
            </div>
        </form>
    </div> <br>

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