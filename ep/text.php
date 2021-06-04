<?php
    session_start();

    if(isset($_SESSION)){
        echo "Session variable exists<br/>";

        if(!isset($_SESSION['test'])){
            $_SESSION['test'] = "Success!";
            echo "Variable has been set, refresh the page and see if stored it properly.";
        }else{
            echo $_SESSION['test'];
        }
    }else{
        echo "No session variable has been created.";
    }
?>

$sql = "select * from corseorder as a join cr as c  on a.corseid = c.cri_id join video as v  on a.corseid = v.video_cr_id where a.userid=$user";
$result = mysqli_query($conn,$sql) or die($conn->connect_error());

if(mysqli_num_rows($result)>0){

while($row=mysqli_fetch_assoc($result)){