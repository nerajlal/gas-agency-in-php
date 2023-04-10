<?php 
include 'top.php';

 ?>
  <!-- <link rel="stylesheet" href="../back/assets/css/style.css"> -->
  <style>
    #footer{
      /*margin-top: 71px;*/
    }
     th{
      background: #e8e9ef;
          
    }
    
    .content {
    /*float: left;*/
     background: #e8e9ef;
    padding: 1.875em;
    width: 100%;
    
}
.card .card-body {
    float: left;
    padding: 1.25em;
    position: relative;
    width: 100%;
  }
  .card .box-title {
    font-weight: 600;
    font-size: 1em;
    padding: 5px 0;
}
#tophead{
  margin-bottom: 85px;margin-top: 49px;
}

  </style>
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12"id="tophead" style="">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title">Last applied Details</h4>
                           <?php 
                           $id=$_SESSION['customer_id'];
                           $select_home="SELECT * FROM connection_details where customer_id=$id";
                           // print_r($select_home);
$run_home=mysqli_query($connect,$select_home);
$num_home=mysqli_num_rows($run_home);

$select_business="SELECT * FROM business_connection where customer_id=$id";
// print_r($select_business);
$run_business=mysqli_query($connect,$select_business);
$run_business=mysqli_num_rows($run_business);
// echo $run_business;
// echo $id;

if($num_home==0 && $run_business==0)
{
echo "You hava  not applied for an application";
}
// else
// {

// echo $run_business;
// if()
// {
// echo "You hava  not applied for an application";  
// }
else
{
  // echo "<script>alert('poda')</script>"; 
    ?>
                        </div>
                        <div class="card-body--">
                           <div class="table-stats order-table ov-h">
                            <table class="table">
                                 <thead>
                                    <tr>
                                       <th class="serial">sl.</th>
                                        <th>Connection Name</th>
                                        <th>Date</th>
                                       <th>status</th>
                                       <th></th>
                                    </tr>
                                    <?php $i=1; ?>

                                 </thead>
                                 <tbody>
                                    
                                       
                <?php 
        $key=$_SESSION['customer_id'];
                $select="SELECT * FROM business_connection where (customer_id='$key') ORDER by business_id  desc ";
$select_execute=mysqli_query($connect,$select);
$numrow=mysqli_num_rows($select_execute);
// echo $num_row;
$fething=mysqli_fetch_assoc($select_execute);
if($numrow>0)
{
echo "<tr>
    <td  style='border:none'>  $i.</td><td style='border:none'>New connection</td>";
echo "<td style='border:none'>None</td><td style='border:none'>".$fething['status']."</td>";
if($fething['status']=='Approved')
  {
    echo "<td>
             <a href='voucher.php'> <button type='button' class='btn btn-primary'>view voucher</button></a>
              </td>";
    }
$i=$i+1;
echo "</tr>";
// }
// change connection start
            $select="SELECT * FROM change_connection where (customer_id='$key')  ORDER by temp_connection_id desc";
$select_execute=mysqli_query($connect,$select);
$num_row=mysqli_num_rows($select_execute);
// echo $num_row;
$fething=mysqli_fetch_assoc($select_execute);
if($num_row>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>Change Connection</td>";
echo "<td style='border:none'>".$fething['date']."</td><td style='border:none'>".$fething['status']."</td></tr>";
$i=$i+1;
}
// change connection end
//change address start
          $select="SELECT * FROM business_change_address where (customer_id='$key') ORDER by busiaddchange_id desc";
$select_execute=mysqli_query($connect,$select);
$num_row=mysqli_num_rows($select_execute);
// echo $num_row;
$fething=mysqli_fetch_assoc($select_execute);
if($num_row>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>Change Address</td>";
echo "<td style='border:none'>".$fething['date']."</td><td style='border:none'>".$fething['status']."</td></tr>";
$i=$i+1;
}
}

//change address end
if($numrow==0)
{
$select_second="SELECT * FROM connection_details where (customer_id='$key') ORDER by Connection_id desc";//1
// print_r($select_second);
$run=mysqli_query($connect,$select_second);
$num=mysqli_num_rows($run);
$get=mysqli_fetch_assoc($run);
if($num>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>New connection</td>";
echo "<td style='border:none'>None</td><td style='border:none'>".$get['status']."</td>";
if($get['status']=='Approved')
  {
    echo "<td style='border:none'>
             <a href='home_voucher.php'> <button type='button' style='float:right;height: 38px;' class='btn btn-primary'>view voucher</button></a>
              </td>";
    }
    echo "</tr>";

$i=$i+1;
// }
//secon cylinder start
$select_second="SELECT * FROM second_cylinderdet where customer_id='$key'  order by Second_cylinder_id desc";//1
$run=mysqli_query($connect,$select_second);
$num=mysqli_num_rows($run);
$get=mysqli_fetch_assoc($run);
if($num>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>second_cylinderdet</td>";
echo "<td style='border:none'>None</td><td style='border:none'>".$get['status']."</td></tr>";
$i=$i+1;
}
//secon cylinder end
// change connection start
$select_second="SELECT * FROM change_connection where (customer_id='$key') ORDER by temp_connection_id desc";//1
$run=mysqli_query($connect,$select_second);
$num=mysqli_num_rows($run);
$get=mysqli_fetch_assoc($run);
if($num>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>change_connection</td>";
echo "<td style='border:none'>".$get['date']."</td><td style='border:none'>".$get['status']."</td></tr>";
$i=$i+1;
}
// change connection end
//change adderss start
$select_second="SELECT * FROM temp_address where (customer_id='$key') ORDER by temp_address_id desc";//1
// print_r($select_second);
$run=mysqli_query($connect,$select_second);
$num=mysqli_num_rows($run);
$get=mysqli_fetch_assoc($run);
if($num>0)
{
echo "<tr style='border:none'> <td style='border:none'> $i. </td><td style='border:none'>change_address</td>";
echo "<td style='border:none'>".$get['date']."</td><td style='border:none'>".$get['status']."</td></tr>";
$i=$i+1;
}
//change adderss end
}
}

         ?>

                                       
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            
                     
                  

    

<?php 
 // }
 } ?>
  </div>
   </div>
    </div>
             </div>
           </div>
             </div>
 <div id="footer">
      <?php include 'footer.php';?>
 </div> 
 
