<?php
include "hold__conn.php";
?>

<?php
$filename = $_FILES['file']['name'];
$filetmp = $_FILES['file']['tmp_name'];
if(move_uploaded_file($filetmp,'hostimg/'.$filename)){
    echo "f";
}
else{
    echo "ffff";
}

$sql = "insert into cr (cri_img)
value ('$filename')";
mysqli_query($conn,$sql);
?>
