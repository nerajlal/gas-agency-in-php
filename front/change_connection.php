<?php
include 'top.php';
if($_SESSION['customer_id']== ''){
  header('location:index.php');
}
?>
<link rel="stylesheet" href="css/kycstyle.css">
	<div id="kycformcontainer">
		<!-- heading start-->
		<center id="kycheading">
			<h1>CHANGE CONNECTION</h1>
			<p style="COLOR: #ef5350;">(Field marked with * are mandatory)</p>
		</center>
		<h4 id="personaldet" style="font-family: 'Georama', sans-serif;">PERSONAL DETAILS</h4>
		<!-- heading close -->
		<!-- form starteing -->
    <!-- enctype="multipart/form-data" -->
		<form method="POST" enctype="multipart/form-data">
			  <div class="form-row" id="tto">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Name*</label>
      <input type="text" class="form-control" id="name" name="name"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Date of birth(dd/mm/yyyy)*</label>
      <input type="text" class="form-control" id="dob" name="dob"  >
    </div>
           <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect" id="purpose">Gender*</label>
      <select class="custom-select mr-sm-1" id="gender" name="gender">
        <option selected>--Select--</option>
        <option >Male</option>
        <option >Female</option>
         <option >Other</option>
        <!-- <option value="3">Three</option> -->
      </select>
    </div>
   
    <div class="col-md-4">
      <label class="mr-sm-1" for="inlineFormCustomSelect">Relation ship*</label>
      <select class="custom-select mr-sm-1" id="relationship" name="relationship">
        <option >--Select--</option>
        <option >Father</option>
        <option  >Mother</option>
        <option >wife</option>
        <option >Daughter in law</option>
        
      </select>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefault01">Consumer Number(Avoid 706707)*</label>
      <input type="text" class="form-control" id="consumer_no" name="consumer_no"  >
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefault01">Deth certificate*</label>
      <input type="file" class="form-control" id="deth_certificate" name="deth_certificate"  >
    </div>
                  <!-- address section end -->
                  <!-- uploading photos starting -->
  <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Photo*</label>
      <div class="input-group">
                <input type="file" class="form-control" id="upload_photo" name="upload_photo" aria-describedby="inputGroupPrepend2" >
       </div>
  </div>
<div class="col-md-4 mb-3">
      <label for="validationDefault01">Adhar*</label>
      <input type="file" class="form-control" id="upload_adhar" name="upload_adhar"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Ration card*</label>
      <input type="file" class="form-control" id="upload_rationcard" name="upload_rationcard"  >
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Customer Signature*</label>
      <input type="file" class="form-control" id="signature" name="signature"  >
    </div>
             <!-- uploading photos end -->
  <div id="paymentcontainer"></div>

<div class="col-md-12">
<input type="submit" class="btn btn-primary"id="changeconnectionBtn" name="changeconnectionBtn" style="width: 113px;height: 39px;" 
value="Submit">
</div>
</div>
 </form>
 <?php 
 if(isset($_POST['changeconnectionBtn']))
 {
 $forin=$_SESSION['customer_id'];
$name=$_POST['name'];
$dob=$_POST['dob'];
// $dob=date();
$gender=$_POST['gender'];
$relationship=$_POST['relationship'];
$consumer_no=$_POST['consumer_no'];

$deth_certificate_name=$_FILES['deth_certificate']['name'];
$deth_certificate_tname=$_FILES['deth_certificate']['tmp_name'];
$folder="images/".$deth_certificate_name;
move_uploaded_file($deth_certificate_tname, $folder);

$upload_photo_name=$_FILES['upload_photo']['name'];
$upload_photo_tname=$_FILES['upload_photo']['tmp_name'];
$upload_photo="images/".$upload_photo_name;
move_uploaded_file($upload_photo_tname, $upload_photo);

$upload_adhar_name=$_FILES['upload_adhar']['name'];
$upload_adhar_tname=$_FILES['upload_adhar']['tmp_name'];
$upload_adhar="images/".$upload_adhar_name;
move_uploaded_file($upload_adhar_tname, $upload_adhar);

$upload_rationcard_name=$_FILES['upload_rationcard']['name'];
$upload_rationcard_tname=$_FILES['upload_rationcard']['tmp_name'];
$upload_rationcard="images/".$upload_rationcard_name;
move_uploaded_file($upload_rationcard_tname, $upload_rationcard);

$fname=$_FILES['signature']['name'];
$tname=$_FILES['signature']['tmp_name'];
$signature="images/".$fname;
move_uploaded_file($tname, $signature);

$current_date=date("d-m-y");
$transaction_no=$_POST['transaction_no'];
if($consumer_no!=$forin)
{
echo "<script>alert('WRONG CONSUMER NUMBER')</script>";

}
else
{
  $select_home="SELECT * from connection_details where customer_id=$forin AND status='Approved'";
  // print_r($select_home);
  $run_home=mysqli_query($connect,$select_home);
  $home_row=mysqli_num_rows($run_home);

  $select_business="SELECT * from business_connection where customer_id=$forin AND status='Approved'";
  // print_r($select_home);
  $run_busc=mysqli_query($connect,$select_business);
  $busc_row=mysqli_num_rows($run_busc);
if($home_row==0  && $busc_row==0)
{
// echo "<script>alert(Pls register kyc form)</script>";
echo "<script>alert('There Is No Gas Connection In Your Name Please Get A New Gas Connection
')</script>";
}
else
{

if($transaction_no=="")
{
$insert="INSERT INTO change_connection values('','$forin','$name','$dob','$gender','$relationship','$current_date','$folder','$upload_photo','$upload_adhar','$upload_rationcard','$signature','none','Under Process','')";
}
else
{
 $insert="INSERT INTO change_connection values('','$forin','$name','$dob','$gender','$relationship','$current_date','$folder','$upload_photo','$upload_adhar','$upload_rationcard','$signature','$transaction_no','Under Process','')";
}
print_r($insert);
$run=mysqli_query($connect,$insert);

$primary=mysqli_insert_id($connect);
 echo "<script type='text/javascript'>successalert();</script>";
}
}
}
?>
   <!-- form end -->
  </div>
<?php include 'footer.php';?>