<?php
require 'connection.php';
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $feed = $_POST["feed"];
    $query = "INSERT INTO feedback VALUES('','$fname','$feed',CURRENT_TIMESTAMP)";
    mysqli_query($conn, $query);
    echo "<script>alert('feedback sent sucessful...'); window.location.href='index.html';</script>";
}