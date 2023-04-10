<?php 
include 'top.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
if(isset($_GET['Second_cylinder_notifi']))
                            {
                              // echo $_GET['action'];
$updates="UPDATE second_cylinderdet  SET notification=1 ";
// print_r($update);
mysqli_query($connect,$updates);
} 
 ?>
  <?php 
                                   if($_GET['type']=='approved')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE second_cylinderdet SET status='Approved' WHERE Second_cylinder_id=$id";
                                    // printf($update);
$execute=mysqli_query($connect,$update);                                   }
                                   if($_GET['type']=='rejected')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE second_cylinderdet SET status='Rejected' WHERE Second_cylinder_id=$id";
                                    // printf($update);
                                     $execute=mysqli_query($connect,$update);
                                   }

                                     ?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Second Cylinder Details </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="second_cylinder">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="avatar">Consumer No</th>
                                       <th>Name</th>
                                       <th>voucher</th>
                                       
                                       <th>transaction No</th>
                                       <th>Status</th>
                                       <th></th>
                                    </tr>
                                 </thead>
                                
                                 <tbody>
                                 <?php 
                                 $i=0;   
$select="SELECT * FROM second_cylinderdet where status='Under Process'";
// print_r($select);
$run=mysqli_query($connect,$select);
// $row=mysqli_num_rows($run);
// echo $row;

while($fetch=mysqli_fetch_assoc($run))
                                 {
                                  $i=$i+1;
                               echo" 
                                   <tr>
                                       <td class='serial'> $i </td>
                             <td> ". $fetch['customer_id']." </span> </td>";
                             $consumer_no=$fetch['customer_id'];
                             $select_connection="SELECT * FROM connection_details where customer_id=$consumer_no";
                             $execute=mysqli_query($connect,$select_connection);
                             $get_name=mysqli_fetch_assoc($execute);
                                       echo "<td> ".$get_name['name']."</td>";?>
<?php
$a="../front/".$fetch['voucher'];
 echo "<td><embed src=".$a." > </td>" ?>

                                    <!-- <td><embed src="" ></td> -->
                                        <?php
                                      echo" <td>". $fetch['transaction_no']." </td>";
                                       $id=$fetch['Second_cylinder_id'];
// if($fetch['status']=='Under Process'|| $fetch['status']=='Rejected')
                                       // {
                                       
                                        echo "<td><a style='color:white;'href='?type=approved&key=$id' onclick='return conformbox()'>
                                          <span class='badge badge-complete'style='color:white;background:green;'>Approve</span>
                                       </a></td>";
                                       // }
                                       // else
                                       // {
                                        echo "<td><a style='color:white;' href='?type=rejected&key=$id' onclick='return rejectconformbox()'>
                                          <span class='badge badge-complete' style='color:white;background:red;'>Reject</span></a>
                                       </td>";
                                       // }
                                      
                                    echo "</tr>";
                                                                        } ?>
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