<?php

include('top.php'); 
include 'connect.php';
?>
<style>
#addemployform{
  margin: 30px;
  margin-top: 30px;
  color: white;
  margin-top: 151px;
  background: #68686d;
  padding: 49px 33px;
} 
#stafferror{
  background: white;
  padding: 0px 22px;
  margin-top: 0px;
  color: red;
}
</style>
<?php 
if($_GET['key'])
{
  $key=$_GET['key'];
  $select_query="SELECT * FROM staff_details where staff_id='$key'";
  $run=mysqli_query($connect,$select_query);  
  $fetch=mysqli_fetch_assoc($run);
  // $delete="DELETE  FROM staff_details WHERE staff_id='$key'";
  // $run=mysqli_query($connect,$delete);
}

?>

<div id="addemployform">
  <!-- <div id="stafferror"></div> -->
  <form method="POST" enctype="multipart/form-data">
    <div class="form-row">
     
      
     <div class="form-group col-md-6">
      <label for="inputPassword4">Choose Signature</label>
      <input type="file" class="form-control" id="Photos" name="Photo" <?php  echo "value=". $fetch['photo']  ?>>
    </div>
    
    <div class="col-4" style="margin-left: 90%;">
      <button class="btn btn-primary"  type="submit" id="submitBtn"name="changesigBtn" style="width:89px">Update </button>
    </div>
  </div>
</form>

<?php 

if(isset($_POST['changesigBtn']))
{

  $name=$_FILES['Photo']['name'];
  $temp=$_FILES['Photo']['tmp_name'];
  $folder_name="images/".$name;
// echo $folder_name
// if($folder_name=='images/')
// echo "<script>alert('choose signature');</script>";
  move_uploaded_file($temp, $folder_name);
  $update_query="UPDATE staff_details SET signature='$folder_name'where staff_id='$key'";
  $run=mysqli_query($connect,$update_query);
                // print_r($update_query);
  if($run>0)
    echo "<script>alert('Signature is updated');</script>";
  echo "<script type='text/javascript'>location.href = 'view_staffs.php';</script>";
// header('location:view_staffs.php');
}

?>
</div>

<?php

include('footer.php');
?>
