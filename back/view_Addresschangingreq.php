<?php  
include'top.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
if(isset($_GET['home_address']))
                            {
                              // echo $_GET['action'];
$update="UPDATE temp_address  SET notification=1 ";
// print_r($update);
$run=mysqli_query($connect,$update);
} 
?>
<?php 
if($_GET['type']=='Reject')
{
  $key=$_GET['key'];
  $forin_id=$_GET['forin_id'];
  $update_status="UPDATE temp_address SET status='Reject' where customer_id='$forin_id'";
// print_r($update_status);
$execute=mysqli_query($connect,$update_status);
 }
if($_GET['type']=='Approved')
{
	$key=$_GET['key'];
	
	$forin_id=$_GET['forin_id'];
	$select="SELECT * FROM temp_address WHERE  temp_address_id='$key'";
	// print_r($select);
	$run=mysqli_query($connect,$select);
	$fetch=mysqli_fetch_assoc($run);
	$house_name=$fetch['house_name'];
$house_no=$fetch['house_no'];
$house_complx=$fetch['house_complx'];
$city=$fetch['city'];
$streetname=$fetch['streetname'];
$pincode=$fetch['pincode'];
$post_office=$fetch['post_office'];
$floar_no=$fetch['floar_no'];
$district=$fetch['district'];
$proof_cat=$fetch['proof_cat'];
$proof=$fetch['proof'];
$status=$fetch['status'];
if($status=='under process')
{
	$update="UPDATE connection_details SET house_name='$house_name',house_no='$house_no',house_complx='$house_complx',city='$city',streetname='$streetname',pincode='$pincode',post_office='$post_office',floar_no='$floar_no',district='$district' WHERE customer_id='$forin_id'";
	// print_r($update);
	$run=mysqli_query($connect,$update);
}
	if($run==1)
	{
$update_status="UPDATE temp_address SET status='Approved' where customer_id='$forin_id'";
// print_r($update_status);
$execute=mysqli_query($connect,$update_status);
	}


}
 ?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Change Address </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table" id="viewchange_address">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="avatar">Consumer No</th>
                                       <th>House Name</th>
                                       <th>House No</th>
                                       <th>city</th>
                                       <th>Postoffice</th>
                                       <th>District</th>
                                       <!-- <th>proff</th> -->
                                       <th>Status</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                 <?php 
$select="SELECT * FROM temp_address where status='under process'";
$run=mysqli_query($connect,$select);
$i=1;
while($fetch=mysqli_fetch_assoc($run))
{
	$key=$fetch['temp_address_id'];$forin_id=$fetch['customer_id'];
                                  ?>
                                 <tbody>
                                    <tr>
                                       <td class="serial"><?php echo $i ?>.</td>
                                       <td> <?php echo $fetch['customer_id'] ?> </td>
                                       <td> <?php echo $fetch['house_name'] ?> </td>
                                       <td> <?php echo $fetch['house_no'] ?> </td>
                                       <td> <?php  echo $fetch['city'] ?></td>
                                       <td> <?php  echo $fetch['post_office'] ?></td>
                                       <td> <?php  echo $fetch['district'] ?> </td>
                                     <?php   $i=$i+1; ?>
                                      <?php 
                                     $status=$fetch['status'];
                                      if($status=='under process')
                                      {
    echo"<td> <a  href='?type=Approved&key=".$fetch['temp_address_id']."&forin_id=".$fetch['customer_id']."'onclick='return conformbox()'id='approveBtn' >Approve</a>
 </td>";

echo"<td> <a  href='?type=Reject&key=".$fetch['temp_address_id']."&forin_id=".$fetch['customer_id']."'onclick='return rejectconformbox()'id='rejectBtn' >Reject</a>
 </td>";
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
  <?php } } ?>
                                       </tr>
                               
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
include'footer.php';
 ?> 