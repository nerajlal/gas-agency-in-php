
  function successalert()
  {
     swal({
  title: "Your request is succesively sended!",
  text: "You clicked the button!",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="status.php";
    });
    // swal("Your request is succesively sended!", "You clicked the button!", "success").then(function(){
    //  window.location.href="index.php";
    // });
  }
function successalert_inGasbooking()
{
  swal({
  title: "Your Gas Booking request is succesively sended!",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="gas_booking_history.php";
    }); 
}

  function erroralert()
  {
    swal("Your request is not sended!s", "Please submit the form again!", "error");
  }

  function change_phoneno_success()
{
  swal({
  title: "Phone number is successfuly changed",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="index.php";
    }); 
}
 function chane_phoneno_failed()
  {
    swal("Your Password is incorrect", "Please enter your correct password!", "error");
  }
 function complaint_success_alert()
{
  swal({
  title: "Your complaint is successfuly sended",
  text: "",
  icon: "success",
  button: "OK",
}).then(function(){
     window.location.href="index.php";
    }); 
}

