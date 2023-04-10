$("#kycsubmitBtn").click(function(){
  $name=$("#name").val();
  $dob=$("#dob").val();
  $gender=$("#gender").val();
  let mobilno=$("#mobilno").val();
  $landno=$("#landno").val();
  $emailid=$("#emailid").val();
  $stove_status=$("#stove_status").val();
  $purpose=$("#purpose").val();
  // $transaction_no=$("#transaction_no").val();  

  // $onlinepay=$("#exampleRadios1").val();

  if($name=="")
  {
    alert("enter name");
    return false;
  }
  else if($dob=="")
  {
    alert("enter dob");
    return false;
  }
  else if($gender=="--Select--")
  {
    alert("enter gender");
    return false;
  }
  else if(mobilno=="")
  {
    alert("enter mobilno");
    return false;
  }
  else if(mobilno.length!=10)
  {
    alert("Enter Valid Mobile Number");

    return false;
  }
  else if($stove_status=="--Select--")
  {
    alert("enter stove_status");
    return false;
  }
  else if($purpose=="--Select--")
  {
    alert("enter purpose");
    return false;
  }
  else
  {

  }
// business start
if($purpose=="Business")
{

  $shop_name=$("#shop_name").val();
  $shope_place=$("#shope_place").val();
  $shop_city=$("#shop_city").val();
  $shop_post_office=$("#shop_post_office").val();
  $shope_pincode=$("#shope_pincode").val();
  $shope_district=$("#shope_district").val();
  $shope_proof_category=$("#shope_proof_category").val();
  $shope_upload_proof=$("#shope_upload_proof").val();
  $shope_upload_photo=$("#shope_upload_photo").val();
  $shpoe_upload_adhar=$("#shpoe_upload_adhar").val();
  $shope_cylinder_count=$("#shope_cylinder_count").val();
// $transaction_no=$("#transaction_no").val();
// $onlinepay=$("#exampleRadios1").val();
$transaction_no=$("#transaction_no").val();  
  $onlinepay = $('input[name=paymentmethord]:checked',
                '#myForm').val();
if($shop_name=="")
{
  alert("enter shop_name");
  return false;
}
else if($shope_place=="")
{
  alert("enter shope_place");
  return false;
}
else if($shop_city=="")
{
  alert("enter shop_city");
  return false;
}
else if($shop_post_office=="")
{
  alert("enter shop_post_office");
  return false;
}
else if($shope_pincode=="")
{
  alert("enter shope_pincode");
  return false;
}
else if($shope_district=="--Select--")
{
  alert("enter shope_district");
  return false;
}else if($shope_proof_category=="")
{
  alert("enter shope_proof_category");
  return false;
}else if($shope_upload_proof=="")
{
  alert("upload proof");
  return false;
}else if($shope_upload_photo=="")
{
  alert("upload your photo");
  return false;
}else if($shpoe_upload_adhar=="")
{
  alert("upload adhar card");
  return false;
}else if($shope_cylinder_count=="--Select--")
{
  alert("enter number of cylinders");
  return false;
}
else if(($transaction_no=="") && ($onlinepay=="option1"))
   {
     alert("Enter Bank Transaction Number");
     return false;
   }

else
{

}
}
// business end
if($purpose=="Home")
{

  // $rationcardstatus=$("#rationcardstatus").val();
  $house_name=$("#house_name").val();
  $house_no=$("#house_no").val();
  $street_name=$("#street_name").val();
  $city=$("#city").val();
  $post_office=$("#post_office").val();
  $pincode=$("#pincode").val();
  $district=$("#district").val();
  $upload_photo=$("#upload_photo").val();
  $upload_adhar=$("#upload_adhar").val();
  $upload_rationcard=$("#upload_rationcard").val();

  $rationcardstatus=$("#rationcardstatus").val();
  $transaction_no=$("#transaction_no").val();  
  $onlinepay= $('input[name=paymentmethord]:checked',
                '#myForm').val();

  if($rationcardstatus=="--Select--")
  {
    alert("enter ration card category");
    return false; 
  }
  else if($house_name=="")
  {
    alert("enter house_name");
    return false;
  }
  else if($house_no=="")
  {
    alert("enter house_no");
    return false;
  }
  else if($street_name=="")
  {
    alert("enter street_name");
    return false;
  }
  else if($city=="")
  {
    alert("enter  your city");
    return false;
  }
  else if($post_office=="")
  {
    alert("enter post_office");
    return false;
  }

  else if($pincode=="")
  {
    alert("enter pincode");
    return false;
  }

  else if($district=="--Select--")
  {
    alert("enter district");
    return false;
  }

  else if($upload_photo=="")
  {
    alert("enter upload_photo");
    return false;
  }

  else if($upload_adhar=="")
  {
    alert("enter upload_adhar");
    return false;
  }
  else if($upload_rationcard=="")
  {
    alert("enter upload_rationcard");
    return false;
  }
  else if($rationcardstatus!="Antyodaya Anna Yojana")
  {
   if(($transaction_no=="") && ($onlinepay=="option1"))
   {
     alert("Enter Bank Transaction Number");
     return false;
   }
 }
  else 
  {

  }
}
})

