 jQuery(document).ready(function($){


  $("#submitBtn").click(function(e){
   // e.preventDefault();
    let staff_name=$("#name").val();
    // let staff_position=$("#position").val();
    let Photo=$("#Photos").val();
    // let staff_description=$("#description").val();
    // alert("hai");
    if(staff_name=="")
    {
    $("#stafferror").text("Enter the staff name");
    return false;
    }
   //  else if(staff_position=="")
   //    {
   // $("#stafferror").text("Enter the staff position");
   //   return false;
   //  }
    else if(Photo=="")
    
       {
    $("#stafferror").text("Enter the staff photo");
     return false;
    }
    // else if(staff_description=="")
    //    {
    // $("#stafferror").text("Enter the staff_description");
    //  return false;
    // }
    else 
    {
      $("#stafferror").text("");
       return true;
    }
  })
  // jQuery code is in here

});