<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PLMUN Alumni Portal: Signup</title>
	<!-- ICONS -->
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
	<!-- <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/> -->

	<!-- CSS -->
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<!-- <header class="header">
		<a href="./index.php"><img src="./img/plmun-logo-1.png" alt="plmun logo"></a>
	</header> -->

	<main class="login-container">
		<div class="title">
			<i class="ri-lock-unlock-line"></i>
			<div class="title-text">
				<h2>Create Account</h2>
				<h6>Fill out the Form to Signup</h6>
			</div>
		</div>
        <form action="config2.php" method="post">
            <div class="input-group">
                <label for="lastname">Last name</label>
				<div class="div"><input type="text" id="lastname" name="lastname" placeholder="Enter last name" required></div>
            </div>

            <div class="input-group">
                <label for="firstname">First name</label>
				<div class="div"><input type="text" id="firstname" name="firstname" placeholder="Enter first name" required></div>
            </div>

            <div class="input-group">
                <label for="middlename">Middle name</label>
				<div class="div"><input type="text" id="middlename" name="middlename" placeholder="Enter middle name" required></div>
            </div>

            <div class="input-group">
                <label for="batch">Batch year</label>
				<div class="div"><input type="text" id="batch" name="batchyear" placeholder="Enter batch year" required></div>
            </div>

            <div class="input-group">
                <label for="dept">Department</label>
				<div class="div"><input type="text" id="dept" name="department" placeholder="Enter department" required></div>
            </div>

            <div class="input-group">
                <label for="course">Course</label>
				<div class="div"><input type="text" id="course" name="course" placeholder="Enter course" required></div>
            </div>

            <div class="input-group">
                <label for="contact">Contact number</label>
				<div class="div"><input type="text" id="contact" name="contactno" placeholder="Enter contact number" required></div>
            </div>
 

			<div class="btn-div">
            	<button type="submit" class="login-btn">Signup</button>
			</div>
        </form>

		<div class="ps">
			<p>Already have an account? <a href="./index.php">Login now</a></p>
		</div>
	</main>
</body>
</html>