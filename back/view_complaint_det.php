<?php include"top.php";
$key=$_GET['id'];
// echo $key;
 $select="SELECT * FROM customer_complaint where complaint_id=$key";
 $run=mysqli_query($connect,$select);
$fetch=mysqli_fetch_assoc($run);

?>
<div class="container">
	<textarea style="margin-top: 23px;
    height: 500px;
    width: 89%;
    border-radius: 24px;
    margin-left: 45px;
    background: #8ac58a;
    border: 2px solid #327125;
    font-size: 22px;
    padding: 46px;
    color: #131212;"name="" id="" cols="30" rows="10">
    Complaint Details:
    <?php echo $fetch['complaint'] ?>
</textarea>
<?php 

if($fetch['proof']!='none'){
echo "<img style='background:red
    width: 89%;
    height: 398px;
    margin-left: 45px;'src='../front/".$fetch['proof']."' >";
    } ?>

    </div>
<?php include"footer.php";?>