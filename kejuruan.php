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
    img {
      width: 100%;
    }
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
    <div class="row pl-3 mb-0">
      <div class="col-lg-3 col-md-4 col-sm-4">
        <img src="assets/gambar/jurusan/<?= $row['gambar']; ?>" alt=""> 
      </div>
      <div class="col-lg-4 col-md-4 col-sm-5 ml-3">
        <br>
        <strong>
          kepala jurusan : 
          <?= $row['nama_kepalakejuruan']; ?> <br>
          Jumlah kelas : 
          <?= $row['jumlah_kelas']; ?> <br>
          Jumlah Siswa : 
          <?= $row['jumlah_siswa']; ?> <br>
          Jumlah guru : 
          <?= $row['jumlah_guru']; ?>
          <br>
          </strong>
          <br>
          <br>
      </div>
      <div class="col-lg-3 col-md-12 col-sm-12 pl-4">
        <h2 class=""><?= $row['nama_jurusan']; ?></h2>
        <p class="lead"><?= $row['Deskripsi']; ?></p>        
      </div>
    </div>    
    <br><br>
    <hr class="tebel">
  </div>
    <?php endforeach; ?>
  <!-- sampai sini -->

  <div class="bg-dark text-light p-2">
    <center> 
      SMK 1 Coding
      2020-2021
    </center>
  </div>

  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/jam.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>