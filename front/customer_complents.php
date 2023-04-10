 <?php 
include 'top.php';
// error_reporting(0);
?>
 <style>
.main_form     
{
    padding: 30px 20px;
    box-shadow: #00000040 0px 0px 19px 0px;
    margin-bottom: 45px;
}

 </style>

    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row" >
                <div class="col-md-12">

                    <form class="main_form" method="POST"  enctype="multipart/form-data">
                        <div class="row" style="margin: 10px;">
                            <h1 class="modal-title"  style="color: blue">Complants</h1>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                     <label for="recipient-name" class="col-form-label">Subject</label>
                                <input class="form-control"  type="text"  id="subject" name="subject">
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <label for="recipient-name" class="col-form-label">Proof(Not mantaratory)</label>
                                <input class="form-control" id="file" type="file" name="file">
                            </div>
                          
                            <div class="col-md-12">
                                <textarea class="textarea"  name="complaint" id="complaint" placeholder="Enter your Complaints or Feedbacks"></textarea>
                            </div>
                          
                             <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1" style="margin-left: 89%;">
                  <a href="">    <button   id="complaintbtn" name="complaintbtn" type="submit" class="btn btn-primary" data-toggle="modal" data-target="" data-whatever="@mdo">Submit</button></a>
               </div>
                        </div>
                
                    </form>
                    <?php 
                    $forin=$_SESSION['customer_id'];
                     if(isset($_POST['complaintbtn']))
                     {
                  $subject=$_POST['subject'];

                  

                  $pname=$_FILES['file']['name'];
$tname=$_FILES['file']['tmp_name'];
$photo_name="images/".$pname;
move_uploaded_file($tname,$photo_name);

                  $complaint=$_POST['complaint'];
                  if($pname=="")
                  {
                    $insert="INSERT INTO customer_complaint values('','$forin','$subject','none','$complaint','')";
// print_r($insert);
                  $run=mysqli_query($connect,$insert);
                  if($run)
                  {
                    // echo "<script>alert('your complaint is successfuly send')</script>";
                    echo "<script type='text/javascript'>complaint_success_alert();</script>";
                  }
                }
                  else
                  {
            $insert="INSERT INTO customer_complaint values('','$forin','$subject','$photo_name','$complaint','')";
                  // print_r($insert);
            // print_r($insert);
                  $run=mysqli_query($connect,$insert);
                  if($run)
                  {
                    // complaint_success_alert()
                     echo "<script type='text/javascript'>complaint_success_alert();</script>";
                    // echo "<script>alert('your complaint is successfuly send')</script>";
                    //    echo "<script>window.location.href='index.php'</script>";

                  }
                  }
                     }


                     ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <?php

include 'footer.php';
?>