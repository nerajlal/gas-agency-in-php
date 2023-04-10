
<?php 
include 'connect.php';
 ?>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Orent_gas_agency_back</title>
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
                        <label>Username</label>
                        <input type="text" id="Username"name="Username"class="form-control" >
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="Password"name="Password">
                     </div>
                     <button type="submit"id="adminloginbtn" name="adminloginbtn"class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
					</form>
               </div>
            </div>
         </div>
      </div>
      <?php 
if(isset($_POST['adminloginbtn']))
{
   $name=$_POST['Username'];
   $password=$_POST['Password'];
   // echo md5($name);
   $name=md5($name);
   $password=md5($password);
   $select_query="SELECT * FROM admin_login where name='$name' && password='$password'";
   // print_r($select_query);
   $run=mysqli_query($connect,$select_query);
   
            $row=mysqli_num_rows($run);
   if($row>0)
   {
      $_SESSION['admin_id']=1;
      echo "<script>window.location='index.php'</script>";
   }
   else
   {
      echo" <script>alert('Username or password is incorrect')</script>";
   }
   // print_r($select_query);
}


       ?>
   
      <script src="assets/js/vendor/jquery-2.1.4.min.js" type="text/javascript"></script>
      <script src="assets/js/popper.min.js" type="text/javascript"></script>
      <script src="assets/js/plugins.js" type="text/javascript"></script>
      <script src="assets/js/main.js" type="text/javascript"></script>
         <script>
            jQuery(document).ready(function($){
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
      })


      </script>
   </body>
</html>