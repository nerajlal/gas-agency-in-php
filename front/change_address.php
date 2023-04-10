<?php
include 'top.php';
error_reporting(0);
// include 'connect.php';
$key=$_SESSION['customer_id'];
$select="SELECT * FROM connection_details Where customer_id=$key AND status='Approved'";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
//business table
$select_business="SELECT * FROM business_connection Where customer_id=$key AND  status='Approved'";
$execute=mysqli_query($connect,$select_business);
// print_r($select_business);
$num_row=mysqli_num_rows($execute);
if($row>0)
{
  $get=mysqli_fetch_assoc($run);
  $purpose=$get['purpose'];
}
 if($num_row>0)
{
  $fetch=mysqli_fetch_assoc($run);
  $purpose=$fetch['purpose'];
}
if($_SESSION['customer_id']== '')
{
  header('location:index.php');
}
?>
<link rel="stylesheet" href="css/kycstyle.css">
<div id="kycformcontainer">
		<!-- heading start-->
    <!-- <div class="col-12"> -->  
		<center id="kycheading">
			<h1>CHANGE ADDRESS</h1>
			<p style="COLOR: #ef5350;">(Field marked with * are mandatory)</p>
		</center>
 <form method="POST" enctype="multipart/form-data">
       <?php
       if($purpose=='Home')
       {
       ?>
		<h4 style="margin-left: 10px;font-family: 'Georama', sans-serif;">TO ADDRESS</h4>
		<!-- form starteing -->
		
      <!-- homecontainer startein -->
  
<div id="homecontainer">
			<div class="form-row" >

            <div class="col-md-4 mb-3">
                    <label for="validationDefault01">House Name*</label>
                    <input type="text" class="form-control" id="house_name" name="house_name"  >
            </div>
            <div class="col-md-4 mb-3">
                      <label for="validationDefault02">House Number*</label>
                      <input type="text" class="form-control" id="house_no" name="house_no"  >
            </div>
            <div class="col-md-4 mb-3">
                  <label for="validationDefaultUsername">Housing Complex</label>
                   <div class="input-group">
                      <input type="text" class="form-control" id="house_complx" name="house_complx"
                             aria-describedby="inputGroupPrepend2" >
                    </div>
              </div> 
              <div class="col-md-4 mb-3">
                            <label for="validationDefault01">Floar Number</label>
                            <input type="text" class="form-control" id="flate_no" name="flate_no">
                </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Street Name*</label>
                    <input type="text" class="form-control" id="street_name" name="street_name"  >
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">City*</label>
                    <div class="input-group">
                              <input type="text" class="form-control" id="city" name="city" aria-describedby="inputGroupPrepend2">
                    </div>
                        </div>
                         <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Post Office*</label>
                    <input type="text" class="form-control" id="post_office" name="post_office"  >
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Pincode*</label>
                    <div class="input-group">
                              <input type="text" class="form-control" id="pincode" name="pincode" aria-describedby="inputGroupPrepend2" >
                    </div>
                        </div>
                         <div class="col-md-4">
                          <label class="mr-sm-1" for="inlineFormCustomSelect">District*</label>
                          <select class="custom-select mr-sm-1" id="district" name="district">
                            <option selected>--Select--</option>
                            <option >Thiruvananthapuram</option>
                            <option >Kollam</option>
                            <option >Alappuzha</option>
                            <option > Pathanamthitta</option>
                            <option >Kottayam</option>
                            <option >Idukki</option>
                            <option >Ernakulam</option>
                            <option >Thrissur</option>
                            <option >Palakkad</option>
                            <option >Malappuram</option>
                            <option >Kozhikode</option>
                            <option >Wayanad</option>
                            <option >Kannur</option>
                            <option >Kasaragod</option>
                          </select>       
                          </div> 
                         <div class="col-md-6">
                              <label class="mr-sm-1" for="inlineFormCustomSelect">Proof*</label>
                              <select class="custom-select mr-sm-1" id="proof_cat" name="proof_cat">
                                <option selected>--Select--</option>
                                <option >house rent resipt</option>
                                <option >house tax resipt</option>
                                    </select>
                            </div>
                         <div class="col-md-6 mb-3">
                          <label for="validationDefaultUsername">Upload Proof *</label>
                          <div class="input-group">
                                    <input type="file" class="form-control" id="upload_proof" name="proof" aria-describedby="inputGroupPrepend2" >
                          </div>
                              </div>
</div>
</div>
<div class ="col-md-12"style="height: 58px;">
  <input type="submit"class="btn btn-primary"id="homesemBtn" name="changing_address"  >
</div>
<!-- homecontainer end -->

<!-- business category start -->
<?php 
}else{
?> 
<div id="businesscontainer" >
  <div class="form-row" style="margin: 20px;">

                <div class="col-12" id="addrss_heading"><h4 ><u>Shop Address</u></h4></div>
                  <!-- Address section starting -->
                        <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Shop Name*</label>
                    <input type="text" class="form-control" id="shop_name" name="shop_name" >
                  </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Place*</label>
                <input type="text" class="form-control" id="shope_place"name="shope_place"  >
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">City*</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="shop_city" name="shop_city"
                           aria-describedby="inputGroupPrepend2" >
                </div>
                    </div>
                    <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Post Office*</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="shop_post_office"name="shop_post_office" 
                           aria-describedby="inputGroupPrepend2" >
                </div>
                    </div>
                          <div class="col-md-4 mb-3">
                      <label for="validationDefaultUsername">Pincode*</label>
                      <div class="input-group">
                          <input type="text" class="form-control"id="shope_pincode" name="shope_pincode" 
                                 aria-describedby="inputGroupPrepend2" >
                      </div>
                          </div>
                          <div class="col-md-4">
                      <label class="mr-sm-1" for="inlineFormCustomSelect">District*</label>
                      <select class="custom-select mr-sm-1" id="shope_district"name="shope_district">
                        <option selected>--Select--</option>
                        <option >Thiruvananthapuram</option>
                        <option >Kollam</option>
                        <option >Alappuzha</option>
                        <option > Pathanamthitta</option>
                        <option >Kottayam</option>
                        <option >Idukki</option>
                        <option >Ernakulam</option>
                        <option >Thrissur</option>
                        <option >Palakkad</option>
                        <option >Malappuram</option>
                        <option >Kozhikode</option>
                        <option >Wayanad</option>
                        <option >Kannur</option>
                        <option >Kasaragod</option>
                      </select>       
                     </div>
                    <div class="col-md-6">
                          <label class="mr-sm-1" for="inlineFormCustomSelect">Proof *</label>
                          <select class="custom-select mr-sm-1" id="shope_proof_category" name="shope_proof_category">
                            <option selected>--Select--</option>
                            <option >Building Tax Receipt</option>
                            <option >Building Rent Receipt</option>
                          </select>       
                    </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationDefaultUsername">Upload Proof*</label>
                              <div class="input-group">
                                <input type="file" class="form-control"  id="shope_upload_proof"name="shope_upload_proof"
                                       aria-describedby="inputGroupPrepend2" >
                            </div>
                                </div>
                             </div>
                      </div>
<div class ="col-md-12"style="height: 58px;">
  <input type="submit"class="btn btn-primary" id="BussinesssubmBtn"name="changing_address"  >
</div>
<?php } ?>
<!-- business category end -->

  <?php 
if(isset($_POST['changing_address']))
{ 
$house_name=$_POST['house_name'];
$house_no=$_POST['house_no'];
$house_complx=$_POST['house_complx'];
$city=$_POST['city'];
$street_name=$_POST['street_name'];
$pincode=$_POST['pincode'];
$post_office=$_POST['post_office'];
$flate_no=$_POST['flate_no'];
$proof_cat=$_POST['proof_cat'];
$proof=$_POST['proof'];
$district=$_POST['district'];

$shop_name=$_POST['shop_name'];
$shope_place=$_POST['shope_place'];
$shop_city=$_POST['shop_city'];
$shop_post_office =$_POST['shop_post_office'];
$shope_pincode=$_POST['shope_pincode'];
$shope_district =$_POST['shope_district'];
$current_date=date("d-m-y");
$shope_proof_category =$_POST['shope_proof_category'];

$pname=$_FILES['shope_upload_proof']['name'];
$tname=$_FILES['shope_upload_proof']['tmp_name'];
$photo_name="images/".$pname;
move_uploaded_file($tname,$photo_name);

// $shope_upload_proof =$_POST['shope_upload_proof'];
// echo "<script>alert(".$num_row.")</script>";
if($num_row==0  && $row==0)
// if($num_row<=0 && $row<=0)
{
// echo "<script>alert('Pls register kyc')</script>";
  echo "<script>alert('There Is No Gas Connection In Your Name Please Get A New Gas Connection')</script>";
} 
else
{
  if($purpose=='Home')
       {
$insert="INSERT INTO temp_address values('','$key','$house_name','$house_no','$house_complx','$city','$street_name','$pincode','$post_office','$flate_no','$district','$current_date','$proof_cat','$proof','under process','')";
// print_r($insert);
$run=mysqli_query($connect,$insert);
$primary=mysqli_insert_id($connect);
// print_r($insert);
}
else
{
 $insert="INSERT INTO business_change_address values('','$key','$shop_name','$shope_place','$shop_city','$shop_post_office','$shope_pincode','$shope_district','$current_date','$shope_proof_category','$shope_upload_proof','under process','')";
// print_r($insert);


$run=mysqli_query($connect,$insert);
$primary=mysqli_insert_id($connect); 
}
// echo "<script>alert('$primary')</script>";
// echo $primary;
// echo "<script>window.location.href='give_applicationno.php?appno=$primary'</script>";
  echo "<script type='text/javascript'>successalert();</script>";
}
}
 ?>
  </form>
    <!-- form end -->
  </div>
<?php

include 'footer.php';
?>