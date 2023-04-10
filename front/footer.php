<footr class="last">
 <div class="footer">
  <div class="container">
   <div class="row">
    <div class="col-md-6 offset-md-3">
     <ul class="sociel">
       <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
       <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
       <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
     </ul>
   </div>
 </div>
 <div class="row">
   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
    <div class="contact">
     <h3>conatct us</h3>
     <span>123 Second Street Fifth Avenue,<br>
       Manhattan, New York<br>
     +987 654 3210</span>
   </div>
 </div>
 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>ADDITIONAL LINKS</h3>
   <ul class="lik">
     <li> <a href="https://youtu.be/cnMSHQA36og">install gas stove with gas cylinder
     </a></li>
     <li> <a href="#">Terms and conditions</a></li>
     <li> <a href="#">Privacy policy</a></li>
     <li> <a href="#">News</a></li>
     <li> <a href="contact.php">Contact us</a></li>
   </ul>
 </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>service</h3>
   <ul class="lik">
    <li> <a href="#"> Data recovery</a></li>
    <li> <a href="#">Computer repair</a></li>
    <li> <a href="#">Mobile service</a></li>
    <li> <a href="#">Network solutions</a></li>
    <li> <a href="#">Technical support</a></li>
  </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
  <div class="contact">
   <h3>About lighten</h3>
   <span>Tincidunt elit magnis nulla facilisis. Dolor Sapien nunc amet ultrices, </span>
 </div>
</div>
</div>
</div>
<div class="copyright">
 <p>Copyright 2021 All Right Reserved By Aravind as</p>
</div>

</div>
</footr>
<!-- end footer -->
</body>
<script src="js/jquery.min.js"></script> 
<script src="js/jquery-2.1.4.min.js"></script>
<!-- <script src="js/popper.min.js"></script>  -->
<script src="js/bootstrap.bundle.min.js"></script>  
<!-- <script src="js/plugin.js"></script>  -->
<!-- sidebar --> 
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- kyc validation start  -->
<!-- <script src="profilejs/kycform_validation.js"></script>  -->
<!-- kyc validation end -->
<!-- <script src="profilejs/paymentval.js"></script>  -->
<script src="profilejs/gasbooking_validation.js"></script> 
<script src="profilejs/changepaymtbasedration.js"></script> 
<script src="profilejs/customerlogin_valid.js"></script>
<script src="profilejs/signup_validation.js"></script>
<!-- <script src="profilejs/changesigninandloginradiobtn.js"></script> -->
<script src="profilejs/paymentshowandhide.js"></script>
<script src="profilejs/complaint_validation.js"></script>
<script src="profilejs/change_connectionval.js"></script>
<script src="profilejs/change_address.js"></script>

<!-- customer signup start -->
<script src="profilejs/seconcylvalidation.js"></script>
<script src="js/change_phonenumber.js"></script>
<script src="js/changepassword.js"></script>
<!-- front/ -->
<!-- customer signup end -->
<!-- <script src="js/custom.js"></script> -->
<!-- sweetalert start-->


<!-- sweetalert end -->

<?php 
// 
if(isset($_GET['page']))
{

  if($_SESSION['customer_id']=="")
  {

  // echo  "<script>alert(".$_SESSION['customer_id'].")</script>";    
                    // echo "<script>alert('inside')</script>";
    echo "<script>window.location.href='customer_login.php'</script>";

  }
}

?>


<script>
  jQuery(document).ready(function($){

   $("#purpose").change(function(){
   // alert('$purpose');
   if($("#purpose").val()=="Business")
   {
     $("#busciencecategory").show();
     $("#homecategory").hide(); 
   }
   else 
   {
     $("#busciencecategory").hide(); 
     $("#homecategory").show(); 
   }
 })
 })
</script>
<!-- change address start -->
<script>


</script>
<!-- change address end -->  
<!-- sign up validation sarting -->
<script>

</script>
  <!--      <script>
         $("#customRadioInline1").click(function(){
           $("#print_error_msg").hide();
         })
         $("#customRadioInline2").click(function(){
           $("#print_error_msg").hide();
         })
         
       </script> -->
       <!-- gas booking upi payment hide or show -->
       <!-- upi_payment
exampleRadios1
exampleRadios2 -->
<!-- $("#exampleRadios1").click -->

<script src="../back/assets/js/dataTables.min.js" type="text/javascript"></script>
<!-- <script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script> -->

<script>jQuery(document).ready(function($){
  $('#gas_booking_history').DataTable();

})
</script>
<script>
  $("#ok").click(function(){
    var url="http://localhost/Bca_Mini_Project/front/index.php";
    $(location).attr('href',url);
                         // window.location.replace("");

                       })
                     </script>
<!-- top taget btn start  -->
 
 <script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!-- ending   -->
                    </html>