<?php
require 'koneksi.php';

$query = "SELECT * FROM items";

$result = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dashaboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
   <style>
      body {
        background-color: #f4f6fa;
        font-family: 'Segoe UI', sans-serif;
      }

      .navbar {
        background: linear-gradient(to right, #007bff, #00bcd4);
      }

      .card {
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      }

      .table th, .table td {
        vertical-align: middle;
      }

      .table-hover tbody tr:hover {
        background-color: #f1f1f1;
      }

      .btn {
        margin-right: 5px;
      }
    </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">My Inventory</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-wahite" href="dashaboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
 

  <div class="container mt-4">
    <h1>Dashboard items</h1>
    <a href="tambah.php" class="btn btn-primary mb-3 mt-4">Add items</a>
    <table class="table table-bordered">
        <thead>  

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

    <tbody>
    <?php
      if (mysqli_num_rows($result) > 0) { 
          $no = 1;
          while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= htmlspecialchars($data['name'] ?? '') ?></td>
          <td><?= htmlspecialchars($data['description'] ?? '') ?></td>
          <td><?= htmlspecialchars($data['stock'] ?? '') ?></td>
           <td><?= htmlspecialchars($data['status'] ?? '') ?></td>
          <td>
            <a href='edit.php?id=<?= $data['id'] ?>' class='btn btn-warning'>Edit</a>
            <a href="detail.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-info">Detail</a>
            <a href="hapus_proses.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
          </td>
        </tr>
    <?php
          }
      } else {
          echo "<tr><td colspan='5' class='text-center text-danger'>Data tidak Ada</td></tr>";
      }
    ?>
    </tbody>
    </table>
  </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>