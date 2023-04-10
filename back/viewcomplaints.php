<?php 
include 'top.php';
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
if(isset($_GET['all_complaint']))
                            {
                              // echo $_GET['action'];
$update="UPDATE customer_complaint  SET notification=1 ";
mysqli_query($connect,$update);
} 
 ?>
 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Complaints </h4>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table " id="view_complaints">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                        <th>Consumer No</th>
                                       <th>Subject</th>
                                       <th>Proof</th>
                                    <!--    <th>Complaint</th> -->
                                       <th>Contact</th>
                                    </tr>
                                 </thead>
                                 <?php 
                                 $i=1;
                               $select="SELECT * FROM customer_complaint";
                               $run=mysqli_query($connect,$select);
                               while($fetch=mysqli_fetch_assoc($run))
                               {
                                
                                  ?>
                                 <tbody>
                                    <tr>
                                       <td class="serial"><?php echo $i; ?></td>
                                       <td class="serial"><?php echo $fetch['customer_id']; ?></td>
                                      <?php $primary=$fetch['complaint_id']; 
echo" <td> <a href='view_complaint_det.php?id=$primary'>".$fetch['subject'] ."</a> </td>";
                                      ?>
                                      
                                    

<!-- none -->
<?php 
if($fetch['proof']=='none')
{
  ?>
  <td> <span class="product"><?php  echo $fetch['proof']?></span> </td>
<?php 
}
else
{ 
 ?>
 <td> <span class="product"><?php echo "<img src='../front/".$fetch['proof']."' >"; ?></span> </td>

<?php 
}
$consumerno=$fetch['customer_id'];
$select_conn="SELECT * from customer_details where customer_id='$consumerno'";
// print_r($select_conn);
$execute=mysqli_query($connect,$select_conn);
$get_data=mysqli_fetch_assoc($execute);
echo " <td>".$get_data['phone_number']."</td>";
 ?>


                                       
                                       <!-- <td><span class="count">231</span></td> -->
                                     <!--   <td>
                                          <span class="badge badge-complete">Complete</span>
                                       </td>
 -->
                                    </tr>
                                <?php $i=$i+1; } ?>
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