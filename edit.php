<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM items WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) == 0) {
        echo "Data tidak ditemukan.";
        exit;
    }

    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Item</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
 <style>
    body {
      background-color: #f4f6fa;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      }

    .navbar {
      background: linear-gradient(to right, #007bff, #00bcd4);
      color: white;
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
          <a class="nav-link" href="dashaboard.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5">
  <h2>Edit Item</h2>
  <form action="edit_proses.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($data['name']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Description</label>
      <input type="text" name="description" class="form-control" value="<?= htmlspecialchars($data['description']) ?>" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Stock</label>
      <input type="number" name="stock" class="form-control" value="<?= $data['stock'] ?>" required>
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Condition</label>
  <select class="form-select" id="status" name="status" required>
    <option value="">---Select Condition---</option>
    <option value="New">New</option>
    <option value="Used">Used</option>
  </select>

    <button type="submit" class="btn btn-primary mt-4">Save</button>
    <a href="dashaboard.php" class="btn btn-secondary mt-4">Cencel</a>
  </form>
</div>
</body>
</html>
