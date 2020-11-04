<?php

$name = $_POST['name'];
$secret = $_POST['secret'];
$email = $_POST['email'];
$identity = $_POST['identity'];
$phone = $_POST['phone'];
$description = $_POST['description'];
$benname = $_POST['benname'];
$benphone = $_POST['benphone'];
$benrel = $_POST['benrel'];

if (!empty($name) || !empty($secret) || !empty($email) || !empty($identity) || !empty($phone) || !empty($description) || !empty($benname) || !empty($benphone) || !empty($benrel)) {
	# code...
	$host = "localhost";
	$dbUsername ="root";
	$dbPass = "";
	$dbname = "cmis";

	//create connection

	$conn = new mysqli($host, $dbUsername, $dbPass, $dbname);

	if (mysqli_connect_error()) {
		# code...
		die('Connect error('. mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$SELECT = "SELECT email from members where email = ? Limit 1";
		$INSERT = "INSERT into members (name, secret, email, identity, phone, description, benname, benphone, benrel) values (?,?,?,?,?,?,?,?,?)";
		//prepare statement
		$statement = $conn -> prepare($SELECT);
		$statement -> bind_param("s", $email);
		$statement -> execute();
		$statement -> bind_result($email);
		$statement -> store_result();
		$rnum = $statement -> num_rows;

		if ($rnum == 0) {
			# code...

			$statement-> close();
			$statement = $conn->prepare($INSERT);
			$statement-> bind_param("ssssssiii", $name, $secret, $email, $identity, $phone, $description, $benname, $benphone, $benrel);
			$statement-> execute();
			echo "<script>alert('New member added successfully! Click OK to continue.')</script>";
			echo "<script>location.href='members.php'</script>";
		} else {
			echo "<script>alert('Email used! Click OK to try again.')</script>";
			echo "<script>location.href='newmember.html'</script>";
		}
		$statement -> close();
		$conn -> close();
	}


} else {
	echo "<script>alert('All fields are required! Click OK to try again.')</script>";
	echo "<script>location.href='newmember.html'</script>";
	die();
}



?>