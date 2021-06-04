<?php include "conn.php";
?>
<?php
    $token = $_GET['tokan'];
    echo $tokan;
    $sql = "update info set status = 'active' where token = '{$token}'";
    mysqli_query($conn,$sql) or die('fuck');
     header("location: {$hostname}indexx.php");

?>