<?php

ob_start();
require "db.php";
session_start();


if (isset($_POST['submit'])) {
	$name                  = $_POST['name'];
	$phone                 = $_POST['phone'];
	$email                 = $_POST['email'];
	$email                 = filter_var($email, FILTER_SANITIZE_EMAIL);
	$sector                = $_POST['sector'];
	$linkedin               = $_POST['linkedin'];
	$info                   = $_POST['info'];


	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$check_mail = "SELECT email FROM mas_investor WHERE email = '$email'";

		$find_mail = $db->query($check_mail);


		if ($find_mail->num_rows) {
			echo "$email already exists in our database! Please try again with a different E-Mail id.";
		} else {
			$sql = "INSERT INTO mas_investor (name,phone,email,sector,linkedin,info) VALUES ('$name','$phone','$email','$sector','$linkedin','$info')";
			if (!mysqli_query($db, $sql)) {
				echo "Server Busy! Please try again";
			} else {
				echo "<script>alert('Thank you for registrating.');document.location.href='https://ecell-iitkgp.org/millionatstake';</script>";
			}
		}
	} else {
		echo "$email is not a valid email address.";
	}

	$email = $_SESSION['email'];
	$phone = $_SESSION['phone'];
	$name = $_SESSION['name'];
}
?>