<?php
require_once('connection.php');


    $mid=$_GET['mid'];
    $delete = mysqli_query($conn,"DELETE FROM membership WHERE mid='$mid'");

if($delete)
{
    echo
    "<script>
    alert('Membership Deleted succesfully....'); window.location.href='editmembership.php';
     </script>";
}
?>