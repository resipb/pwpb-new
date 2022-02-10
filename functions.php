<?php
$conn = mysqli_connect("localhost","root","","resi_porto");
$result = mysqli_query($conn, "SELECT * FROM user");
$hasil= mysqli_query($conn, "SELECT * FROM about");
?>

