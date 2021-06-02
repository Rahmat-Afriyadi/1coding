<?php 

  require 'koneksi/koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .center {
      text-align: center;
      width: 60vh;
    }
  </style>
  <title>Document</title>
</head>
<body>

    <?php 
    
      $jurusan = query("SELECT * FROM jurusan"); // ini array nya silahkan di foreach 

    ?>

  <?php include 'navbar.php'; ?>
  <br>
    <!-- foreach disini -->
  <div class="jumbotron">
    <div class="d-flex">
      <img src="assets/gambar/jurusan/akuntansi.jpg" alt="" width="250px">
      <div class="center">
        <h1 class="display-4 ">Jurusan</h1>
        <strong>kepala jurusan</strong> <br>
        <strong>Jumlah kelas</strong> <br>
        <strong>Jumlah Siswa</strong> <br>
        <strong>Jumlah Jumlah guru</strong>
      </div>
    </div>    
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">

  </div>
  <!-- sampai sini -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/js/jam.js"></script>
</body>
</html>