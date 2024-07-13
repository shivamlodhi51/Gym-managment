<?php
include 'connection.php';
$oid = $_GET['oid'];

$duplicate = mysqli_query($conn, "SELECT * FROM orders WHERE oid = $oid ");

$updquery = "UPDATE `orders` SET `status`='reject' WHERE oid='$oid'";
$run = mysqli_query($conn,$updquery);

echo
    "<script>
    alert('Order Rejected successfully..'); window.location.href='manageorders.php';
     </script>";
?>