<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    header("Location: signup.php");
	die;
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
          href=https://www.nielit.gov.in/guwahati/content/long-term-courses-3>&nbsp;&nbsp;Click here</a></em></h4>
  </div>
  <br><br><br>


  <div class="container text-center alert-warning p-2">
    <a href="login.php">
      <h3>Click Here to Login</h3>
    </a>
  </div>
  <br><br>



  <div class="container">

    <form class="form-horizontal" action="index.php" method="POST">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <font size='6'> <b>Select Training Mode(Class Room/Online)</b></font>
            <select name="coursegroup" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="coursegroup" required>
              <option value="">Select Training Mode</option>
              <option value="ONLINE">ONLINE</option>
              <option value="classroom">CLASSROOM</option>
            </select>
          </div>
        </div>
      </div>

      <div class="d-grid gap-2">
        <button class="btn btn-success btn-block btn-lg" type="submit">Go to Registration Page</button>
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