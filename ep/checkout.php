<?php
include "conn.php";
session_start();
 if ((isset($_SESSION['uname'])) && (isset($_SESSION['upass']))) {
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="GENERATOR" content="Evrsoft First Page">
    <title>checkout</title>
	<link rel="stylesheet" href="demo.css">
	<!-- font  -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
	<!-- font  -->
	<!-- icon  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- lcon  -->
<body>
<?php $_SESSION['crt']  = $_POST['cri_t'];
 $_SESSION['crid']  = $_POST['cri_id'];
?>
<form method="post" action="PaytmKit/pgRedirect.php">

		<table>
		<div id ="x"><h1>copypen</h1></div>
			
				<tr>
					<th><label>ORDER_ID</label></th>
					<td><input id="ORDER_ID" 
						name="ORDER_ID" 
						value="<?php echo  "ORDS" . rand(10000,99999999)?>" readonly>
					</td>
				</tr>
				<tr>
			
				<th><label> user email </label></th>
					<td><input id="	email"  name="CUST_ID" autocomplete="off" value="<?php echo $_SESSION['uemail'] ?>" readonly></td>

					<!-- <th><label>CUSTID </label></th> -->
					<td><input  type="hidden" id="CUST_ID"  name="CUST_ID" autocomplete="off" value="CUST001" readonly></td>
				</tr>
				<tr>
			     	<th> <label for="">corse name</label> </th>
                    <td><?php echo $_POST['cri_t']?></td>
									<!-- <th><label>INDUSTRY_TYPE_ID </label></th> -->
									<td><input type="hidden" id="INDUSTRY_TYPE_ID"  name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly></td>
				</tr>
				<tr>
				
					<th><label>Channel </label></th>
					<td><input id="CHANNEL_ID" 
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB" readonly>
					</td>
				</tr>
				
				<tr>
				
					<th><label>txnAmount</label></th>
					<td><input title="TXN_AMOUNT"
						type="text" name="TXN_AMOUNT"
						value="<?php echo $_POST['cri_s']?>" readonly>
					</td>
				</tr>
				<tr>
				<span id="ck">
                     <small>buy now</small>
                               <span id="cck">
							   <input value="CheckOut" type="submit"	onclick="">
                              </span>
                </span>
				</tr>
		</table>
	
	</form>
	
<?php
 } 
else{
	echo" please login.....befour buying............";
	//  header("location: {$hostname}adminlogin.php");
}
?>


</body>
</html>

