<?php
include "hold__conn.php";


$filename = $_FILES['file']['name'];
$filetmp = $_FILES['file']['tmp_name'];

move_uploaded_file($filetmp,'hostimg/'.$filename);

$title = $_POST['title'];
$disc = $_POST['disc'];
$price= $_POST['price'];
$sellprice = $_POST['sellprice'];
$sql = "insert into cr (cri_t,cri_d,cri_o,cri_s,cri_img)
value('{$title}','{$disc}','{$price}','{$sellprice}','{$filename}')";
mysqli_query($conn,$sql) or die("$conn->connect_error");

?>
