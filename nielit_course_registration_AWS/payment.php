<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

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
            <a class="nav-item nav-link" href="reg3.php">Upload</a>
            <a class="nav-item nav-link active" href="payment.php">Make Payment</a>
        </nav>
    </div> <br><br>

        <div class="container text-center alert-danger col-lg-9 m-auto">
            <h5>Please make the payment online, otherwise registration form will be rejected</h5>
        </div>
        <br>


        <div class="container border col-md-4 m-auto">
            <form action="" method="POST">

				<div class="form-group text-left">
                    <label class="col-form-label-md" for="amount">Amount (in rupee)<font color="red">*</font> </label>
                    <input type="number" step="0.1" class="form-control form-control-md" name="amount" id="amount" value="1000" required >
                </div>

                <div class="form-group text-left">
                    <label class="col-form-label-md" for="name">Name <font color="red">*</font> </label>
                    <input type="text" class="form-control form-control-md" value="" name="name" id="name" placeholder="Your Name" required>
                </div>

                <div class="form-group text-left">
                    <label class="col-form-label-md" for="bank">Email<font color="red">*</font> </label>
                    <input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Email ID" required value="">
                </div>

                <div class="form-group text-left">
                    <label class="col-form-label-md" for="utr">Mobile<font color="red">*</font></label>
                    <input type="number" class="form-control form-control-md" name="mobile" id="mobile" required value="" placeholder="Mobile No">
                </div> <br>

                <div class="row">
                    <div class="col">
                        <a href="reg3.php" class="btn btn-block btn-md btn-secondary btn2">Previous</a>
                    </div>
                    <div class="col">
                        <input type="button" name="btn" id="btn" required value="Proceed to Pay" class="btn btn-block btn-md btn-success btn2" onclick = "pay_now()">
                    </div><br>
                </div>

            </form>
        </div>
        <br><br>

		<script>
			function pay_now(){
				var name= jQuery('#name').val();
				var amount= jQuery('#amount').val();
                var email= jQuery('#email').val();
                var mobile= jQuery('#mobile').val();
				var options = {
					"key": "rzp_test_46nP7eKQsbPh1L", 
					"amount": amount*100, 
					"currency": "INR",
					"name": "NIELIT Guwahati",
					"description": "Test Transaction",
					"image": "",
					"handler": function (response){
						jQuery.ajax({
							type: 'post',
							url: 'payment_process.php',
							data: "payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name+"&email="+email+"&mobile="+mobile,
							success: function(result){
								window.location.href="thank_you.php";
							}
						});
					}
				};
				var rzp1 = new Razorpay(options);
				rzp1.open();
			}
		</script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

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