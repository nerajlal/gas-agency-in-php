
  jQuery(document).ready(function($){
 //$rationcardstatus=$( "#rationcardstatus").val();
 // $rationcardstatus=$( "#rationcardstatus option:selected" ).text();
 //
 $( "#rationcardstatus").change(function(){
  if($("#rationcardstatus").val()=="Antyodaya Anna Yojana")
  {
   $("#paymentcontainer").hide(); 
 }
 else
 {
  $("#paymentcontainer").show();
}
})

})

  jQuery(document).ready(function($){
 //$rationcardstatus=$( "#rationcardstatus").val();
 // $rationcardstatus=$( "#rationcardstatus option:selected" ).text();
 //
 $( "#purpose").change(function(){
  if($("#purpose").val()=="Business")
  {
   $("#businessprice").show(); 
   document.getElementById('businessprice').style.display='inline';
   // display: 
   $("#homeprice").hide();
 }
 else if($("#purpose").val()=="Home")
  {
   $("#homeprice").show(); 
      $("#businessprice").hide();
 }
 else
 {
  $("#homeprice").show();
}
})

})

  