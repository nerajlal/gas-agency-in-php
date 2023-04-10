
  $("#secondcylBtn").click(function(){
    $voucher=$("#upload_voucher").val();
    $transactionno=$("#transactionno").val();
    
if($voucher=="")
    {
      alert("Upload your voucher");
      return false;
    }

  if(document.getElementById('exampleRadios1').checked==true)
  {
  if($transactionno=="")
  {
    alert('Enter Transaction Number');
    return false;

  }
}
        
  })

   



