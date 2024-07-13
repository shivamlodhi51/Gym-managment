<?php
require_once('connection.php');
    $tid=$_GET['tid'];
    $delete = mysqli_query($conn,"DELETE FROM trainer WHERE tid='$tid'");

if($delete)
{
    echo
    "<script>
    alert('Trainer Removed succesfully....'); window.location.href='managetrainer.php';
     </script>";
}
?>