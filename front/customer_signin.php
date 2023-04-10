<?php include 'connect.php'; ?>
<link rel="stylesheet" href="profilecss/loginsigninforgot.css">
<link rel="stylesheet" href="css/all.min.css">
<style>
   #container{
padding: 72px 64px;
  padding: 32px 30px;
   }
  
</style>
<body >
   <div id="myModal" class="modal">
  <div class="modal-content">
<!-- <div id="top"> -->	<!-- <a id="homelink"href="index.php"><i id="fa"class="fa fa-home" aria-hidden="true"></i>
   <h5 id="homename">Home_Page</h5>
</a>
 -->	<div id="container" style="display: flex;">
		<div id="forms" style="flex: 1;">
			<form action="#" method="POST">
			<h2 style="font-size: 36px;font-family: Poppins;">Sign Up</h2><i class="fa fa-user" aria-hidden="true"></i>
			<input type="text" placeholder="Your Name" name="signupname" id="signup_name"><br>
			<i class="fa fa-mobile" aria-hidden="true"></i>
		    <input type="text" placeholder="Mobile Number" id="Phone_numbrer" name="signupphone_no"><br>
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input type="password" placeholder="Password" name="signuppassword" id="signup_Password"><br>
			<i class="fa fa-lock" aria-hidden="true" style="color: #a28888;"></i>
			<input type="password" placeholder="Cofirm Password" id="signup_Confirm_Password"style="margin-bottom: 22px"><br>
			<br><input type="submit"id="signup_button" name="signup_button">
		</form>
		</div>
		<div id="image" style="flex: 1;">
			<img src="images/signup-image.jpg" alt=""><br><br><br>
			<a href="customer_login.php" id='loginpage' style="font-size: 14px;">I am already member(Login Now)</a>
		</div>
	</div>
</div>
</div>
  <a  href="index.php" id="closeBtn" class="closeBtn"style=" margin-right: 294px;">X</a>
<!-- </div> -->
		</body>
</html>
		 <?php

        if(isset($_POST['signup_button']))
        {
          
          $username=$_POST['signupname'];
          $phone_no=$_POST['signupphone_no'];
          $password=$_POST['signuppassword'];
          $username=trim($username);
          $phone_no=trim($phone_no);
          $password=trim($password);
          $password=md5($password);
// $_SESSION['username']=$username;
// $_SESSION['password']=$password;
          $select="SELECT * from customer_details WHERE phone_number='$phone_no' AND password='$password'";
          // echo "<script>alert(print_r($select))</script>";
          $run=mysqli_query($connect,$select);
          $row=mysqli_num_rows($run);
          // echo $row;
          if($row>0)
           {
echo "<script>alert('This Mobile Number  and password is exiting, pls enter oter Mobile Number and password ')</script>";
           }
          else
           {
          $insert_query="INSERT INTO customer_details values('','$username','$password','$phone_no')";
          $run_insertquery=mysqli_query($connect,$insert_query);
          // print_r($insert_query);
          if($run_insertquery>0)
             {
          	 echo "<script>window.location.href='customer_login.php'</script>";

              }
           }       
     }
        ?>
        <div id="footer" style="display: none;">
         <?php
include 'footer.php';
?>
</div>
  