<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.box{
			width: 22%;
			background-color: #f5f5f5;
			position: absolute;
            left: 39%;
            top: 20%;
            border-radius: 10px;
		}
		fieldset{
			width: 15%;
			border-radius: 6px;
			padding-right: 10px;
		}
		p{
			color: palegreen; 
			left: 40%;
			position: absolute;
			bottom: 30%;
		}
		h1{text-align: center; color: snow; font-family: sans-serif;}
		h4{text-align: center; color: #ffffe0; letter-spacing: 1px;}
		form{padding: 30px 35px;}
		label{color: #3f2f2f}
		input[type=text], input[type=date]{
			background-color: #f5f5f5; 
			width: 160px;
			outline: none;
			border: none;
			border-bottom: 1px solid brown;
			margin-top: 10px;
		}
		input[type=text]:focus, input[type=date]:focus{
			border-color: orange;
		}
		body{background-color: grey} 
	</style>
</head>
<body>
	<h1>Age Calculator</h1>
	<h4>A simple application which helps you determine your age <br> based on your birthdate and current date.</h4>
	<div class="box">
	<form method="post" action="">
		<fieldset>
			<legend style="color: #2f4f4f;">Know your age</legend>
			  <label>Your name:</label>
			  <input type="text" name="fname" placeholder="Only first name is required!"><br><br>
			  <label>Date of birth:</label>
		      <input type="date" name="birthday"><br><br>
		      <input type="submit" name="submit" value="Display age...">
	    </fieldset>
	</form>
</div>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $fname = $_POST['fname'];
		$dob = $_POST['birthday'];
		$Age = date('Y') - date('Y', strtotime($dob));

		echo "<p>Dear $fname, your age is $Age years.</p>";
		

	}
	  ?>

</body>
</html>