<?php
include "conn.php";
?>
     
     <!-- corses   -->
        <?php
if(isset($_GET['data'])){
    $data = $_GET['data'];
$sql = "select * from cr where cri_t like '%$data' limit 3";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>


<div id="cr">
    <?php
while($row=mysqli_fetch_assoc($result)){

    ?>
    <div id="cri">
        <div id="cri_img">
            <img src="host\hostimg\<?php echo $row['cri_img'] ?> "alt="">
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
            <a id="cri_e" href="crclick.php?id=<?php echo $row['cri_id'] ?>">enroll</a>
        </div>

    </div>
    <?php  } } }?>
 
</div>

<!-- corses   -->