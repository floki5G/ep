<?php
include "hold__conn.php";
?>
<?php
$sql = "select * from cr";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      $data[]=$row;

    }
}
echo json_encode($data);

?>