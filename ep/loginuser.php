<?php
include "conn.php";
session_start();
$xuser = $_POST['loginuser'];
$cpass= ($_POST['loginpass']);
$ypass= md5($_POST['loginpass']);



$sql = "select * from info where username='{$xuser}' and pass='{$ypass}'";
$result = mysqli_query($conn,$sql) or die($conn->connect_error());

if(mysqli_num_rows($result)>0){

    $date = array();

    while($row = mysqli_fetch_assoc($result)){
        if($row['status'] == 'inactive'){
            echo 1;
            $sub = "simple mail";
            $tokan = $row['token'];
            $email = $row['email'];
            $body = "http://localhost/ep/activate.php?tokan=$tokan";
            $head = "from: sv629688@gmail.com";
            mail($email,$sub,$body,$head);
        }
        else{
            $_SESSION['uemail'] = $row['email'];
            $_SESSION['uname'] = $row['username'];
            $_SESSION['upass'] = $row['pass'];
            $_SESSION['uid'] = $row['id'];
            if(isset($_POST['remine'])){
                setcookie('username',$xuser);
                setcookie('password',$cpass);  
                 }
            $date[] = $row;
            echo json_encode($date);
        }
        
    }
}
else{
echo 0;
}

?>