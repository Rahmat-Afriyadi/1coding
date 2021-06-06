<?php 

  require 'koneksi/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/gambar/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    
  </style>
  <title>SMK 1 Coding</title>
</head>
<body>
    <?php     
      $jurusan = query("SELECT * FROM jurusan"); // ini array nya silahkan di foreach 
    ?>
  <?php include 'navbar.php'; ?>
  <br>  <br>  <br>  <br>  <br>  <br>
    <!-- foreach disini -->
    <?php foreach($jurusan as $row): ?>
  <div class="jumbotron test">
    <div class="d-flex rumah">
      <img src="assets/gambar/jurusan/<?= $row['gambar']; ?>" alt="" width="270px">
      <div class="center ml-3">
        <h2 class="display-4 "><?= $row['nama_jurusan']; ?></h2>
        <p class="lead"><?= $row['Deskripsi']; ?></p>        
      </div>
      <div class="block">
        <br>
          <strong>kepala jurusan : <?= $row['nama_kepalakejuruan']; ?></strong> <br>
          <strong>Jumlah kelas : <?= $row['jumlah_kelas']; ?></strong> <br>
          <strong>Jumlah Siswa : <?= $row['jumlah_siswa']; ?></strong> <br>
          <strong>Jumlah Jumlah guru : <?= $row['jumlah_siswa']; ?></strong>
      </div>
    </div>    
    <br><br>
    <hr class="tebel">
  </div>
    <?php endforeach; ?>
  <!-- sampai sini -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/jam.js"></script>
</body>
</html>