<?php 
include 'top.php';
// include 'connect.php';
error_reporting(0);
if($_SESSION['admin_id']=="")
{
  echo "<script>window.location='Adminlogin.php'</script>";
}
 ?>
 <style>
 	#open_statusbtn{
    margin-left: 81%;
    margin-bottom: 14px;
    margin-top: -52px;
 	}  
 </style>
 <?php 
if($_GET['change']=='open')
{
 $update_query="UPDATE today_info SET status='open'";
               $run=mysqli_query($connect,$update_query);
}
if($_GET['change']=='close')
{
  $update_query="UPDATE today_info SET status='close'";
               $run=mysqli_query($connect,$update_query); 
  
}


    ?>
 <div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Price and gas center sts </h4>
                           </div>
 	
<!-- <form action="" method="POST"> -->
	<?php 
   $select_query="SELECT * from today_info ";
                                 $run=mysqli_query($connect,$select_query);
                                 while($get=mysqli_fetch_assoc($run))
                                {
                                  $status=$get['status'];
                                  $key=$get['info_id'];
                                }
                                
                                if($status=='close')
                                {
  echo"
<div class='col-4' id='open_statusbtn'>
        <a style='background:red' href='?id=$key&change=open'> <button type='button' name='statusbtn'  class='btn btn-success'>close</button></a>
</div>";
}
else
{
    echo"
<div class='col-4' id='open_statusbtn'>
        <a style='background:green'href='?id=$key&change=close'><button type='button' name='statusbtn'  class='btn btn-success'>Open</button></a> 
</div>";
}
   ?>
   
<!-- a style='color:white;'href='?type=approved&key=$id'> -->
                                        <!--   <span class='badge badge-complete'style='color:white;background:green;'>Approved</span>
                                       </a> -->
<!-- </form> -->
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                              <table class="table ">
                                 <thead>
                                    <tr>
                                       <th class="serial">#</th>
                                       
                                       <th>Purpose</th>
                                       <th>Kg</th>
                                       <th>Cylinder  Price</th>
                                       <th>edit</th>
                                       </tr>
                                 </thead>
                                 <?php 
                                 $i=0;
                                 $select_query="SELECT * from today_info ";
                                 $run=mysqli_query($connect,$select_query);
                                 while($fetch=mysqli_fetch_assoc($run))
                                {
                                	$i=$i+1;

                                  ?>
                                 <tbody>
                                    <tr>
                                       <td class="serial"><?php echo $i; ?></td>
                                    
                                       <td> <span class="name"><?php  echo $fetch['purpose'] ?></span> </td>
                                       <td> <span class="name"><?php  echo $fetch['kg']."Kg" ?></span> </td>
                                       <td> <span class="product"><?php  echo $fetch['price'] ?></span> </td>
                                       <!-- <?php 
                                       // $price=$fetch['price'];
                                       // $kg=$fetch['kg']

                                        ?> -->
                                       <td>
                                       	<?php  
             echo "<a href='Addprice_status.php?kg=$fetch[kg]&price=$fetch[price]&infoid=$fetch[info_id]'><span class='badge badge-complete'>Edit price</span></a>";
             ?>
                                       </td>
                                    </tr>
                                <?php } ?>
                                    <!--  <?php 
                                 // $select_query="SELECT * from today_info where purpose='Home'";
                                 // $run=mysqli_query($connect,$select_query);
                                 // $fetch=mysqli_fetch_assoc($run);

                                  ?> -->
                                     <!-- <tr>
                                       <td class="serial">2.</td>
                                       <td> <span class="name">11</span> </td>
                                       <td> <span class="name">Busines</span> </td>
                                       <td> <span class="name">40kg</span> </td>
                                       <td> <span class="product">1050</span> </td>
                                        <td>
                                            <a href="Addprice_status.php?kg=40&price=1050"><span class="badge badge-complete">Edit price</span></a>
                                       </td>
                                    </tr> -->
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