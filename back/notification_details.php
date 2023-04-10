<?php 
include 'top.php';
 ?>
 <?php 
                           if(isset($_GET['action']))
                            {
                              // echo $_GET['action'];
$update="UPDATE gas_booking  SET notification=0 ";
// print_r($update);
$run=mysqli_query($connect,$update);
} 
?>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title"><?php echo " Booking" ?> </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th >#</th>
                                       <th >Cunsumer_No</th>
                                       <!-- <th>ID</th> -->
                                       <th>Name</th>
                                       <th>Purpose</th>
                                      <!--  <th>Quantity</th>
                                       <th>Status</th> -->
                                    </tr>
                                 </thead>
                                 <?php 
                                $query="SELECT * from gas_booking  where notification=0";
                                $execution=mysqli_query($connect,$query);
                               while($fetch=mysqli_fetch_assoc($execution))
                               {                            
                                  ?>
                                   <tr>
                                      <td> <span >1</span> </td>
                                       <td> <span ><?php echo $fetch['customer_id'] ?></span> </td>
                                       <td><span ><?php echo $fetch['purpose'] ?></span></td>
                                       <td><span ><?php echo $fetch['transaction_no'] ?></span></td>
                                        
                               </tr>
                         
                            <?php } 

                            ?>
                                 <tbody>

                                   
                                   
                                 </tbody>
                                   <!--      <td>
                                          <span class="badge badge-complete">Complete</span>
                                       </td>
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