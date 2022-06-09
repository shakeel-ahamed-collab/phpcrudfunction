<?php
include "database.php";
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from booking where id=$id";
    $res=$db->query($sql);
    header('location:display.php');
}
?>
