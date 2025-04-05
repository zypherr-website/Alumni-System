<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PLMUN Alumni Portal: Login</title>
	<!-- ICONS -->
	<link rel="shortcut icon" href="./img/logo.jpg" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>

	<!-- CSS -->
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<header class="header">
		<a href="./index.php"><img src="./img/plmun-logo-1.png" alt="plmun logo"></a>
	</header>

	<main class="login-container">
		<div class="title">
			<i class="ri-lock-unlock-line"></i>
			<div class="title-text">
				<h2>PLMun Alumni Portal</h2>
				<h6>Fill out the Form to Login</h6>
			</div>
		</div>
        <form action="config.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
				<div class="div"><i class="ri-user-fill"></i><input type="text" id="username" name="username" required></div>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
				<div class="div"><i class="ri-key-2-fill"></i><input type="password" id="password" name="password" required></div>
            </div>

			<div class="btn-div">
            	<button type="submit" class="login-btn">Signin</button>
			</div>
        </form>

		<div class="ps">
			<p>Don't have an account yet? <a href="./signup.php">Register here</a></p>
		</div>
	</main>
</body>
</html>