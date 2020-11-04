<?php

	$id = "110";
	$secret = "!Admin1";

	session_start();
	if (isset($_POST['id'])) {
		# code...
		if ($_POST['id']==$id  && $_POST['secret']==$secret) {
		# code...
		$_SESSION['id']=$id;
		echo "<script>location.href='admin/dashboard.html'</script>";
	} else {
		echo "<script>alert('Id or Secret incorrect!')</script>";
		echo "<script>location.href='index.php'</script>";
	}
	}

	



?>