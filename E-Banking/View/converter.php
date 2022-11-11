<?php 
include("LogHeader.php");

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Currency Converter</title>
	<style>
		fieldset{
			margin-left:25%;
			margin-right:25%;
			border-radius:10px;
			background-color: #ffccff;
			margin-top:100px;
		}
		select{
			border-radius:5px;
		}
		input{
			border-radius:5px;
			background-color: #ffccff;
		}
		select{
			background-color: #ffccff;
		}
		body{
            background-image: url('Media/4.jpg');
        }
		a{
			color:black;
		}
	</style>
	<script src="../JS/CurrecnyConvert.js"></script>
</head>
<body>
	<form  method="post"   onkeyup="Calculate()">

		<!-- Currency Conversion -->
		<fieldset>
			<center><legend><h2>Currency Conversion</h2></legend></center>

			<label for="option">Select Currency:</label>
			<select name="option" id="option" >
				<option value="USD2BDT">USD -> BDT</option>
				<option value="BDT2USD">BDT -> USD</option>
				<option value="BDT2RUPEE">BDT -> Rupee</option>
				<option value="RUPEE2BDT">Rupee -> BDT</option>
				<br><br>
			</select>
			<br><br>

			<!-- Amount -->
			<label for="amount">Enter Currency value:</label>
			<input type="value" name="amount" id="amount"  placeholder="Please enter your amount."value="" size="20">
			<b><p id="erroramount"></p></b>
			<br><br>


			<br><br>

		</fieldset>

	</form>

</body>
</html>