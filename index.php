<?php
include ('connection.php');
  echo session_id();
?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Welcome to cMis</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div class="container">
	<div class="col-md-4">
		
	</div>
  <div class="alert" role="alert" style="background-color: black;">
      <h1 class="title text-center" style="color: #fff;">Welcome to Afri-Net MIS</h1>
    </div>
	<form class="col-md-4 mx-auto d-block" method="POST" action="login.php" style="background-color: #fff;padding: 15px;border-bottom-left-radius: 10px;border-top-left-radius: 10px;border-bottom-right-radius: 10px;border-top-right-radius: 10px;">
  		<div class="form-group">
    		<label for="exampleInputEmail1">Your ID</label>
    		<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="00" name="id" name="id" required>
    		<small id="emailHelp" class="form-text text-muted">Your ID is unique and secret. Keep it to yourself.</small>
  		</div>
  			<div class="form-group">
    			<label for="exampleInputPassword1">Secret</label>
    			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="*******" name="secret" name="secret" required>
          <small id="emailHelp" class="form-text text-muted">Your Secret key is confidential. Keep it to yourself.</small>
  		</div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1" >
    		<label class="form-check-label" for="exampleCheck1">Remember me</label>
  		</div>
  		<button type="submit" class="btn btn-primary" name="submit">Enter</button>
</form>
</div>

</body>
</html>