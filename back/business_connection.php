<?php 
include 'top.php';
include 'connect.php';
error_reporting(0);
 ?>
             <?php 
                                   if($_GET['type']=='approved')
                                   {
                                    $id=$_GET['key'];
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
 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Business Connection </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="viewconnection_detail">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       <th class="serial">con</th>

                                       <th class="avatar">Name</th>
                                       <th>Stove_sts</th>
                                       <!-- <th>rationcard sts</th> -->
                                       <th>Mobile No</th>
                                       <th>Bank transaction no</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                 	  <?php 
                                 	  $i=0;
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
                                       <td>".$fetch['stovestatus']." </td>
                                       
                                       <td> <span class='product'>".$fetch['mobile_no']."</span> </td>
                                       <td><span >".$fetch['transaction_no']."</span></td>";
                                        $id=$fetch['Connection_id'];
                                       if($fetch['status']=='UNDER PROCESS'|| $fetch['status']=='Rejected')
                                       {
                                       
                                        echo "<td><a style='color:white;'href='?type=approved&key=$id'>
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