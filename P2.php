<!DOCTYPE html>
<html>
<head>
	<title> Program 2</title>
<style>

</style>
</head>
<body>
<form method="post">
<table border="2">
<tr>
<th colspan="2" bgcolor="darkblue" style="color:white;">Set Your Flight Preference</th>
</tr>
<tr>
	<td>Name</td>
	<td><input type="text" required name="name1"></td>
</tr>
<tr>
	<td>Seat Selection</td>
	<td><input type="radio" name="seat" value="Aisle">Aisle
	    <input type="radio" name="seat" value="Window">Window
	    <input type="radio" name="seat" value="Center">Center</td>
</tr>
<tr>
	<td>Meal Selection</td>
	<td><input type="radio" name="meal" value="Vegetarian">Vegetarian
	    <input type="radio" name="meal" value="Non-Vegetarian">Non-Vegetarian
	    <input type="radio" name="meal" value="Child">Child</td>
</tr>
<tr>
	<td colspan="2"><center><input type="submit" name="submit" value="Submit"></center></td>
</tr>
</table>
</form>

<?php
$name;
$seat;
$meal;
if(isset($_POST['submit']))
{
	$name=$_POST['name1'];
	if(isset($_POST['seat']))
		$seat=$_POST['seat'];
	else
		echo '<script>alert("Please enter gender")</script>';
	if(isset($_POST['meal']))
		$meal=$_POST['meal'];
	else
		echo '<script>alert("Please select meal type")</script>';
	
	
	setcookie("flight1",$name);
	setcookie("flight2",$seat);
	setcookie("flight3",$meal);
	
	if(isset($_COOKIE["flight1"]))
	{
		echo"Cookie has been set";
		echo"<br>-------------------";
		echo"<br> <form method='post'>Press<input type='submit' name='go' value='Go'>to see Cookie</form>";
	


	}
}
?>
<?php
	if(isset($_POST['go']))
	{	echo"<br>----------JSD Flights------------";
		echo"<br> Thank you for choosing JSD Flight";
		echo"<br>Your details: ";
		echo"<br>Name:".$_COOKIE["flight1"];
		echo"<br>Seat:".$_COOKIE["flight2"];
		echo"<br>Meal:".$_COOKIE["flight3"];
	
	
	}
	
	

?>		
	


</body>
</html>