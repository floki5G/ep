<?php
include "hold__conn.php";
 ?>
 <?php
$vdofile   = $_FILES['file']['name'];
$vdotmpfile   = $_FILES['file']['tmp_name'];
move_uploaded_file($vdotmpfile,"hostimg/".$vdofile);



$vdoid   = $_POST['vdoid'];
$vdot   = $_POST['vdot'];
$vdod   = $_POST['vdod'];

$sql = "insert into video (video_title,video_disc,video_link,video_cr_id)
value('{$vdot}','{$vdod}','{$vdofile}','{$vdoid}')";
$result = mysqli_query($conn,$sql) or die("$conn->connect_error");
?>
