<?php 
include 'top.php';
 ?>
  
<?php 
if(isset($_GET['business_address']))
                            {
                              // echo $_GET['action'];
$update="UPDATE business_change_address  SET notification=1 ";
// print_r($update);
$run=mysqli_query($connect,$update);
} 
if($_GET['type']=='Reject')
     { 
      $id=$_GET['key'];
$update="UPDATE business_change_address SET status='Reject' WHERE busiaddchange_id=$id";
                                    // printf($update);
                  $execute=mysqli_query($connect,$update); 
}
 if($_GET['type']=='approved')
     { 
	 $id=$_GET['key'];
	
	
	$select="SELECT * FROM business_change_address WHERE busiaddchange_id=$id";
	// print_r($select);
	$run=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_assoc($run);
$forin_id=$fetch['customer_id'];
	$shop_name=$fetch['shop_name'];
$shope_place=$fetch['shope_place'];
$shop_city=$fetch['shop_city'];
$shop_post_office=$fetch['shop_post_office'];
// $house_name=$fetch['house_name'];
$shope_pincode=$fetch['shope_pincode'];
$shope_district=$fetch['shope_district'];

//,deth_certificate='$deth_certificate'
$status=$fetch['status'];
// echo $status;
if($status=='under process')
{
	$update="UPDATE business_connection SET shop_name='$shop_name',place='$shope_place',city='$shop_city',post_office='$shop_post_office',pincode='$shope_pincode',district='$shope_district' WHERE customer_id='$forin_id'";
	// print_r($update);
	$run=mysqli_query($connect,$update);
}
	if($run==1)
	{
  $update="UPDATE business_change_address SET status='Approved' WHERE busiaddchange_id=$id";
                                    // printf($update);
									$execute=mysqli_query($connect,$update); 
	}


}
  ?>
 <!-- //only button change -->

 <!--  -->
 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Change Business Address </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="change_business_address">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th>Cunsumer no</th>
                                       <th>Shop Name</th>
                                       <th>Shop Place</th>
                                      <th>Proof</th>
                                       <th>Status</th>
                                        <th></th>
                                    </tr>
                                 </thead>
                     <?php 
                     $i=0;
                     $select="SELECT * FROM business_change_address where status='under process'";
					$run=mysqli_query($connect,$select);
					while($fetch=mysqli_fetch_assoc($run))
					{ 
						$i=$i+1;?>
                                 <tbody>
                                    <tr>
                                       <td class="serial"><?php echo $i; ?>.</td>
                                       <td> <?php echo $fetch['customer_id']; ?></td>
                                       <td> <?php echo $fetch['shop_name']; ?></td>
                                       <td> <?php echo $fetch['shope_place']; ?> </td>
                                       <?php $key=$fetch['busiaddchange_id']; ?>
                                       
                                       <?php  echo"<td><a href='profile.php?proof_category_id=$key'>".$fetch['shope_proof_category']."</a></td>" ?>
                                       
                                       <?php 
                                       $id=$fetch['busiaddchange_id'];
   if($fetch['status']=='under process')
                                       {
                                       
                                       //  echo "<td><a style='color:white;'href='?type=approved&key=$id'>
                                       //    <span class='badge badge-complete'style='color:white;background:green;'>Approve</span>
                                       // </a></td>";
                                       // }
                                     
                                     // ##
                                       echo"<td> <a  href='?type=approved&key=$id' onclick='return conformbox()'id='approveBtn' >Approve</a></td>";
                                       echo"<td> <a  href='?type=Reject&key=$id' onclick='return rejectconformbox()'id='rejectBtn' >Reject</a></td>";
}
 ?>

 <script >
function conformbox()
{
  return confirm("do you want approve this record");
}
function rejectconformbox()
{
  return confirm("do you want Reject this record"); 
}
 </script>
 <!-- ### -->
                                        

                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php 
include 'footer.php';
 ?>