<?php

  require('../connection.php');

  $query = "SELECT * FROM members";

  $result = mysqli_query($conn, $query);

  $rows = mysqli_num_rows($result);

  if ($rows > 0) {
    # code...
    
  }
    

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>All members</title>

  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<div class="container">
  <div class="jumbotron">
    <h1 class="display-4">Admin!</h1>
    <p class="lead">This is your dashboard and from here, you can manage everything.</p>
    <hr class="my-4">
    <p>You can either check your info or your share details. If you think there is a problem, please report to admin. If everything is fine, take a look and then logout.</p>
  </div>


  <div class="row">
    <div class="col-md-3">
      <ul class="list-group">
        <li class="list-group-item"><a href="dashboard.html" style="text-decoration: none;color: black;">Summary</a></li>
        <li class="list-group-item active"><a href="members.php" style="text-decoration: none;color: #fff;">Members</a></li>
        <li class="list-group-item"><a href="shares.html" style="text-decoration: none;color: black;">Shares</a></li>
        <li class="list-group-item">Projects</li>
        <li class="list-group-item">Reports</li>
      </ul>
    </div>
    <div class="col-md-9">


      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>


        



        <tbody>
          
    <?php
      while ($row = mysqli_fetch_assoc($result)) {

      # code...
        ?>
        <tr>

        
                        <th scope="row" style="color:#fff;"><?php echo $row['id']; ?></th>
                        <td style="color:#fff;"><?php echo $row['name']; ?></td>
                        <td style="color:#fff;"><?php echo $row['email']; ?></td>
                        <td style="color:#fff;"><?php echo $row['phone']; ?></td>
                        </tr>
      <?php      
      }     
    ?>
    
            
        
        

          
        </tbody>
        
      </table>


      <div class="btn-deck">
        
        <a type="button" href="newmember.html" class="btn btn-primary btn-lg btn-block">Add a new member</a>
        <a type="button" href="managemember.html" class="btn btn-secondary btn-lg btn-block">Manage members</a>


      </div>

    </div>

  </div>
</div>

</body>
</html>