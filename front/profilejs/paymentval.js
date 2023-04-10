
$("#kycsubmitBtn").click(function(){
  $rationcardstatus=$("#rationcardstatus").val();
  $transaction_no=$("#transaction_no").val();  
  $onlinepay = $('input[name=paymentmethord]:checked',
                '#myForm').val();
  if($rationcardstatus!="Antyodaya Anna Yojana")
  {
   if(($transaction_no=="") && ($onlinepay=="option1"))
   {
     alert("Enter Bank Transaction Number");
     return false;
   }
 }
})
 