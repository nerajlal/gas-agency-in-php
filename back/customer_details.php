<?php
include 'top.php'; 
// include 'connect.php';
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
?>

<!-- start -->
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Customer Signup details</h4>
                      </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="customer_details">
                                 <thead>
                                     <tr>
                                      <th>#</th>
                                      <th>ID</th>
                                       <th>Name</th>
                                       <th>password</th>
                                       <th>Phone Number</th>
                                    </tr>
                                 </thead>
            <?php 
            $num=1;
$select_query="SELECT * FROM customer_details";
$select_run=mysqli_query($connect,$select_query);
while($row=mysqli_fetch_assoc($select_run))
{
     ?>

    <tr>
      <td ><?php echo $num++ ; ?></td>
      <td scope="row"><?php echo $row['customer_id'] ; ?></td>
      <td><?php echo $row['username']; ?></td>
      <td><?php echo $row['password']; ?></td>
      <td><?php echo $row['phone_number']; ?></td>
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
<!-- end -->
 <?php

include('footer.php');
?>