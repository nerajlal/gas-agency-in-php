$("#signup_button").click(function(){

          $signup_name=$("#signup_name").val();
          let mobile_no=$("#Phone_numbrer").val();

          $signup_Password=$("#signup_Password").val();

          $signup_Confirm_Password=$("#signup_Confirm_Password").val();

          if($signup_name=="")
          {
            // $("#print_error_msg").show();
            alert("enter your username");
            return false;

          }
          else if(mobile_no=="")
          {
            // $("#print_error_msg").show();
            alert("enter your Phone number");
            return false;
          }
          else if(mobile_no.length!=10)
          {
            // $("#print_error_msg").show();
           alert("Enter Valid Mobile Number");
            return false;
          }
          else if($signup_Password=="")
          {
            alert("enter your password");
            return false;
          }
          else if($signup_Confirm_Password=="")
          {
            alert("enter Confirm password ");
            return false;
          }
          else if($signup_Password!=$signup_Confirm_Password)
          {
          alert("The confirm password is wrong ");
            return false;
          }
          else 
          {
           // $("#print_error_msg").hide();

             // window.location ="#loginform_container";
           }
         })