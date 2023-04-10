
<?php 
include 'connect.php';
 ?>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Login Page</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body class="bg-dark">
      <div class="sufee-login d-flex align-content-center flex-wrap">
         <div class="container">
            <div class="login-content">
               <div class="login-form mt-150">
                  <form method="POST">
                     
                     <div class="form-group">
                        <label>Date</label>
                        <input type="text" id="date"name="date"class="form-control" >
                     </div>
                     <div class="form-group">
                        <label>Time</label>
                        <input type="text" class="form-control" id="time"name="time">
                     </div>
                     <button type="submit"id="addtimeanddareBtn" style="background: blue"name="addtimeanddareBtn"class="btn btn-success btn-flat m-b-30 m-t-30">Add</button>
					</form>
               </div>
            </div>
         </div>
      </div>
      <?php 
if(isset($_POST['addtimeanddareBtn']))
{
   $key=$_GET['key'];
   
   $date=$_POST['date'];
   $time=$_POST['time'];
   $select_query="SELECT * FROM gas_booking where booking_id='$key' ";
   // print_r($select_query);
   $run=mysqli_query($connect,$select_query);
   
            
            $update="UPDATE gas_booking SET arrival_date='$date',arrival_time='$time' WHERE booking_id='$key'";
            $run=mysqli_query($connect,$update);
   if($run>0)
   {
    
      echo "<script>window.location='view_gas_bookingdet.php'</script>";
   }
   // else
   // {
   //    echo" <script>alert('Username or password is incorrect')</script>";
   // }
   // print_r($select_query);
}


       ?>
   <!--    <script>
         $("#adminloginbtn").click(function(){
$name=$("#Username").val();
$password=$("#Password").val();
if($name=="")
{
$("#errordiv").text("Enter the username");
}
else if($password=="")
{
$("#errordiv").text("Enter the password");

}
else
{
$("#errordiv").text("");

}
         })


      </script> -->
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
   </body>
</html>