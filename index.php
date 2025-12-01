<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">KSI2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Kontak</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- BODY / CONTENT -->
  <div class="container my-5">
    <h2 class="text-center mb-4">Data Mahasiswa</h2>

    <?php
      $mahasiswa = [
        ["nim" => "2312345678", "nama" => "Diva Triana Murti", "jurusan" => "Teknik Informatika"],
        ["nim" => "2312345679", "nama" => "Rani Putri", "jurusan" => "Manajemen Informatika"],
        ["nim" => "2312345680", "nama" => "Andi Saputra", "jurusan" => "Teknologi Informasi"],
        ["nim" => "2312345681", "nama" => "Budi Santoso", "jurusan" => "Rekayasa Perangkat Lunak"],
        ["nim" => "2312345682", "nama" => "Nadhea Ameylia", "jurusan" => "Manajemen Informatika"],
      ];
    ?>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; foreach($mahasiswa as $m): ?>
        <tr>
          <td><?= $no++ ?></td>
          <td><?= $m["nim"] ?></td>
          <td><?= $m["nama"] ?></td>
          <td><?= $m["jurusan"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- FOOTER -->
  <footer class="bg-dark text-white text-center py-3">
    <p>© 2025 KSI2025 | Politeknik Negeri Lampung</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

