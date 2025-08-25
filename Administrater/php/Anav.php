<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Responsive Navbar</title>
	<link rel="stylesheet" href="../css/Anav.css" />
</head>
<body>
	<div class="app">
		<div class="menu-toggle">
			<div class="hamburger">
				<span></span>
			</div>
		</div>

		<aside class="sidebar">
			<h3>Menu</h3>
			
			<nav class="menu">
                <a href="Amain.php" class="menu-item is-active">Home</a>
                <a href="Aaddmission_request.php" class="menu-item">Addmission_request</a>
                <a href="Astudent.php" class="menu-item">Add Student</a>
                <a href="Astudentedit.php" class="menu-item">Update Student</a>
                <a href="Aresult.php" class="menu-item">Result</a>
                <a href="Adeleteresult.php" class="menu-item">Delete Result</a>
                <a href="Anotice.php" class="menu-item">Notice</a>
				<a href="Aabout.php" class="menu-item">About</a>
                <a href="Acontact_request.php" class="menu-item">Contact_request</a>
                <a href="Asignup.php" class="menu-item">Add admins</a>			
                <a href="Adeleteadmin.php" class="menu-item">Delete admins</a>			
                <a href="Alogout.php" class="menu-item">Logout</a>
			</nav>

	</div>

	<script>
		const menu_toggle = document.querySelector('.menu-toggle');
		const sidebar = document.querySelector('.sidebar');

		menu_toggle.addEventListener('click', () => {
			menu_toggle.classList.toggle('is-active');
			sidebar.classList.toggle('is-active');
		});
	</script>
</body>
</html>