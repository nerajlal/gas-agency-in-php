
  $("#gasbookingsubmitBtn").click(function(){
   // --Select--
   $no_of_cylinder=$("#no_of_cylinder").val();
  $transaction_number=$("#transaction_number").val();
  if($no_of_cylinder=="--Select--")
  {
  	alert('Select the number of cylinder ');
    return false;
  }
  if(document.getElementById('exampleRadios1').checked==true)
  {
  if($transaction_number=="")
  {
    alert('Enter Transaction Number');
    return false;

  }
}
 }) 

