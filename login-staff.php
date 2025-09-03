<?php

session_start();

include "connection.php";
include 'navbar-index.php';


if (isset($_POST['staff_id'])) {
	$user = mysqli_real_escape_string($con, $_POST['staff_id']);
	$pass = mysqli_real_escape_string($con, $_POST['password']);

	$query = mysqli_query($con, "SELECT * FROM staff WHERE staff_id='$user' AND password='$pass' ");
	$row = mysqli_fetch_assoc($query);

	//message if failed
	if (mysqli_num_rows($query) == 0 || $row['password'] != $pass) {
		echo "<script> alert ('Wrong username or password');</script>";
	} else {
		if ($user == 'admin' || $user == 'ADMIN') {
			$_SESSION["staff_id"] = $row["staff_id"];
			$_SESSION["role"] = $row['role'];

			echo "<script>window.location = 'dashboard-admin.php'</script>";
		} else {
			$_SESSION["staff_id"] = $row["staff_id"];
			$_SESSION["role"] = $row['role'];

			echo "<script>window.location = 'dashboard-staff.php'</script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="CSS/LOGIN.css">
</head>

<body>
	<div class="flex-container">
		<div>
			<h2>STAFF LOG IN</h2>
		</div>

		<div class="form-container-staff">
			<form method="post">
				<p>Staff ID</p>
				<input type="text" name="staff_id" placeholder="Enter your staff ID" required autofocus><br><br>

				<p>Password</p>
				<input type="password" name="password" placeholder="********" required>

				<br><br><br>
				<button name="hantar" type="submit" class="blueButton">LOG IN </button>

				<p>Don't have an account? Contact admin</p>
			</form>
		</div>
	</div>
</body>

</html>