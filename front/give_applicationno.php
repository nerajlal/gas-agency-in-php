<?php 
include 'top.php';
$application_no=$_GET['appno'];
 ?>
 <div id="container" style="background: #d6d4d4;
    padding: 25px;
    /* margin-bottom: 156px; */
    margin-left: 74px;
    margin-right: 74px;
    margin-top: 48px;
    height: 178px;margin-bottom: 50px;">
 	<h5>Your application number is <?php echo $application_no; ?></h5>
  <p>do you rember this  number to check the status</p>
 
 	<form action="" method="POST">

                            <button id="payment-button" type="submit"  style="width: 157px;margin-left: 45%;"name="ok" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">ok</span>
                           </button>
                       </form>
                       <!-- <script> -->
                       	<?php 
                       	if(isset($_POST['ok']))
                       	{
echo "<script>window.location.href='index.php'</script>";
}

                       	 ?>
                       	

 </div>
 <?php 
include 'footer.php';
 ?>                     
