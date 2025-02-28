<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - <?php echo $department; ?> Dean</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file -->
</head>
<body>
    <header>
        <h1>Welcome, <?php echo ucfirst($username); ?>!</h1>
        <h3>Department: <?php echo strtoupper($department); ?></h3>
        <a href="logout.php">Logout</a>
    </header>

    <main>
        <?php if ($department == "CITCS") { ?>
            <h2>Welcome to the College of Information Technology and Computer Studies</h2>
            <p>Here you can manage CITCS-related information.</p>
        <?php } elseif ($department == "CBA") { ?>
            <h2>Welcome to the College of Business Administration</h2>
            <p>Here you can manage CBA-related information.</p>
        <?php } elseif ($department == "CAS") { ?>
            <h2>Welcome to the College of Arts and Sciences</h2>
            <p>Here you can manage CAS-related information.</p>
        <?php } elseif ($department == "CCJ") { ?>
            <h2>Welcome to the College of Criminal Justice</h2>
            <p>Here you can manage CCJ-related information.</p>
        <?php } elseif ($department == "CTE") { ?>
            <h2>Welcome to the College of Teacher Education</h2>
            <p>Here you can manage CTE-related information.</p>
        <?php } else { ?>
            <h2>Welcome, <?php echo $username; ?>!</h2>
            <p>Your department is not recognized.</p>
        <?php } ?>

		<?php
			session_start();
			session_destroy();
			header("Location: index.php"); // Redirect to login page
			exit();
		?>
    </main>
</body>
</html>
