 $('#changephnsubmitbtn').click(function(){
     let oldphnno=$('#oldphnno').val();
   let newnum=$('#newnum').val();
   let password=$('#password').val();
    if(password=="")
   {
 alert('Pls Enter your Password');
    return false;
   }
   if(oldphnno=="")
   {
 alert('Pls Enter New Number');
    return false;
   }
   else if(oldphnno.length!=10 )
   {
    alert('Enter valid mobile number ');
    return false;
   }
   if(newnum=="")
   {
   	 alert('Pls Enter Confirm Number ');
    return false;
   }
   if(oldphnno !=newnum)
   {
    alert('Confirm Number Is Wrong');
    return false;
  }

  })
 