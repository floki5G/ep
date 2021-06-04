
<link rel="stylesheet" href="pur.css">



<?php
include "conn.php";
session_start();
if((isset($_SESSION['uname'])) && (isset($_SESSION['upass']))){
$user=$_SESSION['uid'];
$sql = "select * from corseorder as a join cr as c  on a.corseid = c.cri_id where userid=$user";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
<div id="cr">
    <?php
while($row=mysqli_fetch_assoc($result)){
    ?>
    <div id="cri">
        <div id="cri_img">
            <img src="host\hostimg\<?php echo $row['cri_img'] ?> "alt="img......">
        </div>
        <div id="cri_t">
            <h2> <?php echo $row['cri_t'] ?></h2>
        </div>
        <div id="cri_d">
            <h3><?php echo $row['cri_d'] ?></h3>
        </div>
        
    <form action="pur_myvideo.php" method="POST">
                            <input type="hidden" name="cri_img" value="<?php echo $row['cri_img'] ?>">
                            <input type="hidden" name="cri_t" value="<?php echo $row['cri_t'] ?>">
                            <input type="hidden" name="cri_d" value="<?php echo $row['cri_d'] ?>">
                            <input type="hidden" name="cri_o" value="<?php echo $row['cri_o'] ?>">
                            <input type="hidden" name="cri_s" value="<?php echo $row['cri_s'] ?>">
                            <input type="hidden" name="cri_id"  value="<?php echo $row['cri_id'] ?>">
                            <input type="submit" id="cri_e" name="buy" value="readmore">
              </form>
              </div>
    <?php }  }?>
 
</div>
<?php
}else{
    echo  "please login......";
}
?>
<!-- corses   -->