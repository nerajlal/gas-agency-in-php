 
         //sign in and login radio btn and  display login form and signup form
         $("#customRadioInline1").click(function(){
          $("#signinform_container").hide();
          $("#loginform_container").show();
          $("#forgotpassword").show();
        })
         $("#customRadioInline2").click(function(){
          $("#loginform_container").hide();
          $("#forgotpassword").hide();

          $("#signinform_container").show();
        })
         $("#button").click(function(){

          $("#signinform_container").hide();
          $("#forgotpassword").show();
        })

         $("#showCustomerPopUpBtn").click(function(){
          $("#customRadioInline1").trigger("click");
          $('#showCustomerPopUp').modal({show: true})
        })
      
       $("#showCustomerPopUpBtn").click(function(){
        $("#print_error_msg").hide();
      })
    