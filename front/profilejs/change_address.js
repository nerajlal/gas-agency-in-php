  jQuery(document).ready(function($){
$("#homesemBtn").click(function(){
$house_name=$("#house_name").val();
$house_no=$("#house_no").val();
$street_name=$("#street_name").val();
$city=$("#city").val();
$post_office=$("#post_office").val();
$pincode=$("#pincode").val();
$district=$("#district").val();
$proof_cat=$("#proof_cat").val();
$upload_proof=$("#upload_proof").val();
if($house_name=="")
{
  alert("Enter your house Name");
  return false;
}
else if($house_no=="")
{
  alert("Enter your house_no");
  return false;
}
else if($street_name=="")
{
  alert("Enter your street_name");
  return false;
}
else if($city=="")
{
  alert("Enter your city");
  return false;
  return false;
}
else if($post_office=="")
{
  alert("Enter your post_office");
  return false;
}
else if($pincode=="")
{
  alert("Enter your pincode");
  return false;
}
else if($district=="--Select--")
{
  alert("Enter your district");
  return false;
}
else if($proof_cat=="")
{
  alert("Enter your proof_cat");
  return false;
}
else if($upload_proof=="")
{
  alert("Upload your choosen proof");
  return false;
}
else
{

}
})
$("#BussinesssubmBtn").click(function(){

$shop_name=$("#shop_name").val();
$shope_place=$("#shope_place").val();
$shop_city=$("#shop_city").val();
$shop_post_office=$("#shop_post_office").val();
$shope_pincode=$("#shope_pincode").val();
$shope_district=$("#shope_district").val();
$shope_proof_category=$("#shope_proof_category").val();
$shope_upload_proof=$("#shope_upload_proof").val();
 if($shop_name=="") 
 {
  alert("Enter your shop_name");
  return false;
 }
 else if($shope_place=="") 
 {
  alert("Enter your shope_place");
  return false;
 }
 else if($shop_city=="") 
 {
  alert("Enter your shop_city");
  return false;
 }
 else if($shop_post_office=="") 
 {
  alert("Enter your post_office");
  return false;
 }
 else if($shope_pincode=="") 
 {
  alert("Enter pincode");
  return false;
 }
 else if($shope_district=="--Select--") 
 {
  alert("Enter shop district");
  return false;
 }
 else if($shope_proof_category=="") 
 {
  alert("Choose a proof ");
  return false;
 }
 else if($shope_upload_proof=="") 
 {
  alert("Upload your proof");
  return false;
 }
 else
 {

 }
})
})
