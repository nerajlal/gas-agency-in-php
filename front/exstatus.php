<div id="top">
  <?php 
error_reporting(0);
include 'top.php';
?>
</div>
<style>	
  #displaystatus
  {
   margin-top: 54px;
   /*display:none;*/
   margin-right: 17px;
   width: 100%;
   margin-left: 17px;
 }
</style>
<div id="statuschek">
<div class="content  pb-0 "style="    margin-left: 48px;
margin-right: 48px;
margin-bottom: 61px;
margin-top: 61px;">
<div class="animated fadeIn">
 <div class="row">
  <div class="col-lg-12">
   <div class="card">
    <div class="card-header"><strong>Status</strong><small> Form</small></div>
    <div class="card-body card-block" >
      <!--  <div class="form-group"><label for="company" class=" form-control-label">Company</label><input type="text" id="company" placeholder="Enter your company name" class="form-control"></div> -->
      <form action="" method="POST">
        <div style="display:flex;">
         <div class="col-md-6">
          <label class="mr-sm-1" for="inlineFormCustomSelect" id="purpose">Category</label>
          <select class="custom-select mr-sm-1" id="gender" name="Category">
            <option selected>--Select--</option>
            <option >Home New Connection</option>
            <option >Business New Connection</option>
            <option >Gas Booking</option>
            <option >Second Cylinder</option>
            <option >Change connection</option>
            <option >Change  Home Address</option>
            <option >Change Business Address</option>
            <!-- <option value="3">Three</option> -->
          </select>
        </div>                   <div class="col-md-6"><div class="form-group"><label for="vat" class=" form-control-label">Identification Number</label><input type="text" name="app_no" id="vat"  class="form-control"></div>
      </div>
    </div>

    
    
    <button id="paymentbutton" name="ok"type="submit" class="btn btn-lg btn-info btn-block">
     <span id="payment-button-amount">Ok</span>

</button>     
</form>
<?php
     if(isset($_POST['ok']))
     {
       $forin=$_SESSION['customer_id'];
      $Category=$_POST['Category'];
      $app_no=$_POST['app_no'];
     if($Category=='Home New Connection')
      {
       $select="SELECT * FROM connection_details WHERE Connection_id='$app_no'";
     }
     else if($Category=='Business New Connection')
     {
      $select="SELECT * FROM business_connection WHERE business_id='$app_no'";
     }
     else if($Category=='Gas Booking')
     {
           $select="SELECT * FROM gas_booking WHERE booking_id='$app_no'";
       
     }
     else if($Category=='Second Cylinder')
     {
      $select="SELECT * FROM second_cylinderdet WHERE Second_cylinder_id='$app_no'";  
    }
     else if($Category=='Change Address')
    {
    $select="SELECT * FROM temp_address WHERE temp_address_id='$app_no'"; 
    }
    else if($Category=='Change connection')
    {
     $select="SELECT * FROM change_connection WHERE temp_connection_id='$app_no'"; 
    }
    else if($Category='Change Business Address')
    {
     $select="SELECT * FROM business_change_address WHERE busiaddchange_id='$app_no'";  
    }
    else if($Category='--Select--')
    {
      echo "<script>alert('enter valid option')</script>";
    } 
    else
    {

    }
    $run=mysqli_query($connect,$select);
                         // $run=mysqli_query($select,$connect);
                         // printf($run);
                         // echo "<script>alert('hai$run')</script>";
    $row=mysqli_num_rows($run);
    if($row==0)
    {
      echo "<script>alert('Your application number is wrong')</script>";
    }
    else
    {
                          //here fetching particular row the status of the tables
      $fetch=mysqli_fetch_assoc($run);
      ?>
     <!--  // echo "<script>document.getElementById('displaystatus').style.display= 'none'</script>";
echo $fetch['statuphs'];
// echo "hai".$status; -->
<h4 style="color: red">                       
      <?php echo $fetch['status']; 



       ?> 

      </h4>
                          <!-- // echo ; -->
    <?php } ?>
                      <!-- // echo "<script>alert('Yoyr wrong')</script>"; -->

    
  <?php }
  ?>
  
</div>
</div>
</div>
<!--  -->

</div>
</div>
</div>
</div>
</div>

    
    <?php 
if($row>0)
{
if($Category=='Business New Connection')
{
  // echo "hai";
  if($fetch['status']=='Approved')
  {?>
     
    <?php
 include 'voucher.php';
  
          
 }
}
if($Category=='Home New Connection')
{
  // echo "hai";
  if($fetch['status']=='Approved')
  {?>
    
    <?php
 include 'home_voucher.php';
  
          
 }
}
}

     ?>

 <div id="footer">
   
   <?php 
include 'footer.php';
?>
 </div> 

