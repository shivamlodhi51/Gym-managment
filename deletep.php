<?php
require_once('connection.php');


    $pid=$_GET['pid'];
    $delete = mysqli_query($conn,"DELETE FROM product WHERE pid='$pid'");

if($delete)
{
    echo
    "<script>
    alert('Product Deleted succesfully....'); window.location.href='manageproduct.php';
     </script>";
}
?>