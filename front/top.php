<?php 
include 'connect.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Orient_gas_agency_front</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- //no -->
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- //no -->
  <!-- style css -->
  <link rel="stylesheet" href="css/style.css"> <!-- //no -->
  <link rel="stylesheet" href="customerstyle/css.css">
    <link rel="stylesheet" href="css/downloadcss.css"><!-- //no -->

  <!-- Responsive-->
  <link rel="stylesheet" href="css/responsive.css"> 
  <!-- fevicon -->
  <!-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> -->
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->

  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css" >
  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="fonts/css2.css">
<!-- <link href="https://fonts.googleapis.com/css2?family=Georama:wght@300&display=swap" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" > -->
  <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" "></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js""></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" "></script> -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <!-- Javascript files--> 
      
<script src="js/sweetalert.min.js"></script>
      <script src="profilejs/sweetalertbox.js"></script>
<!-- datatable plugin -->
<!-- <link rel="icon" href="images/favicon.ico" type="image/ico"> -->
<link rel="stylesheet" href="../back/assets/css/dataTables.min.css">
    </head>
    <!-- body -->
    <style>
      #loading{
        position: fixed;
        background:#fff url('images/loading.gif') no-repeat center center ;
height: 100vh;
width: 100%;
z-index: 99999;

      }
      #myBtn {
     display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #088dce;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 114px;
}

#myBtn:hover {
  background-color: #555;
}
    </style>
    <body onload="loading()" style="font-family: 'Georama', sans-serif;">
   <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
   <div id="loading"></div> 
       <!-- header -->
       <header >
         <!-- header inner -->
         <div class="header" style="    box-shadow: #00000040 0px 0px 19px 0px;">
             <div class="container">
              <div class="row" style="">
               <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                <div class="full">
                 <div class="center-desk">
                  <div class="logo"> <!-- <a href="index.html"> --><a href="index.php"><img src="images/last.png" style="width: 188px; height: 46px;margin-top:5px ;margin-bottom: 5px;" alt="logo"/></a><!-- </a> --> </div>
                </div>
              </div>
            </div>
            <div class="col-xl-8 ">
              <!-- col-lg-7 col-md-9 col-sm-9 -->
              <div class="menu-area">
               <div class="limit-box">
                <nav class="main-menu">
                 <ul class="menu-area-main">
                  <!-- <li class="active"> <a href="index.html"></a> </li> -->
                  <li class="active"> <a href="index.php">Home</a> </li>
 <?php 
      if(isset($_SESSION['customer_id']))
      {
        echo " 

        <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#'' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                     Service
                   </a>
                   <div class='dropdown-menu' aria-labelledby='navbarDropdown'>";?>
                   <?php
$key=$_SESSION['customer_id'];
$select="SELECT * FROM connection_details where (customer_id='$key') AND (status='Approved')";
// print_r($select);
$select_execute=mysqli_query($connect,$select);
$num_row=mysqli_num_rows($select_execute);
// echo $num_row;
if($num_row>0)
{

}
if($num_row==0){
  $select_business="SELECT * FROM business_connection where (customer_id='$key') AND (status='Approved')";
// print_r($select_business);
$selectexecute=mysqli_query($connect,$select_business);
$numrow=mysqli_num_rows($selectexecute);
// echo $numrow;
if($numrow>0)
{

}
if($numrow==0){
  echo "<a class='dropdown-item' href='kycform.php'>New Connection</a>";
}
  // echo "<a class='dropdown-item' href='kycform.php'>New Connection</a>";
}

// $select_business="SELECT * FROM business_connection where (customer_id='$key') AND (status='Approved')";
// // print_r($select_business);
// $selectexecute=mysqli_query($connect,$select_business);
// $numrow=mysqli_num_rows($selectexecute);
// echo $numrow;
// if($numrow>0)
// {

// }
// if($numrow==0){
//   echo "<a class='dropdown-item' href='kycform.php'>New Connection</a>";
// }
                   ?>
                   <?php 
                   $key=$_SESSION['customer_id'];
                   $select="SELECT * FROM business_connection where (customer_id='$key')  ";
$select_execute=mysqli_query($connect,$select);
$num_row=mysqli_num_rows($select_execute);
// echo $num_row;
if($num_row>0)
{

}
if($num_row==0)
{
$select_second="SELECT * FROM second_cylinderdet where (customer_id='$key') AND (status='Approved')";//1
// print_r($select_second);
$run=mysqli_query($connect,$select_second);
$num=mysqli_num_rows($run);
if($num>0)
{

}
if($num==0)
{
  echo "<a class='dropdown-item' href='second_cylinder_applicationform.php'>Second Cylenter</a>";
}
}
// $home="SELECT * FROM connection_details where (customer_id='$key') ";
// // print_r($select);
// $homeexecute=mysqli_query($connect,$home);
// $norow=mysqli_num_rows($homeexecute);
// if($norow>0)
// {
  
// }

                    ?>
                    
<?php 
// $key=$_SESSION['customer_id'];
// $select="SELECT * FROM business_connection where (customer_id='$key')  ";
// $select_execute=mysqli_query($connect,$select);
// $num_row=mysqli_num_rows($select_execute);//1
// $select_second="SELECT * FROM second_cylinderdet where (customer_id='$key') AND (status='Approved')";//1
// // print_r($select_second);
// $run=mysqli_query($connect,$select_second);
// $num=mysqli_num_rows($run);
// if($num_row>0)
// {

// }
// if(($num_row>0) || ($num>0))
// {

// }
// if($num==0)
// {
//    echo "<a class='dropdown-item' href='second_cylinder_applicationform.php'>Second Cylenter</a>";
// }



 ?>
                    

                  <?php echo" <a class='dropdown-item' href='change_connection.php''>Change Connection</a>
                    <a class='dropdown-item' href='change_address.php'>Change Address</a>

                    <a class='dropdown-item' href='change_phoneno.php'>Change Phone Number</a>

                    <div class='dropdown-divider'></div>
                  </div>
                </li>";
echo " <li> <a href='Gas_Booking_form.php?page=other' id='gasbooking'name='gasbooking'>Gas Booking</a> </li>";
echo "  <li class='mean-last'> <a href='customer_complents.php?page=other'>complaint</a> </li>
<li> <a href='status.php'>status</a> </li>";

      }
      else{
         echo "<li> <a href='#about'>About</a> </li> <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                     Service
                   </a>
                   <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='?page=other'>New Connection</a>
                    <a class='dropdown-item' href='?page=other'>Second Cylenter</a>
                    <a class='dropdown-item' href='?page=other''>Change Connection</a>
                    <a class='dropdown-item' href='?page=other'>Change Address</a>

                    <a class='dropdown-item' href='?page=other'>Change Phone Number</a>

                    <div class='dropdown-divider'></div>
                  </div>
                </li>";
      echo " <li> <a href='?page=other' id='gasbooking'name='gasbooking'>Gas Booking</a> </li>";
      echo "  <li class='mean-last'> <a href='?page=other'>complaint</a> </li>
      ";

      }
?>
                <!-- <li class="mean-last"> <a href="customer_profile.php">My profile</a> </li> -->
                <li> <a href="contact.php">Contact</a> </li>

              </ul>
            </nav>
          </div>
        </div>

      </div>

      <!-- start login and reg button-->
      <?php 
      if(isset($_SESSION['customer_id']))
      {
       echo "   <div class='top-right' style='margin-top:27px;'>
       <div class='header-menu'>
       <div class='user-area dropdown float-right' style='margin-bottom: 19px;'>
       <a href='#'' class='dropdown-toggle active' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' style='color: black;'><i class='fa fa-user' aria-hidden='true'></i>
       Account</a>
       <div class='user-menu dropdown-menu' >
       <a class='nav-link' href='profile.php' style='color: black;'>My Profile</a>
       <a class='nav-link' href='logout.php' style='color: black;'><i class='fa fa-sign-out' aria-hidden='true'></i>Logout</a>
       </div>

       </div>
       </div>
       </div>";
             // echo "<script>location.reload();</script>";
     }


     else
     {
      // echo "<li> <a href='customer_signin.php'>signup</a> </li>";
      echo "<div class='col-xl-2 col-lg-2 col-md-2 col-sm-2'    style='margin-bottom: 19px;margin-top: 25px'>
      <li><a  href='customer_login.php' class='btn btn-primary'>Login</a></li>
      </div>"; 

    }
    ?>
    <!--end of login and reg button-->
  </div>
</div>
</header>
<script>
  var loader=document.getElementById('loading');
  function loading()
  {
loader.style.display='none';
  }
</script>