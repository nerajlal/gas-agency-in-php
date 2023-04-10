<html>
<?php include 'connect.php'; ?>
<link rel="stylesheet" href="profilecss/loginsigninforgot.css">
<link rel="stylesheet" href="css/all.min.css">
<style type="text/css">

</style>
<body  style="font-family: 'Georama', sans-serif;">
<div id="myModal" class="modal">
  <div class="modal-content">
  <div id="container" style="display: flex;height: 473px;">
    <div id="image" class="image"style="">
      <!-- <img src="images/signin-image.jpg" id="loginimg"> -->
      <div id="ban" style="">
    <h1  id="loginheading"style="color: #1eaeff;"><b>Read Me</b></h1>
        <p id="first_notification"style="">Dear Customer If you do not have a gas connection in your name, please create an account (sign in) or you can login here</p>
      <p id="second_notification"style="padding: 0px 22px;">Default password is your date of birth</p>
            <img  style="margin-left: 18px;margin-top: -25px;"src="images/login_img.png" alt="">
      </div>
    </div>
    <div id="forms" style="flex: 1;margin-top: 53px;;">
      <!-- <h2 style="color:#fb4d02">  Login Now</h2> -->
      <div style="display:flex">
          <span style="flex:1"> <h2 style="color:#fb4d02">  Login Now</h2></span>
          <span style="flex:1"><a href="customer_signin.php" style="
    text-decoration: none;
    color: dodgerblue;
"><h4 style="
    /* text-decoration: none; */
">Create account</h4></a></span>
    </div>
      <form action="#"method="POST" style="margin-top: 32px;">
      <!-- <h1>Login Now</h1> --><i style="font-size: 14px;"class="fa fa-mobile" aria-hidden="true"></i>
      <input type="text"name="mobile_no" id="mobile_no" placeholder="Registered Phone Number"><br>
      <i class="fa fa-lock" style="font-size: 14px;"aria-hidden="true" style="font-size: 14px;"></i>
       <input type="password" style="margin-top: 13px;"placeholder="Password"name="loginpassword" id="login_password" style=""><br>
      <span style=" position: absolute;
    top: 300px;
    margin-left: 253px;">
        <i class="fa fa-eye" onclick="showhide()" id="icon"aria-hidden="true" style="font-size: 18px;margin-left: -32px;font-weight: 100;"></i>
      </span>

     
      <script>
    var defaultvalue=false;
    function showhide()
    {
        
        if(defaultvalue){
            document.getElementById("login_password").setAttribute("type","password");
            document.getElementById("icon").setAttribute("class","fa fa-eye");
            // document.getElementById("icon").innerHTML="Show";
            defaultvalue=false;
            

        }else{
            document.getElementById("login_password").setAttribute("type","text");
            document.getElementById("icon").setAttribute("class","fa fa-eye-slash");
            // document.getElementById("icon").innerHTML="Hide";
            defaultvalue=true;
        }
    }
</script>
      <a href="forgot_password.php" style="float: right;
    margin-right: 80px;
    color: dodgerblue;
    text-decoration: none;
    font-size: 15px;">Forgot password</a><br>
      
      <br><Button type="submit" style="background:#fa5909"name="loginbtn"id="login_Btn">Log in</Button>
      <?php 
           if(isset($_POST['loginbtn']))
           {
            $mobile_no=$_POST['mobile_no'];
            $loginpassword=$_POST['loginpassword'];
            $mobile_no=trim($mobile_no);
          $loginpassword=trim($loginpassword);
          $loginpassword=md5($loginpassword);
                  $login_select="SELECT * FROM customer_details where phone_number='$mobile_no' && password='$loginpassword'";
                          $run=mysqli_query($connect,$login_select);
                  $row=mysqli_num_rows($run);
                  if($row>0)
                  {
                       while($fetch=mysqli_fetch_assoc($run))
                     {
                          if($mobile_no==$fetch['phone_number'] && $loginpassword==$fetch['password']) 
                        {
                            $forin=$fetch['customer_id'];
                            $select="SELECT * from connection_details where customer_id=$forin";
                            // print_r($select);
                            $run=mysqli_query($connect,$select);
                            $row=mysqli_num_rows($run);
                            $select_business="SELECT * from business_connection where customer_id=$forin";
                            // print_r($select_business);
                            $execute=mysqli_query($connect,$select_business);
                            $num_row=mysqli_num_rows($execute);
                            if($row>0 || $num_row>0)
                              {
                                $get=mysqli_fetch_assoc($execute);
                                $_SESSION['purpose']=$get['purpose'];
                              }
                  
                            $_SESSION['customer_id']=$fetch['customer_id'];                  
                          }
                    echo "<script>window.location='./index.php'</script>";
                    }
             }
            else
            {
              
             echo" <script>alert('Mobile Number or password is incorrect')</script>";
            }   
         }
         ?>
    </form>
        <!-- <a href="customer_signin.php" id='' style="color: palevioletred;">create an account(register)</a> -->
    </div>
  </div>
</div>
</div>
  <a  href="index.php" id="closeBtn"style="">X</a>
</body>
</html>
<div id="footer" style="display: none;">
         <?php
include 'footer.php';
?>
</div>