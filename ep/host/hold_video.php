<?php
include "hold__conn.php";
?>

<?php
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$id= $mydata['id'];



$sql = "select * from cr where cri_id = '{$id}'";
$result = mysqli_query($conn,$sql);


if(mysqli_num_rows($result)){
  $data = array();
    while($row = mysqli_fetch_assoc($result)){
$data = $row;
    } 
}
echo json_encode($data);

?>