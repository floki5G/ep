<?php
include "hold__conn.php";
?>
<?php
$vdoid   = $_POST['vdoid'];
$sql = "update video set demo = 1 where video_id = '{$vdoid}' ";
$result = mysqli_query($conn,$sql);

?>