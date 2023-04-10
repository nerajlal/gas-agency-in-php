<?php 
include 'top.php';
?>
  <section class="slider_section">
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
<?php 
$select_query="SELECT * from today_info where info_id=1";

                                 $run=mysqli_query($connect,$select_query);
                                 $fetch=mysqli_fetch_assoc($run);
                                 $puropse=$fetch['purpose'];
                                 $kg=$fetch['kg'];
                                 $price=$fetch['price'];
                                 $status=$fetch['status'];
 ?>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="images/ban4.png" style="width: 1349px;height: 462px;"alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h2>Oreant Gas Agency <br> <small class="black_bold">private l.m.t</small><br>
                           <small>Kottarakkara</small>
                           <h2>
                              <strong class="yellow_bold" style="font-size: 43px;font-family: cursive;
    color: #ebf1eb;"><?php echo $status ?> </strong>
                         <!--   <strong class="yellow_bold">Product </strong></h1>
                        <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href="#">see more Products</a> -->
                     </div>
                  </div>
               </div>
               <div  class="carousel-item">
                  <img class="second-slide" src="images/bansunkudu.jpg" style="width: 1349px;height: 462px;"alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h2 style="color:white">Today home cylinder  <br> <strong class="black_bold">price is <?php echo  $price;?>  </strong><br>
                           <!-- <strong class="yellow_bold">Product </strong> --></h2>
                       <!--  <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p> -->
                        <!-- <a  href="#">see more Products</a> -->
                     </div>
                  </div>
               </div>
               <?php 
$select_query="SELECT * from today_info where info_id=2";

                                 $run=mysqli_query($connect,$select_query);
                                 $fetch=mysqli_fetch_assoc($run);
                                 $puropse=$fetch['purpose'];
                                 $kg=$fetch['kg'];
                                 $price=$fetch['price'];
                                 $status=$fetch['status'];
 ?>
               <div class="carousel-item">  
                  <img class="third-slide" style="opacity: .8;    width: 100%;
    /* width: 1349px; */
    height: 462px;"src="images/bann1.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h2 style="color: #f3151f;opacity: 1;">Today Buciness cylinder Price is  <br> <strong class="black_bold"><?php echo  $price?> </strong><br></h2>
                           <!-- <strong class="yellow_bold">Product </strong></h1> -->
                        <!-- <p>It is a long established fact that a r <br>
                          eader will be distracted by the readable content of a page </p>
                        <a  href="#">see more Products</a> -->
                     </div>
                  </div>
               </div>

            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-right'></i>
            </a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-left'></i>
            </a>
            
         </div>

      </section>



<!-- CHOOSE  -->
      <div class="whyschose">
         <div class="container">

            <div class="row" id="about">
               <div class="col-md-12 ">
                  <div class="title">
                     <h2 >ABOUT <strong class="black">US</strong></h2>
                     <!-- <i class="fa fa-chevron-circle-up" aria-hidden="true"></i> -->
                     <!-- <img class="first-slide" src="images/arrowup.png" style=""> -->

                     <span>The Orient Gas Agency was established in 1998 by Muhammad Ali. We have grown alot under his guidance and extended our centers in Kollam, Kottarakara and Anchal.
             Our top priority is customer services. The customer complaints are given special attention and we have dedicated staff for analyzing and taking appropriate action the customer compalaints
and manage details related to gas application.
</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
     

      <!-- service --> 
      <div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>OUR <strong class="black">Service</strong></h2>
                     <span>Our other main Service are given below</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service1.png"/></i>
                     <h3>Fast service</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service2.png"/></i>
                     <h3>Secure payments</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service3.png"/></i>
                     <h3>Expert team</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service4.png"/></i>
                     <h3>Affordable services</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service5.png"/></i>
                     <h3>90 Days warranty</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service6.png"/></i>
                     <h3>Award winning</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
<!-- star check this -->
<div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>CHECK <strong class="black">THIS</strong></h2>
                     <span>Check first and then buy delivery.Because we want you to be absolutely sure</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service1.png"/></i>
                     <h3>Gas Cylender Expiry Date</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service2.png"/></i>
                     <h3>Secure payments</h3>
                     <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea </p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <i><img src="icon/service3.png"/></i>
                     <h3>Expert team</h3>
                     <p>In the event of a leak,call our Emergency Helpline on 1906 or contact your distributor</p>
                  </div>
               </div>
            
            </div>
         </div>   
      </div>
<!-- end of check this -->
<!-- start of main employs -->
<div class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>OUR TEAM<strong class="black">LEADERS</strong></h2>
                     <span>Easy and effective way to get your device repair</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12"> -->
                  <?php 
$select="SELECT * FROM staff_details";
$run=mysqli_query($connect,$select);
while($fetch=mysqli_fetch_assoc($run))
{
                   
                  echo " <div class='col-xl-4 col-lg-4 col-md-4 col-sm-12'>
                  <div class='service-box'>"?>

 



                      
 <?php echo "<img src='../back/".$fetch['photo']."' style='    width: 300px;
    height: 300px;'>";
?>

                    <?php echo " <h3>".$fetch['staff_name']." </h3>
                     <p> ".$fetch['position']." </p>
                     <h6> ".$fetch['description'] ."</h6>
                  </div>
                  </div>";
               } ?>
               <!-- </div> -->
             
            
            </div>
         </div>
      </div>
<!-- end of of main employs -->

<?php

include 'footer.php';
?>