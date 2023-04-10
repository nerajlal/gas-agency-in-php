<?php 
include 'top.php';
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}

 ?>

 <style>
     #main_row{
        margin-top: 31px;
    padding: 84px;
     }
           #home_notification_count{
        margin-right: 0px;
    margin-top: -18px;
    margin-left: 106px;
    float: left;
    position: relative;
    border-radius: 50%;
      }
     #card{
            max-width: 33.33%;
     }
        #notification_count{
        border-radius: 50%;
    margin-top:-11px;
    margin-left: -9px;
    position: relative;
    float: right;
    margin-right: -25px;
    }
#bell{
  color: gray;
    float: right;
    position: relative;
    margin-right: 9px;
}
#second_row{
    margin-top: -166px;
    padding:84px ;
}
 </style>
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">   -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
 <div class="row" id="main_row">
  <div class="col-sm-6" id="card">
    <div class="card" style="    background-color: #7cc129 !important;color: white;">
      <div class="card-body">
        <?php 
 $select_homecon="SELECT * from connection_details  where notification=0";
                                $run_home_conn=mysqli_query($connect,$select_homecon);
                               $home_con=mysqli_num_rows($run_home_conn);
         $select_businesscon="SELECT * from business_connection  where notification=0";
                                $run_businesscon=mysqli_query($connect,$select_businesscon);
                               $businesscon=mysqli_num_rows($run_businesscon);
                               $totel_notification=$home_con+$businesscon;

         ?>
            <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
<span id="notification_count" class="badge badge-danger"><?php echo $totel_notification; ?></span>
        <h5 class="card-title">New Gas Connection</h5>
        <p class="card-text">The totel number of new gas connection request is <?php echo $totel_notification; ?>.</p>
        <a href="viewconnection_detail.php?home_conne=home_connection_notification" class="btn btn-danger">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="card">
    <div class="card" style="background-color: #2196f3 !important;color: white;">
      <div class="card-body">
          <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
              <?php 
  $second_cylinder_select="SELECT * from second_cylinderdet  where notification=0";
                                $second_cylinderexecution=mysqli_query($connect,$second_cylinder_select);
                               $secondcyl_num_row=mysqli_num_rows($second_cylinderexecution);
           ?>
<span id="notification_count" class="badge badge-danger"><?php echo $secondcyl_num_row; ?></span>
        <h5 class="card-title">Second Cylinder Request</h5>
        <p class="card-text">The totel number of new second cylinder request is <?php echo $secondcyl_num_row; ?>.</p>
        <a href="view_secondcylinder.php?Second_cylinder_notifi=Second_cylinder_notification" class="btn btn-danger">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="card">
    <div class="card" style="    background-color: #009688 !important;color: white;">
      <div class="card-body">
          <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
          <?php 
  $query="SELECT * from gas_booking  where notification=0";
                                $execution=mysqli_query($connect,$query);
                               $num_row=mysqli_num_rows($execution);
           ?>
<span id="notification_count" class="badge badge-danger"><?php echo $num_row; ?></span>
        <h5 class="card-title">Gas Booking Request</h5>
        <p class="card-text">The totel number of new gas booking request is<?php echo $num_row; ?>.</p>
        <a href="view_gas_bookingdet.php?action=gasbooking_notification" class="btn btn-danger">View Details</a>
      </div>
    </div>
  </div>
</div>
 <div class="row" id="second_row">
  <div class="col-sm-6" id="card">
    <div class="card" style="color: white;background: #e69e1b;">
      <div class="card-body">
            <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
                  <?php 
  $change_con="SELECT * from change_connection  where notification=0";
                                $change_execution=mysqli_query($connect,$change_con);
                               $change_num_row=mysqli_num_rows($change_execution);
           ?>
<span id="notification_count" class="badge badge-danger"><?php echo $change_num_row; ?></span>
        <h5 class="card-title">Change Connection Request</h5>
        <p class="card-text">The totel number of new change connectionn request is <?php echo $change_num_row; ?>.</p>
        <a href="view_changeconnection.php?changing=gasbooking_notification" class="btn btn-danger">View Details</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="card">
    <div class="card" style="background: #09d99f;color: white;">
      <div class="card-body">
            <?php 
 $homeaddres="SELECT * from temp_address  where notification=0";
                                $run_homeaddres=mysqli_query($connect,$homeaddres);
                               $homeadd_count=mysqli_num_rows($run_homeaddres);
         $businessaddress="SELECT * from business_change_address  where notification=0";
                                $run_businessaddress=mysqli_query($connect,$businessaddress);
                               $business_address_count=mysqli_num_rows($run_businessaddress);
                               $toteladdress_count=$homeadd_count+$business_address_count;
         ?>
          <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
          <!-- totel -->
<span id="notification_count" class="badge badge-danger"><?php echo $toteladdress_count; ?></span>
        <h5 class="card-title">Change Address Request</h5>
        <p class="card-text">The totel number of new change Address Request is <?php echo $toteladdress_count; ?>.</p>
        <!-- home -->
        <span id="home_notification_count" class="badge badge-danger"><?php echo $homeadd_count; ?></span>
        <a href="view_Addresschangingreq.php?home_address=home_address" class="btn btn-danger">View Details</a>
        
           <a href="view_businessAddresschangingreq.php?business_address=business_address" class="btn btn-primary">View Details</a>
           <!-- business -->
          <span id="notification_count" style="margin-right: 11px;
    margin-top: -14px;" class="badge badge-danger"><?php echo $business_address_count; ?></span>
      </div>

    </div>
  </div>
  <div class="col-sm-6" id="card">
    <div class="card" style="background: #f79dad;color: white;">
      <div class="card-body">
          <i class="fa fa-bell" id="bell" aria-hidden="true"></i>
             <?php 
  $Complains_selected="SELECT * from customer_complaint  where notification=0";
                                $complaint_execution=mysqli_query($connect,$Complains_selected);
                               $complaint_num_row=mysqli_num_rows($complaint_execution);
           ?>
<span id="notification_count" class="badge badge-danger"><?php echo $complaint_num_row; ?></span>
        <h5 class="card-title">Complient</h5>
        <p class="card-text">The totel number of new complaint is <b><?php echo $complaint_num_row; ?></b></p>
        <a href="viewcomplaints.php?all_complaint=alluser_complaints" class="btn btn-danger">View Details</a>
      </div>
    </div>
  </div>
</div>
 <?php 
include 'footer.php';
 ?>