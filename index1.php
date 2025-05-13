<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Navbar Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .content-section {
      display: none;
    }
    .active-section {
      display: block;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <header class="p-3 bg-light border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-3 link-primary fw-bold" onclick="showSection('home')">Home</a></li>
          <li><a href="form.php" class="nav-link px-3 link-dark" onclick="showSection('mahasiswa')">Mahasiswa</a></li>
          <li><a href="formdosen.php" class="nav-link px-3 link-dark" onclick="showSection('dosen')">Dosen</a></li>
                    <li><a href="logout.php" class="nav-link px-3 link-dark" onclick="showSection('dosen')">Logout</a></li>
        </ul>
      </div>
    </div>
  </header>

  <!-- Konten -->
  <div class="container mt-4">
    <div id="home" class="content-section active-section">
      <h3>Selamat Datang</h3>
      <p>Ini adalah halaman Home.</p>
    </div>

    <div id="mahasiswa" class="content-section" target="content-home">
      <h3>Data Mahasiswa</h3>
    </div>

    <div id="dosen" class="content-section">
      <h3>Data Dosen</h3>
    </div>
  </div>
</body>
</html>