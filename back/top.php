<?php 
include 'connect.php';
 ?>
 <style>
.dropbtn {
 background-color: white;
    color: blue;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Orient gas agency back</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- <link rel="stylesheet" href="assets/css/font-awesome.min.css"> -->
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets\css\font-awesome.min.css">
       <link rel="stylesheet" href="assets\css\all.min.css">
    
      <!-- E:\xamp\htdocs\Bca_Mini_Project\back\assets\css\font-awesome.min.css -->
      <!-- pluge in data table jquery css -->
      <!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css"> -->
      <link rel="stylesheet" href="assets\fonts\css2.css">
      <link rel="stylesheet" href="assets/css/dataTables.min.css">
      <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'> -->
   </head>
   <style>
      #loading{
         width: 100%;
         height: 100vh;
         position: fixed;
         background: #fff url('images/loading.gif') no-repeat center center;
         z-index: 99999;
      }
      #logoutbtn{
         color: red;
    margin-right: 16px;
      }
      body{
         font-family: 'Georama', sans-serif;
      }
   </style>
   <body onload="loaderfun()">
      <div id="loading"></div>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">Menu</li>
                  <li class="menu-item-has-children dropdown">
                     <a href="./index.php" >Dash Bord</a>
                  </li>
 <li class="menu-item-has-children dropdown">
                     <a href="./customer_details.php" > Customer Details</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="viewconnection_detail.php?home_conne=home_connection_notification" >Connections Detailes</a>
                  </li>   
                   
                  <li class="menu-item-has-children dropdown">
                     <a href="view_secondcylinder.php?Second_cylinder_notifi=Second_cylinder_notification">Second Cylender</a>
                  </li> 
  <li class="menu-item-has-children dropdown">
                     <a href="view_gas_bookingdet.php?action=gasbooking_notification" >Gas Booking Request</a>
                  </li>
                 <li class="menu-item-has-children dropdown">
                     <a href="view_changeconnection.php?changing=gasbooking_notification" >Changing Connection</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="view_Addresschangingreq.php?home_address=home_address" >Changing Address</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="view_businessAddresschangingreq.php?business_address=business_address" >Changing Business Address</a>
                  </li>
 <li class="menu-item-has-children dropdown">
                     <a href="viewcomplaints.php?all_complaint=alluser_complaints" >Complents</a>
                  </li>
<li class="menu-item-has-children dropdown">
                     <a href="view_staffs.php" >Add Main Employee</a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="viewprice_status.php" >Price and Gas center Status</a>
                  </li>
                  

<!-- Nav Item - Tables -->

                  <!-- ending -->
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <!-- <div class="navbar-header"> -->
                  <a class="navbar-brand" href="index.php"><img src="images/last.png" alt="Logo"></a>
                  <!-- <a class="navbar-brand hidden" href="index.php"><img src="photo/logo2.png" alt="Logo"></a> -->
                  <!-- <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> -->
               <!-- </div> -->
            </div>
            
            <?php if(isset($_SESSION['admin_id']))
{
   
            echo "<div class='dropdown' style='
    float: right;
        
    margin-right: -13px;'>
  <button onclick='myFunction()' style=''class='dropbtn'>
  <img src='images/person.png' style='width: 40px;height: 40px;border-radius: 50%;'alt='admin_img'>Welcome_Admin</button>
  <div id='myDropdown' class='dropdown-content'>

    <a href='logout.php'><i id='logoutbtn'class='fa fa-power-off'></i>Logout</a>
 
  </div>
</div>";
}
             ?>

<!-- Example single danger button -->
<!-- echo ""; -->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

          
         </header>
<script>
   var loader=document.getElementById('loading');
   function loaderfun()
   {
loader.style.display='none';
   }
</script>
<!-- // echo "  <div class='top-right'>
   
   //             <div class='header-menu'>
   //                <div class='user-area dropdown float-right'>
   //                   <a href='#' class='dropdown-toggle active' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Welcome Admin</a>
   //                   <div class='user-menu dropdown-menu'>
   //                      <a class='nav-link' href='logout.php'><i class='fa fa-power-off'></i>Logout</a>
   //                   </div>
   //                </div>
   //             </div>
   //          </div>"; -->