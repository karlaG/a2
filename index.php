<?php require('astro.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>What's my sign?</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='generator.css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
</head>

<body>
	<header>Tell me my sign...</header>

	<form method="GET" action="index.php">

		<p>*I am</p>
		<input type="radio" name="gender" value="female" CHECKED required> Female <br>
		<input type="radio" name="gender" value="male" required> Male <br>

		<p>and my birthdate is</p>

		<label for="month">*Month</label>
		<select name="month" id="month" required>
			<option value="">...</option>
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

		<label for="day">*Day</label>
			<input type="number" id="day" name="day" min="1" max="31" required>
		<br><br><br>
		<input type="submit" value="Please and thank you :)">
		<br><br>
		<p>* denotes a required field.</p>

	</form>

	<?php if ($form->isSubmitted()): ?>
		<div class="wrapper">
			<?php if ($gender == 'female'): ?>
				<img src="female-gender-sign.jpg" alt="female gender sign">
			<?php else: ?>
				<img src="male-gender-sign.jpg" alt="male gender sign">
			<?php endif; ?>

			<div class="sign"> <?=$sign?> </div>
			<br><br>
			<div class="summary"> <?=$summary?> </div>
		</div>
	<?php endif; ?>

</body>
</html>
