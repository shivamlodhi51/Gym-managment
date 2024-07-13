<?php
require 'connection.php';
if(isset($_POST["buy"])){
  $tid = $_POST["tid"];
  $cid = $_POST["cid"];
  $tpic = $_POST["tpic"];
  $tname = $_POST["tname"];
  $pmethod = $_POST["pmethod"];
  $status = $_POST["status"];
  $fees = $_POST["fees"];
  $fullname = $_POST["fullname"];
    $query = "INSERT INTO tbooking VALUES('','$cid','$fullname','$tid','$tpic','$tname','$pmethod','$fees','$status',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    echo "<script>alert('Trainer Booked...'); window.location.href='disptrainer.php';</script>";
}
else{
    echo "<script>alert('Trainer Not Booked...'); window.location.href='disptrainer.php';</script>";
}
?>