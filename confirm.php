<?php
include 'connection.php';
$oid = $_GET['oid'];

$duplicate = mysqli_query($conn, "SELECT * FROM orders WHERE oid = $oid ");

$updquery = "UPDATE `orders` SET `status`='confirm' WHERE oid='$oid'";
$run = mysqli_query($conn,$updquery);

echo
    "<script>
    alert('Order Confirm successfully..'); window.location.href='manageorders.php';
     </script>";
?>