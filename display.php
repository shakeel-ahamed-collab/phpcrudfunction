<?php
include "database.php";
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
   <div class="container">
  
       <button class="btn btn-primary my-5"><a href="user.php">Add User</a></button>
       <table class="table table-striped table-light">
  <thead>
    <tr>
    <th scope="col"> No</th>
      <th scope="col">Seat No</th>
      <th scope="col">Movie</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

   
  <?php
               $sql="select * from booking";
               $res=$db->query($sql);
               if($res)
               
               {
                while( $row=$res->fetch_assoc()){
               
                    $id=$row['id'];
                    $seat=$row['seat'];
                    $movie=$row['movie'];
                    $email=$row['email'];
                    $contact=$row['contact'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$seat.'</td>
                    <td>'.$movie.'</td>
                    <td>'.$email.'</td>
                    <td>'.$contact.'</td>
                    <td>
                       <button class="btn btn-info"><a href="view.php?viewid='.$id.'">View</a></button>
                       <button class="btn btn-warning"><a href="update.php?updateid='.$id.'" >Update</a></button>
                       <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" >Delete</a></button>
                   </td>
                  </tr>';
                }
               
                
               }
              
               ?>
                   
             
    
  </tbody>
</table>
   </div> 
</body>
</html>