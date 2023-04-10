<?php 
include 'top.php';
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
                        if(isset($_GET['home_conne']))
                            {
                              // echo $_GET['action'];
$update="UPDATE connection_details  SET notification=1 ";
$run=mysqli_query($connect,$update);
$update_business="UPDATE business_connection  SET notification=1 ";
$exe=mysqli_query($connect,$update_business);
}  
error_reporting(0);
 ?>
             <?php 
                                   if($_GET['type']=='approved')
                                   {
                                    $id=$_GET['key'];
                                    // $forin=$_GET['forin'];
                                    // forin
                                    // echo $forin;
                                    $update="UPDATE connection_details SET status='Approved' WHERE Connection_id=$id";
                                    // printf($update);
$execute=mysqli_query($connect,$update);                                   }
                                   if($_GET['type']=='rejected')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE connection_details SET status='Rejected' WHERE Connection_id=$id";
                                    // printf($update);
                                     $execute=mysqli_query($connect,$update);
                                   }

                                     ?>
                                                    <?php 
                                   if($_GET['type']=='busapproved')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE business_connection SET status='Approved' WHERE business_id=$id";
                                    // printf($update);
$execute=mysqli_query($connect,$update);                                   }
                                   if($_GET['type']=='busrejected')
                                   {
                                    $id=$_GET['key'];
                                    $update="UPDATE business_connection SET status='Rejected' WHERE business_id=$id";
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
                           <h4 class="box-title">Connection Details</h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="viewconnection_detail">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="serial">con</th>

                                       <th class="avatar">Name</th>
                                       <th class="avatar">Purpose</th>
                                       <th>Stove_sts</th>
                                      
                                       <th>Mobile No</th>
                                       <th>Bank transaction no</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	  <?php 
                                 	  $i=0;
                                 $select="SELECT * FROM connection_details";
                                 $exicuting=mysqli_query($connect,$select);
                                 while($fetch=mysqli_fetch_assoc($exicuting))
                                 {
                                  $i=$i+1;
                                  $key=$fetch['customer_id'];
                                   echo " <tr>
                                       <td class='serial'> $i</td>
                                       <td>".$fetch['customer_id']." </td>
                                       <td><a href='profile.php?id=$key'>".$fetch['name']."</a></td>
                                       <td>".$fetch['purpose']." </td>
                                       <td>".$fetch['stove_status']." </td>
                                       
                                       <td> <span class='product'>".$fetch['mobileno']."</span> </td>
                                       <td><span >".$fetch['transaction_no']."</span></td>";
                                        $id=$fetch['Connection_id'];
                                       if($fetch['status']=='UNDER PROCESS'|| $fetch['status']=='Rejected')
                                       {
                                       
                                        echo "<td><a style='color:white;'href='?type=approved&key=$id&forin=$key'>
                                          <span class='badge badge-complete'style='color:white;background:green;'>Approve</span>
                                       </a></td>";
                                       }
                                       else
                                       {
                                        echo "<td><a style='color:white;' href='?type=rejected&key=$id'>
                                          <span class='badge badge-complete' style='color:white;background:red;'>Reject</span></a>
                                       </td>";
                                       }
                                      
                                    echo "</tr>";
                                }
                                    ?>
                                                            <?php 
                                    
                                 $select="SELECT * FROM business_connection";
                                 $exicuting=mysqli_query($connect,$select);
                                 while($fetch=mysqli_fetch_assoc($exicuting))
                                 {
                                  $i=$i+1;
                                  $key=$fetch['customer_id'];
                                   echo " <tr>
                                       <td class='serial'>$i</td>
                                       <td>".$fetch['customer_id']." </td>
                                       <td><a href='profile.php?id=$key'>".$fetch['name']."</a></td>
                                       <td>".$fetch['purpose']." </td>
                                       <td>".$fetch['stovestatus']." </td>
                                      
                                       <td> <span class='product'>".$fetch['mobile_no']."</span> </td>
                                       <td><span >".$fetch['transaction_no']."</span></td>";
                                        $id=$fetch['business_id'];
                                       if($fetch['status']=='UNDER PROCESS'|| $fetch['status']=='Rejected')
                                       {
                                       
                                        echo "<td><a style='color:white;'href='?type=busapproved&key=$id'>
                                          <span class='badge badge-complete'style='color:white;background:green;'>Approve</span>
                                       </a></td>";
                                       }
                                       else
                                       {
                                        echo "<td><a style='color:white;' href='?type=busrejected&key=$id'>
                                          <span class='badge badge-complete' style='color:white;background:red;'>Reject</span></a>
                                       </td>";
                                       }
                                      
                                    echo "</tr>";
                                }
                                    ?>
                        
                        
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