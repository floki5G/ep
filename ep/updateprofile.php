<?php
session_start();
include "conn.php";


$user=$_SESSION['uid'];
$vdofile   = $_FILES['file']['name'];
$vdotmpfile   = $_FILES['file']['tmp_name'];
move_uploaded_file($vdotmpfile,"elimg/".$vdofile);


$sql = "update info set profileimg='{$vdofile}' where id = '$user' ";

mysqli_query($conn,$sql) or die("$conn->connect_error");

?>
