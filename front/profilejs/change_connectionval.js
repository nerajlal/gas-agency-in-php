	
    
    $("#changeconnectionBtn").click(function(){

$name=$("#name").val();
$dob=$("#dob").val();
$gender=$("#gender").val(); 
$relationship =$("#relationship").val();
$consumer_no=$("#consumer_no").val();
$deth_certificate=$("#deth_certificate").val();
$upload_photo=$("#upload_photo").val();
$upload_adhar=$("#upload_adhar").val();
$upload_rationcard=$("#upload_rationcard").val();
$transaction_no=$("#transaction_no").val();
if($name=="")
{
alert("Enter your name");
return false;
}
else if($dob=="")
{
alert("Enter your date of birth");
return false;
}
else if($gender=="--Select--")
{
 alert("Enter gender");
return false; 
}
else if($relationship=="--Select--")
{
 alert("Enter relationship");
return false; 
}
else if($consumer_no=="")
{
 alert("Enter your consumer_no");
return false; 
}
else if($deth_certificate=="")
{
 alert("Upload deth certificate");
return false; 
}
else if($upload_photo=="")
{
   alert("Upload your photo");
return false; 
}
else if($upload_adhar=="")
{
  alert("Upload your adhar");
return false;  
}
else if($upload_rationcard=="")
{
  alert("Upload your rationcard");
return false;  
}
else{

}
 if(document.getElementById('exampleRadios1').checked==true)
  {
  if($transaction_no=="")
  {
    alert('Enter Transaction Number');
    return false;

  }
}
  }) 