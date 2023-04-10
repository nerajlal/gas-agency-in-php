<?php
include 'top.php';
error_reporting(0);
?><link rel="stylesheet" href="css/kycstyle.css">
	<div id="kycformcontainer">
		<!-- heading start-->
		<center id="kycheading">
			<h1>CHANGE PHONE NUMBER</h1>
			<p style="COLOR: #ef5350;">(Field marked with * are mandatory)</p>
		</center>
		<h4 style="margin-left: 10px;">PERSONAL DETAILS</h4>
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST">
			  <div class="form-row" style="margin: 20px;">       
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Password*</label>
      <input type="password" class="form-control" id="password" name="password"  >
    </div>
      <div class="col-md-4 mb-3">
      <label for="validationDefault01">New Number*</label>
      <input type="text" class="form-control" id="oldphnno" name="oldphnno"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Confirm New Number*</label>
      <input type="text" class="form-control" id="newnum" name="newnum"  >
    </div>
<div class="col-md-12">
  <input type="submit" id="changephnsubmitbtn" class="btn btn-primary" name="changephnsubmitbtn"  style="width: 113px;height: 39px;"value="Submit">
</div>
</div>
  <?php 
if(isset($_POST['changephnsubmitbtn']))
{
$oldphnno=$_POST['oldphnno'];
$password=$_POST['password'];
$password=md5($password);
$newnum=$_POST['newnum'];
$select="SELECT * from customer_details WHERE  password='$password' ";
// print_r($select);
$runing=mysqli_query($connect,$select);
$row=mysqli_num_rows($runing);
// echo $row;
$fetch=mysqli_fetch_assoc($runing);
$id=$fetch['customer_id'];
if($row>0)
{
  $update="UPDATE customer_details set  phone_number='$newnum' where customer_id='$id'";
  $execute=mysqli_query($connect,$update);
$update_kyc="UPDATE connection_details set mobileno='$newnum' where customer_id='$id'";
$executeing=mysqli_query($connect,$update_kyc);
if($executeing>0)
{
  // change_phoneno_success()
     echo "<script type='text/javascript'>change_phoneno_success();</script>";
}
}
else
{
  // chane_phoneno_failed()
  echo "<script type='text/javascript'> chane_phoneno_failed();</script>";
   // echo "<script>alert('Password is incorrect')</script>";
}
}
 ?>
 </form>
    <!-- form end -->
  </div>
<?php include 'footer.php'; ?>