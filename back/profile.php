<?php 
include 'top.php';
 ?>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile with data and skills - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
    <style type="text/css">
      body{
    /*margin-top:20px;*/
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0; 
    /*margin-top: 0px   */
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
</head>
<body>
<div class="container">
    <div class="main-body">
    
          <!-- purose home  start-->
    <?php 
    $forin_key=$_GET['id'];    
$select="SELECT * from connection_details Where customer_id='$forin_key'";
$run=mysqli_query($connect,$select);
  $fetch=mysqli_fetch_assoc($run);
  // <!-- change conection starting -->
// <?php 
if(isset($_GET['proof_category_id']))
{
$key=$_GET['proof_category_id'];
$select="SELECT * FROM business_change_address WHERE busiaddchange_id='$key'";
$run=mysqli_query($connect,$select);
$change_address_fetch=mysqli_fetch_assoc($run);
  ?>

 <div class="row gutters-sm">
   <div class="col-md-4 mb-3">
                <div class="card mb-3" >
                   <!-- <div class="card"> -->
                <div class="card-body">
                
                  <div class="d-flex flex-column align-items-center text-center">                  
<?php echo "<img src='../front/".$change_address_fetch['shope_upload_proof']."'  height='300px'  width='300px'>"; ?>
                                              
                    <div class="mt-3">
                      <h4><?php echo $change_address_fetch['shope_proof_category'] ?></h4>
                      </div>
                  </div>
                </div>
              <!-- </div> -->
              </div>
            </div>
        
<div class="col-md-8">
              <div class="card mb-3" >
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shop Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shop_name'] ?>
                    </div>
                  </div>
          
                  <hr>
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shope Place</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shope_place']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shop City</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shop_city']; ?>
                    </div>
                  </div>
              <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shop Post Office</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shop_post_office']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shope Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shope_pincode']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">shope_district</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shope_district']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Shop Proof Category </h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['shope_proof_category']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cunsumer number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_address_fetch['customer_id']; ?>
                    </div>
                  </div>
            <!--   <hr> -->
                  
                </div>
              </div>
            </div>
          </div>
        
       
<?php }

else if(isset($_GET['changeconnection_id']))
{
  $key=$_GET['changeconnection_id'];
  // echo "poda patti";
  $select="SELECT * FROM change_connection WHERE temp_connection_id='$key'";
$run=mysqli_query($connect,$select);
$change_connection_fetch=mysqli_fetch_assoc($run);
  ?>
 <div class="row gutters-sm">
   <div class="col-md-4 mb-3">
                <div class="card mb-3" >
                   <!-- <div class="card"> -->
                <div class="card-body">
                
                  <div class="d-flex flex-column align-items-center text-center">                  
<?php echo "<img src='../front/".$change_connection_fetch['upload_photo']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                                              
                    <div class="mt-3">
                      <h4><?php echo $change_connection_fetch['name'] ?></h4>
                      </div>
                  </div>
                </div>
              <!-- </div> -->
              </div>
            </div>
        
<div class="col-md-8">
              <div class="card mb-3" >
                <div class="card-body">

                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_connection_fetch['name'] ?>
                    </div>
                  </div>
          
                  <hr>
                    <!-- <hr> -->
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date Of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_connection_fetch['dob']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_connection_fetch['gender']; ?>
                    </div>
                  </div>
              <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Relation ship</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_connection_fetch['relationship']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Cunsumer number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $change_connection_fetch['customer_id']; ?>
                    </div>
                  </div>
            <!--   <hr> -->
                  
                </div>
              </div>
            </div>
          </div>
               <div id="imgcontainer" style="display: flex">

      <div class="row gutters-sm" style="flex: 1;" >
                <!-- <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">

 -->      
     <div class="mt-3">
                      <h4><?php echo "Adhar card" ?></h4>
                      </div>
                                <?php 
// echo "";
 echo "<img src='../front/".$change_connection_fetch['upload_adhar']."' height='300px'  width='300px'>"; 

                       ?>
                 <!--    </div>
                </div>
                    </div> -->
            </div>
             <div class="row gutters-sm" style="flex: 1;">
               <div class="mt-3">
                      <h4><?php echo "Ration card" ?></h4>
                      </div>
                        <?php 
// echo "";
 echo "<img src='../front/".$change_connection_fetch['uploadration_card']."' height='300px'  width='300px'>"; 

                       ?>
            </div>
                <div class="row gutters-sm" style="flex: 1;">
                  <div class="mt-3">
                      <h4><?php echo "Deth cirtificate" ?></h4>
                      </div>
                                <?php 
// echo "";
 echo "<img src='../front/".$change_connection_fetch['deth_certificate']."' height='300px'  width='300px'>"; 

                       ?>
            </div>
          </div>
<?php }

 


// <!-- change conection end -->
else if($fetch['purpose']=='Home')
{
     ?>
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                
                  <div class="d-flex flex-column align-items-center text-center">                  
<?php echo "<img src='../front/".$fetch['upload_phto']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                       
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
              <div class="card mb-3" >
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
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
if($fetch['emailid']=='')
  echo "None";
else
  echo $fetch['emailid'];


                       ?>          
                     </div>
                  </div>
                  <hr>
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
                      <h6 class="mb-0">Transaction No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 

                      echo $fetch['transaction_no']; ?>
                    </div>
                  </div>
                </div>
              </div>
              
            <div id="imgcontainer" style="display: flex">

      <div class="row gutters-sm" style="flex: 1;" >
                <!-- <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
 -->                      <?php 
// echo "";
 echo "<img src='../front/".$fetch['upload_adhar']."' height='300px'  width='300px'>"; 

                       ?>
                 <!--    </div>
                </div>
                    </div> -->
            </div>
             <div class="row gutters-sm" style="flex: 1;">
                      <?php 
// echo "";
 echo "<img src='../front/".$fetch['uploadration_card']."' height='300px'  width='300px'>"; 

                       ?>
            </div>
          </div>

<?php } 
else{
?>
  <!-- /purose home end-->
<!-- purpose business start -->
<?php 
 
$select="SELECT * from business_connection Where customer_id='$forin_key'";
$run=mysqli_query($connect,$select);
  $fetch=mysqli_fetch_assoc($run);

  ?>
<div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                
                  <div class="d-flex flex-column align-items-center text-center">                  
<?php echo "<img src='../front/".$fetch['upload_photo']."' alt='Admin' class='rounded-circle' width='150'>"; ?>
                       
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
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">No Of Cylinder</h6>
                    <span class="text-secondary"><?php echo $fetch['cylinder_count'] ?></span>
                  </li>
                 <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0">District</h6>
                    <span class="text-secondary"><?php echo $fetch['district']; ?></span>
                  </li>
               </ul>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3" >
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
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 
if($fetch['emailid']=='')
  echo "None";
else
  echo $fetch['emailid'];


                       ?>          
                     </div>
                  </div>
                  <hr>
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
                      <h6 class="mb-0">Transaction No</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php 

                      echo $fetch['transaction_no']; ?>
                    </div>
                  </div>
                </div>
              </div>
              
            <div id="imgcontainer" style="display: flex">

      <div class="row gutters-sm" style="flex: 1;" >
                <!-- <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
 -->                      <?php 
// echo "";
 echo "<img src='../front/".$fetch['upload_adhar']."' height='300px'  width='300px'>"; 

                       ?>
                 <!--    </div>
                </div>
                    </div> -->
            </div>
             <div class="row gutters-sm" style="flex: 1;">
              <small> <?php echo $fetch['proof_category'] ?> </small>
                      <?php 
// echo "";
 echo "<img src='../front/".$fetch['upload_proof']."' height='300px'  width='300px'>"; 

                       ?>
            </div>
<?php } ?>
<!-- purpose business end-->


            </div>
            </div>
          </div>
        </div>
 <?php 
include 'footer.php';
  ?>


