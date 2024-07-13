<?php
session_start();
$conn = mysqli_connect("localhost","root","","gym");
if($conn)
{
    echo"";
}
else{
    echo"connection failed....try again!!!!";
}
?>