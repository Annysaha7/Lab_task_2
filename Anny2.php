<?php
echo "welcome to Anny2.php<br>";
echo"My First Name is:".$_POST["1stname"]."<br>";
echo"My Last Name is:".$_POST["lstname"]."<br>";
echo"My Email:".$_POST["mail"]."<br>";
echo"My Date of birth:".$_POST["dob"]."<br>";
echo "My password is: ".$_POST["pass"]."<br>";
echo "Gender: ".$_POST["gender"]."<br>";
echo "Skills: ";
foreach($_POST["skills"] as $b)
{
	echo $b." ";
}
echo "Address: ".$_POST["address"]."<br>";
?>