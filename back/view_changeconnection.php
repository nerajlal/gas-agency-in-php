<?php 
include 'top.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
if(isset($_GET['changing']))
                            {
                              // echo $_GET['action'];
$update="UPDATE change_connection  SET notification=1 ";
// print_r($update);
$run=mysqli_query($connect,$update);
} 
 ?>
<?php 
if($_GET['type']=='Approved')
{
 $key=$_GET['key'];
 
 $forin_id=$_GET['forin_id'];
 $select="SELECT * FROM change_connection WHERE  temp_connection_id='$key'";
 // print_r($select);
 $run=mysqli_query($connect,$select);
 $fetch=mysqli_fetch_assoc($run);
   $name=$fetch['name'];
   echo $name; 
$dob=$fetch['dob'];
$gender=$fetch['gender'];
$relationship=$fetch['relationship'];
// $house_name=$fetch['house_name'];
$deth_certificate=$fetch['deth_certificate'];
$upload_photo=$fetch['upload_photo'];
$upload_adhar=$fetch['upload_adhar'];
$uploadration_card=$fetch['uploadration_card'];
$transaction_no=$fetch['transaction_no'];
//,deth_certificate='$deth_certificate'
$status=$fetch['status'];
// echo $status;
// if($status=='Under Process')
// {
  $var=$_SESSION['purpose'];
 echo $var;
 if($var=='Business'){
 $update="UPDATE business_connection SET name='$name',dob='$dob',gender='$gender',upload_photo='$upload_photo',upload_adhar='$upload_adhar' WHERE customer_id='$forin_id'";
 print_r($update);
 }
 else{
 $update="UPDATE connection_details SET name='$name',dob='$dob',gender='$gender',relationship='$relationship',upload_phto='$upload_photo',upload_adhar='$upload_adhar',uploadration_card='$uploadration_card' WHERE customer_id='$forin_id'";
}
 // print_r($update);
 // echo "<script>alert(".print_r($update).");'</script>";
 // print_r($update);
 $run=mysqli_query($connect,$update);
// }
 if($run==1)
 {
$update_status="UPDATE change_connection SET status='Approved'";
// print_r($update_status);
$execute=mysqli_query($connect,$update_status);
 }
}
if($_GET['type']=='Reject')
{
  $key=$_GET['key'];
  $forin_id=$_GET['forin_id'];
  $update_status="UPDATE change_connection SET status='Reject' where customer_id='$forin_id'";
// print_r($update_status);
$execute=mysqli_query($connect,$update_status);
 }
                                        ?>
   
 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Chang Connection Request </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="change_connection">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="serial">Consumer No</th>
                                       <th class="avatar">Name</th>
                                       <th>Gender</th>
                                       <th>Relation</th>
                                       <th>Deth certifiate</th>

                                       <!-- <th>Product</th> -->
                                       
                                       <th>transaction_no</th>
                                       <th>Status</th>
                                       <th></th>
                                       <!-- <th></th> -->
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <?php 
$i=0;
$select="SELECT * FROM change_connection where status='Under Process' ";
$run=mysqli_query($connect,$select);

while($fetch=mysqli_fetch_assoc($run))
{
 $forin_id=$fetch['customer_id'];
 $key=$fetch['temp_connection_id'];
$i=$i+1;
                      ?>
                                    <tr>
                                       <td class="serial"><?php echo $i ?></td>
                     <!--                  <?php 

                                       ?> -->
                                       <!-- $fetch['deth_certificate'] -->
                                        
                                       <td><?php echo $fetch['customer_id'] ?></td>
                                       
                                       <?php  echo"<td><a href='profile.php?changeconnection_id=$key'>".$fetch['name']."</a></td>" ?>
                                       <td> <?php echo $fetch['gender'] ?></td>
                                       <td> <?php echo $fetch['relationship'] ?></td>
                                       <td><?php echo "<img src='../front/".$fetch['deth_certificate']."'>"; ?></td>
                                       <!-- <img src="../front/.$fetch['deth_certificate']."> -->

                                        <td><?php echo $fetch['transaction_no'] ?></td>
                                         
                                                                    <?php 
                                     $status=$fetch['status'];
                                      // if($status=='Under Process')
                                      // {
                                        // echo "<script>alert('ahasgsgs')</script>";
 echo"<td> <a  href='?type=Approved&key=".$fetch['temp_connection_id']."&forin_id=".$fetch['customer_id']."'onclick='return conformbox()'id='approveBtn' >Approve</a>
 </td>";

echo"<td> <a  href='?type=Reject&key=".$fetch['temp_connection_id']."&forin_id=".$fetch['customer_id']."'onclick='return rejectconformbox()'id='rejectBtn' >Reject</a>
 </td>";
                                   // }

                                   // ejmlse
                                    // echo "<td></td>";
                                      
                                   }

                                       ?>
                                    </tr>
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