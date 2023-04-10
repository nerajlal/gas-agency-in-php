<html>
<?php include 'connect.php'; ?>
<style>
   #container{
padding: 72px 64px;
  padding: 32px 30px;
   }
</style>
<body>
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="profilecss/loginsigninforgot.css">
<body >
    <div id="myModal" class="modal">
  <div class="modal-content">
  <!-- <div id="top">   -->
  <div id="container" style="display: flex;">
    <div id="image" style="flex: 1;">
      <img src="images/signin-image.jpg" alt="">
    </div>
    <div id="forms" style="flex: 1;">
      <form action="#"method="POST">
      <h1>Change Password</h1><i class="fa fa-mobile" aria-hidden="true"></i>
      <input type="text"  id="phone_no" name="phone_no" placeholder="Registered Phone Number"><br>
      <i class="fa fa-lock" aria-hidden="true"></i>
      <input type="password" placeholder=" New Password"id="password" name="password" style="margin-bottom: 26px;"><br>
      <i class="fa fa-lock" aria-hidden="true" style="color: #a28888;"></i>
      <input type="password" placeholder="Cofirm Password" id="confirmpassword" name="confirmpassword"style="margin-bottom: 22px"><br>
      <br><Button type="submit" id="chanepassword" name="chanepassword">Update Password</Button>
      <a href="customer_login.php" style="margin-left: 8px;
    font-size: 14px;">Goto_login_page</a>
      <?php 
if(isset($_POST['chanepassword']))
{
$phone_no=$_POST['phone_no'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$password=md5($password);
$select="SELECT * from customer_details WHERE  phone_number='$phone_no' ";
// print_r($select);
$run=mysqli_query($connect,$select);
$row=mysqli_num_rows($run);
// echo $row;
$fetch=mysqli_fetch_assoc($run);
$id=$fetch['customer_id'];
if($row>0)
{
  $update="UPDATE customer_details set  password='$password' where customer_id='$id'";
  // print_r($update);
  $execute=mysqli_query($connect,$update);
  if($execute>0)
  echo "<script>alert('Password is successfuly changed')</script>";
echo "<script>window.location.href='customer_login.php'</script>";
}
else
{
  echo "<script>alert('mobile number is wrong')</script>";
}
}
 ?>
    </form>
    </div>   
  </div>
</div>
</div>
<a  href="index.php" id="closeBtn" class="closeBtn"style=" margin-right: 294px;">X</a>
<!-- </div> -->
</body>
</html>
<div id="footer" style="display: none;">
         <?php
include 'footer.php';
?>
</div>
