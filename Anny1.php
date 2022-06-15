<?php
$isPost=false;
$First_Name="";
$Last_Name="";
$E_mail="";
$Tel_No="";
$password="";
$gender="";
$Skill="";
$dob="";
if(isset($_POST["btnRes"]))
{
	$isPost=true;
	if($_POST["1stname"]!="")
		$First_Name=$_POST["1stname"];
	
	
	if($_POST["lstname"]!="")
		$Last_Name=$_POST["lstname"];
	
	if($_POST["mail"]!="")
		$E_mail=$_POST["mail"];
	
	if($_POST["telno"]!="")
		$Tel_No=$_POST["telno"];
	
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	
	
	if($_POST["gender"]!="")
		$gender=$_POST["gender"];
		
	if($_POST["dob"]!="")
		$dob=$_POST["dob"];
	
	if($_POST[skills]!="")
		$Skill=$_POST[skill];
	
}
?>
<form action="#" method="post">
FirstName:<input type="text" id="1stname" name="1stname">
<?php
if($isPost==true && $First_Name=="")
 echo "<span style='color:red;'>Required</span><br><br>";
?>




LastName:<input type="text" id="lstname" name="lstname">
<?php
if($isPost==true && $Last_Name=="")
 echo "<span style='color:red;'>Required</span><br><br>";

?>
<br><br>



Password :<input type="password" id="pass" name="pass"><br><br>

<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>

Telephone:<input type="text" id="dob" name="telno"><br><br>
<?php
if($isPost==true && $Tel_No=="")
 echo "<span style='color:red;'>Required</span>";

?>
<br><br>

Email   :<input type="text" id="mail" name="mail">

<?php
if($isPost==true && $E_mail=="")
 echo "<span style='color:red;'>Required</span>";

?>

<br><br>



DOB: <input type="text" id="dob" name="dob"><br><br>
<?php
if($isPost==true && $dob=="")
 echo "<span style='color:red;'>Required</span>";

?>
<br><br>


Gender:<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others<br><br>
<?php
if($isPost==true && $gender=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>





Skills:<input type="checkbox" name="skills[]" value="C">C
<input type="checkbox" name="skills[]" value="C++">C++
<input type="checkbox" name="skills[]" value="C#">C#
<input type="checkbox" name="skills[]" value="Python">Python
<?php
if($isPost==true && $skills=="")
 echo "<span style='color:red;'>Required</span>";

?>
<br><br>


Address:<textarea name="address" rowspan="3" colspan="30"></textarea>
<br><br>


<input type="submit" value="Register" name="btnRes">

</form>
