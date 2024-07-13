<?php
include 'connection.php';
$bid = $_GET['bid'];

$duplicate = mysqli_query($conn, "SELECT * FROM mbooking WHERE bid = $bid ");
$updquery = "UPDATE `mbooking` SET `status`='Reject' WHERE bid='$bid'";
$run = mysqli_query($conn,$updquery);

echo
    "<script>
    alert('Booking Rejected successfully..'); window.location.href='managemembership.php';
     </script>";
?>