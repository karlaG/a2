<?php require('astro.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>What's my sign?</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='generator.css' rel='stylesheet'>
</head>

<body>
	<h1>Tell me my sign:</h1>

	<form action="GET" method="signGenerator.php">

		<p>I am</p>
		<input type="radio" name="gender" value="female" CHECKED> Female <br>
		<input type="radio" name="gender" value="male"> Male <br>

		<p>and my birthdate is</p>
		<label for="month">Month</label>
		<select name="month">
			<option value="1">Jan</option>
			<option value="2">Feb</option>
			<option value="3">Mar</option>
			<option value="4">Apr</option>
			<option value="5">May</option>
			<option value="6">Jun</option>
			<option value="7">Jul</option>
			<option value="8">Aug</option>
			<option value="9">Sep</option>
			<option value="10">Oct</option>
			<option value="11">Nov</option>
			<option value="12">Dec</option>
		</select>

		<label for="day">Day</label>
			<input type="number" name="day" value="1" min="1" max="31">
		<br><br><br>
		<input type="submit" value="Please and thank you :)">

	</form>

</body>
</html>
