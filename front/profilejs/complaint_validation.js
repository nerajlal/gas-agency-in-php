                 jQuery(document).ready(function($){
                          $("#complaintbtn").click(function(){
let subject=$("#subject").val();
let file=$("#file").val();
let complaint=$("#complaint").val();  
if(subject=="")
{
  alert("Enter the subject");
return false;

} 
if(complaint=="")   
{
  alert("Enter your complaint");
 return false; 
}      
})  
})          