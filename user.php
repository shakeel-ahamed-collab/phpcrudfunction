<?php
include "database.php";
if(isset($_POST['submit'])){
   

    $sql="insert into booking(seat,movie,email,contact) values('{$_POST["seat"]}','{$_POST["movie"]}','{$_POST["email"]}',
					'{$_POST["contact"]}')";
					$db->query($sql);
					header('location:display.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Seat No</label>
    <input type="text" class="form-control" name="seat"  placeholder="Enter Seat No" autocomplete="off" required >
    
  </div>
  <div class="form-group">
    <label>Movie</label>
    <input type="text" class="form-control" name="movie" placeholder="Enter Movie" required>
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter Email" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact" autocomplete="off" required>
  </div><br>
  <button type="submit" name="submit" class="btn btn-success">Book</button>
</form

    </div>
        <script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>