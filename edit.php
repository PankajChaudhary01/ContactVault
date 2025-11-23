<?php
include 'db.php';
$id = $_GET['id'];
$d = mysqli_fetch_assoc(mysqli_query($conn,
"SELECT * FROM contacts WHERE id=$id"));
?>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="enterprise.css">

<nav class="navbar-e">
    <span class="h4">Edit Contact</span>
</nav>

<div class="container mt-4" style="max-width:480px;">

<form class="contact-form" action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id'] ?>">

    <label>Name</label>
    <input class="form-control mb-3" name="name" value="<?= $d['name'] ?>">

    <label>Email</label>
    <input class="form-control mb-3" name="email" value="<?= $d['email'] ?>">

    <label>Phone</label>
    <input class="form-control mb-3" name="phone" value="<?= $d['phone'] ?>">

    <button class="btn-e w-100">Update</button>
</form>
</div>
