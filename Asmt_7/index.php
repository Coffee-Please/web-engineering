<!-- 
//*********************************************************************************
// Priya Singh
// COMP 484 | Fall 2020
// Assignment 7 - index.html
//*********************************************************************************
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.png"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="scripts/Asmt_7.js"></script>
	<link type="text/css" rel="stylesheet" href="styles/Asmt_7.css">
	<title>COMP484</title>
</head>
<body>
	<main>
	<a onclick="sendPHP()">PHP CODE</a>
    <fieldset>
	<legend><h1>Add an Employee</h1></legend>
		<form id="theForm">
			 
				<div>
					<label for="fname">First Name</label>
                    <br>
					<input type="text" id="fname" name="fname" required>
				</div>
			  
				<div>
					<label for="lname">Last Name</label>
                    <br>
					<input type="text" id="lname" name="lname" required>
				</div>
			  
				<div>
					<label for="dept">Department</label>
                    <br>
					<select id="dept" name="dept">
					<option value="Engineering">Engineering</option>
					<option value="Nursing">Nursing</option>
					<option value="English">English</option>
					<option value="Math">Math</option>
					</select>
				</div>
			  
				<br>
			  
				<div>
					<input type="submit" id="submit" name="submit" value="Submit &rarr;">
				</div>
		</form>
		    </fieldset>
	</main>
	<div id="result" name="result"></div>
	<div id="totalEmployees" name="totalEmployees"><p></p></div>
	<div id="browser"></div>	
    <footer></footer>
</body>
</html>
