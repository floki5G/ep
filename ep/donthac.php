<?php
include "conn.php";
?>
<?php

$name =$_POST['namenumd'];
$username = $_POST['usernamenumd'];
$email=$_POST['emailnumd'];
$phone = $_POST['phonenumd'];
$pass = md5($_POST['passwordnumd']);
$cpass = md5($_POST['cpassnumd']);
$tokan= bin2hex(random_bytes(15));
 $sql1 = "select username,email from info where username = '{$username}' || email='{$email}'";
 $result1 = mysqli_query($conn,$sql1) or die('fuvcjj');
if(mysqli_num_rows($result1)>0){
echo 0;
}
else{
$sql = "insert into info (name,username,email,mobile,pass,cpass,token,status)
value('{$name}','{$username}','{$email}','{$phone}','{$pass}','{$cpass}','{$tokan}','inactive')";
mysqli_query($conn,$sql);
$sub = "simple mail";
$body = "http://localhost/ep/activate.php?tokan=$tokan";
$head = "from: sv629688@gmail.com";
mail($email,$sub,$body,$head);
echo 1;
}
  

