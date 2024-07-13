<?php
include 'connection.php';
$bid = $_GET['bid'];

$duplicate = mysqli_query($conn, "SELECT * FROM tbooking WHERE bid = $bid ");
$updquery = "UPDATE `tbooking` SET `status`='Reject' WHERE bid='$bid'";
$run = mysqli_query($conn,$updquery);

echo
    "<script>
    alert('Booking Rejected successfully..'); window.location.href='managetbook.php';
     </script>";
?>