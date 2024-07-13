<?php
require 'connection.php';
if(isset($_POST["buy"])){
  $pid = $_POST["pid"];
  $cid = $_POST["cid"];
  $ppic = $_POST["ppic"];
  $pname = $_POST["pname"];
  $pprize = $_POST["pprize"];
  $fullname = $_POST["fullname"];
  $quantity = $_POST["quantity"];
  $pmethod = $_POST["pmethod"];
  $status = $_POST["status"];
  $state = $_POST["state"];
  $city = $_POST["city"];
  $address = $_POST["address"];
    $query = "INSERT INTO orders VALUES('','$cid','$fullname','$pid','$ppic','$pname','$pprize','$quantity','$pmethod','$status','$state','$city','$address',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    echo "<script>alert('Item Successfully Placed...'); window.location.href='dispproduct.php';</script>";
}
else{
    echo "<script>alert('Order Not Placed...'); window.location.href='dispproduct.php';</script>";
}
?>