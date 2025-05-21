<?php
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM items WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "<a href='dashboard.php'>Kembali ke Dashboard</a>";
        exit;
    }

    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Detail Item</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    .card-title i {
      color: #007bff;
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

<div class="container mt-5">
  <h2>Detail Item</h2>

  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?= htmlspecialchars($data['name']) ?></h5>
      <p class="card-text"><strong>Description:</strong> <?= htmlspecialchars($data['description']) ?></p>
      <p class="card-text"><strong>Stock:</strong> <?= $data['stock'] ?></p>
      <p class="card-text"><strong>Status:</strong> <?= htmlspecialchars($data['status']) ?></p>
    </div>
  </div>

  <a href="dashaboard.php" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>
