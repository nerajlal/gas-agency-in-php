<?php 
include 'top.php';
include 'connect.php';
 ?>
 <div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Company</strong><small> Form</small></div>
                        <div class="card-body card-block">
                        	<form action="" method="POST">
                           <div class="form-group">
                           	<label for="company" class=" form-control-label">Price</label>
                           	<input type="text" id="company" name="price"value='<?php echo $_GET['price']; ?>' class="form-control">
                           </div>
                           <div class="form-group">
                           	<label for="vat" class=" form-control-label">Kg</label>
                           <input type="text" id="vat" name="kg"value='<?php echo $_GET['kg']; ?>' class="form-control">
                           </div>
                          <!--  <div class="form-group"><label for="street" class=" form-control-label">Street</label><input type="text" id="street" placeholder="Enter street name" class="form-control"></div>
                           <div class="form-group"><label for="country" class=" form-control-label">Country</label><input type="text" id="country" placeholder="Country name" class="form-control"></div> -->
                           <button id="payment-button" name="submitbtn"type="submit" class="btn btn-lg btn-info btn-block">
                           <span id="payment-button-amount">Submit</span>
                           <?php 

                        
                           if(isset($_POST['submitbtn']))
                           {
                           	 $key=$_GET['infoid'];
                           $price=$_POST['price'];
                          $kg=$_POST['kg'] ;

					  	 $update_query="UPDATE today_info SET price='$price', kg='$kg' WHERE info_id='$key'";
					  	 $run=mysqli_query($connect,$update_query);
					  	 echo "<script>window.location='viewprice_status.php'</script>";
					  	 // header('location:viewprice_status.php');
}
                            ?>
                           </button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
 <?php 
include 'footer.php';
 ?>