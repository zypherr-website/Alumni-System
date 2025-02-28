<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCJ Dean</title>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>

	<link rel="stylesheet" href="../../../css/dean_dashboard.css">
</head>
<body>
	<header><h1>CCJ Dean Dashboard</h1></header>
	<main>
		<div class="toggle-btn" onclick="toggleSidebar()">☰</div>
		<div class="sidebar">
			<div class="burger-menu" onclick="toggleSidebar()">✖</div>
			<div class="profile">
				<img src="../../../img/user.avif" alt="logo">
	
				<div>
					<h2>CCJ DEAN</h2>
					<p>ccj_dean@gmai.com</p>
				</div>
			</div>
			
			<div class="menu-item">
				<a href="./index.php"><i class="ri-home-office-line"></i> Dashboard</a>
			</div>
			<div class="dropdown">
				<button class="dropdown-btn" onclick="toggleDropdown()"><i class="ri-time-line"></i> Courses ▼</button>
				<div class="dropdown-content" id="dropdownMenu">
					<a href="#">BSCS</a>
					<a href="#">IT</a>
					<a href="#">ACT</a>
				</div>
			</div>
	
			<div class="menu-item">
				<a href="./index.php"><i class="ri-file-text-line"></i> Job Posts</a>
			</div>
	
			<div class="menu-item">
				<a href="../../../index.php"><i class="ri-corner-down-right-line"></i> Logout</a>
			</div>
		</div>
		
		<div class="main-content">
			<h1>CCJ Dean Dashboard</h1>
		</div>
	</main>
		
    <script>
        function toggleDropdown() {
            var menu = document.getElementById("dropdownMenu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }

        function toggleSidebar() {
            const sidebar = document.querySelector(".sidebar");
            sidebar.classList.toggle("active");
        }
    </script>
</body>
</html>
