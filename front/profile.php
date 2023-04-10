<?php 
include 'top.php';
 ?>

      <link rel="stylesheet" href="css/customerfront_profile.css">
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    </head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          
          <!-- /Breadcrumb -->
    <?php 
    $forin_key=$_SESSION['customer_id'];
$select="SELECT * from connection_details  where (customer_id='$forin_key') AND (status='Approved')";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
$select_business="SELECT * from business_connection  where (customer_id='$forin_key') AND (status='Approved')";
// print_r($select_business);
$run_business=mysqli_query($connect,$select_business);
$num_row=mysqli_num_rows($run_business);
// thanikke kyc il account illa</p>
if($row==0 && $num_row==0)
{
  // echo "<script>alert('thanikke kyc il account illa')</script>";
echo "<div class='col-12' style='width: 100%;height: 300px;background: #efbdbd;'>
      <p style='
    font-size: 29px;
    text-transform: capitalize;
    left: 7%;
    top: 46%;
    position: absolute;
'> There is no gas connection in your name Please get a new gas connection
</p>
     </div> 
              </div>
            </div>
          </div>";
}
else
{
  $fetch=mysqli_fetch_assoc($run);
  if($fetch['purpose']=='Home')
  {
     ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">             
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo "<img src=' ".$fetch['upload_phto']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                    <div class="mt-3">
                      <h4><?php echo $fetch['name'] ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone Number</h6>
                    <span class="text-secondary"><?php echo $fetch['mobileno']; ?></span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Land Line</h6>
                    <span class="text-secondary"><?php 
if($fetch['landline']=='')
                    echo  "None";
                  else
                    echo $fetch['landline'];
                  ?></span>
                  </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Purpose</h6>
                    <span class="text-secondary"><?php echo $fetch['purpose'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Stove Status</h6>
                    <span class="text-secondary"><?php echo $fetch['stove_status'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Ration Card Status</h6>
                    <span class="text-secondary"><?php echo $fetch['ration_card_status'] ?></span>
                  </li>
                 <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">District</h6>
                    <span class="text-secondary"><?php echo $fetch['district']; ?></span>
                  </li>
                
                  
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" style="
    height: 97%;
    padding: 38px;
">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['name'] ?>
                    </div>
                  </div>
                  <hr>
             <!--      <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
// if($fetch['emailid']=='')
  // echo "None";
// else
  // echo $fetch['emailid'];


                       ?>          
                                 </div>
                  </div>
                  <hr> -->
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['gender']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php  
echo $fetch['house_name']; echo ",";
echo $fetch['post_office']; echo ",";
echo $fetch['streetname']; echo ",";
echo $fetch['district']; echo ",";

echo $fetch['pincode']; 
                       ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" >Cunsumer No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div >706707<?php echo $fetch['customer_id'] ?></div>
                    </div>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          

      
<?php }
else{ ?>


<!-- // business start -->
<?php    $fetch=mysqli_fetch_assoc($run_business);
 ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">             
                  <div class="d-flex flex-column align-items-center text-center">
                    <?php echo "<img src=' ".$fetch['upload_photo']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                    <div class="mt-3">
                      <h4><?php echo $fetch['name'] ?></h4>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Phone Number</h6>
                    <span class="text-secondary"><?php echo $fetch['mobile_no']; ?></span>
                  </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Land Line</h6>
                    <span class="text-secondary"><?php 
if($fetch['landline']=='')
                    echo  "None";
                  else
                    echo $fetch['landline'];
                  ?></span>
                  </li>
                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Purpose</h6>
                    <span class="text-secondary"><?php echo $fetch['purpose'] ?></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Stove Status</h6>
                    <span class="text-secondary"><?php echo $fetch['stovestatus'] ?></span>
                  </li>
                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">Ration Card Status</h6>
                    <span class="text-secondary"><?php  ?></span>
                  </li> -->
                 <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">District</h6>
                    <span class="text-secondary"><?php echo $fetch['district']; ?></span>
                  </li>
                
                  
                  
                </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" style="
    height: 97%;
    padding: 38px;
">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['name'] ?>
                    </div>
                  </div>
                  <hr>
          <!--         <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
// if($fetch['emailid']=='')
//   echo "None";
// else
//   echo $fetch['emailid'];


                       ?>          
                                 </div>
                  </div>
                  <hr> -->
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $fetch['gender']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php  
echo $fetch['shop_name']; echo ",";
echo $fetch['post_office']; echo ",";
echo $fetch['place']; echo ",";
echo $fetch['district']; echo ",";

echo $fetch['pincode']; 
                       ?>
                    </div>
                  </div>
                  <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" >Cunsumer No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <div >706707<?php echo $fetch['customer_id'] ?></div>
                    </div>
                  </div>
                </div>
              </div>
              
              </div>
            </div>
          </div>
      

<!-- // business end -->

<?php } ?>
</div>
        </div>
<?php } ?>
</body>

 <?php 
include 'footer.php';
  ?>
<!-- <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script> -->
