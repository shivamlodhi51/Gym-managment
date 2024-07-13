<?php
require 'connection.php';
if(isset($_POST["buy"])){
  $mid = $_POST["mid"];
  $cid = $_POST["cid"];
  $mpic = $_POST["mpic"];
  $mname = $_POST["mname"];
  $mprice = $_POST["mprice"];
  $mtime = $_POST["mtime"];
  $status = $_POST["status"];
  $pmethod = $_POST["pmethod"];
  $fullname = $_POST["fullname"];
    $query = "INSERT INTO mbooking VALUES('','$cid','$fullname','$mid','$mpic','$mname','$status','$pmethod','$mtime','$mprice',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    echo "<script>alert('Membership Bought...'); window.location.href='dispmembership.php';</script>";
}
else{
    echo "<script>alert('Membership Not Bought...'); window.location.href='dispmembership.php';</script>";
}
?>