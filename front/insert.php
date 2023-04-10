<?php 
$connect=mysqli_connect("localhost","root","","college");
if($connect=="")
{
	echo "connection is failed";
}


 ?>
 <form action="">
 	Registor number
 	<input type="text" name="regno">
Name
 <input type="text" name="name">
 Address
 <input type="text" name="address">
 Date Of Birth
 <input type="text" name="dob">
 Phone Number
 <input type="text" name="phoneno">
 Gender
 <input type="text" name="gender">male <input type="text" name="gender">female
 Guardian
 <input type="text" name="guardian">
 District
 <select name="district">
        <option selected>--Select--</option>
        <option >Thiruvananthapuram</option>
        <option >Kollam</option>
        <option >Alappuzha</option>
        <option > Pathanamthitta</option>
        <option >Kottayam</option>
        <option >Idukki</option>
        <option >Ernakulam</option>
        <option >Thrissur</option>
        <option >Palakkad</option>
        <option >Malappuram</option>
        <option >Kozhikode</option>
        <option >Wayanad</option>
        <option >Kannur</option>
        <option >Kasaragod</option>
      </select>       
 mail Id
 <input type="text" name="mailid">
 </form>