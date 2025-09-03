<?php

include "connection.php";

//accept POST value
if (isset($_POST['staff_id']))
{
	$staff_id = $_POST['staff_id'];
	$name = $_POST['name'];
	$password = $_POST['password'];
      $staff_email = $_POST['staff_email'];
      $gender = $_POST['gender'];
      $phone_number = $_POST['phone_number'];
      $date_of_birth = $_POST['date_of_birth'];
		
	//check if duplicate
	$checkdupSQL = "SELECT * FROM STAFF WHERE staff_id='$staff_id' ";
		
	$result = mysqli_query($con, $checkdupSQL);

	//message if already have an account	
	if(mysqli_num_rows($result) > 0)
	{
		echo "<script> alert('Registration failed, staff ID already exists.');
		window.location = 'signup-staff-ADMIN.php' </script>";
	}
	else
	{
		//insert into staff table
		$daftar = "INSERT INTO staff (staff_id, name, password, staff_email, gender, phone_number, date_of_birth)
            VALUES ('$staff_id', '$name', '$password', '$staff_email',  '$gender',  '$phone_number',  '$date_of_birth')";

		$hasil = mysqli_query($con, $daftar);
		
		echo "<script> alert ('Sign Up Successful!');
		window.location = 'staff-manage-ADMIN.php' </script>";
	}
}
?>