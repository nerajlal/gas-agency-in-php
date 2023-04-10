 jQuery(document).ready(function($){
        $("#chanepassword").click(function(){
          $phone_no=$("#phone_no").val();
          $password=$("#password").val();
          $confirmpassword=$("#confirmpassword").val();
          if($phone_no==''){
            alert("Enter Phone Number");
            return false;
          }
          else if($phone_no.toString().length!=10){
            alert("Enter valid phone number");
            return false;

          }
          else if($password==''){
            alert('Enter Password');
            return false;

          }
          else if($confirmpassword==''){
            alert('Enter Confirm Password');
            return false;

          }
           else if($confirmpassword!=$password){
            alert('Confirm password is wrong');
            return false;
          }
          else
          {
            return true;

          }

        })
    })