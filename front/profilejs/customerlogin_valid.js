  //customer loginform validation starting
        $("#login_Btn").click(function(){
          let mobile_no=$("#mobile_no").val();
          let password=$("#login_password").val();
          if(mobile_no=="")
          {
            alert("Enter Mobile Number");
            return false;
          }
          else if(mobile_no.length!=10)
          {
            alert("Enter Valid Mobile Number");
            return false;

          }
          else if(password=="")
          {
           alert("Enter Your Password");
           return false;
         }
         else
         {
           // $("#print_error_msg").hide();
             // window.location ="i.php";

            //$("#print_error_msg").text("");
          }
        })