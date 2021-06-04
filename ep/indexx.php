<?php
include "conn.php";
session_start();
?>
<!-- css  -->
<link rel="stylesheet" href="index.css">
<!-- css  -->
<!-- font  -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
<!-- font  -->
<!-- icon  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- lcon  -->

<body onload="loding()">
<div id="loding"></div>
    <!-- nav  bar  -->
    <nav id="nav">
        <div id="n">
            <li id="nn">
                <h1>copypen
                    <small style="color: red;">way to succes</small>
                </h1>
            </li>
            <li id="nnn">
                <a id="ggg" href="#">home</a>
                <a  id="ggg" href="patmentstatus.php">payment-status</a>
                <a id="ggg" href="#crlink">course</a>
                <a id="ggg" href="#">about</a>
                <a id="ggg" href="#">contect</a>

                <!-- <button onclick="payment()">payment-status</button> -->
                <!-- <a href="navbar\paymentstatus.php">paymevt</a> -->
                <!-- <button id="ggg" onclick="corses()">course</button>
                <button id="ggg" onclick="feedback()">feedback</button>
                <button id="ggg" onclick="contect()">contect</button> -->

            </li>
        </div>
    </nav>
    <!-- nav  bar  -->

    <!-- login$logout -->
    <div id="login">
        <div id="login_in">
        <?php
               if( (isset($_SESSION['uname'])) && (isset($_SESSION['uname']))){  
                   ?>
        
        <button id="login_b" onclick="navprofil()">profil</button>
        <?php
               }else{
        ?>

            <button id="login_b" onclick="navlogin()">login</button>
    

            <a id="logout_b" href="logout.php">logout</a>
            <?php } ?>
        </div>
    </div>
    <!-- login  -->


    
    <div id="login_click">
        <div id="login_click_in">
            <div class="btn_box">
                <div id="btn_cross"><i class="fa fa-times" aria-hidden="true"></i></div>
            </div>
            <form id="x_x">

                <div class="x">

                    <div class="xx">

                        <div id="xx">
                            <div>username</div>
                            <input type="text" name="loginuser" id="loginuser" value="<?php if(isset($_COOKIE['username'])){echo $_COOKIE['username'];}?>">
                        </div>
                        <div id="xx">
                            <div>password</div>
                            <input type="password" name="loginpass" id="loginpass" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];}?>">
                        </div>
                        <div id="x">
                            <input type="checkbox" name="remine">remember me

                        </div>
                        <span id="loginerror"></span>

                        <div id="xx" class="xxxxx">
                            <input type="submit" name="submit" id="loginsub" value="login">
                            <span id="dhac">forget password</span>
                        </div>
                    </div>
                    <div class="xxx">
                        <div id="xxx">
                            don't have account
                        </div>

                    </div>

                    <div id="x_msg">
                    </div>
                </div>

            </form>








            <div id="new_form">
                <form action="" id="xx_xx">
                    <div>
                        <label for="">name</label>
                        <input type="text" name="namenumd" id="namenumd">
                        <span class="eidsss" id="eid"></span>
                    </div>
                    <div>
                        <label for="">username</label>
                        <input type="text" name="usernamenumd" id="usernamenumd">
                        <span class="eidsss" id="euser"></span>
                    </div>

                    <div>
                        <label for="">email</label>
                        <input type="email" name="emailnumd" id="emailnumd">
                        <span class="eidsss" id="eemail"></span>
                    </div>
                    <div>
                        <label for="">mobil.no</label>
                        <input type="text" name="phonenumd" id="phonenumd">
                        <span class="eidsss" id="emobile"></span>
                    </div>
                    <div>
                        <label for="">password</label>
                        <input type="password" name="passwordnumd" id="passwordnumd">
                        <span class="eidsss" id="epass"></span>
                    </div>
                    <div>
                        <label for="">con_password</label>
                        <input type="password" name="cpassnumd" id="cpassnumd">
                    </div>
                    <div class="eidsss" id="errordonthac"></div>

                    <div>
                        <input type="submit" id="new_submit">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div id="profile">
                <div id="profilclose">X</div>
                <?php
                include "conn.php";
if((isset($_SESSION['uname'])) && (isset($_SESSION['upass']))){
$user=$_SESSION['uid'];
$sql = "select * from info where id=$user";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
?>
                <div id="profilimg"  >
                    <img src="elimg\<?php echo $row['profileimg']?>" alt="profile img">
                    <div>
                        <form action="" id ="updateprofilform">
                        <input type="file" value="updateprofil" name ='updateprofil' id ="updateprofil">
                        <input type="submit"  id ="updateprofilsub">
                        </form>
                    </div>
                </div>

                <div id="profilusername" >
                    <div>username</div>
                    <input type="text" value="<?php echo $row['username']?>" readonly>
                    <div>email</div>
                    <input type="text" value="<?php echo $row['email'] ?>" readonly>
                </div>
        <?php } } } ?>
               
                <button onclick="puruser()"> my corses
            </button>
                <a href="logout.php">logout</a>     
</div>

    <div id="startpage"> -->

        <!-- bg video -->
        <div id="nav_video">


            <div id="nav_video_inside">
                <video playsinline autoplay muted loop width="100%">
                    <source src="elimg\dummyv.mp4">
                </video>
            </div>
        </div> 




        <!-- welcome  -->
        <div class="welcome">
            <div class="welcome_in">
                <p id="w1"> welcome to copypen</p>
                <p id="w2">way to succes</p>
                <button id="welc" onclick="navlogin()"> signup</button>
                <!-- <div  >signup</div> -->
            </div>
        </div>
        <!-- welcome  -->

        <!-- 100+ corsers  -->
        <div id="cc">
            <div><i class="fa fa-leanpub" aria-hidden="true"></i>100+ courses</div>
        </div>
        <!-- 100+ corsers  -->
        <!-- trandind corses   -->
        <div id="tc">
            <div><i class="fa fa-fire" aria-hidden="true"></i>our tranding corsers</div>
        </div>

        <!-- trandind corses   -->

        <!-- search  -->
        <div id="search">
            <input type="text" placeholder="search......" id="sr" onkeyup="searchcr(this.value)">
            <span id="sr_s"><i class="fa fa-search" aria-hidden="true"></i></span>
            <div id="contt">
                connecting............
            </div>
        </div>
        <!-- search  -->


        <!-- corses   -->
<div id="crlink">
        <?php include "corses.php" ?>

        </div>

        <!-- corses   -->

        <!-- view all  -->
        <div id="viewall">
<a  id="vl"  href="corses.php">viewall</a>
            <!-- <button id="vl" onclick="corses()"> viewall</button> -->

        </div>
        <!-- view all  -->

        <!-- contect us  -->

        <div class="con" id="hconn">
            <div>
                <textarea name="" placeholder="name" class="c1" id="c1" cols="50" rows="2"></textarea>

            </div>

            <div>
                <textarea name="" placeholder="email" class="c1" id="c2" cols="50" rows="2"></textarea>


            </div>
            <div>
                <textarea name="" placeholder="how can we help you" class="c1" id="c3" cols="50" rows="10"></textarea>
            </div>
            <div id="outhelp"> </div>


            <div>
                <input type="submit" id="subconn">
            </div>
        </div>

        <!-- contect us  -->



    </div>

    <div id="page"></div>

<!-- footer  -->
<footer class="footer">
  
    <div class="footer_title">
        <h1><a href="#">copypen</a></h1>
    </div>
    <div class="footer_info">
            <h5 class="footerhading">INFO</h5>
            <h5> <a href="#">HOME</a> </h5>   
            <h5>ABOUT US</h5>
    </div>
    <div class="footer_info">
        <div class="footer_three_one">
            <h5 class="footerhading">REACH-US</h5>

        </div>

        <div class="reach_us_contect">
            <i class="fa fa-phone-square"></i>
            <p>6267064847</p>

            <i class="fa fa-envelope"></i>
            <p> sv629688@gmail.com</p>

            <a target="_blank" href="">
                <h5 ><a href="#hconn"> HELP</a></h5>
            </a>

        </div>
    </div>

    <div class="footer_comm">
      
        <div>
            <a href="">
                <h5 class="footerhading">COMMUNITY</h5>
            </a>

            <a href="">
                <h5>REFER A FRIEND</h5> <small>refer a friend</small> 
            </a>
        </div>
    </div>

</footer>
<!-- footer  -->

    <script src="index.js"></script>
</body>

</html>