<?php
include "database.php";
if(isset($_GET['viewid'])){
    $id=$_GET['viewid'];

    $sql="select * from booking where id=$id";
    $res=$db->query($sql);
    {
    echo "<table border=1 border-collapse>
    <tr >
    <th>Id</th>
    <th>Seat No</th>
    <th>Movie</th>
    <th>Email</th>
    <th>Contact</th>
     </tr>
    ";
   
    }
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
        </tr>';
        echo "</table>";
    }
}
?>
