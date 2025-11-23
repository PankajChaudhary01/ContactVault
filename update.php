<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

mysqli_query($conn, 
"UPDATE contacts SET 
 name='$name',
 email='$email',
 phone='$phone'
 WHERE id=$id");

header("Location: index.php");
?>
