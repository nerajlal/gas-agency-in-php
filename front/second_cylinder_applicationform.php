<?php 
include'top.php';
 ?>
 <style>
	input[type="submit"]{
	float: right;
    color: white;
    border-radius: 4px;
    margin-bottom: 52px;
    margin-left: 5px;
    margin-right: 8px;	
	}
  #gas_bookin_formcontainer{
    margin-bottom: 44px;
    padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;margin-left: 51px;  margin-right: 51px; margin-top: 24px;
  }
  #payment{
    display:flex;margin-bottom: 20px;box-shadow: inset #00000040 0px 0px 8px 1px;
  }
</style>
 <div id="gas_bookin_formcontainer" >
		<!-- heading start-->
		<center style="margin-top: 50px;">
			<h1>Second Cylinder Application Form</h1>
			<p style="COLOR: #ef5350;">(Field marked with * are mandatory)</p>
		</center>
		<!-- heading close -->
		<!-- form starteing -->
		<form method="POST" enctype="multipart/form-data">
			  <div class="form-row" style="margin: 20px;">
       <div class="col-md-12 mb-3">
      <label for="validationDefault02">Upload voucher*</label>
      <input type="file" name="photo" class="form-control" id="upload_voucher">
    </div>
    <!-- second cylinder payment staring -->
 <!--    <div class="col-md-12 mb-3 text-center">
<u>      <h3>Payment</h3>
</u>    </div>
    <div class="col-md-12 mb-3 ">
      <h5>Suggested for you </h5><p>(choose any payment method)</p>
    </div>
    <div class="col-md-12 mb-3 ">
       <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Online payment
  </label>
</div>
    </div>
    <!-- gas booking payment staring -->
<!-- <div class="col-md-12 mb-3">
     <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Cash on Delivery
  </label>
</div>
    </div>   -->
    <!-- <div id="paymentcontainer"> -->
  <div class="col-md-12 mb-3 text-center">
         <h3>Payment</h3>
        </div>
    <div class="col-md-12 mb-3 ">
      <h5>Suggested for you </h5><p>(choose any payment method)</p>
    </div>
    <div class="col-md-12 mb-3 ">
     <div class="form-check">
      <input class="form-check-input" type="radio" name="paymentmethord" id="exampleRadios1" value="option1" checked>
      <label class="form-check-label" for="exampleRadios1">
        Online payment
      </label>
    </div>
  </div>
  <!-- gas booking payment staring -->
  <div class="col-md-12 mb-3">
   <div class="form-check">
    <input class="form-check-input" type="radio" name="paymentmethord" id="exampleRadios2" value="option2">
    <label class="form-check-label" for="exampleRadios2">
      Cash on Delivery
    </label>
  </div>
</div>
<!-- staring of upi payment -->
<!-- <div id="upi_payment">
    <div id="payment" style="">
  <div class="col-md-3"style="flex:1">
  <img src="images/scanme.png" alt="">
</div>
<div class="col-md-9" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline">RS 850 </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price</h4></div>
</div>
<div class="col-md-12 mb-3">
      <label for="validationDefault02">Transaction Number</label>
      <input type="text" class="form-control" name="transaction_no" id="transactionno" placeholder="Enter Bank transaction number"  >
    </div>
</div> -->
<div id="upi_payment">
  <div id="payment" >

    <div class="col-md-3"style="flex:1;    padding: 30px;">
      <img src="images/scanme.png" alt="qr_code_pic" style="box-shadow: #00000040 0px 0px 12px 3px;">

    </div>
    <div class="col-md-9" style="flex:1;margin-top: 60px;padding: 51px;"><h4 style="display: inline">The gas cylinder price is </h4><h4 id="colorind" style="color: red; display: inline"> <div id="homeprice" style="display: inline;">RS 850 </div> <div id="businessprice" style="display: none">RS 950</div> </h4> <h4 style="display: inline"> our </h4><h3 id="colorind" style="color: red;display: inline">UPI ID </h3><h4 style="display: inline">is</h4> <h3 id="colorind" style="color: red;display: inline">5482196</h3> <h4 style="display: inline">OR you can scan the QR code and pay the gas cylinder price.You can use</h4> <h4 style="color:red;display: inline">PHONE PAY,GPAY,PAYTM</h4> <h4 style="display: inline"> and other payment apps</h4></div>
  </div>
  <div class="col-md-12 mb-3">
    <label for="validationDefault02">Transaction Number(Enter Bank transaction number)</label>
    <input type="text" class="form-control" id="transactionno" name="transaction_no"  >
  </div>
</div>
    <div class="col-md-4"id="kycsubmitbtn"style="float:right;margin-left: 66%;">
      <input type="submit" name="submitBtn" class="btn btn-primary"value="submit" id="secondcylBtn">
    </div>
    <!-- second cylinder payment end -->
</div>
</form>
<?php 
if(isset($_POST['submitBtn']))
{
  $forin=$_SESSION['customer_id'];
   $transaction_no=$_POST['transaction_no'];  
   // date_default_timezone_set('Asia/Kolkata');
$curr_date=date('d-m-Y');
  $name=$_FILES['photo']['name'];
$tname=$_FILES['photo']['tmp_name'];
$folder_name="images/".$name;
  move_uploaded_file($tname,$folder_name);
$select="SELECT * FROM connection_details where customer_id=$forin AND status='Approved'";
// print_r($select);
$select_run=mysqli_query($connect,$select);
$row=mysqli_num_rows($select_run);

if($row>0)//kyc il connection unde engil
{
  $second_select="SELECT * FROM second_cylinderdet where customer_id=$forin";
  // print_r($second_select);
  $run=mysqli_query($connect,$second_select);
  $num=mysqli_num_rows($run);
if($num>0)// nerathe second cylinder unde engil
{
  // AND status='Approved'
  $fetch=mysqli_fetch_assoc($run);
  if($fetch['status']=="Approved")
echo "<script>alert('You have a second cylinder in your name and you can no longer applay')</script>";
 else if($fetch['status']=="Under Process")
echo "<script>alert('Your second cylinder application is under process')</script>";
// nerathe applecation koduthu but sts reject aai start
else if($fetch['status']=="Rejected")
{
   if($transaction_no=="")
  {
$insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','Diarect_Payment','Under Process','$curr_date','')";
  }
  else
  {
   $insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process','$curr_date','')"; 
  }
// -- $insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process')";
$insert_run=mysqli_query($connect,$insert); 
// $primary=mysqli_insert_id($connect);
if($insert_run>0)
{
 echo "<script type='text/javascript'>successalert();</script>";
}
}
else{}
// nerathe applecation koduthu but sts reject aai end
}
// ite vare apply chaiathavarkke  ullathe start
else
{

  if($transaction_no=="")
  {
$insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','Diarect_Payment','Under Process','$curr_date','')";
  }
  else
  {
   $insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process','$curr_date','')"; 
  }
// -- $insert="INSERT INTO second_cylinderdet values('','$forin','$folder_name','$transaction_no','Under Process')";
$insert_run=mysqli_query($connect,$insert); 
// $primary=mysqli_insert_id($connect);
if($insert_run>0)
{
 echo "<script type='text/javascript'>successalert();</script>";
}


}
// ite vare apply chaiathavarkke ullathe end
}//kyc il undo illio ennulla if te end

else
echo "<script>alert('Pls register in kyc form or your connection is not approved')</script>";
}
//kyc il unde engil end
 ?>
</div>
 <?php include 'footer.php'; ?>