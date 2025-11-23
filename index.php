<?php include 'db.php'; ?>
<link rel="stylesheet" href="bootstrap.min.css">
<link rel="stylesheet" href="enterprise.css">

<nav class="navbar-e">
    <span class="h4">Contacts — Enterprise</span>
</nav>

<div class="container mt-4">

    <div class="e-card d-flex justify-content-between mb-4">
        <h3>All Contacts</h3>
        <a href="add.php" class="btn-e">+ Add Contact</a>
    </div>

    <div class="e-card">
        <table class="table table-dark table-hover table-bordered align-middle">
            <thead>
                <tr>
                    <th>Name</th><th>Email</th><th>Phone</th><th>Actions</th>
                </tr>
            </thead>

            <tbody>
            <?php
            $q = mysqli_query($conn, "SELECT * FROM contacts ORDER BY id DESC");
            while($r = mysqli_fetch_assoc($q)){
                echo "
                <tr>
                    <td>{$r['name']}</td>
                    <td>{$r['email']}</td>
                    <td>{$r['phone']}</td>
                    <td>
                        <a class='btn btn-warning btn-sm' href='edit.php?id={$r['id']}'>Edit</a>
                        <a class='btn btn-danger btn-sm' href='delete.php?id={$r['id']}'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

</div>
