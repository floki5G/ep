<?php
include "conn.php";
?>
<?php
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$name = $mydata['name'];
$email= $mydata['email'];
$qns = $mydata['qns'];


$sql = "insert into help (name,email,qns)
value('{$name}','{$email}','{$qns}')";
mysqli_query($conn,$sql);

?>