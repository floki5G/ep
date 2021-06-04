<link rel="stylesheet" href="index.css">
<?php
include "conn.php";
// session_start();
?>
     
     <!-- corses   -->
        <?php

$sql = "select * from cr";
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
        <div id="cri_pose">
            <span id="cri_p"> price :</span>
            <span id="cri_o"><?php echo $row['cri_o'] ?></span>
            <span id="cri_s"><?php echo $row['cri_s'] ?></span>
            <!-- <button id="cri_e" onclick="enroll()"><i class="fa fa-shopping-cart" aria-hidden="true"></i>enroll</button> -->
            <form action="crclick.php" method="POST">
                            <input type="hidden" name="cri_img" value="<?php echo $row['cri_img'] ?>">
                            <input type="hidden" name="cri_t" value="<?php echo $row['cri_t'] ?>">
                            <input type="hidden" name="cri_d" value="<?php echo $row['cri_d'] ?>">
                            <input type="hidden" name="cri_o" value="<?php echo $row['cri_o'] ?>">
                            <input type="hidden" name="cri_s" value="<?php echo $row['cri_s'] ?>">
                            <input type="hidden" name="cri_id"  value="<?php echo $row['cri_id'] ?>">
                            <input type="submit" id="cri_e" name="buy" value="viewmore">
              </form>
        </div>

    </div>
    <?php }  }?>
 
</div>

<!-- corses   -->