<?php
include('connection.php');

if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])){

    $payment_id = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $payment_status = "success";

    $query = "insert into razorpay (name, amount, payment_status, payment_id, email, mobile) values('$name ','$amount','$payment_status','$payment_id','$email','$mobile')";

    mysqli_query($con, $query);
}


?>